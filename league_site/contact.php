<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/header.php'; ?>

<?php
$email = $_REQUEST ['email'];
$subject = $_REQUEST ['subject'];
$issue = $_REQUEST ['issue'];
$platform = $_REQUEST ['platform'];

$sql = "INSERT INTO contact_us VALUES ('$email','$subject','$issue','$platform')";

if(mysqli_query($conn,$sql)){
    echo "<h3> Thank you for contacting us we have recieved your query and will 
    respond within the next 2 buisiness days</h3>";
}

?>
<h3><u>Contact Form</u></h3>
<div class="container">
    <form action="index.php">
        <label for="email"> Contact e-mail</label>
        <input type="text" id="email" name="email" placeholder="Your e-mail" autocomplete="given-name">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" ></textarea>
        <label for ="issue">Write something...</label>
        <textarea id="issue" name="issue" placeholder="Describe your issue!"></textarea>
        <label for ="platform">What platform do you use</label>
        <textarea id="platform" name="platform"></textarea>
        <input type="submit" value="Submit">
    </form>
    
</div>

<?php require_once 'includes/footer.php'; ?>
