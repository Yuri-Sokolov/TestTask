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
    ],
    'service-navigation' => [
        'language',
        'shopping-cart',
        'search',
        'log in'
    ]
]

?>

<div class="header__container container_1000">
    <a class="header__logo" href="./index.php">
        <img class="header__logo-icon" src="/images/iSpringLogo.svg" alt="" />
    </a>
    <div class="header__menu">
        <div class="header__hamb-button">
            <span class="header__hamb-button-span"></span>
        </div>
        <nav class="header__menu_navigation navigation">
            <ul class="navigation__menu">
                <?php foreach ($header['navigation'] as $nav) : ?>
                    <li class="navigation__item"><a class="navigation__link navigation__link_header" href="<?= $nav ?>.php"><?= $nav ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="navigation__service-menu service-menu">
                <li class="service-menu__item language-item navigation__link_header">EN</li>
                <li class="service-menu__item shopping-cart-item"></li>
                <li class="service-menu__item search-item"></li>
                <li class="service-menu__item login-item navigation__link_header">Log in</li>
            </ul>
        </nav>
    </div>
</div>