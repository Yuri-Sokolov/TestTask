<?php
$languages = [
    'english',
    'spanish',
    'french',
    'german',
    'italian',
    'japanese',
    'portuguese',
    'russian',
    'polish',
    'uzbek',
    'chinese simplified',
    'chinese traditional',
    'mongolian',
    'norwegian',
    'ukrainian',
    'indonesian',
    'finnish',
    'azerbaijani'
]
?>

<div class="products-languages__languages-list">
    <?php foreach($languages as $language) : ?>
        <span class="products-languages__languages-item"><?= $language ?></span>
    <?php endforeach; ?>
</div>