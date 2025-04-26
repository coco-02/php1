<?php require_once 'includes/header.php'; ?>
<h2>Sign up</h2>
<form method="POST" action="index.php">
    <label for="username"> please enter username</label>
    <input type="text" id="user" name="user" placeholder="Your name.." autocomplete="given-name">
    <label for="password"> Please enter your email address</label>
    <input type="text" id="email" name="email">
    <label for="password"> Please enter your password </label>
    <input type="text" id="password" name="password"> 
    <label> Please choose a profile picture</label>
    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" />

    <input type="submit" value="Submit">
</form>
<?php require_once 'includes/footer.php'; ?>