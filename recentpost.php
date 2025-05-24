<?php
require_once 'databaseconnectivity.php';
?>

<section class="recent-post-sec">
    <div class="inside-recent-post">
        <div class="container-food">
            <div class="lifestyle-whole-sec recent-whole-post">
                <div class="top-lifestyle-content top-recent-content">
                    <span>Recent posts</span>
                    <h1>Latest</h1>
                </div>
                <!-- LEFT: Top 3 + 9 Recent News -->
                <div class="mid-left-recent">
                    <div class="theiaStickySidebar">
                        <div class="inside-mid-left-recent">
                            <!-- Top 3 -->
                            <div class="recent-mid-top">
                                <?php
                                require_once './databaseconnectivity.php';
                                $topQuery = "SELECT id, tittle, thumbmialimage, created_at FROM recent_post_news_users ORDER BY id DESC LIMIT 1";
                                $topResult = $conn->query($topQuery);

                                if ($topResult && $topResult->num_rows > 0):
                                    while ($row = $topResult->fetch_assoc()):
                                ?>
                                        <div class="recent-img-sec">
                                            <div class="img-recent">
                                                <a href="newsrecentpage.php?id=<?= $row['id'] ?>">
                                                    <img src="./uploads/<?= htmlspecialchars($row['thumbmialimage']) ?>" alt="<?= htmlspecialchars($row['tittle']) ?>">
                                            </div>
                                        </div>
                                        <div class="recent-img-content">
                                            <a href="newsrecentpage.php?id=<?= $row['id'] ?>" class="stroll-anchor"><?= htmlspecialchars($row['tittle']) ?></a>
                                            <div class="editor-info recent-post-editor-info">
                                                <span class="dan-info"><?= htmlspecialchars($row['tittle']) ?></span>
                                                <span>- <?= date("F j, Y", strtotime($row['created_at'])) ?></span>
                                            </div>
                                        </div>
                                <?php endwhile;
                                endif; ?>
                            </div>

                            <!-- Grid 9 Recent -->
                            <div class="recent-bottom-top">
                                <div class="top-food-four">
                                    <?php
                                    $recentQuery = "SELECT id, tittle, thumbmialimage, created_at FROM lattest_recent_post_news_users ORDER BY id DESC LIMIT 9 ";
                                    $recentResult = $conn->query($recentQuery);

                                    if ($recentResult && $recentResult->num_rows > 0):
                                        while ($row = $recentResult->fetch_assoc()):
                                    ?>
                                            <div class="politics-food-box recent-food-box">
                                                <div class="food-box-img food-box-img-recent">
                                                    <a href="newsrecentpage.php?id=<?= $row['id'] ?>">
                                                        <img src="./uploads/<?= htmlspecialchars($row['thumbmialimage']) ?>" alt="<?= htmlspecialchars($row['tittle']) ?>">
                                                    </a>
                                                </div>
                                                <div class="food-box-content">
                                                    <a href="newsrecentpage.php?id=<?= $row['id'] ?>">
                                                        <h1><?= htmlspecialchars($row['tittle']) ?></h1>
                                                    </a>
                                                </div>
                                                <div class="editor-info recent-editor-info">
                                                    <a href="newsrecentpage.php?id=<?= $row['id'] ?>">
                                                        <img src="./uploads/<?= htmlspecialchars($row['thumbmialimage']) ?>" alt="<?= htmlspecialchars($row['tittle']) ?>">
                                                    </a>
                                                    <a class="dan-info" href="newsrecentpage.php?id=<?= urlencode($row['id']) ?>">
                                                        <?= htmlspecialchars($row['tittle']) ?>
                                                    </a>

                                                    <span>- <?= date("F j, Y", strtotime($row['created_at'])) ?></span>
                                                </div>
                                            </div>
                                    <?php endwhile;
                                    endif; ?>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mid-right-recent">
                    <div class="theiaStickySidebar">
                        <?php
                        $sidebarMain = "SELECT id, tittle, thumbmailimage,description created_at FROM last_recent_page_news_users ORDER BY id DESC LIMIT 1";
                        $sidebarMainResult = $conn->query($sidebarMain);
                        if ($sidebarMainResult && $sidebarMainResult->num_rows > 0):
                            $sidebarMainData = $sidebarMainResult->fetch_assoc();
                        ?>
                            <div class="right-marketing">
                                <div class="img-marketing">
                                    <a href="newsrecentpage.php?id=<?= $sidebarMainData['id'] ?>">
                                    </a>
                                </div>
                                <div class="img-marketing">
                                    <a href="newsrecentpage.php?id=<?= $sidebarMainData['id'] ?>">
                                        <img src="./uploads/<?= htmlspecialchars($sidebarMainData['thumbmailimage']) ?>" alt="<?= htmlspecialchars($sidebarMainData['tittle']) ?>">
                                        <span>- <?= date("F j, Y", strtotime($sidebarMainData['created_at'])) ?></span>
                                    </a>
                                </div>
                                <div class="top-content-marketing">
                                </div>
                                <div class="img-marketing-content">
                                    <a href="newsrecentpage.php?id=<?= $sidebarMainData['id'] ?>">
                                    </a>
                                    <div class="dan-content">
                                        <a href="newsrecentpage.php?id=<?= $sidebarMainData['id'] ?>"><?= htmlspecialchars($sidebarMainData['tittle']) ?></a>

                                        <span>- <?= date("F j, Y", strtotime($sidebarMainData['created_at'])) ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="right-marketing-bottom-mid-recent">
                            <?php
                            $sidebarList = "SELECT 
                              add_lattest_last_news_users.id,
                              add_lattest_last_news_users.tittle,
                              add_lattest_last_news_users.description,
                              categories.category_name,
                              add_lattest_last_news_users.created_at 
                          FROM add_lattest_last_news_users 
                          JOIN categories ON categories.id = add_lattest_last_news_users.category 
                          ORDER BY add_lattest_last_news_users.id DESC 
                          LIMIT 5";

                            $sidebarListResult = $conn->query($sidebarList);
                            if ($sidebarListResult && $sidebarListResult->num_rows > 0):
                                while ($row = $sidebarListResult->fetch_assoc()):
                            ?>
                                    <div class="inside-marketing-content">
                                        <a href="newsrecentpage.php?id=<?= $row['id'] ?>"><?= htmlspecialchars($row['category_name']) ?></a>
                                        <a href="newsrecentpage.php?id=<?= $row['id'] ?>"><?= htmlspecialchars($row['tittle']) ?></a>
                                        <a href="newsrecentpage.php?id=<?= $row['id'] ?>"><?= htmlspecialchars($row['description']) ?></a>
                                        <p>
                                            <a href="newsrecentpage.php?id=<?= urlencode($row['id']) ?>">
                                                <?= htmlspecialchars($row['tittle']) ?>
                                            </a> -
                                            <?= date("F j, Y", strtotime($row['created_at'])) ?>
                                        </p>

                                    </div>
                            <?php endwhile;
                            endif; ?>
                        </div>
                        <div class="recent-bottom-icon">
                            <a href="#"><i class="fa-solid fa-arrow-left"></i></a>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</section>