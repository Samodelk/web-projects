<?php
$featured = [
    [
        'id' => 1,
        'background_img' => 'static/images/northern-lights.svg',
        'button' => 'none',
        'button_text' => '',
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img' => 'static/images/mat-vogels.svg',
        'img_modifier' => 'Mat Vogels',
        'author' => 'Mat Vogels',
        'date' => 'September 25, 2015'
    ],
    [
        'id' => 2,
        'background_img' => 'static/images/sky-lantern.svg',
        'button' => 'button',
        'button_text' => 'Adventure',
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img' => 'static/images/william-wong.svg',
        'img_modifier' => 'William Wong',
        'author' => 'William Wong',
        'date' => 'September 25, 2015'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="static/styles/home-style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
        <title>Blog</title>
    </head>
    <body>
        <header class="header">
            <div class="header-container">
                <div class="header-navigation">
                    <div class="navigation__logo">
                        <img src="static/images/logo.svg" alt="Escape.">
                    </div>
                    <nav class="navigation-menu">
                        <li href="#" class="header-navigation-menu__item">Home</li>
                        <li href="#" class="header-navigation-menu__item">Categories</li>
                        <li href="#" class="header-navigation-menu__item">About</li>
                        <li href="#" class="header-navigation-menu__item">Contact</li>
                    </nav>
                </div>
            </div>
            <div class="container">
                <h1 class="container__header">Let's do it together.</h1>
                <h2 class="container__lower-header">We travel the world in search of stories. Come along for the ride.</h2> 
                <div class="container__button">
                    View Latest Posts
                </div>
            </div>
        </header>
        <main class="main">
            <div class="categories-container">
                <div class="categories-menu">
                    <li href="#" class="categories-menu__item">Nature</li>
                    <li href="#" class="categories-menu__item">Photography</li>
                    <li href="#" class="categories-menu__item">Relaxation</li>
                    <li href="#" class="categories-menu__item">Vacation</li>
                    <li href="#" class="categories-menu__item">Travel</li>
                    <li href="#" class="categories-menu__item">Adventure</li>
                </div>
            </div>
            <div class="main-content">
                <div class="featured">
                    <div class="posts-header">
                        <h3 class="posts-header__text">Featured Posts</h3>
                        <div class="posts-header__line"></div>
                    </div>
                    <?php 
                        foreach ($featured as $featured_post) {
                            include 'featured_post_preview.php';
                        }
                    ?>
                </div>
                <div class="recent">
                    <div class="posts-header">
                        <h3 class="posts-header__text">Most Resent</h3>
                        <div class="posts-header__line"></div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post__image">
                            <img src='static/images/air-balloons.svg' alt="Air balloons">
                        </div>
                        <div class="recent-post-header">
                            <h3 class="recent-post-header__header">Still Standing Tall</h3>
                            <h3 class="recent-post-header__lower-header">Life begins at the end of your comfort zone.</h3>
                        </div>
                        <div class="recent-post-author-and-date">
                            <div class="author">
                                <div class="author__photo">
                                    <img src="static/images/william-wong.svg" alt="William Wong">
                                </div>
                                <h3 class="recent-post-author__name">William Wong</h3>
                            </div>
                            <div class="recent-post-date">
                                9/25/2015
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post__image">
                            <img src='static/images/bridge.svg' alt="Bridge">
                        </div>
                        <div class="recent-post-header">
                            <h3 class="recent-post-header__header">Sunny Side Up</h3>
                            <h3 class="recent-post-header__lower-header">No place is ever as bad as they tell you it’s going to be.</h3>
                        </div>
                        <div class="recent-post-author-and-date">
                            <div class="author">
                                <div class="author__photo">
                                    <img src="static/images/mat-vogels.svg" alt="Mat Vogels">
                                </div>
                                <h3 class="recent-post-author__name">Mat Vogels</h3>
                            </div>
                            <div class="recent-post-date">
                                9/25/2015
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post__image">
                            <img src='static/images/scenery.svg' alt="Scenery">
                        </div>
                        <div class="recent-post-header">
                            <h3 class="recent-post-header__header">Water Falls</h3>
                            <h3 class="recent-post-header__lower-header">We travel not to escape life, but for life not to escape us.</h3>
                        </div>
                        <div class="recent-post-author-and-date">
                            <div class="author">
                                <div class="author__photo">
                                    <img src="static/images/mat-vogels.svg" alt="Mat Vogels">
                                </div>
                                <h3 class="recent-post-author__name">Mat Vogels</h3>
                            </div>
                            <div class="recent-post-date">
                                9/25/2015
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post__image">
                            <img src='static/images/blue-water.svg' alt="Blue water">
                        </div>
                        <div class="recent-post-header">
                            <h3 class="recent-post-header__header">Through the Mist</h3>
                            <h3 class="recent-post-header__lower-header">Travel makes you see what a tiny place you occupy in the world.</h3>
                        </div>
                        <div class="recent-post-author-and-date">
                            <div class="author">
                                <div class="author__photo">
                                    <img src="static/images/william-wong.svg" alt="William Wong">
                                </div>
                                <h3 class="recent-post-author__name">William Wong</h3>
                            </div>
                            <div class="recent-post-date">
                                9/25/2015
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post__image">
                            <img src='static/images/cableway-in-fog.svg' alt="Cableway in fog">
                        </div>
                        <div class="recent-post-header">
                            <h3 class="recent-post-header__header">Awaken Early</h3>
                            <h3 class="recent-post-header__lower-header">Not all those who wander are lost.</h3>
                        </div>
                        <div class="recent-post-author-and-date">
                            <div class="author">
                                <div class="author__photo">
                                    <img src="static/images/mat-vogels.svg" alt="Mat Vogels">
                                </div>
                                <h3 class="recent-post-author__name">Mat Vogels</h3>
                            </div>
                            <div class="recent-post-date">
                                9/25/2015
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post__image">
                            <img src='static/images/waterfall.svg' alt="Waterfall">
                        </div>
                        <div class="recent-post-header">
                            <h3 class="recent-post-header__header">Try it Always</h3>
                            <h3 class="recent-post-header__lower-header">The world is a book, and those who do not travel read only one page.</h3>
                        </div>
                        <div class="recent-post-author-and-date">
                            <div class="author">
                                <div class="author__photo">
                                    <img src="static/images/mat-vogels.svg" alt="Mat Vogels">
                                </div>
                                <h3 class="recent-post-author__name">Mat Vogels</h3>
                            </div>
                            <div class="recent-post-date">
                                9/25/2015
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer-navigation-container">
                <div class="footer-navigation">
                    <div class="navigation__logo">
                        <img src="static/images/logo.svg" alt="Escape.">
                    </div>
                    <nav class="navigation-menu">
                        <li href="#" class="footer-navigation-menu__item">Home</li>
                        <li href="#" class="footer-navigation-menu__item">Categories</li>
                        <li href="#" class="footer-navigation-menu__item">About</li>
                        <li href="#" class="footer-navigation-menu__item">Contact</li>
                    </nav>
                </div>
            </div>
        </footer>
    </body>
</html>