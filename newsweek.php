<?php
$base_url = "http://localhost/newsweekwebsite";
?>


<?php
include_once 'specialcode.php';
?>

<?php
include_once 'footer.php';
?>
<script>
    window.addEventListener('scroll', function() {
        const header = document.getElementById('header');

        // Check the scroll position
        if (window.scrollY > 100) {
            // Add class when scrolled more than 100px
            header.classList.add('scrolled');
        } else {
            // Remove class when scroll position is less than or equal to 100px
            header.classList.remove('scrolled');
        }
    });
</script>

<script>
    document.getElementById('search-toggle').addEventListener('click', function(event) {
        const searchBox = document.querySelector('.search-open-box');
        searchBox.classList.toggle('hidden');

        event.stopPropagation();
    });

    document.querySelector('.search-open-box').addEventListener('click', function(event) {
        event.stopPropagation();
    });


    document.addEventListener('click', function(event) {
        const searchBox = document.querySelector('.search-open-box');
        const searchContainer = document.getElementById('search-toggle');
        if (!searchContainer.contains(event.target)) {

            searchBox.classList.add('hidden');
        }
    });
</script>
<script>
    //chk-box
    const checkboxElements = document.querySelectorAll(".checkbox");
    checkboxElements.forEach(checkbox => {
        checkbox.addEventListener("click", toggleCheckboxClass);
    });

    function toggleCheckboxClass(event) {
        event.target.classList.toggle("checked");
    }
</script>
</body>


</html>