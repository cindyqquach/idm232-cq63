<link rel="stylesheet" href="/dist/styles/nav.css">
<link rel="stylesheet" href="/dist/styles/reset.css">
<?php
$navigation_items = [
    [
        'title' => 'Recipes',
        'url' => site_url() . '/../index.php',
    ],
    [
        'title' => 'Search',
        'url' => site_url() . '/admin/search',
    ],
    [
      'title' => 'Admin',
      'url' => site_url() . '/admin/index.php',
  ],
];
?>
<div class="mb-8">
    <nav" aria-label="Tabs">
      <?php
      foreach ($navigation_items as $nav_item) {
          echo "
          <div> 
          <a href='{$nav_item['url']}'>
            <span>{$nav_item['title']}</span>
          </a>
          </div> 
          ";
      }
      ?>
    </nav>
</div>