<?php
$base_url = "http://localhost/newsweekwebsite";
$id = isset($_GET['id']) ? $_GET['id'] : null;
include_once 'header.php';


?>

<div class="section-two">
    <div class="container-food">
        <?php
        include_once 'databaseconnectivity.php';
        $sql = "SELECT id, tittle, thumbimage, descrption, created_at, videolink FROM popular_news WHERE id='" . $id . "' ";

        $result = $conn->query($sql);
        $newsData = $result->fetch_assoc();


        $newsDataResult = $conn->query($sql);
        $newsData = $newsDataResult->fetch_assoc();

        ?>

        <div class="section-two">
            <div class="container-food">
                <?php if ($newsData): ?>
                    <?php
                    $backgroundImage = "uploads/" . htmlspecialchars($newsData['thumbimage']);
                    $created_at = date('F j, Y', strtotime($newsData['created_at']));
                    ?>
                    <div class="make-up" style="background-image: url('<?= $base_url . '/' . $backgroundImage ?>'); background-size: cover; padding: 20px;">
                        <div class="star-shine">
                            <h5><?= htmlspecialchars($newsData['tittle']) ?></h5>
                            <h1><?= htmlspecialchars($newsData['tittle']) ?></h1>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- By: Dan Bush section -->
            <div class="section-dan-bush">
                <div class="container-food">
                    <div class="by-sc">
                        <div class="by-name">
                            By: <span>Dan Bush</span>
                        </div>
                        <div class="name-border"></div>
                        <div class="by-date">

                            <?php if (!empty($newsData)): ?>
                                <p><small><?= htmlspecialchars($newsData['created_at']) ?></small></p>
                            <?php else: ?>
                                <p style="color:red;">No article data found.</p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <!-- Main News Content (Left) -->
                    <div class="col-lg-9">
                        <div class="news-section">
                            <?php

                            $newsData = null;
                            if ($newsDataResult = $conn->query($sql)) {
                                if ($newsDataResult->num_rows > 0) {
                                    $newsData = $newsDataResult->fetch_assoc();
                                }
                            } else {
                                echo "<p style='color:red;'>Query error: " . $conn->error . "</p>";
                            }
                            if ($newsData) {

                            ?>
                                <div class="your-ideas">
                                    <p><?= htmlspecialchars($newsData['descrption'] ?? 'No description available') ?></p>
                                </div>
                                <div class="your-ideas-title">
                                    <h3><i><?= htmlspecialchars($newsData['descrption'] ?? 'No description available') ?></i></h3>
                                </div>
                                <div class="your-ideas-two">
                                    <p><?= htmlspecialchars($newsData['descrption'] ?? 'No description available') ?></p>
                                </div>

                                <div class="ptwo">
                                    <?php
                                    function getYoutubeEmbedIframe($url, $width = 560, $height = 315)
                                    {
                                        $video_id = '';
                                        $parsed_url = parse_url($url);
                                        if (isset($parsed_url['host'])) {
                                            $host = $parsed_url['host'];
                                            $path = $parsed_url['path'] ?? '';
                                            if (strpos($host, 'youtube.com') !== false && strpos($path, '/watch') === 0) {
                                                parse_str($parsed_url['query'], $query_params);
                                                $video_id = $query_params['v'] ?? '';
                                            } elseif (strpos($host, 'youtu.be') !== false) {
                                                $video_id = ltrim($path, '/');
                                            } elseif (strpos($host, 'youtube.com') !== false && preg_match('#^/(live|shorts)/([^/?]+)#', $path, $matches)) {
                                                $video_id = $matches[2];
                                            }
                                        }
                                        return !empty($video_id) ? "https://www.youtube.com/embed/" . $video_id : '';
                                    }

                                    $embedLink = getYoutubeEmbedIframe($newsData['videolink'] ?? '');
                                    ?>

                                    <?php if (!empty($embedLink)): ?>
                                        <iframe width="100%" height="315" src="<?= htmlspecialchars($embedLink) ?>" frameborder="0" allowfullscreen></iframe>
                                    <?php else: ?>
                                        <video width="100%" height="315" controls>
                                            <source src="<?= htmlspecialchars($newsData['videolink'] ?? '') ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>
                                </div>

                                <!-- Other content sections -->
                                <div class="your-ideas-seaven">
                                    <p><?= htmlspecialchars($newsData['descrption'] ?? 'No description available') ?></p>
                                </div>
                                <div class="your-ideas-eight">
                                    <p><?= htmlspecialchars($newsData['descrption'] ?? 'No description available') ?></p>
                                </div>
                                <div class="your-ideas-title-gifting">
                                    <h3><i><?= htmlspecialchars($newsData['descrption'] ?? 'No description available') ?></i></h3>
                                </div>
                                <div class="your-ideas-nine">
                                    <p><?= htmlspecialchars($newsData['descrption'] ?? 'No description available') ?></p>
                                </div>

                                <div class="btn-wordpress">
                                    <button type="button" class="wrd-one">TAGS</button>
                                    <button type="button" class="wrd-two">news</button>
                                    <button type="button" class="wrd-three">newspaper</button>
                                    <button type="button" class="wrd-four">week</button>
                                    <button type="button" class="wrd-five">wordpress</button>
                                </div>

                                <div class="Previous">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="Previous-one">
                                                <div class="previous-data">
                                                    <a href="#">Previous article</a>
                                                    <h5><?= htmlspecialchars($newsData['descrption'] ?? 'No description available') ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="Previous-one">
                                                <div class="previous-data">
                                                    <a href="#">Next article</a>
                                                    <h5><?= htmlspecialchars($newsData['descrption'] ?? 'No description available') ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-border"></div>
                                </div>

                                <!-- Profile Section -->
                                <div class="profile-dan-bush">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="profile-pic">
                                                <?php
                                                $sql = "SELECT thumbimage FROM popular_news ORDER BY id DESC LIMIT 1";
                                                $result = $conn->query($sql);
                                                $imageUrl = $base_url . '/images/pro.jpg';
                                                if ($result && $row = $result->fetch_assoc()) {
                                                    $imagePath = $row['thumbimage'];
                                                    if (!empty($imagePath)) {
                                                        $imageUrl = $base_url . '/uploads/' . $imagePath;
                                                    }
                                                }
                                                ?>
                                                <img src="<?= $imageUrl ?>" alt="Profile Image" style="max-width:100%;">
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="dan-bash-name">
                                                <h4>Dan Bush</h4>
                                                <a href="#"><i>https://demo.tagdiv.com/newspaper_week_pro/</i></a>
                                                <p>
                                                    <?php
                                                    $sql = "SELECT descrption FROM popular_news ORDER BY id DESC LIMIT 1";
                                                    $result = $conn->query($sql);
                                                    if ($result && $row = $result->fetch_assoc()) {
                                                        // Access the 'descrption' column correctly
                                                        echo "<p>" . htmlspecialchars($row['descrption']) . "</p>";
                                                    } else {
                                                        echo "<p>No description found</p>";
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                            <div class="social-icon">
                                                <div class="fb"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></div>
                                                <div class="insta"><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
                                                <div class="twiter-x"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></div>
                                                <div class="utube"><a href="#"><i class="fa-brands fa-youtube"></i></a></div>
                                            </div>
                                            <div class="scl-border-b"></div>
                                        </div>
                                    </div>

                                    <div class="leave-reply">
                                        <label> LEAVE A REPLY</label>
                                        <textarea class="comment" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="name-email-three">
                                        <div class="row">
                                            <div class="col-lg-4"><input type="text" class="nam-three" placeholder="Name:*"></div>
                                            <div class="col-lg-4"><input type="text" class="nam-three" placeholder="Email:*"></div>
                                            <div class="col-lg-4"><input type="text" class="nam-three" placeholder="Website:*"></div>
                                        </div>
                                    </div>
                                    <div class="chkbx-up">
                                        <div class="checkbox-footer">
                                            <input type="checkbox">
                                            <span>Save my name, email, and website in this browser for the next time I comment.</span>
                                        </div>
                                        <button type="button" class="post-cmt">POST COMMENT</button>
                                    </div>
                                </div>
                            <?php
                            } else {
                                echo "<p style='color:red;'>Query failed: " . $conn->error . "</p>";
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Sidebar (Right) -->
                    <div class="col-lg-3">
                        <div class="share-post-data">
                            <div class="share-post">
                                <div class="data-share-post">
                                    <div class="share-title">SHARE POST:</div>
                                    <div class="share-icons">
                                        <div class="icone-share-one"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></div>
                                        <div class="icone-share-one"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></div>
                                        <div class="icone-share-one"><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></div>
                                        <div class="icone-share-one"><a href="#"><i class="fa-brands fa-whatsapp"></i></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="Subscribe-title">
                                <div class="title-sub">
                                    <h3>Subscribe</h3>
                                    <input type="email" class="email-sub" placeholder="Email address">
                                    <button type="button" class="i-want">I WANT IN <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                                <div class="check-box">
                                    <div class="checkbox-footer">
                                        <div class="box"><span class="checkbox "></span></div>
                                        <span>I've read and accept the </span><a href="">Privacy Policy</a><span>.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="magzine">
                                <img src="<?php echo $base_url; ?>/images/rec-sb.jpg">
                            </div>

                            <div class="Popular">
                                <h2>Popular</h2>
                            </div>
                            <div class="popular-border"></div>

                            <?php


                            $sql = "SELECT id, tittle, thumbimage, descrption, created_at FROM popular_news ORDER BY created_at DESC LIMIT 5";
                            $result = $conn->query($sql);

                            if ($result === false) {
                                echo "<p>Error: " . $conn->error . "</p>";
                            } else {
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $imageUrl = !empty($row['thumbimage']) ? $base_url . '/uploads/' . $row['thumbimage'] : $base_url . '/images/pro.jpg';
                                        $articleLink = $base_url . $row['id'];
                                        $title = htmlspecialchars($row['tittle']);
                            ?>
                                        <div class="popular-video">
                                            <div class="video-imgtext">
                                                <img src="<?= $imageUrl ?>" alt="Article Image" style="max-width:100%;">
                                            </div>
                                            <div class="video-textone">
                                                <a href="<?= $articleLink ?>"><?= $title ?></a>
                                            </div>
                                        </div>
                            <?php
                                    }
                                } else {
                                    echo "<p>No popular articles available.</p>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- before footer section -->
            <div class="perspective-fashion">
                <div class="container-food">
                    <div class="perspective-pics">
                        <div class="row">
                            <?php
                          

                            $sql = "SELECT id, tittle, thumbimage,created_at FROM popular_news ORDER BY created_at DESC LIMIT 4";
                            $result = $conn->query($sql);


                            if ($result === false) {
                                echo "Error in SQL query: " . $conn->error;
                            } else {
                                if ($result->num_rows > 0) {

                                    while ($row = $result->fetch_assoc()) {
                                        // Set up variables for the dynamic content
                                        $imageUrl = !empty($row['thumbimage']) ? $base_url . '/uploads/' . $row['thumbimage'] : $base_url . '/images/pro.jpg';


                                        $createdDate = date("F j, Y", strtotime($row['created_at']));
                                        $title = htmlspecialchars($row['tittle']);
                            ?>
                                        <div class="col-lg-3">
                                            <div class="perspective-one">
                                                <div class="perspective-data-img">
                                                    <img src="<?= $imageUrl ?>" alt="Article Image">
                                                </div>
                                                <div class="perspactive-txt-data">
                                                    <div class="prs-txt">
                                                        <a href="<?= $articleLink ?>"><?= $title ?></a>
                                                    </div>
                                                    <div class="perspective-name">
                                                        <div class="perspective-img-cr">
                                                            <img src="<?= $base_url ?>/images/pro.jpg" alt="Author Image">
                                                        </div>
                                                        <div class="perspective-date-name">
                                                            <a href="#"><span></span> - <?= $createdDate ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <?php
                                    }
                                } else {
                                    echo "<p>No articles available.</p>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include_once 'footer.php';
            ?>