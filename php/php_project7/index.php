<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Newsletter</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>About Us</h2>
            <p>Welcome to our website. We are here to provide you with information and services.</p>
        </section>
        <section>
            <h2>Latest News</h2>
            <ul>
                <?php
                // PHP code to fetch and display the latest news
                $news = array(
                );

                foreach ($news as $item) {
                    echo "<li>$item</li>";
                }
                ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Website</p>
    </footer>
</body>
</html>
