// List.js library
var options = {
    valueNames: [ 'title' ]
};

new List('sortable-recipe-list', options);

var editorIngredients = ace.edit("ingredients");
var editorDirections = ace.edit("directions");

editorIngredients.setTheme("ace/theme/eclipse");
editorIngredients.session.setMode("ace/mode/html");

editorDirections.setTheme("ace/theme/eclipse");
editorDirections.session.setMode("ace/mode/html");

// JQuery submit button for post-submission.php
$("#submit").click(function() {
    var title = $("#title").val();
    var author = $("#author").val();
    var description = $("#description").val();
    var ingredients = editorIngredients.getValue();
    var directions = editorDirections.getValue();

    $.post("submit-recipe.php", { 
        title: title,
        author: author,
        description: description,
        ingredients: ingredients,
        directions: directions
    }).done(function() {
        window.location = "index.php";
    });

});