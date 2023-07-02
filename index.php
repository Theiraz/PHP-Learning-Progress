<?php 
    /*------------------------------------------------------------ A variable - A reusable named container that holds data like 
                                                                   but not limited to - strings, integers, float, boolean
    */
?>


<?php 
    $name = "Radoslav Bonev";
    $food = "pasta";
    $email = "r.bonev1998@gmail.com";
    // Strings - Text-based data, encased in quotes.


    $age = 24;
    $users = 11;
    $quantity = 4;
    //Integers - whole numbers, no quotes.


    $gpa = 2.5;
    $price = 5.99;
    $score = 33.63;
    $tax_rate = 5.1;
    //Floats - Not whole numbers, containing decimal points,no quotes.


    $employed = true;
    $online = false;
    $for_sale = true;
    /*  Booleans - like a light switch, can be either on or off.
        Not used for output, if true it outputs 1, if false outputs nothing, 0.
        We mainly use booleans internally in a program, like an If statement or loop
    */


    $total = null;
    // A null statement can be seen as undefined, it has no value assigned to it. Below is an equation that calculates and assigns a value to $total.


    /* ENCOMPASSING THIS CODE THAT WILL NOT BE EXECUTED IN A COMMENT, TO KEEP WORKPLACE CLEAN.
   echo "You have ordered {$quantity} x {$food}s <br>";
   $total = $quantity * $price;
   echo "Your total is \${$total}; <br>";
   */
    

   // Here ends the variables section ---------------------------------------------------------------------------------------------------------------
 ?> 

<?php 
    // ----------------------------------------------------------------------------------------------------------------------------------------------- Arithmetic operators (Used for calculating a value).

    // + , - , *(multiply) , /(divide) , **(times two, or to the power of) , % (modulus operator, or simply the remainder of - example 10 / 3 = the remainder is 1 - used to determine if a number is odd or even)

    /*
    $x = 10;
    $y = 3; 
    $z = null;

    $z = $x % $y;
    echo $z;
    */
    

    // Increment / decrement operators
    // ++, --

    /*
    $counter = 10;
    $counter+=3;
    echo $counter;
    */


    // Operator Precedence (Order of calculation)
    //  1 - ()
    // 2 - **
    // 3 - * / %
    // 4 - + - 

    /*
    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo  $total;
    */

    // --------------------------------------------------------------------------------------------------------------------------------------------------------------- Here end Arithmetic Operators
?>


<?php
    // ---------------------- $_ GET, $_POST = These are special variables, used to collect data from an HTMl form. Data is sent to the file in the action attribute of <form> <form action="some_file.php" method="get"> 

    // $_GET = Data is appended to the url
    // NOT SECURE
    // char limit
    // Bookmark is possible w/ values
    // GET requests can be cached
    // Better for a search page


    // $_POST = Data is packaded inside the body of the HTTP request. 
    // MORE SECURE 
    // No data limit
    // Cannot bookmark
    // GET requests are not cached
    // Better for submitting credentials
?>

<!--- <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="index.php" method="post">
        <label> Username: </label><br>  
        <input type="text" name= "username"><br>
        <label>Password:</label><br>  
        <input type="password" name= "password"><br>
        <input type ="submit" value= "Log In">
    </form>
</body>
</html>
-->

<?php
/* 
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>"; 
*/   
// ----------------------------------------------------------------------------------------------------------------------------------- Here End $_GET and $_POST 
?>


<!--- <!DOCTYPE html> ----------------------------------------------------------------------------------------------------------------- $_GET and $_POST excercise.
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <label>Quantity: </label>
        <input type = "text" name = "quantity"> 
        <input type = "submit" value = "Total">
    </form>
</body>
</html>
-->     

<?php  
    /*
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price;
    
    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is: \${$total}<br>"; 
    */
    // -----------------------------------------------------------------------------------------------------------------------------  Here ends the $_GET and $_POST excercise
?>



