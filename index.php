<?php
$randNum = 0;

if (isset($_POST["random"])) {
    $randNum = rand(1, 10);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Number Generator</title>
</head>
<body>

    <div>
        <h1>Random Number Generator</h1>
        <p>Generate a random number from 1 to 10.</p>

        <form action="index.php" method="post">
            <div>
                <h2><?php echo "Random Number: " . $randNum?></h2>
            </div>
            <button type="submit" name="random">Generate Random Number</button>
        </form>
    </div>

</body>
</html>

