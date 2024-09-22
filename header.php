<?php
$header = [
    'logo-link' => 'index.php',
    'navigation' => [
        'products' => [
            'product1',
            'product2',
            'product3'
        ],
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
        <img class="header__logo-icon" src="/images/iSpringLogo.svg" alt="iSpring logo">
    </a>
    <div class="header__menu">
        <div class="navigation__menu-hamb hamb">
            <div class="header__hamb-button" id="hamb">
                <span class="header__hamb-button-span"></span>
                <span class="header__hamb-button-span"></span>
                <span class="header__hamb-button-span"></span>
            </div>
        </div>
        <div class="header__popup" id="popup"></div>
        <nav class="header__menu_navigation navigation">
            <ul class="navigation__menu" id="menu">
                <?php foreach ($header['navigation'] as $key => $nav) : ?>
                    <?php if (is_array($nav)): ?>
                        <li class="navigation__item">
                            <a class=" navigation__link navigation__link_header scroll-menu" href="/"><?= $key ?></a>
                            <div class="scroll-menu__list">
                                <?php foreach ($nav as $subNav) : ?>
                                    <a class="scroll-menu__item navigation__link navigation__link_header" href="<?= $subNav ?>.php"><?= $subNav ?></a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    <?php else: ?>
                        <li class="navigation__item">
                            <a class="navigation__link navigation__link_header" href="<?= $nav ?>.php"><?= $nav ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <ul class="navigation__service-menu service-menu" id="serviceMenu">
                <li class="service-menu__item language-item navigation__link_header">EN</li>
                <li class="service-menu__item shopping-cart-item"></li>
                <li class="service-menu__item search-item"></li>
                <li class="service-menu__item login-item navigation__link_header">Log in</li>
            </ul>
        </nav>
    </div>
</div>