<!-- <!DOCTYPE html> -------------------------------------------------------------------------------------------------------------- Math functions
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="index.php" method = "post">
    <label>x:</label>
    <input type ="text" name = "x">
    <label>y:</label>
    <input type ="text" name = "y">
    <label>z:</label>
    <input type ="text" name = "z">
    <input type ="submit" value = "total">
    </form>


</body>
</html>
--> 
<?php /*
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total =null;
    
    // $total = abs($x);- Returns absolute value of that number
    // $total = round ($x); - Rounds to the closest integer number
    //$total = floor($x); - Rounds down
    // $total = ceil($x); - Rounds up 
    // $total = pow($x, $y); - One number to the power of the other
    // $total = sqrt($x); - Square of number x
    // $total = max($x, $y, $z); Pulls out the highest number
    //  $total = min($x, $y, $z); Pulls out the lowest number
    //   $total = pi(); Pi number
    //  $total = rand(1,10); Random number generator

    echo $total;
*/
// ----------------------------------------------------------------------------------------------------------------------- Here end Math Functions
?> 

<!-- <!DOCTYPE html> ------------------------------------------------------------------------------------- Math Related Functions in PHP excercice
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <label> radius: </label>
        <input type = "text" name ="radius"> 
        <input type="submit" value= "calculate">
    </form><br>
</body>
</html>
-->
   

<?php /*
     $radius = $_POST["radius"];
     $circumference = null;
     $area = null;
     $volume = null;

     $circumference = 2 * pi() * $radius;
     $circumference = round($circumference, 2);
     $area = pi() * pow($radius ,2);
     $area = round ($area, 2);
     $volume = 4 / 3 * pi() * pow($radius, 3);
     $volume = round($volume, 1);
     
     echo "Circumference = {$circumference}cm <br>";
     echo "Area = {$area}cm^2 <br>";
     echo "Volume = {$volume}cm^3";
     */ 
    //  ---------------------------------------------------------------------------------- Here End Math Related Functions in PHP excercise 
?> 

<?php /* ----------------------------------------------------------------------------------------------------------- IF statements
    // if statement = if some condition is true, do something
    //                if some condition is false, don't do it

    $age = 18;

    if ($age >= 100){
        echo "You are too old to enter this site";
    }
    elseif($age <= 0){
        echo "That wasn't a valid age";
    }
    elseif($age >=18){
        echo "You may enter this site";
    }
    else {
        echo "You may not enter this site";
    }
*/ 
?>

<?php /*
    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <=40){
       $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * $rate * 1.5);
    }

    Echo "You have made \${$weekly_pay} this week";
    */ // -------------------------------------------------------------------------------------------------- Here end IF statements
?> 

<?php /* --------------------------------------------------------------------------------------------------- Logical Operators

    // Logical Operators = combines conditional statements
    // if(condition1 && , ||, ! condition2)
    // && (And) - Both statements to be true
    // || (or) - Either statement to be true
    // ! (not) - Not (reversing) true. True if false, false if true.

    $temp = -1;
    $cloudy = false;

    if($temp < 0 || $temp > 30){
        echo "The weather is bad<br>"; 
    }
    else{
        echo "The weather is good<br>";
    }

    if(!$cloudy){
        echo "It's sunny";
    }
    else{
        echo "It's cloudy";
    }
*/
?>

<?php /*
    $age = 17;
    $citizen = true;

    if($age >=18 && $citizen){
        echo "You are elligable to vote in Bulgaria"; 
    }

    else{
        echo "You are inelligable to vote in Bulgaria";
    }
?>

<?php 
    $child = false;
    $senior = false;
    $ticket_price = null;

    if($child || $senior){
        $ticket_price = 10;
    }
    else{
        $ticket_price = 15;
    }

    Echo "Your ticket price is \$($ticket_price);"
 */


 // -------------------------------------------------------------------------------------------------- Here end Logical Operators
?>

