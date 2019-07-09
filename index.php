<?php include 'includes/header.php'; ?>

<style type="text/css">

.dashboard{
  width:910px;
  height: 430px;
  border-radius:10px;
  border:1px solid darkseagreen;
  margin: 20px;
  text-align: center;
}

h3{
  color: darkseagreen;
}

</style>
<div id="content" >
    <div class="wrapper">
      <div class="dashboard">

        <?php
          if(isset($_SESSION['adminId'])){
            echo '<h3>Your Dashboard</h3>';
            include 'includes/dashboard.inc.php';
          }else if(isset($_SESSION['userId'])){
            echo '<p class="login-status">You are logged in!</p>';
          }
            else{
            echo '<p class="login-status">You are logged out!</p>';
          }

        ?>

    </div>
  </div>
</div>


<?php include 'includes/footer.php'; ?>
