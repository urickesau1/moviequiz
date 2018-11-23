<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Movie Quiz</title>
    <style>
        body {
            background: black;

            color: red;
        }    

        div content{
            text-align: center;
        }

        p {
            font-size: xx-large;
        }

        h2 {
            text-align: center;
            font-size: xx-large;
        }

        .text {
            margin: 41px 32px;
            text-align: center;
            display: inline-block;
            transition: .5;
        }
        .text span {
            background: #fff;
            width: 165px;
            height: 120px;
            display: block;
            line-height: 120px;
            font-family: arial;
            font-weight: bold;
            color: #a0a0a0;
            font-size: 40px;
            float: left;
            transition: .5s;
        }
        .text span:nth-child(1) {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;;
        }
        .text span:nth-child(1) {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;;
        }

        .text:hover span:nth-child(odd) {
            transform: skewY(-15deg);
            color: #b5b5b5;
            box-shadow: 0 60px 20px rgba(0, 0, 0, .1);
        }
        .text:hover span:nth-child(even) {
            transform: skewY(-15deg);
            box-shadow: 0 60px 20px rgba(0, 0, 0, .1);
            color: #b5b5b5;
        }

        .text:hover {
            transform: rotateX(35deg);
        }
        a:hover {
            color: red;
        }
        img:hover{
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 30px 0px #ff0505;
            -moz-box-shadow:    0px 0px 30px 0px #ff0505;
            box-shadow:         0px 0px 30px 0px #ff0505;
        }
    
    </style>
</head>
<body>
    <form action="index.php" method="post">
        <?php
          //This is the function I used to store the user's name input, to be displayed on the next page.
          session_start();    
          if(isset($_POST['username'])) { 
             $_SESSION['username'] = $_POST['username'];
          }
        ?>

        <div class="text">
            <span>ARE</span>
            <span>YOU</span>
            <span>READY?</span>
            <div style="clear: both"></div>
        </div> <br>



        <h2>So <!--The form which allows a user to enter their name -->
            <form action="index.php" method="post" name="username">
                <input type="text" placeholder="Your name" name="username">
               
            
        
                you like movies? Have a good eye for detail? Lets find out just how much you know about movie trivia.
                <p>Click Submit and then Begin quiz.</p>
                
                <br>
                <!--A simple effect which might entice the user to begin the quiz-->
                
                <!--This is the submit button which upon clicking will store the users input above -->               
                
                <!--This is the link to the home.php page which contains the actual quiz -->
                
                <input type="submit" > <br><br>
                <a href="home.php">Begin quiz</a><br>
                <img src='img/saw1.jpg'>
            </form>         
                
        </h2>
    </form>
</body>
</html>