<link rel="stylesheet" href="/dist/styles/nav.css">
<link rel="stylesheet" href="/dist/styles/admin.css">

<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Admin';
include_once __DIR__ . '/../_components/header.php';
?>
<!-- This page spits out data/new recipe -->
<?php
 // get recipes data from database
 $query = 'SELECT * FROM recipes';
 $results = mysqli_query($db_connection, $query);
?> 

<div> 
   <div>
        <h1 class="title">All <span class="change-font">Recipes </span></h1>
        <p class="text" >A list of recipes the users in your account including their name, overview, ingredients and instructions
        </p>
        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p>' . $_GET['error'] . '</p>';
          }?>
   </div>
   <div>
        <button type="button">
          <a class="add-recipe text" href="<?php echo site_url() . '/admin/create.php' ?>">
            Add recipe + </a></button>
   </div>
</div>
<div>
   <div>
     <?php include __DIR__ . '/../_components/table-recipes.php'; ?>
   </div>
</div>


<?php include_once __DIR__ . '/../_components/footer.php'; ?>
