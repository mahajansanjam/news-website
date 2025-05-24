 <section class="exclusive-content-section">
     <div class="container-food">
         <div class="top-whole-exclusive">
             <div class="whole-exclusive">
                 <div class="left-exclusive">
                     <?php
                        $sql = "SELECT id, tittle, category,descrption,thumbmailimage FROM exclusive_content_users  ORDER BY id DESC LIMIT 1";
                        $result = $conn->query($sql);

                        $exclusive_items = [];
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $exclusive_items[] = $row;
                            }
                        }
                        ?>
                     <?php if (!empty($exclusive_items[0])):
                            $main = $exclusive_items[0]; ?>
                         <div class="img-exclusive">
                             <a href="newsexclusive.php?id=<?= $main['id'] ?>">
                                 <img src="./uploads/<?= htmlspecialchars($main['thumbmailimage']) ?>" alt="<?= htmlspecialchars($main['tittle']) ?>">
                             </a>
                         </div>
                         <div class="top-content-exclusive">
                             <p>Exclusive content</p>
                         </div>
                         <div class="img-exclusive-content">

                             <h1><span>EXCLUSIVE</span>
                                 <a href="newsexclusive.php?id=<?= $main['id'] ?>"><?= htmlspecialchars($main['tittle']) ?></a>
                             </h1>
                             <p>
                                 <?= "newsexclusive.php?id=" . !empty($main['descrption']) ? nl2br(htmlspecialchars($main['descrption'])) : 'No description found.' ?>
                             </p>

                         </div>
                     <?php endif; ?>
                 </div>

                 <div class="right-exclusive">
                     <?php
                        require_once 'databaseconnectivity.php';

                        $sql = "SELECT 
            lattest_exclusive_content_users.id, 
            lattest_exclusive_content_users.tittle, 
            lattest_exclusive_content_users.category,
            categories.category_name,
            lattest_exclusive_content_users.descrption,
            lattest_exclusive_content_users.thumbmailimage
        FROM 
            lattest_exclusive_content_users 
        JOIN 
            categories 
        ON 
            categories.id = lattest_exclusive_content_users.category  
        ORDER BY 
            lattest_exclusive_content_users.id DESC 
        LIMIT 5";


                        $result = $conn->query($sql);

                        $exclusive_items = [];
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $exclusive_items[] = $row;
                            }
                        } else {
                            echo "<p>No exclusive content found.</p>";
                        }
                        ?>

                     <?php for ($i = 0; $i < count($exclusive_items); $i++):
                            $item = $exclusive_items[$i]; ?>
                         <div class="inside-exclusive">
                             <div class="img-inside">
                                 <img src="uploads/<?= htmlspecialchars($item['thumbmailimage']) ?>" alt="<?= htmlspecialchars($item['tittle']) ?>">
                             </div>
                             <div class="img-inside-content-exclusive">
                                 <a href="newsexclusive.php?id=<?= urlencode($item['category_name']) ?>"><?= strtoupper(htmlspecialchars($item['category_name'])) ?></a>
                                 <h1><span>EXCLUSIVE</span>
                                     <a href="newsexclusive.php?id=<?= urlencode($item['id']) ?>"><?= htmlspecialchars($item['tittle']) ?></a>

                                 </h1>
                             </div>
                         </div>
                     <?php endfor; ?>
                 </div>

                 <div class="clear"></div>
             </div>
         </div>
         <div class="clear"></div>
     </div>
 </section>