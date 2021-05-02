<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="navbar.css">
</head>



<!-- Navigation/ Title  -->

<body>
<?php
    include 'navbar.php';
  ?>

  <meta charset="utf-8">
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
    </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span> User form</span>
          </div>
          <div class="app-contact">User Creation</div>
        </div>
        <form action="insert.php" method="POST"> 
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" type="text" id="login" name="name" placeholder="Enter Your Name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control"  type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control"   type="number" id="balnce"  name="bal" placeholder="Balance" required>
            </div>
            
    
            <div class="app-form-group buttons">
                <input type="submit"  value="create user">
              </div>
          </div>
        </div>
        </form>
      </div>
    </div>
    
  </div>



  

  
</body>

</html>

