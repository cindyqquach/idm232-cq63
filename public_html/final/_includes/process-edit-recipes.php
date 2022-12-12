<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$image_path = sanitize_value($_POST['image_path']);
$recipe_name = sanitize_value($_POST['recipe_name']);
$overview = sanitize_value($_POST['overview']);
$ingredients = sanitize_value($_POST['ingredients']);
$instructions = sanitize_value($_POST['instructions']);

// $query = 'INSERT INTO recipes';
// $query .= ' (recipe_name, overview, ingredients, instructions)';
// $query .= " VALUES ('{$recipe_name}', '{$overview}', '{$ingredients}', '{$instructions}')";
$results = edit_recipes($image_path, $recipe_name, $overview, $ingredients, $instructions);
// return $results;

// Check there are no errors with our SQL statement
if ($results) {
    redirect_to('/admin');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    redirect_to('/admin/users?error=' . $error_message);
}