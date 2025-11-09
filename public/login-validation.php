<?php

function login_validate($Password, $Username)
{
    if (isset($_POST['Submit'])) {
        if (
            ($_POST['Username'] == $Username) && ($_POST['Password'] ==
                $Password)
        ) {
            $_SESSION['Username'] = $Username;
            $_SESSION['Active'] = true;
            header("Location: index.php");
            exit();
        } else
            echo 'Incorrect Username or Password';
    }
}