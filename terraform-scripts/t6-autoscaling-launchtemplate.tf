locals {
  user_data_script = <<-EOF
                      #!/bin/bash
            
                      ${templatefile("webapp.tftpl", { rds_endpoint = module.rdsdb.db_instance_address })}
                    EOF

  encoded_user_data = base64encode(local.user_data_script)
}
resource "aws_iam_role" "s3_full_access_role" {
  name = "s3_full_access_role"

  assume_role_policy = <<EOF
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Effect": "Allow",
      "Principal": {
        "Service": "ec2.amazonaws.com"
      },
      "Action": "sts:AssumeRole"
    }
  ]
}
EOF
}

# Attach AmazonS3FullAccess policy to the IAM role
resource "aws_iam_role_policy_attachment" "s3_full_access_policy" {
  policy_arn = "arn:aws:iam::aws:policy/AmazonS3FullAccess"
  role       = aws_iam_role.s3_full_access_role.name
}
resource "aws_iam_instance_profile" "s3access" {
  name = "s3access"
  role = aws_iam_role.s3_full_access_role.name
}
# Launch Template Resource
resource "aws_launch_template" "my_launch_template1" {
  name_prefix = "${local.name}-"
  description = "My Launch template"
  image_id = data.aws_ami.amzubuntu.id
  instance_type = var.instance_type
  
  vpc_security_group_ids = [ module.private_sg.security_group_id ]
  key_name = var.instance_keypair
  user_data = local.encoded_user_data
  ebs_optimized = true 
  update_default_version = true 
  block_device_mappings {
    device_name = "/dev/sda1"
    ebs {    
      volume_size = 20           
      delete_on_termination = true
      volume_type = "gp2"
    }
   }
  monitoring {
    enabled = true
  }   
  tag_specifications {
    resource_type = "instance"
    tags = {
      Name = local.name
    }
  }  
  iam_instance_profile {
    name = aws_iam_instance_profile.s3access.name
  }
}