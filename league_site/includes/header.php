<html>

<head>
  <title> Made up League</title>
  <link href="css/main.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>

</head>
<header>
  <div class="topnav">
    <nav role="navigation">
      <a href="index.php"><img src="images/logo/f1-league.webp" width="192" height="96" /></a>
      <a href="index.php">Home</a>
      <a href="f1.php">Formula 1</a>
      <a href="f2.php">Formula 2</a>
      <a href="login.php">Log in / Sign up</a>
      <a href="interface.php">Profile</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact Us</a>
    </nav>
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
    <h2> Welcome <?php echo $cookie_value; ?></h2>
</header>
<main>
