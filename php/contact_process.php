<?php

require_once 'db_login.php';

try {
    $pdo = new PDO($conn, $username, $password, $opts);

    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $name     = trim($_POST['name']);
        $email    = trim($_POST['email']);
        $message  = trim($_POST['message']);

        $stmt = $pdo->prepare("INSERT INTO contact_request(name, email, message) VALUES(:name, :email, :message)");

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);

        $stmt->execute();

        echo "Thank you for reaching out, $name! We will be in touch shortly.";
    }
}
catch (PDOException $e) {
    echo "An error occured: " . $e->getMessage();
}

?>