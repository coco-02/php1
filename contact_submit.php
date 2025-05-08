<?php require_once 'includes/header.php'; ?>

<h3><u>Contact Form</u></h3>
<div class="container">
    <form method="post" action="contact_submit.php">
        <label for="contact_email"> Contact e-mail</label>
        <input type="email" id="contact_email" name="contact_email" placeholder="Your e-mail" autocomplete="given-name">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" ></textarea>
        <label for ="issue">Write something...</label>
        <textarea id="issue" name="issue" placeholder="Describe your issue!"></textarea>
        <label for="user_platform">What platform do you use</label>
        <select id="user_platfrom" name="user_platform">
            <option value="ps5">PS5</option>
            <option value="xbox">Xbox Series S/X</option>
            <option value="pc">EA Origin</option>
        <input type="submit" value="Submit">
</form>
</div>
<?php require_once 'includes/functions.php'; 

var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"]=== "POST");
$email = sanitize_input($_POST['contact_email']);
$subject = sanitize_input ($_POST['subject']);
$issue = sanitize_input ($_POST['issue']);
$platform = sanitize_input ($_POST['user_platform']);
// $sql = "INSERT INTO contact_us VALUES ('$email','$subject','$issue','$platform')";

$conn = f1_get_db_connection();
$sql = "INSERT INTO contact_us (contact_email, subject, issue, user_platform) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$result = $stmt->execute([$email, $subject, $issue, $platform]);
// if(mysqli_query($pdo,$sql)){
//     echo "Thank you for contacting us we have recieved your query and will 
//     respond within the next 2 buisiness days";
// }

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

if($result){
    echo "Thank you for contacting us we have recieved your query and will 
    respond within the next 2 buisiness days";
}  else {
    echo "Error: " . $stmt->errorInfo()[2]; // Display error message
}

require_once 'includes/footer.php';?>