<?php 
session_start();
    include "conn.php";
    $usernameError = "";$passwordError="";

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $pass = mysqli_real_escape_string($conn,$_POST['password']);

        $sql = "SELECT * from superadmin where email='$username'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $password = $row['password'];
            $decrypt = password_verify($pass, $password);

            if($decrypt){
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                header("location:superadmin.php");
            }else{
                $passwordError = "Wrong password";
            }
        }else{
            $usernameError = "Wrong email";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIGITX4</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="main">
        <div class="div1">
            <img src="logo.jpg" alt="" height="300px" width="300px">
            <p id="welcome">WELCOME</p>
        </div>
        <div class="sign-in">
            <div>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    <p id="sign-in">Sign in</p> <br>
                <input type="text" name="username" id="email" placeholder="Enter your email">
                
                <input type="password" name="password" id="password" placeholder="Enter your password"><br><br>
                
                <a href="#" id="a1">Forgot your password?</a>
                <a href="createAccount.php" id="a2">Don't have an account?</a><br><br>
                <button name="submit" id="btn">Login</button>
                </form>
            </div>
            <div class="login">
                <p id="login"><b>Login As</b></p> <br><br>
                <span><a href="login.php">Super admin</a></span>
                <span><a href="login.php">Teacher</a></span>
                <span><a href="login.php">Parent</a></span>
                <span><a href="login.php">Student</a></span>
                <span><a href="login.php">Accountant</a></span><br><br><br>
                <span id="move"><a href="login.php">Librarian</a></span>
                <span><a href="login.php">Driver</a></span>
            </div>
        </div>
    </div>
    <script src="Script.js"></script>
</body>
</html>
