<?php
    
    include_once("config.php");

        // Now we check if the data was submitted, isset() function will check if the data exists.
    if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
        // Could not get the data that should have been sent.
        exit('Please complete the registration form!');
    }
    // Make sure the submitted registration values are not empty.
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
        // One or more values are empty.
        exit('Please complete the registration form');
    }

        // We need to check if the account with that username exists.
    if ($stmt = $connection->prepare('SELECT uid, upassword FROM user WHERE uname = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        // Store the result so we can check if the account exists in the database.
        if ($stmt->num_rows > 0) {
            // Username already exists
            echo 'Username exists, please choose another!';
        } else {
            // Insert new account
            // Username doesn't exists, insert new account
            if ($stmt = $connection->prepare('INSERT INTO user(name, password, email) VALUES (?, ?, ?);')) {
                echo 'test';
                // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
                $password = hash('SHA256',$_POST['password']);
                $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
                $stmt->execute();
                echo 'You have successfully registered! You can now login!';
            } else {
                // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
                echo 'Could not prepare statement!';
            }
        }
        $stmt->close();
    } else {
        // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
        echo 'Could not prepare statement!';
    }
    $connection->close();
?>