<?php /*
    // ----------------------------------------------------------------------------------------------------------------- Switches
    // switch = Replacement to using many elseif statements, more efficient and less code to wrtie
   
    $grade = "Pizza";

    switch($grade){
        case "A";
            Echo "You did great";
        break;
        case "B";
            Echo "You did good";
        break;
        case "C";
            Echo "You did okay";
        break;
        case "D";
            Echo "You did poorly";
        break;
        case "F";
            Echo "You failed";
        break;
    default: 
        Echo "{$grade} is not a valid grade.";
    }
    */
?> 

<?php /*
    $date = date("l");
    
    switch($date){
        case "Monday";
            Echo "I hate Mondays";
        break;
        case "Tuesday";
            Echo "I'm neutral for Tuesdays";
        break;
        case "Wednesday";
            Echo "Wednesday is the first friday";
        break;
        case "Thursday";
            Echo "Thursday is lit";
        break;
        case "Friday";
            Echo "Friday be bussin";
        break;
        case "Saturday";
            Echo "Saturday rocks";
        break;
        case "Sunday";
            Echo "Sunday is hell";
        break;
        default :
            echo "{$date} is not a day";
    }
?> ----------------------------------------------------------------------------------------------------------- Here end Switches



<?php 
/*
    // ----------------------------------------------------------------------------------------------------------- For Loops
    // for loop = Repeats some code a certain # of times.
    // for loop (1;2;3) = for loops can hold up to 3 optional statements. In this example first $i = a counter (i=index), second $i = stopping condition (when this statement is no longer true, we escape the for loop), and the third $i = increment / decrement.
    
    for($i = 10;$i >0;$i-=3){
        echo $i . "<br>";
    }
    */
?>


<!DOCTYPE html> <!---
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <label>Enter a number to count down from:</label>
        <input type ="text" name = "counter">
        <input type = "submit" value = "start">
    </form>
</body>
</html>
-->

<?php /* 
   $counter = $_POST["counter"];

   for($i = 1; $i <= $counter; $i++){
        echo $i . "<br>";
   }
   */
  // -------------------------------------------------------------------------------------------------- Here end For Loops
?>

   <!---
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
        <form action = "index.php" method = "post">
            <input type = "submit" name = "stop" value = "stop">
        </form>

   </body>
   </html>
-->

<?php 
    // ---------------------------------------------------------------------------------------------------- While Loops
    // while loop = do some code infinitely while some conditions remain true
    /*

   $seconds = 0;
   $running = true;

    while($running){

        if(isset($_POST["stop"])){
            $running = false;
        }
            else{
            // wait 1 second
            $seconds++;
            echo $seconds . "<br>";
        }
      }
   
   // This code example breaks the site so don't uncomment it -------------------------------------- Here end While Loops
   */
?>

<?php
    // ----------------------------------------------------------------------------------------------------------------------- Arrays 
    // Arrays = 'variable' , which can hold more than one value at a time.

    // $food_1 = "apple"; 
    // $food_2 = "orange";
    // $food_3 = "banana";  ---------------> An array can store all those variables under one 'array' called foods. Example below.
    // $food_4 = "coconut";

 /*
    $foods = array("apple", "orange", "banana","coconut");

    // $foods[0] = "pineapple"; - Change an array value
    // array_push($foods, "pineapple", "kiwi"); - Add to an array
    // array_pop($foods); - Removes the last value of the array
    // array_shift($foods); - Removes the first value of the array
    // $foods = array_reverse($foods); - Reasigns the array in a reversed order
    //  echo count($foods); - Counts the number of values in the array.
      
    foreach($foods as $food){
        echo $food . "<br>";
    }
    */ // ------------------------------------------------------------------------------------------------------------ Here end Arrays
?>

