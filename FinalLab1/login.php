<?php
    require_once 'controllers/user.php';
?>

<html>
    <body>
    <h4><?php echo $err_db; ?></h4>
        <form action="" method="post">
            <fieldset>
                <h3 align="middle">Login</h3> 
            <table align="center">
                <tr>
                    <td>
                        <input type="text" name="uname" value="<?php echo $uname; ?>" placeholder="Username">
                        <span><?php echo $err_uname; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="password" name="pass" value="<?php echo $pass; ?>" placeholder="Password">
                    <span><?php echo $err_pass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="login" value="Login">
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </body>
</html>
