
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poll</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>
                Coding Language - Opinion Poll
            </h2>
            
        </div>
        <form action="server.php" method="post">
            <p>What is your preferred language to Code?</p>
            <input type="radio" name="language" id="python" value="python">
            <label for="python">Python</label><br>
            <input type="radio" name="language" id="java" value="java">
            <label for="java">Java</label><br>
            <input type="radio" name="language" id="javascript" value="javascript">
            <label for="javascript">Javascript</label><br>
            <input type="radio" name="language" id="c++" value="c++">
            <label for="c++">C++</label><br>
            <input type="radio" name="language" id="c" value="c">
            <label for="c">C</label><br>
            <input type="radio" name="language" id="kotlin" value="kotlin">
            <label for="kotlin">Kotlin</label><br>
            <button type="submit"> OK </button>
        </form>
    </div>
</body>
</html>