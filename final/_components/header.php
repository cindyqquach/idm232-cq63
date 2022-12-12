
<link rel="stylesheet" href="/dist/styles/reset.css">

<?php
// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'Cafe Maddy';
$document_title = $page_title . ' | ' . $site_title; // Home | Cafe maddy
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/lli3kcm.css">
  <title><?php echo $document_title ; ?></title>
  <style> @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap'); </style>
</head>
<body>
  <!-- Main Content Begins -->
  <div> 
    <!-- logo -->
    <img class="logo" src="/dist/images/logo.png" alt="logo"> 
    <?php include __DIR__ . '/navigation-admin.php'; ?>

  </div> 