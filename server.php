
<?php
    session_start();
//  initiallizing variables   
    $language = "";
    $errors = array();
    $sql = "";
// Form Validation 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["language"])){
            alert("You did not vote!");
        }
        else{
                $language = validated($_POST["language"]);
        }
    }
    function alert($message){
        echo "<script>alert('$message')</script>";   
        exit(1);
    }
    function validated($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
// Connect and CREATE to the Database
    $db = mysqli_connect('localhost','root','','databas_practice');

    if (!$db) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }
//  ADD the variable to the database 
    $sql = "INSERT INTO phpsubmission (name) VALUES ('$language')";

    if(mysqli_query($db,$sql)){
        echo "New Record INserted";
    }else{
        echo "Error:" . mysqli_error($db);
    }


mysqli_close($db);
header("location: submission.php");