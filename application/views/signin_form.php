<!DOCTYPE html> 
<html lang="en"> 
  <head> <title>CodeIgniter Tutorial - Demo Mostlikers</title>  
  <link rel="stylesheet"href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  </head> 
    <body>
    <div class="container-fluid">
     <div class="page_content bg_data">             
        <div class="row">         
         <div class="col-md-10 middle-col">
            
             <div class="row">
             <!-- Success Message -->
              <?php if($this->session->flashdata('message')){?>
                  <div class="alert alert-success fade in block-inner">            
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <i class="icon-checkmark-circle"></i> <?php echo $this->session->flashdata('message')?>
                  </div>
              <?php } ?>
            <!-- /Success Message -->
            <!-- Error Message -->
              <?php if($this->session->flashdata('error')){?>
                <div class="alert alert-danger fade in block-inner">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <i class="icon-checkmark-circle"></i> <?php echo $this->session->flashdata('error')?> 
                </div>
              <?php } ?>
            <!-- Error Message -->
                <div class="col-md-1"></div>
                <div class="col-md-5">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="icon-paragraph-justify2"></i>Login Form </h4>
                </div>                  
                  <form method="post" action="<?php echo site_url('users/login') ?>">
                      <h5>Email</h5>
                      <input type="text" placeholder="Enter your email id" name="email" value="<?php echo set_value('email'); ?>" class="form-control" size="50" />
                      <div class="errorMessage"><?php echo form_error('email'); ?></div>
                      <h5>Password</h5>
                      <input type="password" placeholder="Enter your password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" size="50" />
                      <div class="errorMessage"><?php echo form_error('password'); ?></div>                          
                      <div><br> 
                      <input type="submit" class="btn btn-primary" value="Submit" />

                      <h5>Try demo email : <b>karthick@mostlikers.com</b> password : <b>mostlikers</b></h5>
                      </div>
                  </form>
                </div>
                <div class="col-md-1"></div>                
                <div class="col-md-5">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="icon-paragraph-justify2"></i>New user registration Form </h4>
                </div>
                    <form method="post" action="<?php echo site_url('users/signup') ?>">
                        <h5>Name</h5>
                        <input type="text" name="username" placeholder="Enter your name" value="<?php echo set_value('username'); ?>" class="form-control" size="50" />
                        <div class="errorMessage"><?php echo form_error('username'); ?></div>
                        <h5>Email Address</h5>
                        <input type="text"  name="user_email" placeholder="Enter your email" value="<?php echo set_value('user_email'); ?>" class="form-control" size="50" />
                        <div class="errorMessage"><?php echo form_error('user_email'); ?></div>
                        <h5>Password</h5>
                        <input type="password" name="new_password" placeholder="Enter your new password" value="<?php echo set_value('new_password'); ?>" class="form-control" size="50" />
                        <div class="errorMessage"><?php echo form_error('new_password'); ?></div>
                        <h5>Password Confirm</h5>
                        <input type="password" name="passconf" placeholder="Enter your password" value="<?php echo set_value('passconf'); ?>" class="form-control" size="50" />
                        <div class="errorMessage"><?php echo form_error('passconf'); ?></div>
                        <div><br>
                        <input type="submit" class="btn btn-primary" value="Submit" />
                        </div>
                    </form>
                </div>
             </div><hr>
              
           </div>
            <div class="col-sm-2">
                          
            </div>

         </div>
        </div>
         <!-- this for full width layout -->    
     </div>  
    </div>
       
  </body>
</html>
<style type="text/css">
  body{background: #f7f7f7;}
.errorMessage { color:red;}
.bg_data {
      background: url(https://lh5.googleusercontent.com/-PxxJg0cfLSc/UY3T62lCUVI/AAAAAAAAAo4/jZoTISc15Bw/w27-h15-no/img08.png);
    margin: auto;  
}


.example_responsive_1 {width: 650px; height: 300px; }
@media(min-width: 500px) { .example_responsive_1 { width: 650px; height: 300px; } }
@media(min-width: 800px) { .example_responsive_1 { width: 650px; height: 300px; } }

</style>
