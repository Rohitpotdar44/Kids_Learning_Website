<?php 
include("config.php");

if(isset($_POST["signin"])){
    
    // Check if email and password are not empty
    if(empty($_POST["email"]) || empty($_POST["password"])) {
        ?>
        <script>
            alert(' All Fields are required');
        </script>
        <?php
    } else {
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);

        $query = "select * from users where `Email`='$email' and `Password`='$password'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            ?>
            <script>
                alert('Login successful');
            </script>
            <?php 
        } else {
            ?>
            <script>
                alert('Invalid Credentials');
            </script>
            <?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style_form.css">
    <title>KIDZ+ LOGIN PAGE </title>
</head>

<body>

    <div class="container" id="container">
       
        <div class="form-container sign-in">
            <form action="" method="post">
                <h1>Sign In</h1>
            
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <a href="forgotpassword.php">Forget Your Password?</a>
                <input type="submit" name ="signin"style="background:blue;color:white"></input>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <a href="signup.php" ><button class="hidden" id="register">Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>