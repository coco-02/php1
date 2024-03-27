<html>
<head>
    <title> Made up League</title>
    <link href="css/main.css" rel="stylesheet" />
</head>
    <header>
        <nav role="navigation">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ol>
        </nav>
        <h1><a href="index.php">Football League</a></h1>

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