<?php 
    // ---------------------------------------------------------------------------------------------------------------------------------------------------- Associative Arrays
    // associative array = An array made of key => value pairs

    // countries => capitals
    // id => username
    // item => price

    /*
    $capitals_reversed = null;
    $capitals = array("USA"=>"Washington DC",
                     "Japan"=>"Kyoto", 
                     "South Korea"=>"Seoul", 
                     "India"=>"New Delhi");
    //$capitals["USA"] = "Las Vegas"; - Changes an array value
    //$capitals["China"] = "Beijing"; - Adds a new array value
    // array_pop($capitals); - Removes Last array value
    // array_shift($capitals); - Removes first array value
    // $capitals_reversed = array_reverse($capitals); - Additional task reversing and echoing the capitals
    /*
    foreach($capitals as $key => $value){
        echo"{$key} {$value} <br>";

    }
    */

    // $keys = array_keys($capitals); - Echoes only the keys for the array which in this case are our countries.

    /*
    foreach($keys as $key){
        echo"{$key}<br>";

    }
    */

    //    $values = array_values($capitals); - This assigns a $value variable and the below code Echoes only the values from the array which in this case are our capitals.
    /*
    foreach($values as $value){
        echo "{$value} <br>";

    }
    */

    //    $capitals = array_flip($capitals); - This reassings the capitals array to the keys and values to be flipped with one another/

    /* This code below echoes the flipped Keys and Values.
    foreach($capitals as $key => $value){
        echo "{$key} = {$value} <br>";
    }
    */

   // echo count($capitals); - Counts the number of Keys and Values combinations

?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <label>Enter a country:</label>
        <input type = "text" name = "country">
        <input type = "Submit">
    </form>
</body>
</html>
-->


<?php /*
    $capitals = array("USA"=>"Washington DC",
                     "Japan"=>"Kyoto", 
                     "South Korea"=>"Seoul", 
                     "India"=>"New Delhi");



    $capital = $capitals[$_POST["country"]];

    echo "The capital is {$capital}";

*/
// ---------------------------------------------------------------------------------------------------------------------------------------------- Here end Associative Arrays
?>

<?php
    // ------------------------------------------------------------------------------------------------------------------------------ Isset and Empty functions
    // isset() = Returns TRUE if a variable is declared and not null
    // empty () = Returns TRUE if a variable is not declared, false, null, "".

    // $username = null; or $username = "Heski";

    // echo isset($username);

    /*
    if(isset($username)){
            echo "This variable is set";
    }
    else{
        echo "This variable is NOT set";
    }
    */

    /*
    $username = "Heski";

    if(empty($username)){
        echo "This variable is empty";
    }
    else{
        echo "This variable is not empty";
    }
    */
?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
    <label>Username: </label> <br>
    <input type = text name = "username"> <br>
    <label>Password: </label> <br>
    <input type = password name = "password"> <br>
    <input type = submit name = "Login"  value = "Log In"> 
    </form>
</body>
</html>
-->
<?php
    // The HTML above is connected to the PHP below.

    // The code below spits out the associative array that is contained in the $_POST superglobal variable, the keys and => values. The isset function in this case checks if the username and password are set and the empty function checks if they are NOT set or typed in by the user
    /*
    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }
    */

    // The code below first checks IF the Log In button is set.
    // Then if a username is empty
    // Then if a password is empty
    // Then if all the information is typed in, you log in with a Hello and your username appearing.


    /*
    if(isset($_POST["Login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(empty($username)){
            echo "Username is missing";
        }
        elseif(empty($password)){
            echo"Password is missing";
        }
        else{
            echo "Hello {$username}";
        }
    }
    */
    // ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- Here end isset and empty functions
?>

<!-- 
    --------------------------------------------------------------------------------------------------------------- Radio Buttons 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
    <input type = "radio" name = "credit_card" value = "Visa">
        Visa <br>
    <input type = "radio" name = "credit_card" value = "Mastercard">
        Mastercard <br>
    <input type = "radio" name = "credit_card" value = "American Express">
        American Express <br>
    <input type = "submit" name = "confirm" value = "confirm">
    </form>
</body>
</html>
-->

