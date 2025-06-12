<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="././css/banner/banner.css">
<script src="././js/banner/banner.js" defer></script>
<body>
    <?php
$images = [
    '././image/anh/anh1.jpg',
    '././image/anh/anh2.jpg',
    '././image/anh/anh3.jpg',
];
?>

<div class="slider-container">
    <div class="slider">
        <?php foreach ($images as $image): ?>
            <div class="slide">
                <img src="<?php echo $image; ?>" alt="Slide">
            </div>
        <?php endforeach; ?>
    </div>
    <button class="nav-button left">&#10094;</button>
    <button class="nav-button right">&#10095;</button>
</div>
</body>
</html>