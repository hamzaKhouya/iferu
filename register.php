<?php
    session_start();
    
    // Connect to the database
    $db = mysqli_connect("localhost","root","","iferu_db");
    // Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: escape string connection    " . mysqli_connect_error();
  }else{
    echo "escape string connection works properly";  
  }
  
    echo("testtt");
    if(!$db) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $username = "";
$email    = "";
    $errors = array();
    echo("testtt");
    if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        echo("testtt");
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $confirm_password = mysqli_real_escape_string($db,$_POST['confirm_password']);
        // Validation
        if(empty($username)) {
            array_push($errors, "Username is required!");
        }
        if(empty($email)) {
            array_push($errors, "Emailll is required!");
        }
        if(empty($password)) {
            array_push($errors, "Password is required!");
        }
        if($password != $confirm_password) {
            array_push($errors, "Passwords not matching!");
        }
        $user_check_query = "SELECT * FROM user_table WHERE user_name='$username' OR user_email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);



        // Save into DB
        if(count($errors) == 0){
            $hashed_password = md5($password);
            $query = "INSERT INTO user_table(user_name,user_email,user_password,id_subscription ) VALUES ('$username', '$email', '$hashed_password',1)";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
           
         
        }
    }