locals {
  user_data_script = <<-EOF
                      #!/bin/bash
            
                      ${templatefile("webapp.tftpl", { rds_endpoint = module.rdsdb.db_instance_address })}
                    EOF

  encoded_user_data = base64encode(local.user_data_script)
}
# Launch Template Resource
resource "aws_launch_template" "my_launch_template1" {
  name_prefix = "${local.name}-"
  description = "My Launch template"
  image_id = data.aws_ami.amzubuntu.id
  instance_type = var.instance_type
  iam_instance_profile {
    arn = "arn:aws:iam::424878232361:instance-profile/s2-role"
  }
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
  
}