<?php
    session_start();
 //initialize variables
    $uid = "";
    $mail = "";
    $pwd ="";
    $id = 0;
    $edit_state =false;

    //connect to database
    $db = mysqli_connect('localhost', 'root', '', 'planthea');

  //if save button is clicked
    if(isset($_POST['save'])){
        $uid = $_POST['uidUsers'];
        $mail = $_POST['emailUsers'];
        //$pwd = $_POST['pwdUsers'];

        $query = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES ('$uid', '$mail','$pwd')";
       mysqli_query($db, $query);
        $_SESSION['msg']= "Address saved";
        header('location: users.php'); //redirect to index page after inserting
    }

    //update records
    if(isset($_POST['update'])){
      $uid = mysqli_real_escape_string($_POST['uid']);
      $mail = mysqli_real_escape_string($_POST['mail']);
      //$pwd = mysqli_real_escape_string($_POST['pwd']);
        $id = mysqli_real_escape_string($_POST['id']);

        mysqli_query($db, "UPDATE users SET uidUsers = '$uid', emailUsers ='$mail' WHERE idUsers='$id'");
        $_SESSION['msg'] = "Address updated";
        header('location: users.php');
    }

    //delete records
    if(isset($_GET['del'])){
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM users WHERE idUsers=$id");
        $_SESSION['msg'] = "Address deleted";
        header('location: users.php');
    }
    //retrieve records
    $results = mysqli_query($db, "SELECT * FROM users") or die(mysqli_error($db));
?>
