
<?php 
$emailaddress = $_SESSION['emailaddress'] ?? '';
$password = $_SESSION['password'] ?? '';
if(isset($_POST['Login'])) {
    $emailaddress = $_POST['emailaddress'];
    $password = $_POST['password'];
    if($emailaddress=="admin" && $password=="admin") {
        echo("email address and password correct");
    }else {
    echo("error, Please try again");
    }
}

extract($_REQUEST);
$file=fopen("userReg.txt", "a");

fwrite($file, "Email :");
fwrite($file, $emailaddress ."\n");
fwrite($file, "Password :");
fwrite($file, $password . "\n");
fclose($file);

?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="assets/styles/sign in.css"/>
        <script src="https://kit.fontawesome.com/b3c2c0c221.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
 <body>

    <header>
        <nav>
            <div class="container">
                <div class="fa fa-utensils fa-2x" style="color: grey"></div>
                <a href="#" class="logo">Menu Scout</a>
    
                <div class="nav_menu" id="nav_menu">
                    <ul class="nav-links">
                        <li class="nav_item"><a href="index.html" class="nav_link">Home</a></li>         
                        <li class="nav_item"><a href="about.html" class="nav_link">About</a></li>
                        <li class="nav_item"><a href="menu.html" class="nav_link">Menu</a></li>
                        <li class="nav_item"><a href="contact.html" class="nav_link">Contact</a></li>
                        <li class="nav_item"><a href="signIn.php" class="nav_link">Sign in</a></li>
                    </ul>
                </div>

            </div>
        </nav> 
    </header>

    <img class="wave" src="/wamp64/www/Project Folder/assets/img/wave.png">
    <div class="containers">

        <div class="img">
            <img class="healthy" src="/wamp64/www/Project Folder/assets/img/undraw_healthy_options_sdo3.svg" style= "width: 600px; height: 750px;">
        </div>
        

        <a href="../Project Folder/signIn.php"></a>

        <div class="login">
            <form action="" style= "width: 500px; height: 400px; margin-left: 70rem; margin-bottom: 0rem;">
                    <img class="avatar" src="/wamp64/www/Project Folder/assets/img/undraw_male_avatar_323b.svg">
                    <h1 class="Title" style="font-size:3rem; margin-left: 224px;">Sign in</h1>

                <div class="input-div email">

                    <div class="fa fa-user fa-2x" style= "color: #999;"></div>

                    <div class="div">
                        <h4 class="register" style="margin-left: -150px; margin-top: -50px;">Email Address</h4>
                        <input class="input" type="text" name="emailaddress" placeholder="Email Address" style="width:250px; height: 30px;">
                    </div>
                 </div>

                <div class="input-div password">
                    
                    <div class="fa fa-lock fa-2x" style= "color: #999;"></div>

                    <div class="div">
                        <h4 class="register" style="margin-left: -150px; margin-top: -50px;">Password</h4>
                        <input class="input" type="text" name="password" placeholder="Password" style="width:250px; height: 30px;">
                    </div>
                </div>

                <a href="#" style="margin-left: 215px;">Forgot Password?</a>
                <input class="btn" type="submit" name="Login" value="Login" style="margin-left: 40px; font-size: 1.3rem;">
            </form>
        </div>
    </div>


</body>
</html>















