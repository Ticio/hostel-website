<?php
    
    session_start();

	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "test");


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    
    try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", DB_USER, DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully <br />"; 
    }
    catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
    }
 

    $first=$_POST['first'];
    $last=$_POST['last'];
    $email=$_POST['email']; 
    $message=$_POST['message'];


    $query=$conn->prepare("INSERT INTO contacts (first,last, email, message) VALUES ('$first','$last','$email','$message')");
    $true = $query->execute();

    $conn = null;
 
    $_SESSION['message'] = '<h4>Hi '.$_POST['first'].' ' .$_POST['last'] .' thanks for your interest.</br>'
    .'We will contact you at '. $_POST['email'].' soon.</br></h4>';

     if ($true)
        header('Location: contact_us.php');
?>
