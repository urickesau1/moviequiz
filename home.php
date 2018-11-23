<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Urick's Quiz</title>
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700|Spicy+Rice" rel="stylesheet"> 
    <style>
        body {
            background: black;
            background-repeat: no-repeat;
            background-size: cover;
        }

        img {
            height: auto;
            max-width: 100%;
            border-radius: 20%;
        }    

        h3 {
            color: gold;
        }

        h1 {
            text-decoration: underline;
            text-align: center;
            color: black;
            font-family: 'Spicy Rice', cursive;
            font-size: 2rem;
            padding-top: 1%;
        }

        p {
            color: white;
            font-family: 'Roboto Slab', serif;
            font-size: 1.5rem;

        }

        h2 {
            font-size: xx-large;
            word-spacing: 4px;
            font-family: 'Spicy Rice', cursive;
            text-align: center;
            top: 50%;
            left: 50%;
            transform: translate(64%,28%);
            width: 30%;
            height: 30%;
            color: black;
            font-size: 2.5rem;
            text-transform: uppercase;
            text-decoration: none;
            box-sizing: border-box;
            background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
            background-size: auto auto;
            background-size: 400%;
            z-index: 1;
            text-align: center;
            padding-left: 20px;
            margin-left:273px;
            
        }

        h2:hover {
            animation: animate 8s linear infinite;
        }

        @keyframes animate {
            0%{
                background-position: 0%;
            }
            100%{
                background-position: 400%;
            }
        }

        h2:before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            z-index: -1;
            background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
            background-size: 400%;
            border-radius: 40px;
            opacity: 0;
            transition: 0.5s;
        }

        h2:hover:before {
            filter: blur(20px);
            opacity: 1;
            animation: animate 8s linear infinite;
        }

        h3 {
            text-align: left;
            padding: 2%;
            font-family: 'Roboto Slab', serif;
            font-size: xx-large;
            text-decoration: underline;
        }
        .text {
            margin: 250px 300px;
            text-align: center;
            display: inline-block;
            transition: .5;
        }
        .text span {
            background: #fff;
            width: 150px;
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
            color: gold;
        }
    </style>

