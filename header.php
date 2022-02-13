<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/wp-content/themes/portfolio/assets/css/base.css" />
    <link rel="stylesheet" href="/wp-content/themes/portfolio/assets/css/header.css" />
    <link rel="stylesheet" href="/wp-content/themes/portfolio/assets/css/front-page.css" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
    $navItems = wp_get_nav_menu_items('main-menu');
?>

<nav>
    <a class="logo" href="/">Marcus Hägerstrand</a>

    <p class="status">Available for internship</p>
    
    <div>
        <?php $objectId = get_queried_object();
            foreach ($navItems as $navItem) : ?>
                <a class="nav-item"href="<?= $navItem->url; ?>"><?= $navItem->title; ?></a>
        <?php endforeach; ?>
    </div>
</nav>
<main>