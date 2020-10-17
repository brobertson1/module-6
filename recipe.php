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
        function getRecipeDetailsFromDatabase() {
            $recipeTitle = rawurldecode($_GET["title"]);

            include_once 'db_connect.php';
            $sql = "SELECT * FROM recipes WHERE title = '" . $recipeTitle . "'";
            $result = mysqli_query($conn, $sql);

            $recipeDetails = mysqli_fetch_assoc($result);
            return $recipeDetails;
        }
        $recipeDetails = getRecipeDetailsFromDatabase();
    ?>
<div>
        <h2 class="recipe-title"><?php echo $recipeDetails["title"]; ?></h2>
        <div class="recipe-author">
            <p><?php echo $recipeDetails["author"]; ?></p>
        </div>
        <div class="recipe-content">
            <div class="ingredients-col">
                <h3>Ingredients</h3>
                <div class="recipe-ingredients">
                    <p><?php echo $recipeDetails["ingredients"]; ?></p>
                </div>
            </div>
            <div class="directions-col">
                <h3>Directions</h3>
                <div class="recipe-directions">
                    <p><?php echo $recipeDetails["directions"]; ?></p>
                </div>
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