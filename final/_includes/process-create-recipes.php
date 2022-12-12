<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$recipe_name = $_POST['recipe_name'];
$overview = $_POST['overview'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];


$query = 'INSERT INTO recipes';
$query .= ' (recipe_name, overview, ingredients, instructions)';
$query .= " VALUES ('{$recipe_name}', '{$overview}', '{$ingredients}', '{$instructions}')";
$result = mysqli_query($db_connection, $query);
// var_dump($query); 
// die; 
// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    redirect_to('/admin/users?error=' . $error_message);
}