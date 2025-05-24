<?php
include 'databaseconnectivity.php';
$emailErr = $selectpolicyErr = "";
$email = $selectpolicy = "";
$isvalid = true;
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $selectpolicy = isset($_POST['privacy']) ? trim($_POST['privacy']) : null;


    $isvalid = true;
    $emailErr = "";
    $selectpolicyErr = "";


    if (empty($email)) {
        $emailErr = "Email is required.";
        $isvalid = false;
    }


    if (empty($selectpolicy)) {
        $selectpolicyErr = "You must accept the Privacy Policy.";
        $isvalid = false;
    }
    if ($isvalid) {

        $sql = "INSERT INTO sub_users (email, privacy) VALUES ('$email', '$selectpolicy')";
        if ($conn->query($sql) === TRUE) {

        }
    } 
}
?>

    <section class="politics-section">
        <div class="container-food">
            <div class="whole-politics-box" style="display: flex; gap: 20px; flex-wrap: wrap;">
                <div class="left-politics-sec mid-left-recent" style="flex: 0 0 70%;">
                    <div class="theiaStickySidebar">
                        <div class="left-top-politics">
                            <div class="header-food-heading">
                                <h1>Politics</h1>
                                <div class="arrow-food">
                                    <a href="#">VIEW ALL
                                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                                    </a>
                                </div>
                                <div class="hr-line"></div>
                            </div>
                        </div>

                        <div class="left-bottom-politics">
                            <div class="top-food-four">
                                <?php
                                require_once './databaseconnectivity.php';
                                $topPolitics = "SELECT id, tittle, thumbmailimage, created_at FROM politics_news_users ORDER BY id DESC LIMIT 3";
                                $topResult = $conn->query($topPolitics);
                                if ($topResult && $topResult->num_rows > 0):
                                    while ($row = $topResult->fetch_assoc()):
                                ?>
                                        <div class="politics-food-box">
                                            <div class="food-box-img">
                                                <a href="newspolitics.php?id=<?= urlencode($row['id']) ?>">
                                                    <img src="./uploads/<?= htmlspecialchars($row['thumbmailimage']) ?>" alt="<?= htmlspecialchars($row['tittle']) ?>" />
                                                </a>
                                            </div>
                                            <div class="food-box-content politics-content">
                                                <h1>
                                                    <a href="newspolitics.php?id=<?= urlencode($row['id']) ?>">
                                                        <?= htmlspecialchars($row['tittle']) ?>
                                                    </a>
                                                </h1>
                                            </div>
                                            <div class="editor-info">
                                                <a href="newspolitics.php?id=<?= $row['id'] ?>">
                                                    <img src="./uploads/<?= htmlspecialchars($row['thumbmailimage']) ?>" alt="<?= htmlspecialchars($row['tittle']) ?>">
                                                </a>
                                                <span>- <?= date("F j, Y", strtotime($row['created_at'])) ?></span>
                                            </div>

                                            <div class="hr-politics-line"></div>
                                        </div>
                                <?php endwhile;
                                endif; ?>
                                <div class="clear"></div>
                            </div>
                            <div class="nine-box-sec">
                                <?php
                                $bottomPolitics = "SELECT id, tittle, created_at FROM lattest_politics_news_users ORDER BY id DESC LIMIT 9";
                                $bottomResult = $conn->query($bottomPolitics);
                                if ($bottomResult && $bottomResult->num_rows > 0):
                                    while ($row = $bottomResult->fetch_assoc()):
                                ?>
                                        <div class="politics-food-box">
                                            <div class="politics-food-bottom-content">
                                                <a href="newspolitics.php?id=<?= urlencode($row['id']) ?>">

                                                    <?php if (stripos($row['tittle'], 'exclusive') !== false): ?>
                                                        <span>EXCLUSIVE</span>
                                                    <?php endif; ?>
                                                    <?= htmlspecialchars($row['tittle']) ?>
                                                </a>
                                                <p><?= date("F j, Y", strtotime($row['created_at'])) ?></p>
                                            </div>
                                        </div>
                                <?php endwhile;
                                endif; ?>
                                <div class="clear"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="right-politics-sec mid-right-recent" style="flex: 0 0 28%;">
                    <div class="theiaStickySidebar">
                        <div class="inside-right-politics">
                            <div class="img-politics">
                                <?php $rightSidebarImage = "./images/rec-sb.jpg"; ?>
                                <a href="#"><img src="<?= $rightSidebarImage ?>" alt="Right Sidebar Image"></a>
                            </div>
                            <div class="inside-right-politics-content">
                                <div class="footer-contact-us politics-contact-us">

                                    <form action="" method="post" id="formsection">
                                        <h1>Subscribe</h1>
                                        <input type="text" name="email" id="sunemail" placeholder="Email address">
                                        <span class="text-danger" id="error_sunemail"><?= $emailErr; ?></span>
                                        <button>
                                            i want in
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </button>
                                </div>

                                <div class="checkbox-footer">
                                    <input type="checkbox" id="subscprivacy" name="privacy">
                                    <span>I agree to the Privacy Policy </span>
                                    <!-- <a href="#">Privacy Policy</a><span>.</span> -->
                                    <br>
                                    <span class="text-danger" id="error_subssprivacy"><?= $selectpolicyErr; ?></span>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</body>
<script>
    const emailelem = document.getElementById("sunemail");
    const error_email = document.getElementById("error_sunemail");

    const privacyelem = document.getElementById("subscprivacy");
    const error_privacy = document.getElementById("error_subssprivacy");

    let isvalid = true;

    emailelem.addEventListener("keyup", function() {
        if (emailelem.value.trim() === "") {
            error_email.textContent = "Email is required";
            isvalid = false;
        } else {
            error_email.textContent = "";
        }
    });

    privacyelem.addEventListener("keyup", function() {
        if (privacyelem.value.trim() === "") {
            error_privacy.textContent = "Privacy is required?";
            isvalid = false;

        } else {
            error_privacy.textContent = "";
        }
    })

    document.querySelector('#formsection').addEventListener("submit", function(e) {
    e.preventDefault(); // Always prevent default first

    let emailElem = document.querySelector('#sunemail');
    let error_email = document.querySelector('#error_subssprivacy');

    let privacyelem = document.querySelector('#subscprivacy');
    let error_privacy = document.querySelector('#error_subssprivacy');

    let isValid = true;

    // Validate Email
    if (emailelem.value.trim() === "") {
        error_email.textContent = "Email is required";
        isValid = false;
    } else {
        error_email.textContent = "";
    }

    // Validate Privacy Policy Checkbox
    if (!privacyelem.checked) {
        error_privacy.textContent = "Please accept Privacy Policy";
        isValid = false;
    } else {
        error_privacy.textContent = "";
    }

    if (!isValid) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please fix the errors before submitting!',
        });
    } else {
        // 🔥 Now call AJAX
        $.ajax({
            url: 'newssubscribed.php', // Your PHP file
            method: 'POST',
            data: {
                email: emailElem.value,
                privacy: privacyelem.checked ? 'agree' : ''
            },
            success: function(response) {
                console.log(response);
                try {
                    let data = JSON.parse(response);

                    if (data.status === "success") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: data.message || 'Form submitted successfully!',
                        }).then(() => {
                            window.location.href = 'index.php'; // Redirect after success
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: data.message || 'Something went wrong!',
                        });
                    }
                } catch (error) {
                    console.error('Parsing Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Invalid server response!',
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                Swal.fire({
                    icon: 'error',
                    title: 'Server Error!',
                    text: 'Please try again later.',
                });
            }
        });
    }
});

</script>

</html>