<?php

require_once 'db_login.php';

try {
    $pdo = new PDO($conn, $username, $password, $opts);

    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $name    = trim($_POST['name']);
        $email   = trim($_POST['email']);
        $service = trim($_POST['service']);
        $date    = trim($_POST['requested_date']);

        $stmt = $pdo->prepare("INSERT INTO appointments (name, email, service, requested_date) VALUES (:name, :email, :service, :requested_date)");

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':service', $service, PDO::PARAM_STR);
        $stmt->bindParam(':requested_date', $date, PDO::PARAM_STR);

        $stmt->execute();

        echo "Thank you, $name! Your appointment for $service on $date has been booked.";
    } 
    else {
        echo "Please submit the form.";
    }
} 
catch (PDOException $e) {
    echo "An error occurred: " . $e->getMessage();
} 

?>