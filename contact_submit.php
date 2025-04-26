<?php require_once 'includes/functions.php';

var_dump($_POST);

$email = $_POST ['email'];
$subject = $_POST ['subject'];
$issue = $_POST ['issue'];
$platform = $_POST ['platform'];

// $sql = "INSERT INTO contact_us VALUES ('$email','$subject','$issue','$platform')";

$conn = f1_get_db_connection();
$sql = "INSERT INTO contact_us ('contact_email','subject','issue','user_platform') VALUES (?,?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$email, $subject, $issue, $platorm]);
if(mysqli_query($pdo,$sql)){
    echo "<h3> Thank you for contacting us we have recieved your query and will 
    respond within the next 2 buisiness days</h3>";
}

const EMAIL_REQUIRED = 'Please enter your email';
const EMAIL_INVALID = 'Please enter a valid email';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;
if ($email) {
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($email === false) {
        $errors['email'] = EMAIL_INVALID;
    }
} else {
    $errors['email'] = EMAIL_REQUIRED;
}
