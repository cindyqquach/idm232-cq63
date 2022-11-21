<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Edit Recipes';
include_once __DIR__ . '/../_components/header.php';
?>

<?php
// get recipes data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
   // Get row from results and assign to $recipe variable;
   $recipe = mysqli_fetch_assoc($result);
} else {
   $error_message = 'Recipe does not exist';
   // redirect_to('/admin/recipes?error=' . $error_message);
}
?>


<?php //include_once __DIR__ . '/../_components/footer.php'; ?>
