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
    <!-- TODO- PHP to get recipe details from database -->
    <?php
            function getRecipeDetailsFromDatabase(){

                $recipeTitle = rawurldecode($_GET["title"]);

                include_once 'includes/db_connect.php';
                $sql = "SELECT * FROM posts WHERE title='" . $recipeTitle . "'";
                $result = mysqli_query($conn, $sql);

                $recipeDetails = mysqli_fetch_assoc($result);
                return $recipeDetails;
            }
        ?>

        <h2 class="recipe-title">Test Recipe</h2>
        <div class="recipe-author">
            <p>Firstname Lastname</p>
        </div>
        <div class="recipe-content">
            <div class="ingredients-col">
                <h3>Ingredients</h3>
                <div class="recipe-ingredients">
                    <p>Ingredients go here. Lorem ipsum dolor sit amet. Consectetur adipiscing elit. Maecenas sollicitudin leo sed ex blandit, vitae sagittis turpis maximus. Donec a posuere elit, vitae egestas diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec a placerat leo. Donec congue sollicitudin metus gravida mattis. Sed maximus convallis enim eu mollis. Aenean tempor vehicula ex sit amet mattis. Cras id pellentesque neque. Quisque sodales dictum urna ut mollis. Nulla facilisi.</p>
                </div>
            </div>
            <div class="directions-col">
                <h3>Directions</h3>
                <div class="recipe-directions">
                    <p>Directions go here. Lorem ipsum dolor sit amet. Consectetur adipiscing elit. Maecenas sollicitudin leo sed ex blandit, vitae sagittis turpis maximus. Donec a posuere elit, vitae egestas diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec a placerat leo. Donec congue sollicitudin metus gravida mattis. Sed maximus convallis enim eu mollis. Aenean tempor vehicula ex sit amet mattis. Cras id pellentesque neque. Quisque sodales dictum urna ut mollis. Nulla facilisi.</p>
                </div>
            </div>
        </div>
    </main>
</div>

    <?php
        include 'footer.php';
        include 'scripts.php';
    ?>

</body>
</html>