<link rel="stylesheet" href="dist/styles/home.css">
<link rel="stylesheet" href="dist/styles/box-recipe.css">
<!-- Box recipe for homepage -->

<div class="recipe-menu"> 
<?php
 // get recipes data from database
 $query = 'SELECT * FROM recipes';
 $results = mysqli_query($db_connection, $query);
?> 

<?php
if (!isset($results)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<table>
  <tbody>
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
while ($result_row = mysqli_fetch_array($results)) {
    echo "
              <tr>
                <td><img src='{$site_url}{$result_row['image_path']}' alt='recipe img'></td>
                <td>{$result_row['recipe_name']}</td>
              </tr>";
}
?>
  </tbody>
</table>
</div>