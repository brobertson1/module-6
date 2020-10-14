<!DOCTYPE html>
<html lang="en">
<?php
    include 'head.php';
?>

<body>

<div class="wrapper">
    <?php
        include 'header.php';
    ?>
    <main>
        <!-- TODO Add PHP to get recipes from database here -->

        <h2>Try One of Our Recipes!</h2>
        <!-- The database inserted recipe list -->
        <div id="sortable-recipe-list">
            <input class="search" placeholder="Search" />
            <button class="sort sort-button" data-sort="title">Sort</button>
            <ul class="list recipe-list">
                <!-- TODO Add PHP to generate recipe titles list here. -->
                <!-- Code already set up for List.js integration -->
                <a href="recipe.php"><li>Chocolate Cake</li></a>
                <li>Baked Ziti</li>
                <li>Chikcen Piccata</li>
                <li>Zucchini Bread</li>
                <li>Cinnamon Scones</li>
            </ul>
        </div>

    </main>
</div>

    <?php
        include 'footer.php';
        include 'scripts.php';
    ?>

</body>
</html>