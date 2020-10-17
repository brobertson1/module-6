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
        <!-- Gets recipes from database -->
        <?php
            function getRecipeTitlesFromDatabase(){
                include_once 'db_connect.php';
                $sql = "SELECT title FROM recipes";
                $result = mysqli_query($conn, $sql);

                $recipeTitle = array();
                while($row = mysqli_fetch_assoc($result)){
                    array_push($recipeTitle, $row['title']);
                }
            return $recipeTitle;
            }
        ?>
   

        <h2>Try One of Our Recipes!</h2>
        <!-- The database inserted recipe list -->
        <div id="sortable-recipe-list">
            <input class="search" placeholder="Search" />
            <button class="sort sort-button" data-sort="title">Sort</button>
            <ul class="list recipe-list">

            <!-- Generate recipe titles list here. -->
                <?php
                    $recipeTitles = getRecipeTitlesFromDatabase();

                    foreach($recipeTitles as $recipeTitle) {
                        echo "<li><a href='recipe.php?title=" . $recipeTitle . "' class='title'>" . $recipeTitle . "</a></li>";
                    }
                ?>
                                
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