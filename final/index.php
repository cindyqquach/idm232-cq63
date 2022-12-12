<link rel="stylesheet" href="/dist/styles/home.css">
<link rel="stylesheet" href="/dist/styles/reset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div> 
    <?php
    include_once __DIR__ . '/app.php';
    $page_title = 'Home';
    include_once __DIR__ . '/_components/header.php'; 
    ?>
</div> 

<img class="hero" src="dist/images/hero.png" alt="hero image"> 
<div class=marquee-box> 
<marquee loop="infinite" direction="scroll"> 
    <img class="marquee-text" src="dist/images/cafemaddy-text.png" alt="cafe maddy"> 
    <img class="marquee-img" src="dist/images/kimchi.png" alt="stickers"> 
    <img class="marquee-img" src="dist/images/mandu.png" alt="stickers"> 
    <img class="marquee-img" src="dist/images/tteok.png" alt="stickers"> 
    <img class="marquee-img" src="dist/images/noods.png" alt="stickers"> 
    <img class="marquee-text" src="dist/images/cafemaddy-text.png" alt="cafe maddy"> 
    <img class="marquee-img" src="dist/images/kimchi.png" alt="stickers"> 
    <img class="marquee-img" src="dist/images/mandu.png" alt="stickers"> 
    <img class="marquee-img" src="dist/images/tteok.png" alt="stickers"> 
    <img class="marquee-img" src="dist/images/noods.png" alt="stickers"> 
</marquee>
</div>

<?php
include_once __DIR__ . '/_components/box-recipe.php';
?>
 
<?php include_once __DIR__ . '/_components/footer.php';
?>