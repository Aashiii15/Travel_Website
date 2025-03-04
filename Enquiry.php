<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $message = $_POST['Message'];

    $sql = "INSERT INTO enquiries (Name, Email, Phone, Message) VALUES ('A', 'a@gmail.com', '1324', 'Hi')";

    if ($conn->query($sql) === TRUE) {
        echo "Enquiry submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