</head>
<body>
    <!--Start of the form containing the actual quiz-->
    <form action="home.php" method="post">
        

        <h2>So 
            
            you like movies? Have a good eye for detail? Lets find out just how much you know about movie trivia.
            
                
        </h2>
        
        <?php
            if (!empty($_POST)) {
                $ans1 = $_POST['ans1'];
                $ans2 = $_POST['ans2'];
                $ans3 = $_POST['ans3'];
                $ans4 = $_POST['ans4'];
                $ans5 = $_POST['ans5'];
                $ans6 = $_POST['ans6'];
                $ans7 = $_POST['ans7'];
                $ans8 = $_POST['ans8'];
                $ans9 = $_POST['ans9'];
                $ans10 = $_POST['ans10'];
                $ans11 = $_POST['ans11'];
                $ans12 = $_POST['ans12'];
                $ans13 = $_POST['ans13'];
                $ans14 = $_POST['ans14'];
                $ans15 = $_POST['ans15'];
                $ans16 = $_POST['ans16'];
                $ans17 = $_POST['ans17'];
                $ans18 = $_POST['ans18'];
                $ans19 = $_POST['ans19'];
                $ans20 = $_POST['ans20'];

                $username = $_SESSION['username'];

                //This is the formula I used for calculating the user's final score for the quiz//
                $correct = 0;
                if ($ans1 == 'Mowgli') {
                    $correct++;
                }
                if ($ans2 == 'Jordan Belfort') {
                    $correct++;
                }
                if ($ans3 == 15) {
                    $correct++;
                }
                if ($ans4 == 'Bananas') {
                    $correct++;
                }
                if ($ans5 == 'Ghostface') {
                    $correct++;
                }
                if ($ans6 == 'John Shaft') {
                    $correct++;
                }
                if ($ans7 == 'Michael Bay') {
                    $correct++;
                }
                if ($ans8 == 'Asteroid Impact') {
                    $correct++;
                }
                if ($ans9 == 'Scarface') {
                    $correct++;
                }
                if ($ans10 == 'Achillies') {
                    $correct++;
                }
                if ($ans11 == 'Beautiful Chocolate Man') {
                    $correct++;
                }
                else {
                    echo "<p>You need to watch White Chicks again! <br>'Making my way downtwon, walking fast and i'm home-bound 🎧 🎼 🎹 </p>";
                }

                if ($ans12 == 'King Ding-a-ling') {
                    $correct++;
                }
                else {
                    echo "<p>It's Will Smith, come on man!(Question 12)</p>";
                }

                if ($ans13 == 'Guava oil') {
                    $correct++;
                }
                else {
                    echo "<p>Really? You'd put that on your six-pack? (Question 13)</p>";
                }

                if ($ans14 == 'Charlie Chaplin') {
                    $correct++;
                }
                else {
                    echo "<p>Think oldschool (Question 14)</p>";
                }

                if ($ans15 == 'Valek') {
                    $correct++;
                }
                else {
                    echo "<p>You should watch more scary movies</p>";
                }

                if ($ans16 == 'Beyonce Knowles') {
                    $correct++;
                }
                else {
                    echo "<p>That's not `Groovy baby`</p>";
                }
                if ($ans17 == 'Jack-Jack') {
                    $correct++;
                }

                if ($ans18 == 'The Eagles') {
                    $correct++;
                }
                else {
                    echo "<p></p>";
                }

                if ($ans19 == 'Woody') {
                    $correct++;
                }
                if ($ans20 == 'Falls down the drain') {
                    $correct++;
                }

                echo "<p>$username You got $correct correct!<br>
                <a href='index.php'>Try again</a></p>";
                $grade = ($correct / 20) * 100;

                //This is the formula I used to rate the user's scores//
                //If a user gets a particular score, they will see the following message
                if ($correct == 0) {
                    echo "<p>You are dumb!</p>";
                }
                elseif ($correct <= 10) {
                    echo "<p>Good attempt, but it's obvious you were half asleep while watching 😆</p>";
                }
                elseif ($correct = 11) {
                    echo "<p>My grandma scored 12...I'm just saying...</p>";
                }
                elseif ($correct = 12) {
                    echo "<p>12...My ouma scored 13...I'm just saying...</p>";
                }
                elseif ($correct == 13) {
                    echo "<p>13...My ouma scored 14...I'm just saying.../p>";
                }
                elseif ($correct == 14) {
                    echo "<p>14...My ouma scored 15...I'm just saying...</p>" ;
                }
                elseif ($correct == 15) {
                    echo "<p><p>15...My ouma scored 16...I'm just saying...</p></p>";
                }
                elseif ($correct == 16) {
                    echo "<p>16...This must be your age, right?</p>";
                }
                elseif ($correct == 17) {
                    echo "<p>17...yaaaay you got more than Evan</p>";
                }
                elseif ($correct == 18) {
                    echo "<p>18...you got lucky...</p>";
                }
                elseif ($correct == 19) {
                    echo "<p>Nogal 19, Amper Milo mybru!!!</p>";
                }
                elseif ($correct == 20) {
                    echo "<p>You did it! Af met die boom mybru!</p>";
                }
            } 

            else {
                echo "<p></p>";
                //echo $grade=array($correct / 20 * 100);//
            }
        



            //This is where the questions variable starts, it contains the questions for the quiz.
            //I used the "select" tag to create a drop-down effect for the possible answers
            $questions = array("","<h3>Question 1:</h3>
            <h2>In The Jungle Book movie franchise, what is the name of the boy in the jungle?🦍<br>
            <img src='img/jungle.jfif'>
            <select name=ans1>
                <option value='blank'></option>
                <option value='Shere Kahn'>Shere Kahn</option>
                <option value='Shaka Kahn'>Shaka Kahn</option>
                <option value='Mowgli'>Mowgli</option>
                <option value='Tarzan'>Tarzan</option>
            </select>
            </h2><br>",
            "<h3>Question 2:</h3>
            <h2>In the 2013 movie 'The Wolf of Wall Street' Leonardo Di Caprio portrays which famous American stock broker?🥂 🍷 🥃 🍸 
            <img src='https://i.gifer.com/vcw.gif'>
            <select name=ans2>
                <option value='blank'></option>
                <option value='Jordan Belfort'>Jordan Belfort</option>
                <option value='Jordan Belmont'>Jordan Belmont</option>
                <option value='Jordan Smith'>Jordan Smith</option>
                <option value='Jordan Mitchell'>Jordan Mitchell</option>
            </select></h2><br>",
            "<h3>Question 3:</h3>
            <h2>What is 12 + 3?
            <input type='number' name='ans3'>
            </h2><br>",
            "<h3>Question 4:</h3>
            <h2>In the Despicable Me movie franchise, the yellow minions can't resist which fruit?🍎 🍐 🍊 🍋 🍌
            <img src='img/minions.jfif'>
            <select name=ans4>
                <option value='blank'></option>
                <option value='Apples'>Apples</option>
                <option value='Strawberries'>Strawberries</option>
                <option value='Bananas'>Bananas</option>
                <option value='Oranges'>Oranges</option>
            </select>
            </h2><br>",
            "<h3>Question 5:</h3>
            <h2>In the 'Scary Movie' comedy franchise, what is the name of the killer in the mask👻?
            <img src='https://i.gifer.com/6QzE.gif'>
            <select name='ans5'>
                <option value='blank'></option>
                <option value='Ghostface'>Ghostface</option>
                <option value='Scream'>Scream</option>
                <option value='Bobby-Ray'>Bobby-Ray</option>
                <option value='Slash'>Slash</option>
            </select>
            </h2><br>",
            "<h3>Question 6:</h3>
            <h2>Who does Samuel L Jackson play in the 2000 film 'Shaft'?
            <img src='img/shaft.jfif'>
            <select name='ans6'>
                <option value='blank'></option>
                <option value='Eddy Shaft'>Eddy Shaft</option>
                <option value='John Shaft'>John Shaft</option>
                <option value='Mike Shaft'>Mike Shaft</option>
                <option value='Wade Shaft'>Wade Shaft</option>
            </select>
            </h2><br>",
            "<h3>Question 7:</h3>
            <h2>Who directed the 2007 film 'Transformers'?
            <img src='img/transformers.jfif'>
            <select name='ans7'>
                <option value='blank'></option>
                <option value='Steven Richards'>Steven Richards</option>
                <option value='Steven Spielberg'>Steven Spielberg</option>
                <option value='Martin Scorsese'>Martin Scorsese</option>
                <option value='Michael Bay'>Michael Bay</option>
            </select>
            </h2><br>",
            "<h3>Question 8:</h3>
            <h2>In the 1998 film 'Armaggedon', which natural disaster do humans face?
            <img src='img/armageddon.jfif'>
            <select name='ans8'>
                <option value='blank'></option>
                <option value='Asteroid Impact'>Asteroid Impact</option>
                <option value='Massive Earthquake'>Massive Earthquake</option>
                <option value='Massive Tsunami'>Massive Tsunami</option>
                <option value='Massive Volcanic Erruption'>Massive Volcanic Erruption</option>
            </select>
            </h2><br>",
            "<h3>Question 9:</h3>
            <h2>Which movie does the term 'Say hello to my little friend' come from?
            <img src='https://media.giphy.com/media/mmSNtSemWJJGE/giphy.gif'>
            <select name='ans9'>
                <option value='blank'></option>
                <option value='Rambo'>Rambo</option>
                <option value='The Terminator'>The Terminator</option>
                <option value='Scarface'>Scarface</option>
                <option value='Bad Boys 2'>Bad Boys 2</option>
            </select>
            </h2><br>",
            "<h3>Question 10:</h3>
            <h2>In the greek mythology movie 'Troy', which character does leading actor Brad Pitt play?
            <img src='img/troy.jfif'>
            <select name='ans10'>
                <option value='blank'></option>
                <option value='Troy'>Troy</option>
                <option value='King Priam'>King Priam</option>
                <option value='Achillies'>Achillies</option>
                <option value='Hector'>Hector</option>
            </select>
            </h2><br>",
            "<h3>Question 11:</h3>
            <h2>In the movie 'White Chicks' starring Keenan & Marlon Wayans, the Head of Police is referd to as a 
            <select name='ans11'>
                <option value='blank'></option>
                <option value='Beautiful Coffee Man'>Beautiful Coffe Man</option>
                <option value='Beautiful Handsome Man'>Beautiful Handsome Man</option>
                <option value='Beautiful Chocolate Man'>Beautiful Chocolate Man</option>
                <option value='Beautiful Sexy Man'>Beautiful Sexy Man</option>
            </select>
             by the fake Tiffany Wilson? 
             <img src='img/white.jfif'>
            </h2><br>",
            "<h3>Question 12:</h3>
            <h2>In the 'Bad Boys' movie series, which nickname is given to Martin Lawrence(pretending to be Mike Lowrey) during the stakeout scene? (1995)
            <img src='img/badboys.jfif'>
            <select name='ans12'>
                <option value='blank'></option>
                <option value='Big Mike'>Big Mike</option>
                <option value='Mikey'>Mikey</option>
                <option value='King Ding-a-ling'>King Ding-a-ling</option>
                <option value='Officer Mike'>Officer Mike</option>
            </select>
            </h2><br>",
            "<h3>Question 13:</h3>
            <h2>According to comedian Aries Spears, rapper/actor LL Cool J likes to rub 
            <select name='ans13'>
                <option value='blank'></option>
                <option value='Cream'>Cream</option>
                <option value='Chocolate'>Chocolate</option>
                <option value='Guava oil'>Guava oil</option>
                <option value='Butter'>Butter</option>
            </select>
            on his six-pack 😋
            <img src='img/llcoolj.jfif'>
            </h2><br>",
            "<h3>Question 14:</h3>
            <h2>Who is the most on-screen portrayed actor of all time ?
            <select name='ans14'>
                <option value='blank'></option>
                <option value='Charlie Chaplin'>Charlie Chaplin</option>
                <option value='Elvis Presley'>Elvis Presley</option>
                <option value='Michael Jackson'>Michael Jackson</option>
                <option value='Samuel L Jackson'>Samuel L Jackson</option>
            </select>
            </h2><br>",
            "<h3>Question 15:</h3>
            <h2>What is the name of the demon in the 2018 horror 'The Nun'?
            <img src='img/valek.jfif'>
            <select name='ans15'>
                <option value='blank'></option>
                <option value='Vince McMahon'>Vince McMahon</option>
                <option value='Valek'>Valek</option>
                <option value='Voldemort'>Voldemort</option>
                <option value='Vicky'>Vicky</option>
            </select>
            </h2><br>",
            "<h3>Question 16:</h3>
            <h2>Which American female artist co-starred Mike Myers in an Austin Powers film.
            <img src='img/austin.jfif'>
            <select name='ans16'>
                <option value='blank'></option>
                <option value='Britney Spears'>Britney Spears</option>
                <option value='Lady Gaga'>Lady Gaga</option>
                <option value='Beyonce Knowles'>Beyonce Knowles</option>
                <option value='Jennifer Lopez'>Jennifer Lopez</option>
            </select>
            </h2><br>",
            "<h3>Question 17:</h3>
            <h2>In the 2018 Pixar movie 'The Incredibles 2', what is the name of the baby boy in the Incredible family?
            <img src='img/incredibles.jfif'>
            <select name='ans17'>
                <option value='blank'></option>
                <option value='Jim-Jim'>Jim-Jim</option>
                <option value='Jon-Jon'>Jon-Jon</option>
                <option value='Jack-Jack'>Jack-Jack</option>
                <option value='Jake-Jake'>Jake-Jake</option>
            </select>
            </h2><br><br>",
            "<h3>Question 18:</h3>
            <h2>In the movie 'Facing The Giants' what is the team name of the Christian school who makes it to the finals?.
            <img src='img/giants.jfif'>
            <select name='ans18'>
                <option value='blank'></option>
                <option value='The Saints'>The Saints</option>
                <option value='The Eagles'>Tthe Eagles</option>
                <option value='The Church Boys'>The Church Boys</option>
                <option value='The Giants'>The Giants</option>
            </select>
            </h2><br>",
            "<h3>Question 19:</h3>
            <h2>What is the name of the toy cowboy in the Toy Story movie franchise?
            <img src='img/toystory.jfif'>
            <select name='ans19'>
                <option value='blank'></option>
                <option value='Ricardo'>Ricardo</option>
                <option value='Buzz'>Buzz</option>
                <option value='Mr Potatoe'>Mr Potatoe</option>
                <option value='Woody'>Woody</option>
            </select>
            </h2><br>",
            "<h3>Question 20:</h3>
            <h2>In the first edition of the 'Saw' movie franchise (Saw 1), what happens to the first key in the opening scene?
            <img src='img/saw2.jpg'>
            <select name='ans20'>
                <option value='blank'></option>
                <option value='Swallowed by Jigsaw'>Swallowed by Jigsaw</option>
                <option value='Burnt in the fire'>Burnt in the fire</option>
                <option value='Falls down the drain'>Falls down the drain</option>
                <option value='Jigsaw takes it back'>Jigsaw takes it back
                </option>
            </select>
            </h2><br>",
            '<br><br>
            <div class="text">
                <span>Click</span>
                <span>Submit</span>
                <span>For</span>
                <span>Results</span>
                <div style="clear: both"></div>
            </div>
            <input type="submit">;');

            for ($x=1;$x<=21;$x++) { 
                echo $questions[$x];
            }
        ?>
    </form>    
</body>
</html>