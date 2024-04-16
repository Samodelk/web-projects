<?php

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli {
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeDBConnection(mysqli $conn): void {
    $conn->close();
}

function getAndPrintPostsFromDB(mysqli $conn, $postId, &$post): void {
    $sql = "SELECT * FROM post WHERE id = $postId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        if($row = $result->fetch_assoc()) {
            $post = $row;
        }
    } else {
        $post = null;
        echo "Post with id {$postId} not found";
    }
}

$post = [];
$postId = $_GET['postId'];
$conn = createDBConnection();
getAndPrintPostsFromDB($conn, $postId, $post);
closeDBConnection($conn);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blog page</title>
        <link rel="stylesheet" href="static/styles/post-style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <nav class="navigation-menu">
                <div class="logo">
                    <img src="static/images/header-logo.svg" alt="Escape.">
                </div>
                <ul>
                    <li class="navigation-element">Home</li>
                    <li class="navigation-element">Categories</li>
                    <li class="navigation-element">About</li>
                    <li class="navigation-element">Contact</li>
                </ul>
            </nav>
        </header>
        <main class="main">
            <?php
            if ($post != null) {
                include 'post_preview.php';
            }
            ?>
        </main>
        <footer class="footer">
            <div class="footer-background">
                <div class="footer-padding">
                    <nav class="navigation-menu">
                        <div class="logo">
                            <img src="static/images/logo.svg" alt="Escape.">
                        </div>
                        <ul>
                        <li class="navigation-element">Home</li>
                        <li class="navigation-element">Categories</li>
                        <li class="navigation-element">About</li>
                        <li class="navigation-element">Contact</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
    </body>
</html>