<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $db = "sample";

    $conn = mysqli_connect($servername, $user, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connection successful!";
    }

    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $pw = $_REQUEST['pw'];

    $sql = "INSERT INTO users (id, name, email, password)
            VALUES ('$id', '$name', '$email', '$pw')";

    if ($conn->query($sql) === TRUE) {
        echo "New User Created Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
?>
