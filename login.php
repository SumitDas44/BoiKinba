<?php

    @include 'config.php';

    session_start();

    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);

        $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

        $result = mysqli_query($conn, $select);

        setcookie('loggedin', 'true', time() + 3600, '/');

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);

            if($row['user_type'] == 'admin'){

                $_SESSION['admin_name'] = $row['name'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['last_time'] = time();
                header('location:home_admin.php');

            }elseif($row['user_type'] == 'user'){

                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['last_time'] = time();
                header('location:home_user.php');

            }

        }else{
            $error[] = 'Incorrect email or password!';
        }
    };

?>

<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online-Library</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="login-form-container">

        <form action="" method="post">
            <h3>user login</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span style="margin: 10px 0;
                        display: block;
                        background-color: crimson;
                        color: #fff;
                        border-radius: 5px;
                        font-size: 15px;
                        padding: 5px;">'.$error.'</span>';
                    };
                };
            ?>
            <input type="email" required name="email" placeholder="email" class="box">
            <input type="password" required name="password" placeholder="password" class="box">
            <p>forget your password <a href="forgot-pass.php">click here</a></p>
            <input type="submit" name="submit" value="login now" class="btn">
            <p>or login with</p>
            <div class="buttons">
                <a href="404.php" class="btn">google</a>
                <a href="404.php" class="btn">facebook</a>
            </div>
            <p>don't have an account? <a href="registration.php" target="_blank">create one!</a></p>
        </form>
    </div>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- custom js link  -->
    <script src="script.js"></script>
</body>
</html>