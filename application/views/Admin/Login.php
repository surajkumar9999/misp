 <?php include('header.php'); ?>

 <h1>  ADMIN FORM </h1>
 <?php echo form_open('Admin/Login'); ?>
  <div class="imgcontainer">
  </div>
  <div class="row">
  <div class="col-lg-6">
  <div class="container">
    <label for="uname"><b>Username:</b></label>
    <br />
    <?php echo form_input(['class'=>'container','placeholder'=>'Enter Username','type'=>'text','name'=>'uname','value'=>set_value('uname')]); ?>
    <div class="col-lg-6">
 <?php echo form_error('uname');   ?>
 </div>
    <br/>
    <label for="psw"><b>Password:</b></label>
    <br />
    <?php echo form_password(['class'=>'container','placeholder'=>'Enter password','type'=>'text','name'=>'pass','value'=>set_value('pass')]); ?>
    <div class="col-lg-6">
 <?php echo form_error('pass');   ?>
 </div>
    <br />
    <?php echo form_submit(['type'=>'submit','class'=>'container','value'=>'Submit']) ?>
    <?php echo form_reset(['type'=>'reset','class'=>'container','value'=>'reset']) ?>
  </div>
</div>
</div>
 <?php include('footer.php'); ?>