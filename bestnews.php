<?php
$base_url = "http://localhost/newsweekwebsite";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>join special media</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../css/index.css" />

    </head>

    <?php
    include_once 'header.php';
    ?>


    <?php
    include_once 'vreryspecialcode.php';
    ?>

    <?php
    include_once 'footer.php';
    ?>

    </div>

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