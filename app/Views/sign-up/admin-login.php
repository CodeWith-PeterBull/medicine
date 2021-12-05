<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form  </title>-->
    <link rel="stylesheet" href="<?php echo base_url('Assets/css/client-loginStyles.css'); ?>">
    
    <!-- Fontawesome CDN Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flipdisabled">
    <div class="cover">
      <div class="front">
        <img src="<?php echo base_url('Assets/images/img1.jfif')?>" alt="">
        <div class="text">
          <span class="text-1">MEDICING <br> Easy Leave</span>
          <span class="text-2">for the purpose of your well being</span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    
    <div class="forms">
       
        <div class="form-content">
            
      
        <div class="signup-form">
          <div class="title">Admin Login</div>
          <form action="<?= base_url('AdminLogin/signin');?>" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required name="login-email" value="<?= set_value('login-email') ?>" >
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required name="login-password">
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
       
        <section id="login-error">
       <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-info">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
      </section>

    </div>

    </div>
    </div>
  </div>
</body>
</html>