<?php
include 'databaseconnectivity.php';
include 'Footerfunctionallity.php';

?>
<?php
include 'css.php'
?>
<section class="footer-section">
    <footer class="footer-sec">
        <div class="container-food top-footer">
            <div class="header-food-heading">
                <div class="header-food-news">
                    <a href="#">
                        <h1>
                            NewsWeek
                        </h1>
                        <span class="header-top-news"><i>PRO</i></span>
                    </a>
                </div>
                <div class="header-food-news-items">
                    <ul class="newsweek-items">

                        <li><a href="">Music</a></li>
                        <li><a href=""> Celebrity</a></li>
                        <li><a href=""> Politics</a></li>
                        <li><a href="">Finance</a></li>
                        <li><a href="">Travel</a></li>
                        <li><a href="">Food</a></li>
                        <li><a href="">Marketing</a></li>
                        <li><a href="">Tech</a></li>
                        <li><a href="">Make-up</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
                <div class="hr-footer-line">
                </div>
            </div>
            <div class="footer-mid">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <div class="footer-content">
                            <a href="#" class="impact-logo d-flex align-items-start">
                                <span>About us</span>
                            </a>
                            <p>Each template in our ever growing studio library can be added and moved around within
                                any
                                page effortlessly with one click.</p>
                        </div>
                        <div class="footer-four-icons d-flex mt-4">
                            <div class="footer-icons">
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="footer-icons">
                                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                            <div class="footer-icons">
                                <a href="#">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </div>
                            <div class="footer-icons">
                                <a href="#">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="footer-links">
                            <h1>Company</h1>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Subscription Plans</a></li>
                                <li><a href="#">My account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="footer-links">
                            <h1>The latest</h1>
                            <ul>
                                <li><a href="#">Social Media Marketing for Franchises is Meant for Women</a></li>
                                <li><a href="#" class="footer-latest">Marketing <span class="footer-span">September
                                            29, 2021</span></a></li>
                                <li><a href="#">A Look at How Social Media & Mobile Gaming Can Increase Sales</a>
                                </li>
                                <li><a href="#" class="footer-latest">Finance <span class="footer-span">September
                                            29, 2021</span></a></li>
                                <li><a href="#">Cover Girl Announces Star Shine Makeup Line is Due for Next
                                        December</a>
                                </li>
                                <li><a href="#" class="footer-latest">Make-up <span class="footer-span">September
                                            29, 2021</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="outer-footer-contact">
                            <div class="footer-contact-us">
                                <form action="" method="post" id="area">
                                    <h1>Subscribe</h1>
                                    <input type="text" name="email" id="subscrptionemail" placeholder="Email address">
                                    <span class="text-danger" id="error_subscptionemail"><?= $emailErr; ?></span>
                                    <button type="submit">
                                        i want in
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>

                                    <div class="checkbox-footer">
                                        <input type="checkbox" id="subprivacy" name="privacy">
                                        <span> I agree to the Privacy Policy</span><br>
                                        <span class="text-danger" id="error_subprivacy"><?= $selectpolicyErr; ?></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container bottom-sec text-center">
            <p>© 2021 tagDiv. All Rights Reserved. Made with Newspaper Theme.</p>

        </div>
    </footer>

</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <div class="btn-bg">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="child-labor">
                    <div class="inner-labor">
                        <div class="left-modal-sec">
                            <div class="inside-left-modal-sec">
                                <div class="model-left-content">
                                    <h1>News Week
                                        Magazine PRO</h1>
                                </div>
                                <div class="modal-left-img">
                                    <img src="<?= $base_url ?>/images/1-696x464.jpg" alt="">
                                </div>
                                <div class="left-modal-btn">
                                    <a href="">Subscribe Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="right-modal-sec">
                            <div class="inside-right-modal-sec">
                                <div class="company-heading">
                                    <h1>Company</h1>
                                </div>
                                <ul class="company-items">
                                    <li><a href="">About</a></li>
                                    <li><a href="">Contact us</a></li>
                                    <li><a href="">Subscription Plans</a></li>
                                    <li><a href="">My account</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const email = document.getElementById("subscrptionemail");
    const error_emailelem = document.getElementById("error_subscptionemail");
    const privacy = document.getElementById("subprivacy");
    const error_privacyelem = document.getElementById("error_subprivacy");

    email.addEventListener('keyup', function() {
        if (email.value.trim() === "") {
            error_emailelem.textContent = "Email is required";
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
            error_emailelem.textContent = "Please enter a valid email";
        } else {
            error_emailelem.textContent = "";
        }
    });

    privacy.addEventListener("change", function() {
        if (!privacy.checked) {
            error_privacyelem.textContent = "Please accept Privacy Policy";
        } else {
            error_privacyelem.textContent = "";
        }
    });

    document.querySelector('#area').addEventListener("submit", function(e) {
        e.preventDefault();

        let isValid = true;

        if (email.value.trim() === "") {
            error_emailelem.textContent = "Email is required";
            isValid = false;
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
            error_emailelem.textContent = "Please enter a valid email";
            isValid = false;
        } else {
            error_emailelem.textContent = "";
        }

        if (!privacy.checked) {
            error_privacyelem.textContent = "Please accept Privacy Policy";
            isValid = false;
        } else {
            error_privacyelem.textContent = "";
        }
        console.log(email.value);

        if (!isValid) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please fix the errors before submitting!",
            });
            return;
        }

        $.ajax({
            url: "subscribe_backend.php",
            method: "POST",
            data: {
                email: email.value,
                privacy: privacy.checked ? "agree" : ""
            },
            success: function(response) {
                console.log("Response from server:", response);

                try {
                    let data = JSON.parse(response);

                    if (data.status === "success") {
                        Swal.fire({
                            icon: "success",
                            title: "Subscribed!",
                            text: data.message || "Thank you for subscribing!",
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            window.location.href = "index.php";
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: data.message || "Something went wrong. Please try again.",
                        });
                    }
                } catch (e) {
                    console.error("Error parsing server response:", e);
                    Swal.fire({
                        icon: "error",
                        title: "Error!",
                        text: "Unexpected server response. Please try again.",
                    });
                }
            },
            error: function(xhr, status, error) {
                console.log("AJAX Error:", status, error);
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "Server error occurred! Please try again later.",
                });
            }
        });
    });
</script>