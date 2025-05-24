<?php
$base_url = "http://localhost/newsweekwebsite";
include 'session.php';
include 'databaseconnectivity.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/index.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
    <div class="header-section">
        <div class="inside-header-sec">
            <header class="header-class">
                <div class="container-food">
                    <div class="inside-header-class">
                        <div class="top-header-sec">
                            <div class="inside-one-center">
                                <div class="menu two-icon">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">MENU
                                        <span><i class="fa-solid fa-bars"></i></span>
                                    </a>
                                </div>
                                <div class="search two-icon" id="search-toggle">
                                    <p>Search</p>
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                    <div class="search-open-box hidden">
                                        <div class="input-search">
                                            <input type="text">
                                            <a href="">
                                                Search
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inside-second-center">
                                <a href="#">
                                    <h1> NewsWeek </h1>
                                    <span class="top-news"><i>PRO</i></span>
                                </a>
                            </div>
                            <div class="inside-third-center">
                                <div class="account-sec">
                                    <div class="account">
                                        <i class="fa-solid fa-user"></i>
                                        <span>My account</span>
                                        <div class="account-hover">
                                            <p>Get into your account.</p>

                                            <div class="button-login">
                                                <a href="">Login</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="">SUBSCRIBE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-header-sec">
                    <div class="container-food">
                        <div class="outer-newsweek-items">
                            <?php
                            $categoriesQuery = mysqli_query($conn, "SELECT  id,category_name FROM categories");
                            if (!$categoriesQuery) {
                                die("Category query failed: " . mysqli_error($conn));
                            }
                            ?>
                            <ul class="newsweek-items">

                                <?php while ($catRow = mysqli_fetch_assoc($categoriesQuery)): ?>
                                    <li>
                                        <a href="viewsmusicdeatils.php?id=<?= urlencode($catRow['category_name']) ?>">
                                            <?= htmlspecialchars($catRow['category_name']) ?>
                                        </a>
                                        <div class="sub-items">
                                            <ul class="inside-sub">
                                                <?php
                                                $categoryId = $catRow['id'];
                                                $newsQuery = mysqli_query($conn, "
                                    SELECT id, tittle, description, thumbmailimage, image, created_at 
                                    FROM menu_bar_news__users 
                                    WHERE category = '$categoryId' 
                                    ORDER BY id DESC 
                                    LIMIT 5
                                ");
                                                while ($newsRow = mysqli_fetch_assoc($newsQuery)):
                                                ?>
                                                    <li>
                                                        <div class="inside-sub-box">
                                                            <div class="img-sub">
                                                                <a href="viewsmusicdeatils.php?id=<?= $newsRow['id'] ?>">
                                                                    <img src="uploads/<?= htmlspecialchars($newsRow['thumbmailimage']) ?>" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="sub-content">
                                                                <a href="newsweek.php?id=<?= htmlspecialchars($newsRow['id']) ?>">
                                                                    <?= htmlspecialchars($newsRow['tittle']) ?>
                                                                </a>

                                                                <p><?= date("F j, Y", strtotime($newsRow['created_at'])) ?></p>


                                                                <div class="recent-bottom-icon fresh-bootom-icon sub-items-icons">
                                                                    <a href="#" class="a-color">
                                                                        <i class="fa-solid fa-arrow-left"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="fa-solid fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>

</body>

<script src="/newsweekwebsite/js/header.js"></script>

</html>