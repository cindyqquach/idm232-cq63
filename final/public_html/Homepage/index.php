<link rel="stylesheet" href="dist/styles/homepage.css">
<div class="darker-background"> 
<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>
</div> 

<?php
include_once __DIR__ . '/_components/box-recipe.php';
?>
 
<?php include_once __DIR__ . '/_components/footer.php';
?>