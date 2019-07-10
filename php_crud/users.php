<?php include('server.php');
    //fetch the record to be updated
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM users WHERE idUsers=$id");
        $record = mysqli_fetch_array($rec);
        $uid = $record['uidUsers'];
        $mail = $record['emailUsers'];
      //  $pwd = $record['pwdUsers'];
        $id = $record['idUsers'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>User crud form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php if (isset($_SESSION['msg'])): ?>
        <div class="msg">
            <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            ?>
        </div>
    <?php endif ?>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <!--th>Password</th-->
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($results)){ ?>
            <tr>
                <td><?php echo $row['uidUsers']; ?></td>
                <td><?php echo $row['emailUsers']; ?></td>
                <!--td><?php echo $row['pwdUsers']; ?></td-->
                <td>
                    <a class="edit_btn" href = "users.php?edit=<?php echo $row ['idUsers']; ?>">Edit</a>
                </td>
                <td>
                    <a class="del_btn" href = "server.php?del=<?php echo $row['idUsers']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <form method="post" action="server.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="uid" value="<?php echo $uid; ?> ">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="mail" value="<?php echo $mail; ?> ">
        </div>
        <!-- <div class="input-group">
            <label>Password</label>
            <input type="text" name="pwd" value="<?php echo $pwd; ?> ">
        </div> -->
        <div class="input-group">
        <?php if($edit_state == false): ?>
            <button type="submit" name="save" class="btn">Save</button>
        <?php else: ?>
             <button type="submit" name="update" class="btn">Update</button>
        <?php endif ?>
        </div>
    </form>
</body>
</html>
