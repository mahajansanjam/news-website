<?php
require_once 'databaseconnectivity.php';
?>
<section class="fresh-stories-sec">
    <div class="inside-fresh-stories">
        <div class="container-food">
            <div class="fresh-cont">
                <div class="top-fresh-cont">
                    <div class="inside-top-fresh">
                        <?php
                        $topNews = mysqli_query($conn, "SELECT * FROM slider_bar_news ORDER BY id DESC LIMIT 4");
                        if ($topNews && mysqli_num_rows($topNews) > 0):
                        ?>
                            <div class="owl-carousel owl-theme">
                                <?php
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($topNews)):
                                ?>
                                    <div class="item">
                                        <div class="<?= ($i === 0 || $i === 3) ? 'inside-box-fresh' : 'inside-fresh-content' ?>">
                                            <?php if ($i === 0): ?>
                                            <?php endif; ?>
                                            <div class="inside-fresh-content">
                                               <a href="newsweek.php?id=<?= urlencode($row['id']) ?>"><?= htmlspecialchars($row['tittle']) ?></a>

                                                <p><?= date("F j, Y", strtotime($row['created_at'])) ?></p>
                                            </div>

                                            <?php if ($i === 3): ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php
                                    $i++;
                                endwhile;
                                ?>
                            </div>
                        <?php
                        else:
                            echo "<p>No news available.</p>";
                        endif;
                        ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div class="inside-bottom-fresh-stories">
                <div class="container-food">
                    <div class="bottom-fresh-cont">
                        <div class="inside-fresh-cont">
                            <div class="inside-bottom-fresh-box">
                                <div class="fresh-bootom-header">
                                    <h1>Fresh stories</h1>
                                    <p>Today: Browse our editor's</p>
                                    <p>hand picked articles!</p>
                                </div>

                                <div class="fresh-bootom-header-content">
                                    <?php
                                    $handPicked = mysqli_query($conn, "
                                       SELECT 
                                           add_news_users.id,
                                           add_news_users.title,
                                           add_news_users.descrption,
                                           add_news_users.thumbImage,
                                           categories.category_name,
                                           add_news_users.created_at
                                       FROM add_news_users
                                       JOIN categories ON categories.id = add_news_users.category
                                       ORDER BY add_news_users.created_at DESC
                                       LIMIT 3
                                   ");

                                    if ($handPicked && mysqli_num_rows($handPicked) > 0):
                                        while ($row = mysqli_fetch_assoc($handPicked)):
                                    ?>
                                            <div class="inside-marketing-content inside-fresh-marketing-content">
                                                
                                                    <a href="newsweek.php?id=<?= $row['id'] ?>">
                                                        <img src="uploads/<?= htmlspecialchars($row['thumbImage']) ?>" alt="" style="width:242px; height:auto;">
                                                    </a>
                                                    <a href="newsweek.php?id=<?= $row['id'] ?>">
                                                        <?= htmlspecialchars($row['title']) ?>
                                                    </a>
                                                    <a href="newsweek.php?id=<?= $row['id'] ?>">
                                                        <?= htmlspecialchars($row['title']) ?>
                                                    </a>
                                                    <p><span><?= htmlspecialchars($row['category_name']) ?></span> <?= date("F j, Y", strtotime($row['created_at'])) ?></p>
                                               
                                            </div>
                                    <?php
                                        endwhile;
                                    else:
                                        echo "<p>No records found.</p>";
                                    endif;
                                    ?>
                                </div>

                                <div class="recent-bottom-icon fresh-bootom-icon">
                                    <a href="#"><i class="fa-solid fa-arrow-left"></i></a>
                                    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="inside-fresh-box">
                                <div class="fresh-exclusive">
                                    <?php
                                    $exclusive = mysqli_query($conn, "SELECT * FROM lattest_news_users  ORDER BY id DESC LIMIT 1");
                                    if ($exclusive && mysqli_num_rows($exclusive) > 0):
                                        $row = mysqli_fetch_assoc($exclusive);
                                    ?>
                                        <div class="img-exclusive">
                                            <a href="newsweek.php?id=<?= $row['id'] ?>">
                                                <img src="uploads/<?= htmlspecialchars($row['thumbmailimage']) ?>" alt="">
                                            </a>

                                        </div>
                                        <div class="img-exclusive-content fresh-stories-marketing">
                                            <h1>
                                                <a href="newsweek.php?id=<?= urlencode($row['id']) ?>">
                                                    <?= htmlspecialchars($row['tittle']) ?>
                                                </a>
                                            </h1>
                                            <p>
                                                <a href="newsweek.php?id=<?= $row['id'] ?>" style="text-decoration: none; color: inherit;">
                                                    <?= htmlspecialchars(substr($row['descrption'], 0, 180)) ?>...
                                                </a>
                                            </p>
                                        </div>
                                    <?php else: ?>
                                        <p>No exclusive news found.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="inside-bottom-fresh-box">
                                <?php
                                $twoColumn = mysqli_query($conn, "
                                  SELECT 
                                      lattest_news_users.id,
                                      lattest_news_users.tittle,
                                      lattest_news_users.thumbmailimage,
                                      categories.category_name
                                  FROM lattest_news_users
                                  JOIN categories ON categories.id = lattest_news_users.category
                                  ORDER BY lattest_news_users.id DESC
                                  LIMIT 1, 2
                              ");
                                if ($twoColumn && mysqli_num_rows($twoColumn) > 0):
                                    while ($row = mysqli_fetch_assoc($twoColumn)):
                                ?>
                                        <div class="two-img-fresh-stories">
                                            <div class="two-img-fresh-stories-first">
                                                <div class="fresh-stories-first-img">
                                                    <a href="newsweek.php?id=<?= (int)$row['id'] ?>">
                                                        <img src="uploads/<?= htmlspecialchars($row['thumbmailimage']) ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="fresh-stories-first-content">
                                                    <?php if (!empty($row['id'])): ?>
                                                        <a href="newsweek.php?id=<?= (int)$row['id'] ?>" class="finance-fresh">
                                                            <?= htmlspecialchars($row['category_name']) ?>
                                                        </a>
                                                        <h1>
                                                            <a href="newsweek.php?id=<?= (int)$row['id'] ?>">
                                                                <?= htmlspecialchars($row['tittle']) ?>
                                                            </a>
                                                        </h1>
                                                    <?php else: ?>
                                                        <p>News ID not found.</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;
                                else:
                                    echo "<p>No stories found.</p>";
                                endif;
                                ?>
                            </div>
                            <div class="inside-bottom-fresh-box">
                                <div class="popular-box">
                                    <div class="header-popular">
                                        <h1>Popular</h1>
                                    </div>
                                    <div class="bottom-popular">
                                        <?php

                                        $popular = mysqli_query($conn, "
                                           SELECT 
                                          popular_news.id,
                                           popular_news.tittle,
                                            popular_news.created_at,
                                             popular_news.thumbimage,
                                             popular_news.descrption,
                                             categories.category_name
                                             FROM popular_news
                                             JOIN categories
                                              ON categories.id = popular_news.categories
                                               ORDER BY popular_news.id DESC
                                                LIMIT 5
                                             ");
                                        if (!$popular) {
                                            echo "<p class='error-message'>Error in query: " . mysqli_error($conn) . "</p>";
                                        } elseif (mysqli_num_rows($popular) > 0) {

                                            while ($row = mysqli_fetch_assoc($popular)):
                                        ?>
                                                <div class="inside-marketing-content popular-fresh-marketing-content">
                                                    <a href="newsweek.php?id=<?= $row['id'] ?>">
                                                        <?= htmlspecialchars($row['tittle']) ?>
                                                    </a>
                                                    <p>
                                                        <span><?= htmlspecialchars($row['category_name']) ?></span>
                                                        <?= date("F j, Y", strtotime($row['created_at'])) ?>
                                                    </p>
                                                    <p><?= htmlspecialchars($row['descrption']) ?></p>
                                                    <?php if (!empty($row['thumbimage'])): ?>
                                                        <!-- <img src="uploads/<?= htmlspecialchars($row['thumbimage']) ?>" alt="<?= htmlspecialchars($row['tittle']) ?>" class="thumb-image"> -->
                                                    <?php endif; ?>
                                                </div>
                                        <?php
                                            endwhile;
                                        } else {
                                            echo "<p>No popular news found.</p>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots:false,
  navText: [
    '<i class="fa-solid fa-arrow-left"></i>',
    '<i class="fa-solid fa-arrow-right"></i>'
  ],
  responsive: {
    0: { items: 1 },
    600: { items: 2 },
    1000: { items: 3 }
  }
});

</script>