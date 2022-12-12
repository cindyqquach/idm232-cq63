<link rel="stylesheet" href="/dist/styles/nav.css">
<link rel="stylesheet" href="/dist/styles/create.css">
<?php
 include_once __DIR__ . '/../app.php';
 $page_title = 'Create Recipe';
 include_once __DIR__ . '/../_components/header.php';
?>
  
 
    <div class="title-block">
        <h1 class="title">Create <span class="change-font">Recipe </span></h1>
    <div>
          
    <div class="big-form">
        <form class="form" action="<?php echo site_url(); ?>/_includes/process-create-recipes.php" method="POST">
        <div class="block">
            <label class="form-label" for="">Image Path</label>
            <input type="text" name="image_path">
          </div>    
        <div class="block">
            <label class="form-label" for="">Recipe Title:</label>
            <input type="text" name="recipe_name">
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
          <input type="submit" value="Add Recipe +">
        </form>
    </div>

 <?php include_once __DIR__ . '/../_components/footer.php';