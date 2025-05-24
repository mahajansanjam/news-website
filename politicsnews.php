<?php
$base_url = "http://localhost/newsweekwebsite";
?>
<?php
include_once 'header.php';
?>

<?php
include_once 'newspolitics.php';
?>
<?php
include_once 'footer.php';
?>

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