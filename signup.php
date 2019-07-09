<?php include 'includes/header.php'; ?>
<style type="text/css">
    #signup-form{
        color: darkseagreen;
        font-size: 24px;
        font-weight: bold;
    }
    form{
        width: 400px;
        height: 425px;
        border: 1px solid darkseagreen;
        border-radius: 10px;
        margin: 22px 280px 61px 280px;
    }
    label{
        display: block;
        margin: 10px 25px 10px 25px;
    }
    input{
        display: block;
        margin:10px 25px 10px 25px;
        padding-right: 200px;
        padding-left: 5px;
        padding-bottom: 10px;
        padding-top: 10px
    }
    button{
        padding: 10px;
        background-color: darkseagreen;
        margin: auto 100px auto 100px;
        color: white;
    }
    .signuperror{
      text-align: center;
      color: red;
    }
    .signupsuccess{
      text-align: center;
      color: green;
    }

</style>
<div id="content">
  <div class="wrapper">
      <form action="includes/signup.inc.php" name="login" method="post">
          <label id="signup-form">Sign Up Form</label>
          <?php
            if(isset($_GET["error"])){
              if($_GET["error"] == "emptyfields"){
                echo '<p class="signuperror">Fill in all fields!</p>';
              }else if($_GET["error"] == "invalidmailuid"){
                echo '<p class="signuperror">Invalid username and e-mail!</p>';
              }else if($_GET["error"] == "invaliduid"){
                echo '<p class="signuperror">Invalid username!</p>';
              }else if($_GET["error"] == "invalidmail"){
                echo '<p class="signuperror">Invalid e-mail!</p>';
              }else if($_GET["error"] == "passwordcheck"){
                echo '<p class="signuperror">Your passwords do not match!</p>';
              }else if($_GET["error"] == "usertaken"){
                echo '<p class="signuperror">Username is already taken!</p>';
              }
            }else if(isset($_GET["signup"]) && $_GET["signup"] == "success"){
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
            ?>
          <label>Username:</label>
          <input name="uid" type="text" placeholder="Your username"/>
          <label>Email:</label>
          <input name="mail" type="text" placeholder="Ex. user@example.com"/>
          <label>Password:</label>
          <input name="pwd" type="password" placeholder="Your password"/>
          <label>Confirm Password:</label>
          <input name="pwd-repeat" type="password" placeholder="Repeat password"/>
          <button type="submit" name="signup-submit">Sign Up</button>
      </form>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
