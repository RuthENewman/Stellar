<?php
    $message = "";
    if ($session->isSignedIn()) {
        header("Location: index.php");
    }

    if(isset($_POST['submit'])) {
        $email = trim($_POST['email']);
        $password = trim($POST['password']);

    $userFound = Userlogin::verifyUser($email, $password);

    if($userFound) {
        $session->login($userFound);
        header("Location: stars.php");
    } else {
        $message = "Incorrect email or password";
    }
    } else {
        $email = '';
        $password = '';
    }
    }
?>

<div>
    <h4 class="warning-msg"><?php echo $message; ?></h4>
    <form id="login-form" method="post">
        <div>
            <label for="email">Your Email</label>
            <input type="email" name="email" value="<?php echo htmlentities($email);?>"/>
        </div>
        <div>
            <label for="password">Your Password</label>
            <input type="password" name="password" value="<?php echo htmlentities($password);?>" />
        </div>

        <input type="submit" name="submit" value="Submit" class="btn" />
    </form>

</div>