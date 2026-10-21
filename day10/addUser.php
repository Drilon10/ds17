<?php

    include_once "config.php";

    if(isset($_POST['submit'])) {
        $user = $_POST['username'];
        $pw = $_POST['password'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (username, password, email) VALUES (:usr, :psw, :em)";
        $sqlQuery = $conn->prepare($sql);

        $sqlQuery->bindParam(':usr', $user);
        $sqlQuery->bindParam(':psw', $pw);
        $sqlQuery->bindParam(':em', $email);

        $sqlQuery->execute();

        echo "User added successfully";
        // header("Location: index.php");
    }
?>