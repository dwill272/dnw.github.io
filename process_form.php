<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Example: Save data to a file or send an email
    $file = fopen("submissions.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n---\n");
    fclose($file);

    echo "<h1>Thank you for contacting us, $name!</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong></p>";
    echo "<p>$message</p>";
} else {
    echo "<h1>Invalid Request</h1>";
}
?>
