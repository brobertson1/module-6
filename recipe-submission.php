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

        <h2 class="recipe-submission-header">Add a Recipe to Our Cookbook!</h2>
        <form action="/index.php" method="POST" class="recipe-submission-form">
            <label for="title">Title</label>
            <input type="text" placeholder="Title" id="title" name="title">
            <label for="author">Author</label>
            <input type="text" placeholder="Author" id="author" name="author">
            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Short description"></textarea>
            <label for="ingredients">Ingredients (HTML Editor)</label>
            <div id="ingredients" class="editors"></div>
            <label for="directions">Directions (HTML Editor)</label>
            <div id="directions" class="editors"></div>
            <input type="submit" class="button" id="submit" value="Submit">
        </form>
    </main>
</div>

    <?php
        include 'footer.php';
        include 'scripts.php';
    ?>

</body>
</html>