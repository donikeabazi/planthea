<?php include 'includes/header.php'; ?>
<style type="text/css">
    #login-form{
        color: darkseagreen;
        font-size: 24px;
        font-weight: bold;
    }
    form{
        width: 400px;
        height: 350px;
        border: 1px solid darkseagreen;
        border-radius: 10px;
        margin: 61px 280px 61px 280px;
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

</style>
<div id="content">
    <div class="wrapper">
        <form action="includes/login.inc.php" method="post">
            <label id="login-form">Login Form</label>
            <label>Username or Email:</label>
            <input name="mailuid" type="text" placeholder="Your username or your email (<em>ex. user@example.com</em>)"/>
            <label>Password:</label>
            <input name="pwd" type="password" placeholder="Your password"/>
            <button type="submit" name="login-submit">Login</button>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
