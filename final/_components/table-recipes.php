<link rel="stylesheet" href="/final/dist/styles/admin.css">
<?php
if (!isset($results)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<table>
  <thead>
    <tr>
      <th class="tableheading" scope="col">ID</th>
      <th class="tableheading" scope="col">Image</th>
      <th class="tableheading" scope="col">Recipe name</th>
      <th class="tableheading" scope="col">Overview</th>
      <th class="tableheading" scope="col">Ingredients</th>
      <th class="tableheading" scope="col">Instructions</th>
      <th scope="col">
        <span class="edit">Edit</span>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
while ($result_row = mysqli_fetch_array($results)) {
    echo "
              <tr>
                <td>{$result_row['id']}</td>
                <td><img class='image' src='{$site_url}{$result_row['image_path']}' alt='recipe img'></td>
                <td>{$result_row['recipe_name']}</td>
                
                <td>{$result_row['overview']}</td>
                <td>{$result_row['ingredients']}</td>
                <td>{$result_row['instructions']}</td>
                <td>
                  <a href='http://localhost:8888/admin/edit.php?id={$result_row['id']}'>Edit</a>
                  <a href='http://localhost:8888/admin/delete.php?id={$result_row['id']}'>Delete</a>
                </td>
              </tr>";
}
?>
  </tbody>
</table>