<?php

    // In the code below, first action we check if the confirm button works and is set
    // The second action sets the credit_card variable for php, and when the user selects it, the selection is echoed.
    // The third actuin echoes for the user to make a selection if nothing is selected, but the user clicks the button.

    /*
    if(isset($_POST["confirm"])){
        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo "You have selected {$credit_card}";
        }
        else{
            echo "Please make a selection";
        }
    }
    */
    // ------------------------------------------------------------------------------------------------------------ Here End Radio Buttons
?>

<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- Checkboxes
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action = "index.php" method = "post">
    <input type = "checkbox" name = "foods[]" value = "Pizza">
        Pizza <br>
    <input type = "checkbox" name = "foods[]" value = "Hamburger">
        Hamburger <br>
    <input type = "checkbox" name = "foods[]" value = "Hotdog">
        Hotdog <br>
    <input type = "checkbox" name = "foods[]" value = "Taco">
        Taco <br>
    <input type = "submit" name = "submit">
    </form>
</body>
</html>
-->

<?php
    
    // For the below code, we have an example of the isset functions using instead of variables, an array of the above HTML variables. You just have to add [] after the foods names in HTML.
    // First line checks if a checkbox is selected
    // Second line assigns the $foods as an array from the above html
    // Third line assigns each Key = > Value from the array as a separate one. 

    /*
    if(isset($_POST["submit"])){

        $foods = $_POST["foods"];
        
        foreach($foods as $food){
            echo "You have selected $food" . "<br>";
        }
        
    }
    */

    // This is an additional excersice I did using variable instead of an array. 
    // In our case, using a single variable instead of an array wouldn't be the most optimal, since there are alot of values that can be changed / added to the foods class in the HTML.
    /*
    if(isset($_POST["submit"])){
        if(isset($_POST["foods"])){
            $foods = $_POST["foods"];
            Echo "You have selected {$foods}";
        }
        else {
            Echo "You have not made a selection";
        }
    }
    */
        
    // ---------------------------------------------------------------------------------------------------------------------------------------------------------------- Here End Checkboxes

?>

<?php 
// -----------------------------------------------------------------------------------------------------------------------------------------------------------Functions
// Functions are a section of reusable code, used as many times as neccessary.

    /*
    function happy_birthday($first_name, $age){
        echo "Happy Birthday to $first_name. <br>";
        echo "You are $age years old! <br>";
    }


    happy_birthday("Heskoni", 25);
    */

    // Functions consist of the function name, and the values in the normal brackets with arguments in the string brackets. You can also set parameteres for the values.
    
    /*
    function hypotenuse(int $a, $b){
        $c = sqrt($a ** 2 + $b **2);
        return $c;
    }
   echo hypotenuse(3, 4);
   */
  // -------------------------------------------------------------------------------------------------------------------------------------------------- Here End Functions
?>

<?php 
    // ------------------------------------------------------------------------------------------------------------------------------------------------------------String Functions
    /*
    $username = array("Heskoni" ,"The" ,"Code");
    $phone = "089-331-2218";
    */
    
    //$username = strtolower ($username); - Lowercase
    //$username = strtoupper ($username); - Uppercase
    //$username = str_pad($username, 20, "0"); - Pad a string up to a certain amount of characters, with the character we specify afterwards.
    //$phone = str_replace("-", "/" , $phone); - Replaces one character from a string with another character. 
    //$username = strrev($username); - Reverses string
    //$equals = strcmp($username, "Heskoni Code"); - If these two strings are the same, returns 0 (false).
    //$count = strlen($username); - Counts the amount of characters in the string.
    //$index = strpos ($phone, "-"); - Finds the index position of a specified character.
    /*$firstname = substr($username,"0","7"); - Creates a new string from another string - first specify which old string to use, then where to start and then where to end.
      $lastname = substr($username, "8"); - Here we don't need an ending index specified, as this string is the last in the old variable.
    */
    /*
    $fullname = explode(" ", $username); - Creates an array from a long variable (string). The first argument specifies which is the "divider" in the arrays which in our case each new array will be divided by the space, and the second argument specifies which variable is going to turn into an array. Below is an echo example of the transformed array form the username variable.

    foreach ($fullname as $name){
        echo $name . "<br>";
    }
    */
    /*
    $username = implode(" ",$username); - The opposite of explode. Turns an array into a variable(string). First you can if you want, to specifiy with an argument how to split up the strings, and the second argument is which array to turn into a string.

    echo $username;
    */ 
    // ---------------------------------------------------------------------------------------------------------------------------------------------------------Here end String Functions
