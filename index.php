<?php 
include("config.php");

if(isset($_POST["getintouchbtn"])){
    
    $name = mysqli_real_escape_string($conn,$_POST["name"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $phone = mysqli_real_escape_string($conn,$_POST["phone"]);
    $subject = mysqli_real_escape_string($conn,$_POST["subject"]);
    $message = mysqli_real_escape_string($conn,$_POST["message"]);

    $query = "INSERT INTO `messages`(`Name`, `Email`, `Phone`, `Subject`, `Message`) VALUES ('$name','$email','$phone','$subject','$message')";
    $result = mysqli_query($conn,$query);
    if($result){
        ?>
    <script>
    alert('We will contact you soon.');
    </script>
    
    <?php }else{
        ?>
        <script>
    alert('Something went wrong happened');
    </script>
       <?php
    }
}
else if(isset($_POST['login'])){
    $email = $_POST['email'];
    
    $password = $_POST['password'];

    // database data
    $sql = "SELECT * FROM `users` WHERE `Email`='$email' AND `Password`='$password'";
    $result = mysqli_query($conn,$sql);

    if ($result){
   
        $row = mysqli_fetch_assoc($result);
        $user_name = $row['Name']; 
           echo $user_name;
       
         
    }
    
    else{
        echo(mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="/images/KIDZ+.png">
    <title>KIDZ+</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    
     <header class="header">

        <a href="#" class="logo"> <i><img class="image" src="/images/KIDZ+.png" alt=""></i> KIDZ+</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#education">education</a>
            <a href="#activities">activities</a>
            
            <a href="#gallery">gallery</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
        <a href="signin.php"> <div class="fas fa-user" id="login-btn">  </div></a>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        

    </header>

    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>welcome to our <span>KIDZ+</span></h3>
            <p>KIDS+ is an engaging online platform designed to foster children's curiosity and knowledge through interactive games, educational videos, and creative activities, making learning an exciting adventure for young minds </p>
           
        </div>

        <div class="image">
            <img src="images/home.png" alt="">
        </div>

        <div class="custom-shape-divider-bottom-1684324473">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about us section starts -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us</h1>

        <div class="row">

            <div class="image">
                <img src="images/about us.png" alt="">
            </div>

            <div class="content">
                <h3>Exploring, Growing, And Thriving Together</h3>
                <p>Kids+ is a dynamic online learning platform designed for children aged 3 to 12. Our website offers an array of interactive and age-appropriate content, from educational games and videos to quizzes and activities. With a focus on fun and personalized learning, Kids+ is the ideal destination for kids to explore, grow, and enjoy the educational journey. Join us and spark your child's curiosity today!</p>
                
                
            </div>

        </div>

    </section>

    <!-- about us section ends -->

    <!-- education section start -->

    <section class="education" id="education">

        <h1 class="heading">our <span> education</span></h1>

        <div class="box-container">

            <div class="box">
                <h3>music lessons</h3>
                <p font="12">"Our "Music Lessons" section on Kids+ is where young music enthusiasts can discover the joy of making melodies. With a collection of interactive tutorials and engaging exercises, kids can explore the basics of rhythm, melody, and even play simple tunes. It's the perfect place to foster a lifelong love for music in a fun and educational way" </p>
                <img src="images/education1.png" alt="">
            </div>

            <div class="box">
                <h3>Memory Games</h3>
                <p>Memory Games is a dedicated section within Kids+ that offers interactive puzzles and challenges to boost cognitive skills, enhancing memory retention, concentration, and critical thinking while having fun, making it an essential part of our holistic learning platform. Dive into the world of memory-building activities today!</p>
                <img src="images/education2.png" alt="">
            </div>

            <div class="box">
                <h3>Logic Building Tasks</h3>
                <p>Logic Building Tasks on Kids+ offers engaging puzzles and activities to develop critical thinking and problem-solving skills. Through interactive challenges, kids explore logical reasoning and enhance analytical abilities, fostering cognitive development and creativity. Whether deciphering patterns or tackling brain teasers, it's an invaluable part of our holistic learning experience.</p>
                <img src="images/education3.png" alt="">
            </div>

        </div>

    </section>

    <!-- education section ends -->

    <!-- activities section starts -->

    <section class="activities" id="activities">

        <h1 class="heading">our <span>activities</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/activities4.png" alt="">
                
                <h3><a href="countgame.html" target="_blank">Counting Balls</a></h3>
                
            </div>

            <div class="box">
                <img src="images/card.jpg" alt="">
                <h3><a href="Memory_game_kidz+/index.html" target="_blank">Card Game</a></h3>
            </div>

            <div class="box">
                <img src="images/fruit cut.jpg" alt="">
                <h3><a href="Fruits-Game-jquery-/index.html" target="_blank">Cut Fruits Game</a></h3>
            </div>

            <div class="box">
                <img src="images/puzzle.jpg" alt="">
                <h3><a href="Image-Puzzle-Game/index.html" target="_blank">Puzzles</a></h3>
            </div>

           <div class="box">
                <img src="images/table.jpg" alt="">
                <h3><a href="multiplication table/multiplication-table-kid-test/index.html" target="_blank">Multiplication Tables</a></h3>
            </div>

            <div class="box">
                <img src="images/tic tac toe.jpg" alt="">
                <h3><a href="tic tak toe/tic-tac-toe-js/index.html" target="_blank">Tic Tac Toe Game</a></h3>
            </div>
            
            <div class="box">
                <img src="images/piano.png" alt="">
                <h3><a href="Piano-HTML-CSS-JS\index.html" target="_blank">Play Piano</a></h3>
            </div>

            <div class="box">
                <img src="images/car game.jpg" alt="">
                <h3><a href="Car-Game\index.html" target="_blank">Car Game</a></h3>
            </div>

        </div>

    </section>

    <!-- activities section ends -->

    <!-- gallery section starts -->

    <section class="gallery" id="gallery">

        <h1 class="heading">our <span>gallery</span></h1>

        <div class="gallery-container">

            <a href="images/gallery-1.jpg" class="box">
                <img src="images/gallery-1.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery-2.jpg" class="box">
                <img src="images/gallery-2.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery-3.jpg" class="box">
                <img src="images/gallery-3.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery-4.jpg" class="box">
                <img src="images/gallery-4.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery-5.jpg" class="box">
                <img src="images/gallery-5.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery-6.jpg" class="box">
                <img src="images/gallery-6.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>
            <a href="images/galla7.jpeg" class="box">
                <img src="images/galla7.jpeg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallary8.jpeg" class="box">
                <img src="images/gallary8.jpeg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- contact section starts -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us</h1>

        <div class="icons-container">

            <div class="icons">
                <i class="fas fa-clock"></i>
                <h3>About us:</h3>
                <p>ROHIT POTDAR</p>
                <p>SARTHAK SARKAR</p>
                <p>SHANTANU PATIL</p>
                <p>ANUJ WAVEKAR</p>

               
            </div>

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>rohitsp22hcompe@student.mes.ac.in</p>
                <p>anujjw22hcompe@student.mes.ac.in</p>
                <p>shantanusp22hcompe@student.mes.ac.in</p>
                <p>sarthaks22hcompe@student.mes.ac.in</p>

            </div>

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>9112738136</p>
                <p>9820491906</p>
                <p>9820240006</p>
                <p>7576058004</p>

            </div>

        </div> 

        <div class="row">

            <div class="image">
                <img src="images/contact.gif" alt="">
            </div>

            <form action="#" method="post">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <input type="text" required name="name" placeholder="your name">
                    <input type="email" required name="email" placeholder="your email">
                </div>
                <div class="inputBox">
                    <input type="number"  required name="phone" placeholder="your number">
                    <input type="text" required name="subject" placeholder="your subject">
                </div>
                <textarea placeholder="your message" name="message" cols="30" rows="10"></textarea>
                <input type="submit" required value="send message" name="getintouchbtn" class="btn">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3> <img src="./images/KIDZ+.png" height="50"> KIDZ+ </h3>
                <p>KIDS+ is your child's digital playground for learning and fun, offering a wide range of interactive educational resources and games. Start their learning journey with us!




                </p>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-caret-right"></i> enroll now</a>
                <a href="#"> <i class="fas fa-caret-right"></i> parent portal</a>
                <a href="#"> <i class="fas fa-caret-right"></i> school calendar</a>
                <a href="#"> <i class="fas fa-caret-right"></i> lunch menu</a>
                <a href="#"> <i class="fas fa-caret-right"></i> school supply list</a>
            </div>

            <div class="box">
                <h3>category</h3>
                <a href="#"> <i class="fas fa-caret-right"></i> about us</a>
                <a href="#"> <i class="fas fa-caret-right"></i> academics</a>
                <a href="#"> <i class="fas fa-caret-right"></i> admissions</a>
                <a href="#"> <i class="fas fa-caret-right"></i> news & events</a>
                <a href="#"> <i class="fas fa-caret-right"></i> contact us</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-caret-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-caret-right"></i> terms of use</a>
                <a href="#"> <i class="fas fa-caret-right"></i> site map</a>
                <a href="#"> <i class="fas fa-caret-right"></i> FAQs</a>
                <a href="#"> <i class="fas fa-caret-right"></i> accessibility statement</a>
            </div>

        </div>

        <div class="credit"> &copy; copyright @ 2023 by <span>KIDZ+</span></div>

    </section>



    <!-- lightgallery cdn js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>
</html>