<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Phone'];
    $phone = $_POST['Email'];
    $message = $_POST['Date'];
    $location = $_POST['Location'];

    $sql = "INSERT INTO munnar (`Name`, `Phone`, `Email`, `Date`, `Location`) VALUES ('A', '9876543210', 'a@gmail.com', '2025-03-20', 'Tuticorin')"; 

    if ($conn->query($sql) === TRUE) {
        echo "Submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
