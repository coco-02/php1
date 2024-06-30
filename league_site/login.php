<?php require_once 'includes/header.php'; ?>

<h3>Log in</h3>
<div class="container">
    <form method="POST" action="index.php">
        <label for="username"> Please enter your username </label>
        <input type="text" id="user" name="user" placeholder="Your name.." autocomplete="given-name">
        <label for="password"> Please enter your password </label>
        <input type="text" id="password" name="password">

        <input type="submit" value="Submit">
    </form>
</div>

<h3>Not got an account with us? <a href="signup.php">Sign-up here</a></h3>

<?php require_once 'includes/footer.php'; ?>