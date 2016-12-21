<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/stylelog.css'); ?>">
 </head>

  <body>

    <div class="form">
      
      <div class="tab-content">
        <div id="login">   
          <h1>HOTEL Service Log In!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>

        <div id="signup">   
            
        </div>
        
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="<?php echo base_url('assets/js/index.js'); ?>"></script>

    
    
    
  </body>
</html>
