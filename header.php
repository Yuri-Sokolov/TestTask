<?php
$header = [
    'logo-link' => 'index.php',
    'navigation' => [
        'products',
        'pricing',
        'support',
        'customers',
        'company',
        'blog'
    ]
]

?>

<div class="header__menu container_1000">
    <div class="header__menu_content">
        <div class="header__menu_logo"><img src="/images/iSpringLogo.svg" /> </div>
    </div>
    <nav class="header__menu_navigation navigation">
        <ul class="navigation__menu">
            <?php foreach ($header['navigation'] as $nav) : ?>
                <li class="navigation__item"><a class="navigation__link navigation__link_header" href="<?= $nav ?>.php"><?= $nav ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <!-- <ul class="navigation__menu">
            <span class="navigation__item scroll-menu">Products</span>
            <span class="navigation__item">Pricing</span>
            <span class="navigation__item">Support</span>
            <span class="navigation__item">Customers</span>
            <span class="navigation__item">Company</span>
            <span class="navigation__item">Blog</span>
        </ul> -->

    </nav>
</div>