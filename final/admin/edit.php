<link rel="stylesheet" href="/dist/styles/nav.css">
<link rel="stylesheet" href="/dist/styles/edit.css">

<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Edit Recipes';
include_once __DIR__ . '/../_components/header.php';
?>
 
<?php
// get recipes data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$results = mysqli_query($db_connection, $query);
if ($results->num_rows > 0) {
  // Get row from results and assign to $recipe variable;
  $recipes = mysqli_fetch_assoc($results);
} else {
  $error_message = 'Recipe does not exist';
  // redirect_to('/admin/recipes?error=' . $error_message);
}
?>

<div>
  <h1 class="title">Edit <span class="change-font">Recipe</span></h1>
</div>
<div>
    <form class="form" action="<?php echo site_url(); ?>/_includes/process-edit-recipes.php" method="POST">
      <div class="block">
         <label class="text" for="">Image Path</label>
         <input type="text" name="image_path"
           value="<?php echo $recipes['image_path']?>">
       </div> 
    
      <div class="block">
         <label class="text" for="">Recipe Name</label>
         <input type="text" name="recipe_name"
           value="<?php echo $recipes['recipe_name']?>">
       </div>
       <div class="block">
         <label class="text" for="">Overview</label>
         <input type="text" name="overview"
           value="<?php echo $recipes['overview']?>">
       </div>
       <div class=" block">
         <label class="text" for="">Ingredients</label>
         <input type="text" name="ingredients" value="<?php echo $recipes['ingredients']?>">
       </div>
       <div class=" block">
         <label class="text" for="">Instructions</label>
         <input type="text" name="instructions" value="<?php echo $recipes['instructions']?>">
       </div>
       <input  type="submit" value="Update Recipe">
       <input type="hidden" name="id" value="<?php echo $recipes['id']?>">
    </form>
</div>
     
 
 
 
<?php include_once __DIR__ . '/../_components/footer.php';

