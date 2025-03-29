<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/header.php'; ?>

<?php




?>

<h3><u>Contact Form</u></h3>
<div class="container">
    <form method="post" action="contact_submit.php">
        <label for="email"> Contact e-mail</label>
        <input type="email" id="email" name="email" placeholder="Your e-mail" autocomplete="given-name">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" ></textarea>
        <label for ="issue">Write something...</label>
        <textarea id="issue" name="issue" placeholder="Describe your issue!"></textarea>
        <label for="platform">What platform do you use</label>
        <select name ="platfrom" id="platform">
            <option value="ps5">PS5</option>
            <option value="xbox">Xbox Series S/X</option>
            <option value="pc">EA Origin</option>
        <input type="submit" value="Submit">
</form>
</div>

<?php require_once 'includes/footer.php'; ?>
