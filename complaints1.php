<?php
// Your email address
$to = "eyad652000@email.com";

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$complaint = $_POST['complaint'];

// Email subject and body
$subject = "New Complaint from $name";
$message = "Name: $name\nEmail: $email\nComplaint:\n$complaint";

// Send email
$headers = "From: $email\r\n";
if(mail($to, $subject, $message, $headers)){
    echo "Complaint sent successfully!";
} else {
    echo "Error sending complaint.";
}

// Optional: Save to a file
$file = fopen("complaints.txt", "a");
fwrite($file, "Name: $name | Email: $email | Complaint: $complaint\n");
fclose($file);
?>
