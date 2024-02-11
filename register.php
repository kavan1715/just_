<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

<style>
    body{
        background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(background.jpg);
        background-size: cover;
        
    }

    .main{
        background : linear-gradient(to right , rgb(233, 108, 108), rgb(173, 231, 253));
        height : 440px;
        width: 30%;
        text-align : center;
        margin-left: 37%;
        
    }

    h1{
        color : black;
        
        padding-top: 10px;
        font-family: "Montserrat";
        border-bottom: 3px solid black;
        padding-bottom: 10px;
    }

    .form{
        font-family: "montserrat";
        color: black;
        font-size: 25px;
        
    }
    .form input{
        border: 2px solid black;
        border-radius: 20px;
        height: 25px;
        width: 50%;
        font-family: "Montserrat";
        padding-left: 10px;
        margin: 20px 0;
        z-index: 2;
        transition: 0.5s;
    }
    .form input:hover{
        border: 2px solid rgb(255, 255, 255);
        background : linear-gradient(to right , #000000  , #2D3436 , #000000);
        color: antiquewhite;
        cursor: pointer;
    }

    button{
        border: 2px solid black;
        border-radius: 20px;
        font-family: "Montserrat";
        font-size: 20px;
        width: 53%;
        transition: 0.5s;
    }
    button:hover{
        background : black;
        border: 2px solid rgb(255, 255, 255);
        color: antiquewhite;
        cursor: pointer;
    }

    form p{
        font-size: 20px;
        
    }
    form p a{
        text-decoration: none;
        color: seagreen;
        transition: 1s;
    }
    form p a:hover{
       border-bottom: 2px solid white;
        color: chocolate;
    }
</style>

<body>
    <div class="main">
        <h1> Sign_UP </h1>
    
        <div class="form">
            <form method="post">
                <input type  = "text" name="f_name" placeholder="First Name"><br>
                <input type  = "text" name="l_name" placeholder="Last Name"><br>
                <input type = "email" name="email" placeholder="Email"><br>
                <input type = "password" name="password" placeholder="PassWord"><br>
                <button type = "submit" name="signup" ><b>SIGN_UP</b></button> 
            </form>
        </div>
    </div>

    <?php

        if(isset($_POST["signup"]))
        {
            if(isset($_POST["email"]) && isset($_POST["password"]))
            {
                $file = fopen("signlogin.txt" , "a");
                fwrite($file , "\n".$_POST["email"]. "," .$_POST["password"]);
            }
        }
        

        if(array_key_exists("signup" , $_POST))
        {
            button();
        }

        function button()
        {
            header("location: login.php");
        }
    ?>
</body>
</html>