<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title>
     <!--link the bootstrap css file-->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
     
     <style type="text/css">
     .colbox {
          margin-left: 0px;
          margin-right: 0px;
     }
     </style>
</head>
<body>
<div class="container">
     <div class="row">
          <div class="col-lg-6 col-sm-6">
               <h1>True Love Cafe Registration</h1>
          </div>
          <div class="col-lg-6 col-sm-6">
               
               <ul class="nav nav-pills pull-right" style="margin-top:20px">
                    <li class="active"><a href="http://localhost/tlc/login/index">Login</a></li>
                    <li><a href="http://localhost/tlc/register">Signup</a></li>
               </ul>
               
          </div>
     </div>
</div>
<hr/>

<div class="container">
     <div class="row">
          <div class="col-lg-6 col-sm-6 well">
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "reg_form", "name" => "reg_form");
          echo form_open("register/index", $attributes);?>
          <fieldset>
               <legend>Register</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="txt_username" class="control-label">Username</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
               </div>
               <div class="col-lg-4 col-sm-4">
                    <label for="txt_email" class="control-label">Email</label>
               </div>
                <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_email" name="txt_email" placeholder="Email" type="email" value="<?php echo set_value('txt_email'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_email'); ?></span>
               </div>
               
               </div>
               </div>
               
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
               <label for="txt_password" class="control-label">Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('password'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
               </div>
               <div class="col-lg-4 col-sm-4">
               <label for="re_password" class="control-label">Re-enter Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_passwordconf" name="txt_passwordconf" placeholder="Re-enter Password" type="password" value="<?php echo set_value('passwordconf'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_passwordconf'); ?></span>
               </div>
               
               </div>
               </div>
                              
               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_register" name="btn_register" type="submit" class="btn btn-default" value="Register" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
               </div>
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
     </div>
</div>
     
<!--load jQuery library-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--load bootstrap.js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>