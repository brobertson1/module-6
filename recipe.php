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
            $recipeDetails = array ('title' => 'Baked Ziti',
                                    'author' => 'Becca R',
                                    'ingredients' => 'pasta, sauce, cheese',
                                    'directions' => 'cook pasta, mix in sauce, put in a pan, top with cheese, bake for 30 min, enjoy');
            return $recipeDetails;
        }
    ?>
    <?php
        $recipeDetails = getRecipeDetailsFromDatabase();
    ?>

        <h2 class="recipe-title"><?php echo $recipeDetails['title']; ?></h2>
        <div class="recipe-author">
            <?php echo $recipeDetails['author']; ?>
        </div>
        <div class="recipe-content">
            <div class="ingredients-col">
                <h3>Ingredients</h3>
                <div class="recipe-ingredients">
                    <?php echo $recipeDetails ['ingredients'] ?>
                </div>
            </div>
            <div class="directions-col">
                <h3>Directions</h3>
                <div class="recipe-directions">
                    <?php echo $recipeDetails ['directions'] ?>
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