<html>

<head>
    <title> Made up League</title>
    <link href="css/main.css" rel="stylesheet" />
</head>
<header>
    <div class="topnav">
        <nav role="navigation">
            <a href="index.php"><img src="images/f1-league.webp" width="192" height="96" /></a>
            <a href="index.php">Home</a>
            <a href="f1.php">Formula 1</a>
            <a href="f2.php">Formula 2</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact Us</a>
        </nav>
        <?php
        $username = "Guest";
        if (isset($_GET["name"])) {
            $username = $_GET["name"];
        }
        $title = $_GET['title'] ?? 'bawbag';
        ?>
        <h2> Welcome <?php echo $username; ?>, <?php echo $title; ?></h2>
</header>
<main>