<?php
include __DIR__ . '../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$id = $_POST['id'];
$recipe_name = $_POST['recipe_name'];
$overview = $_POST['overview'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];

$result = add_recipe(
    $id,
    $recipe_name,
    $overview,
    $ingredients, 
    $instructions
);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/users');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    redirect_to('/admin/users?error=' . $error_message);
}