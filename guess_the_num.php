<?php

if (isset($_POST["submit"])) 
{
    $number = $_POST["number"]; 
    $guess = $_POST["guess"]; 

    if ($guess % 2 == 0) {
        $message = "Wrong answer!!!";
    } else {
        if ($guess == $number) {
            $message = "Correct answer!";
            $number = rand(1, 10);
            $number = $number | 1;
        } elseif ($guess < $number) {
            $message = " It's too small! try a bigger one";
        } elseif ($guess > $number) {
            $message = " It's too large! try a smaller one";
        }
    }
}
 else {
    $message = " Hello there, can you guess what is the number?";
    $number = rand(1, 10);
    $number = $number | 1;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>A simple HTML form</title>
</head>

<body style="background-color:cyan;">
    <h3 ><?php echo $message; ?></h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <p>
            <label for="guess">Try to guess the number between 1 and 10!</label><br />
            <input type="text" id="guess" name="guess">
        </p>
        <p>
            <input type="hidden" name="number" value="<?php echo $number; ?>">
            <button type="submit" name="submit" value="submit">Check</button>
        </p>
    </form>
</body>

</html>
