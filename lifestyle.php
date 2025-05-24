<section class="lifestyle-section">
    <div class="inside-lifestyle-bg">
        <div class="container-food">
            <div class="lifestyle-whole-sec">
                <div class="top-lifestyle-content">
                    <span>Celebrity</span>
                    <h1>lifestyle</h1>
                </div>

                <div class="mid-lifestyle-content">
                    <div class="two-lifestyle-sec">
                        <?php
                        require_once './databaseconnectivity.php';
                        $sql = "SELECT * FROM life_style_news_users ORDER BY id DESC LIMIT 2";
                        $result = mysqli_query($conn, $sql);

                        $lifestyle_items = [];
                        while ($row = mysqli_fetch_assoc($result)) {
                            $lifestyle_items[] = $row;
                        }

                        for ($i = 0; $i < count($lifestyle_items); $i++):
                        ?>
                            <div class="inside-two-lifestyle">
                                <div class="lifestyle-img">
                                    <a href="newslifestyle.php?id=<?= $lifestyle_items[$i]['id'] ?>">
                                        <img src="./Uploads/<?= htmlspecialchars($lifestyle_items[$i]['thumbmailimage']) ?>" alt="<?= htmlspecialchars($lifestyle_items[$i]['tittle']) ?>">
                                    </a>
                                </div>
                                <div class="two-lifestyle-content">
                                    <div class="inside-lifestyle-right-content">
                                        <a href="newslifestyle.php?id=<?= $lifestyle_items[$i]['id'] ?>">
                                            <span><?= strtoupper($lifestyle_items[$i]['tittle']) ?></span>
                                        </a>
                                    </div>
                                    <div class="next-lifestyle-right-content">
                                        <div class="lifestyle-editor-info" style="display: flex; align-items: center; gap: 10px; white-space: nowrap;">
                                            <a href="newslifestyle.php?id=<?= $lifestyle_items[$i]['id'] ?>">
                                                <img style="width: 30px; height: 30px; object-fit: cover;" src="./Uploads/<?= htmlspecialchars($lifestyle_items[$i]['thumbmailimage']) ?>" alt="<?= htmlspecialchars($lifestyle_items[$i]['tittle']) ?>">
                                            </a>
                                            <span class="dan-info"><?= htmlspecialchars($lifestyle_items[$i]['category']) ?></span>
                                            <span>- <?= date("F j, Y", strtotime($lifestyle_items[$i]['created_at'])) ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="last-lifestyle-content">
                    <div class="top-food-four">
                        <?php

                        require_once './databaseconnectivity.php';
                        $sql = "SELECT * FROM lattest_life_style_news_users ORDER BY id DESC LIMIT 4";
                        $result = mysqli_query($conn, $sql);

                        $lifestyle_items = [];
                        while ($row = mysqli_fetch_assoc($result)) {
                            $lifestyle_items[] = $row;
                        }
                        for ($i = 0; $i < count($lifestyle_items); $i++):
                        ?>
                            <div class="food-box">
                                <div class="food-box-img">
                                    <a href="newslifestyle.php?id=<?= $lifestyle_items[$i]['id'] ?>">
                                        <img src="./uploads/<?= htmlspecialchars($lifestyle_items[$i]['thumbmialimage']) ?>" alt="<?= htmlspecialchars($lifestyle_items[$i]['tittle']) ?>">
                                    </a>
                                </div>
                                <div class="food-box-content">
                                    <h1>
                                        <a href="newslifestyle.php?id=<?= $lifestyle_items[$i]['id'] ?>">
                                            <?= htmlspecialchars($lifestyle_items[$i]['tittle']) ?>
                                        </a>
                                    </h1>
                                </div>
                                <div class="editor-info">
                                    <a href="newslifestyle.php?id=<?= $lifestyle_items[$i]['id'] ?>">
                                        <img src="./uploads/<?= htmlspecialchars($lifestyle_items[$i]['thumbmialimage']) ?>" alt="<?= htmlspecialchars($lifestyle_items[$i]['tittle']) ?>">
                                    </a>
                                    <span class="dan-info"><?= htmlspecialchars($lifestyle_items[$i]['category']) ?> </span>
                                    <span>- <?= date("F j, Y", strtotime($lifestyle_items[$i]['created_at'])) ?></span>
                                </div>
                            </div>
                        <?php endfor; ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>

</html>