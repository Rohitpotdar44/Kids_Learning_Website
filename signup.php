<?php 
include("config.php");

if(isset($_POST["signup"])){
    
    // Check if any required field is empty
    if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["sec_que"])) {
        ?>
        <script>
            alert('All fields are required');
        </script>
        <?php
    } else {
        $name = mysqli_real_escape_string($conn,$_POST["name"]);
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $sec_que = mysqli_real_escape_string($conn,$_POST["sec_que"]);

        $query = "INSERT INTO `users`(`Name`, `Email`, `Password`, `Seq_Que`) VALUES ('$name','$email','$password','$sec_que')";
        $result = mysqli_query($conn,$query);
        if($result){
            ?>
            <script>
                alert('Registration successful');
            </script>
            <?php 
        } else {
            ?>
            <script>
                alert('Something went wrong happened');
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
    <link rel="shortcut icon" href="/images/login.jpg" type="image/x-icon">
    <title>KIDZ+ REGISTRATION PAGE </title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form action="" method="post">
                <h1>Create Account</h1>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <label style="font-size:13px">Security Question : Best Friend Name</label>
                <input type="text" name="sec_que" placeholder="Best Friend Name">
                <input type="submit" name ="signup"style="background:blue;color:white"></input>
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
                 <a href="signin.php">   <button class="hidden" id="register">Sign In</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>