?>

<!--
    // --------------------------------------------------------------------------------------------------------------------------------------------- Sanitize/Validate Input
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        Username: <br>
        <input type = "text" name = "username" > <br>
        Age: <br>
        <input type = "text" name = "age" > <br>
        Email: <br>
        <input type = "text" name = "email" > <br>
        <input type = "submit" name = "login"  value = "login"> 
    </form>
</body>
</html>
-->
<?php
    // Sanitize Input - Sanitization strips certain prohibiter characters and return the string without those characters.
    // Validate Input - If our input does not pass the validation test, it returns an empty string.

    /*
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username", 
                                    FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Hello {$username}<br>";
        $age = filter_input(INPUT_POST, "age",
                                FILTER_SANITIZE_NUMBER_INT);
        echo "You are {$age} years old<br>";
        $email = filter_input(INPUT_POST, "email",
                                FILTER_SANITIZE_EMAIL);
        echo "Your current email is {$email}";
    }
    */

    /*
    if(isset($_POST["login"])){
        $age = filter_input(INPUT_POST, "age",
                            FILTER_VALIDATE_INT);
        if(empty($age)){
            echo "This is not a valid age <br>";
        }
        else{
            Echo "You are $age years old";
        }
        $email = filter_input(INPUT_POST, "email",
        FILTER_VALIDATE_EMAIL);
        if(empty($email)){
            echo "That email wasn't valid";
        }
        else 
        echo "Your current email is: $email";

    }
    */
    // --------------------------------------------------------------------------------------------------------------------------------------------- Here end Sanitize/Validate Input
?>

<?php 
    // --------------------------------------------------------------------------------------------------------------------------------------------- Include ()
    // include () = Copies the content of a file (php/html/text)
    //              and includes it in your php file.
    //              Sections of our website become reusable
    //              Changes only need to be made in one place

    /*
    include("header.html");
    */
?>

<!---
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            This is the Home Page <br>
            Content about the Home Page will be here <br>
        <h3>    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type  and scrambled it to make a type specimen book.
        </h3>
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</body>
</html>
-->

<?php
    /*
    include ("footer.html");
    */
    // ---------------------------------------------------------------------------------------------------------------------------------------------- Here ends Include ()
?>


<?php 
    // ---------------------------------------------------------------------------------------------------------------------------------------------------------- Cookies
    /*
    // cookie = Information about a user, stored in a user's web-browser targeted advertisements, browsing preferences, and other non-sensitive data.
    // setcookie(); - first argument is the key, the second argument is the value and the third argument is the expiration time and the fourth argument is the filepath.
    
    setcookie("fav_food", "pizza", time() + (86400 * 2), "");
    
    The below code returns the cookie value, since it is an array.

    foreach($_COOKIE as $key => $value){
        echo"{$key} = {$value} <br>";
    }

    The below code createes an if/else statement to check if the favourite food is set 

    if(isset)($_COOKIE["fav_food"])){
        echo "BUY SOME {$_COOKIE["fav_food"]} !!!"
    }
    else{
        echo "I don't know your favourite food";
    }

    */
    // ------------------------------------------------------------------------------------------------------------------------------------------------- Here end Cookies
?>

<?php
    // session = SGB (super global variable) that is used to store information on a user, to be useed across multiple pages.
    // A user is assigned a session-id - ex. Login Credentials   