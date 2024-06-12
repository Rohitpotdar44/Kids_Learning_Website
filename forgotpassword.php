<?php 
include("config.php");

if(isset($_POST["forgotpassword"])){
    
    // Check if email and security question are not empty
    if(empty($_POST["email"]) || empty($_POST["sec_que"])) {
        ?>
        <script>
            alert('Email and Security Question are required');
        </script>
        <?php
    } else {
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $sec_que = mysqli_real_escape_string($conn,$_POST["sec_que"]);

        $query = "select * from users where `Email`='$email' and `Seq_Que`='$sec_que'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            // Assuming you meant to update the password with the email, not set the password as the email
            $query1 = "update users set `Password`='$email' where `Seq_Que`='$sec_que' and `Email`='$email'";
            $result1 = mysqli_query($conn,$query1);
            if($result1){
                ?>
                <script>
                    alert('Successfully changed your password as your email address');
                </script>
                <?php  
            }
        } else {
            ?>
            <script>
                alert('Invalid Information');
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
    <title>KIDZ+ FORGOT PASSWORD</title>
</head>

<body>

    <div class="container" id="container">
       
        <div class="form-container sign-in">
            <form action="" method="post">
                <h2>FORGOT PASSWORD</h2>
                <!-- <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div> -->
                <!-- <span>or use your email password</span> -->
                <input type="email" name="email" placeholder="Email">
                <label style="font-size:13px">Security Question : Best Friend Name</label>
                <input type="text" name="sec_que" placeholder="Security Question Answer">
                
                <input type="submit" name ="forgotpassword"style="background:blue;color:white"></input>
                <br>
                <label style="font-size:11px">For More Queries Contact Administrator At <b><a href="mailto:rohitsp22hcompe@student.mes.ac.in">rohitsp22hcompe@student.mes.ac.in</a></b></label>


      
            </form>
             </div>
        <div class="toggle-container">
            <div class="toggle">
                
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <a href="signup.php" ><button class="hidden" id="register">Sign Up</button></a>
                    <a href="signin.php" ><button class="hidden" id="register">Sign In</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>