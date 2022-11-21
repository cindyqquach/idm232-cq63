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
  <div>
    <h1>Edit Recipe</h1>
  </div>

  <div>
      <form class="form" action="<?php echo site_url(); ?>/_includes/process-edit-recipes.php" method="POST">
         <div class="block">
           <label for="">Recipe Name</label>
           <input type="text" name="recipe_name"
             value="<?php echo $recipe['recipe_name']?>">
         </div>
         <div class="block">
           <label for="">Overview</label>
           <input type="text" name="overview"
             value="<?php echo $recipe['overview']?>">
         </div>
         <div class=" block">
           <label for="">Ingredients</label>
           <input type="text" name="ingredients" value="<?php echo $recipe['ingredients']?>">
         </div>
         <div class=" block">
           <label for="">Instructions</label>
           <input type="text" name="instructions" value="<?php echo $recipe['instructions']?>">
         </div>
         <input  type="submit" value="Update Recipe">
         <input type="hidden" name="id" value="<?php echo $recipe['id']?>">
      </form>
  </div>
       
 
 
 
<?php include_once __DIR__ . '/../_components/footer.php';

