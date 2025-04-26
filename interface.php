<?php require_once 'includes/header.php'; ?>
<?php

if (isset($_POST["user"])) {
  $username = $_POST["user"];
  setcookie('user', $username, time() + (86400 * 7), "/");
}

$cookie_value = "Guest";
if (isset($_COOKIE['user'])) {
  $cookie_value = $_COOKIE['user'];
}

?>

<h1> Welcome <?php echo $cookie_value; ?></h1>

<?php require_once 'includes/footer.php'; ?>
