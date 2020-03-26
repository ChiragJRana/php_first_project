<?php
    $db = mysqli_connect('localhost','root','','databas_practice');
    if (!$db) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    $tcount = 0;
    $python = $java = $javascript = $c = $cpp = $kotlin = 0;
 
    $tcount = mysqli_fetch_assoc(mysqli_query($db,"SELECT COUNT(name) AS `count` FROM phpsubmission"))['count'];
    $python = mysqli_fetch_assoc(mysqli_query($db,"SELECT COUNT(name) AS `count` FROM phpsubmission WHERE name = 'python'"))['count'];
    $java = mysqli_fetch_assoc(mysqli_query($db,"SELECT COUNT(name) AS `count` FROM phpsubmission WHERE name = 'java'"))['count'];
    $javascript = mysqli_fetch_assoc(mysqli_query($db,"SELECT COUNT(name) AS `count` FROM phpsubmission WHERE name = 'javascript'"))['count'];
    $c = mysqli_fetch_assoc(mysqli_query($db,"SELECT COUNT(name) AS `count` FROM phpsubmission WHERE name = 'c'"))['count'];
    $cpp = mysqli_fetch_assoc(mysqli_query($db,"SELECT COUNT(name) AS `count` FROM phpsubmission WHERE name = 'c++'"))['count'];
    $kotlin = mysqli_fetch_assoc(mysqli_query($db,"SELECT COUNT(name) AS `count` FROM phpsubmission WHERE name = 'kotlin'"))['count'];
    
    mysqli_close($db);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Opinion Poll Results</h3>
        <p>What is your preferred language to Code?</p>
        <p><?php echo "$tcount";?> people have thus far taken in this poll: </p>
        <table>
            <tr>
                <td>Python got: <?php echo "$python";?> votes </td>
            </tr>
            <tr>
                <td>Java got: <?php echo "$java";?> votes </td>
            </tr>
            <tr>
                <td>Javascript got: <?php echo "$javascript";?> votes </td>
            </tr>
            <tr>
                <td>C got: <?php echo "$c";?> votes </td>
            </tr>
            <tr>
                <td>C++ got: <?php echo "$cpp";?> votes </td>
            </tr>
            <tr>
                <td>Kotlin got: <?php echo "$kotlin";?> votes </td>
            </tr>

        </table>

    </div>
</body>
</html>