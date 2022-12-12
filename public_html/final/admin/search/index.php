<link rel="stylesheet" href="/dist/styles/nav.css">
<link rel="stylesheet" href="/dist/styles/search.css">
<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Recipes';
include_once __DIR__ . '/../../_components/header.php';

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}


$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE recipe_name LIKE '%{$search}%'";
$query .= " OR overview LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$query .= " OR instructions LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// echo '<pre>';
// var_dump ($query); 
// echo '</pre>';
// die; 

// Check if was have more than 0 results from db
if ($results && $results->num_rows > 0) {
    $recipes_results = true;
} else {
    $recipes_results = false;
}

?>

<div>
  <div>
    <div>
      <div>
        <h1 class="title">Search <span class="change-font">Results</span></h1>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
          <input type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button type="submit">Search</button>
        </form>
        <h2 class="text">You searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$recipes_results) {
            echo '<p class="text">No results found</p>';
        }
?>
        <?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p>' . $_GET['error'] . '</p>';
  }?>
      </div>
      <div>
        <button type="button">
          <a href="<?php echo site_url() . '/admin/create.php' ?>">
            Add recipes +</a></button>
      </div>
    </div>

    <div> 
    <?php
    // If we have results, show them
      if ($recipes_results) {
          while ($row = mysqli_fetch_assoc($results)) {
              echo '<div>';
              echo '<h2 class="searchresult">' . $row['recipe_name'].'</h2>';
              echo '</div>';
          }
      }
    ?>
    </div> 


  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>