<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="<?= $base_url ?>/dashboard.php" class="brand-link">
            <span class="brand-text fw-light">News Admin Users</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" role="menu">
                <li class="nav-item">
                    <a href="<?= $base_url ?>/dashboard.php" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="newsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            News
                            <i class="bi bi-chevron-right" id="newsArrow"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview" id="newsSubmenu" style="display: none;">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link" id="freshStoriesToggle">
                                <i class="nav-icon bi bi-newspaper"></i>
                                <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                                    Fresh Stories
                                    <i class="bi bi-chevron-right" id="freshStoriesArrow"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" id="freshStoriesSubmenu" style="display: none;">
                                <li class="nav-item">
                                    <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                        <i class="bi bi-circle nav-icon"></i>
                                        <p>Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $base_url ?>/admin/AddFreshersNewslisting.php" class="nav-link">
                                        <i class="bi bi-circle nav-icon"></i>
                                        <p>Fresh News</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="MenuToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Menu Bar News
                            <i class="bi bi-chevron-right" id="menuArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="newsmenuSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/menubarlsiting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Menu Bar News</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="latestNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Latest News
                            <i class="bi bi-chevron-right" id="latestNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="latestNewsMenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/lattestnewslsting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Latest News</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="topBarNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Top Bar News
                            <i class="bi bi-chevron-right" id="topBarNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="topBarNewsSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/TopbarNewslisting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Top Bar News</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="sliderNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Slider News
                            <i class="bi bi-chevron-right" id="sliderNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="sliderNewsSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/Sliderbarlisting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Slider News</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="popularNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Popular News
                            <i class="bi bi-chevron-right" id="popularNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="popularNewsSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/popularlisting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Popular News</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="breakingNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Breaking News
                            <i class="bi bi-chevron-right" id="breakingNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="breakingNewsSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/breakinglsiting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Breaking news</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="lattestbreakingNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            lattest Breaking News
                            <i class="bi bi-chevron-right" id="lattestbreakingNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="lattestbreakingNewsSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/lattestbreakingnewslsiting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>lattest Breaking news</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="politicsbreakingNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Politics News
                            <i class="bi bi-chevron-right" id="politicsbreakingNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="politicsbreakingNewsSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/politicstnewslsiting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Politics news</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="lattestpoliticsbreakingNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Lattest Politics News
                            <i class="bi bi-chevron-right" id="lattestpoliticsbreakingNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="lattestpoliticsbreakingNewsSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/lattestpolilticslisting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Lattest Politics news</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="LifeNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Life style News
                            <i class="bi bi-chevron-right" id="LifeNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="LifeSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/lifesttylelisting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Life style News</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="lattestLifeNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            lattest Life style News
                            <i class="bi bi-chevron-right" id="lattestLifeNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="lattestLifeSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/lattestfilestylelisting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Latttest Life style News</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="FoodNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            food&Travel News
                            <i class="bi bi-chevron-right" id="FoodNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="FoodLifeSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/addfoodsectionlisting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p> food&Travel News</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="lattestfoodNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            lattest food&Travel
                            <i class="bi bi-chevron-right" id="FoodNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="lattestfoodSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/addlattestfoodlistingsection.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p> Lattest food&Travel</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="ExclusivecontentNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Exclusive content
                            <i class="bi bi-chevron-right" id="ExclusivecontentNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="ExclusivecontentSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/exclusivelisting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p> Exclusive Content</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="LatttestExclusiveNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Latttest Exclusive
                            <i class="bi bi-chevron-right" id="LatttestExclusiveNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="LatttestExclusiveSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/lattestexcslivelsiting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p> Latttest Exclusive</p>
                            </a>
                        </li>
                    </ul>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="RecentpostToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Recent post
                            <i class="bi bi-chevron-right" id="RecentArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="RecentSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/recenetlistingnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p> Recent post</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="LattestRecentToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Lattest Recent post
                            <i class="bi bi-chevron-right" id="LattestRecentNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="LattestRecentSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/lattestrecentpostlisting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p> Recent post</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="lastRecenteNewsToggle">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            last Recent post
                            <i class="bi bi-chevron-right" id="lastRecenteNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="lastRecenteSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/lastRecentlsiting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p> last Recent post</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" id="providesection">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            Lattest Last Recent
                            <i class="bi bi-chevron-right" id="newsprovideNewsArrow"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="newslastSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/viewsnews.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url ?>/admin/lattestlastrecentpostlisting.php" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p> Lattest Last Recent </p>
                            </a>
                        </li>
                    </ul>
                </li>


                </li>
        </nav>
    </div>

    <!--end::Sidebar Wrapper-->
