
<?php
 
 include_once __DIR__ . '/../app.php';
 $page_title = 'Create Recipe';
 include_once __DIR__ . '/../_components/header.php';
 ?>
  
 <?php
 // get recipes data from database
 $query = 'SELECT * FROM users';
 // var_dump($query);
 // die();
 $result = mysqli_query($db_connection, $query);
  
 // var_dump($result);
  
 ?>

    <div>
        <h1>Create Recipe</h1>
    <div>
          
    <div>
        <form class="form" action="<?php echo site_url(); ?>/_includes/process-create-recipes.php" method="POST">
          <div class="block">
            <label class="form-label" for="">Recipe Title:</label>
            <input type="text" name="recipe_title">
          </div>    
          <div class="block">
            <label class="form-label" for="">Overview:</label>
            <input type="text" name="overview">
          </div>    
          <div class="block">
            <label class="form-label" for="">Ingredients:</label>
            <input type="text" name="ingredients">
          </div>
          <div class="block">
            <label class="form-label" for="">Instructions:</label>
            <input type="text" name="instructions">
          </div>
          <input
            type="submit" value="Add Recipe">
        </form>
    </div>

 <?php include_once __DIR__ . '/../_components/footer.php';