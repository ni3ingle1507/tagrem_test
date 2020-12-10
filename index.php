 <?php
include('Submit.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Submit.php" method="post">
            Name: <input type="text" name="userForm[name]">
            Username: <input type="text" name="userForm[username]">
            Password: <input type="password" name="userForm[password]">
            Confirm Password: <input type="password" name="userForm[confirm_password]">
            Zip Code: <input type="text" name="userForm[zip]">
            <input type="submit" >
        </form>
    </body>
</html>