</aside>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleLink = document.getElementById("newsToggle");
        const submenu = document.getElementById("newsSubmenu");
        const arrow = document.getElementById("newsArrow");

        toggleLink.addEventListener("click", function(e) {
            e.preventDefault();

            if (submenu.style.display === "none" || submenu.style.display === "") {
                submenu.style.display = "block";
                arrow.classList.add("rotate-arrow");
            } else {
                submenu.style.display = "none";
                arrow.classList.remove("rotate-arrow");
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const newsToggle = document.getElementById("newsToggle");
        const newsSubmenu = document.getElementById("newsSubmenu");
        const newsArrow = document.getElementById("newsArrow");

        newsToggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = newsSubmenu.style.display === "block";
            newsSubmenu.style.display = isOpen ? "none" : "block";
            newsArrow.classList.toggle("rotate", !isOpen);
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const newsToggle = document.getElementById("newsToggle");
        const newsSubmenu = document.getElementById("newsSubmenu");
        const newsArrow = document.getElementById("newsArrow");

        const freshStoriesToggle = document.getElementById("freshStoriesToggle");
        const freshStoriesSubmenu = document.getElementById("freshStoriesSubmenu");
        const freshStoriesArrow = document.getElementById("freshStoriesArrow");

        newsToggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = newsSubmenu.style.display === "block";
            newsSubmenu.style.display = isOpen ? "none" : "block";
            newsArrow.classList.toggle("rotate", !isOpen);
        });

        freshStoriesToggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = freshStoriesSubmenu.style.display === "block";
            freshStoriesSubmenu.style.display = isOpen ? "none" : "block";
            freshStoriesArrow.classList.toggle("rotate", !isOpen);
        });
    });


    document.addEventListener("DOMContentLoaded", function() {
        // Function to handle toggling of the submenu
        function setupToggle(triggerId, submenuId, arrowId) {
            const trigger = document.getElementById(triggerId);
            const submenu = document.getElementById(submenuId);
            const arrow = document.getElementById(arrowId);

            if (trigger) {
                trigger.addEventListener("click", function(e) {
                    e.preventDefault();
                    const isOpen = submenu.style.display === "block";
                    submenu.style.display = isOpen ? "none" : "block";
                    arrow.classList.toggle("bi-chevron-down", !isOpen);
                    arrow.classList.toggle("bi-chevron-right", isOpen);
                });
            }
        }

        setupToggle("topBarNewsToggle", "topBarNewsSubmenu", "topBarNewsArrow");
        setupToggle("sliderNewsToggle", "sliderNewsSubmenu", "sliderNewsArrow");
        setupToggle("popularNewsToggle", "popularNewsSubmenu", "popularNewsArrow");
    });


    document.addEventListener("DOMContentLoaded", function() {
        const newsToggle = document.getElementById("newsToggle");
        const viewNewsItem = document.getElementById("viewNewsItem");
        const addNewsItem = document.getElementById("addNewsItem");

        if (newsToggle) {
            newsToggle.addEventListener("click", function() {

                if (viewNewsItem.style.display === "none" || viewNewsItem.style.display === "") {
                    viewNewsItem.style.display = "block";
                } else {
                    viewNewsItem.style.display = "none";
                }

                if (addNewsItem.style.display === "none" || addNewsItem.style.display === "") {
                    addNewsItem.style.display = "block";
                } else {
                    addNewsItem.style.display = "none";
                }
            });
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('latestNewsToggle');
        const submenu = document.getElementById('latestNewsMenu');
        const arrowIcon = document.getElementById('latestNewsArrow');

        toggleBtn.addEventListener('click', function(e) {
            e.preventDefault();

            const isOpen = submenu.style.display === 'block';
            submenu.style.display = isOpen ? 'none' : 'block';

            arrowIcon.classList.toggle('bi-chevron-down', !isOpen);
            arrowIcon.classList.toggle('bi-chevron-right', isOpen);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("breakingNewsToggle");
        const submenu = document.getElementById("breakingNewsSubmenu");
        const arrow = document.getElementById("breakingNewsArrow");

        toggle.addEventListener("click", function(e) {
            e.preventDefault(); // prevent default <a href="#"> behavior

            const isOpen = submenu.style.display === "block";

            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });


    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("lattestbreakingNewsToggle");
        const submenu = document.getElementById("lattestbreakingNewsSubmenu");
        const arrow = document.getElementById("lattestbreakingNewsArrow");

        toggle.addEventListener("click", function(e) {
            e.preventDefault(); // prevent default <a href="#"> behavior

            const isOpen = submenu.style.display === "block";

            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("politicsbreakingNewsToggle");
        const submenu = document.getElementById("politicsbreakingNewsSubmenu");
        const arrow = document.getElementById("politicsbreakingNewsArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("lattestpoliticsbreakingNewsToggle");
        const submenu = document.getElementById("lattestpoliticsbreakingNewsSubmenu");
        const arrow = document.getElementById("lattestpoliticsbreakingNewsArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("LifeNewsToggle");
        const submenu = document.getElementById("LifeSubmenu");
        const arrow = document.getElementById("LifeNewsArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("lattestLifeNewsToggle");
        const submenu = document.getElementById("lattestLifeSubmenu");
        const arrow = document.getElementById("lattestLifeNewsArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("FoodNewsToggle");
        const submenu = document.getElementById("FoodLifeSubmenu");
        const arrow = document.getElementById("FoodNewsArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("lattestfoodNewsToggle");
        const submenu = document.getElementById("lattestfoodSubmenu");
        const arrow = document.getElementById("lattestFoodNewsArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("ExclusivecontentNewsToggle");
        const submenu = document.getElementById("ExclusivecontentSubmenu");
        const arrow = document.getElementById("ExclusivecontentNewsArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });


    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("LatttestExclusiveNewsToggle");
        const submenu = document.getElementById("LatttestExclusiveSubmenu");
        const arrow = document.getElementById("LatttestExclusiveNewsArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });


    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("RecentpostToggle");
        const submenu = document.getElementById("RecentSubmenu");
        const arrow = document.getElementById("RecentArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("LattestRecentToggle");
        const submenu = document.getElementById("LattestRecentSubmenu");
        const arrow = document.getElementById("LattestRecentNewsArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("lastRecenteNewsToggle");
        const submenu = document.getElementById("lastRecenteSubmenu");
        const arrow = document.getElementById("lastRecenteNewsArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("providesection");
        const submenu = document.getElementById("newslastSubmenu");
        const arrow = document.getElementById("newsprovideNewsArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });


    
    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("MenuToggle");
        const submenu = document.getElementById("newsmenuSubmenu");
        const arrow = document.getElementById("menuArrow");
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            const isOpen = submenu.style.display === "block";
            submenu.style.display = isOpen ? "none" : "block";
            arrow.classList.toggle("bi-chevron-right", isOpen);
            arrow.classList.toggle("bi-chevron-down", !isOpen);
        });
    });
</script>
</script>