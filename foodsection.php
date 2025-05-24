<section class="food-travel-sec">
    <div class="container-food">
        <div class="food-four-sec">
            <div class="header-food-heading">
                <h1>Food & Travel</h1>
                <div class="arrow-food">
                    <a href="#">VIEW ALL
                        <span>
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                    </a>
                </div>
                <div class="hr-line"></div>
            </div>

            <div class="top-food-four">
                <?php
                require_once './databaseconnectivity.php';
                $sql = "
                    SELECT 
                        add_food_news_users.id,
                        add_food_news_users.tittle,
                        add_food_news_users.category,
                        categories.category_name,
                        add_food_news_users.thumbmailimage
                    FROM 
                        add_food_news_users
                    JOIN 
                        categories 
                    ON 
                        add_food_news_users.category = categories.id
                    ORDER BY 
                        add_food_news_users.id DESC
                    LIMIT 4
                ";

                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):
                ?>
                        <div class="food-box">
                            <div class="food-box-img">
                                <a href="newsfood.php?id=<?= $row['id'] ?>">
                                    <img src="./uploads/<?= htmlspecialchars($row['thumbmailimage']) ?>" alt="<?= htmlspecialchars($row['tittle']) ?>">
                                </a>
                            </div>
                            <div class="editor-info">
                                <a href="newsfood.php?id=<?= $row['id'] ?>">
                                    <?= htmlspecialchars($row['tittle']) ?>
                                </a>
                                <div class="category">
                                    <a href="newsfood.php?id="><?= strtoupper(htmlspecialchars($row['category_name'])) ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else: ?>
                    <p>No news found.</p>
                <?php endif; ?>
                <div class="clear"></div>
            </div>

            <div class="bottom-food-four">
                <?php
                $sql_bottom = "
                   SELECT 
                       lattest_food_news_users.id,
                       lattest_food_news_users.tittle,
                       lattest_food_news_users.category,
                       categories.category_name,
                       lattest_food_news_users.thumbmailimage
                   FROM 
                       lattest_food_news_users 
                   JOIN 
                       categories 
                   ON  
                       lattest_food_news_users.category = categories.id  
                   ORDER BY 
                       lattest_food_news_users.id DESC 
                   LIMIT 8
               ";

                $bottom_result = $conn->query($sql_bottom);

                if ($bottom_result && $bottom_result->num_rows > 0):
                    while ($row = $bottom_result->fetch_assoc()):
                ?>
                        <div class="bottom-food-box">
                            <div class="bottom-food-img">
                                <a href="newsfood.php?id=<?= $row['id'] ?>">
                                    <img src="./uploads/<?= htmlspecialchars($row['thumbmailimage']) ?>" alt="<?= htmlspecialchars($row['tittle']) ?>">
                                </a>
                            </div>
                            <div class="bottom-content">
                                <h1>
                                    <a href="newsfood.php?id=<?= $row['id'] ?>">
                                        <?= htmlspecialchars($row['tittle']) ?>
                                    </a>
                                </h1>
                                <a href="newsfood.php?id=<?= $row['id'] ?>">
                                    <?= strtoupper(htmlspecialchars($row['category_name'])) ?>
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
</section>