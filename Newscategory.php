 <?php
  require_once './databaseconnectivity.php';
 ?>
 
 <section class="social-media-sec">
     <div class="container-food">
         <div class="top-media">
             <div class="media-inside-one-center">
                 <div class="menu-two-icon">
                     <h1>Join our social media</h1>
                 </div>
             </div>
             <div class="media-inside-second-center">
                 <h1>For even more exclusive content!</h1>
             </div>
             <div class="media-inside-third-center">
                 <div class="account-sec-icons">
                     <i class="fa-brands fa-facebook-f"></i>
                     <i class="fa-brands fa-instagram"></i>
                     <i class="fa-brands fa-x-twitter"></i>
                 </div>
             </div>
         </div>

         <div class="whole-social-media">

             <div class="mid-media">
                 <?php
                    $sql = "SELECT breaking_news_users.id, breaking_news_users.tittle, breaking_news_users.thumbmailimage, categories.category_name FROM breaking_news_users JOIN categories ON categories.id = breaking_news_users.category ORDER BY id DESC LIMIT 4";
                    $result = $conn->query($sql);

                    if ($result && $result->num_rows > 0):
                        while ($row = $result->fetch_assoc()):
                    ?>
                         <div class="mid-media-box">
                             <div class="mid-media-img">
                                 <div class="inside-mid-img">
                                     <a href="bestnews.php?id=<?= $row['id'] ?>">
                                         <img src="./uploads/<?= htmlspecialchars($row['thumbmailimage']) ?>" alt="<?= htmlspecialchars($row['tittle']) ?>">
                                     </a>
                                 </div>
                                 <div class="breaking-content">
                                     <a href="#">Breaking</a>
                                 </div>
                                 <div class="mid-media-content">
                                     <a href="#"><?= strtoupper(htmlspecialchars($row['category_name'])) ?></a>
                                     <div class="cele-content">
                                         <a href="bestnews.php?id=<?= $row['id'] ?>">
                                             <?= htmlspecialchars($row['tittle']) ?>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     <?php endwhile;
                    else: ?>
                     <p>No news found.</p>
                 <?php endif; ?>
                 <div class="clear"></div>
             </div>

             <div class="social-bottom-sec">
                 <div class="social-bottom-food-four">
                     <?php
                        $sql_bottom = "SELECT lattest_breaking_news_users.id, lattest_breaking_news_users.tittle, categories.category_name, lattest_breaking_news_users.thumbmailimage
                       FROM lattest_breaking_news_users
                       JOIN categories ON categories.id = lattest_breaking_news_users.category
                       ORDER BY lattest_breaking_news_users.id DESC
                       LIMIT 8";
                        $bottom_result = $conn->query($sql_bottom);



                        if ($bottom_result && $bottom_result->num_rows > 0):
                            while ($row = $bottom_result->fetch_assoc()):
                        ?>
                             <div class="social-bottom-food-box">
                                 <div class="social-bottom-content">
                                     <h1>
                                         <a href="bestnews.php?id=<?= urlencode($row['id']) ?>" style="text-decoration: none; color: black;">
                                             <?= htmlspecialchars($row['tittle']) ?>
                                         </a>
                                     </h1>

                                     <a href=""><?= strtoupper(htmlspecialchars($row['category_name'])) ?></a>
                                 </div>
                                 <div class="social-bottom-food-img">
                                     <a href="bestnews.php?id=<?= $row['id'] ?>">
                                         <img src="./uploads/<?= htmlspecialchars($row['thumbmailimage']) ?>" alt="<?= htmlspecialchars($row['tittle']) ?>">
                                     </a>
                                 </div>
                             </div>
                         <?php endwhile;
                        else: ?>
                         <p>No additional news found.</p>
                     <?php endif; ?>
                     <div class="clear"></div>
                 </div>
             </div>
         </div>
     </div>
 </section>
