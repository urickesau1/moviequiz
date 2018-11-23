<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Quiz</title>
    <style>
        body {
            background: black;
            color: white;
        }    

        h2 {
            text-align: center;
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
    
    </style>
</head>
<body>
    <form action="index.php" method="post">
        <?php
          
          session_start();    
          if(isset($_POST['username'])) { 
             $_SESSION['username'] = $_POST['username'];
          }
        ?>



        <h2>So 
            <form action="index.php" method="post" name="username">
                <input type="text" placeholder="Your name" name="username">
               
            
        
                you like movies? Have a good eye for detail? Lets find out just how much you know about movie trivia.
                <p>Click Submit and then Begin quiz.</p>
                <img src='img/saw1.jpg'>
                <div class="text">
                    <span>ARE</span>
                    <span>YOU</span>
                    <span>READY?</span>
                    <div style="clear: both"></div>
                </div> <br>
                <input type="submit" > <br><br>
                <a href="home.php">Begin quiz</a>
            </form>         
                
        </h2>
    </form>
</body>
</html>