<?php ob_start(); ?>
<header class="mainmenu">
    <div class="container">
        <a href="<?=ROOT?>"><h1><span>Ath</span>vise</h1></a>
        <ul>
            <?php if($page == "about") : ?>
                <li>
                    <a href="<?= ROOT ?>/about">Over ons</a>
                </li>
            <?php else : ?>
                <li>
                    <a href="<?= ROOT ?>/about">over ons</a>
                </li>
            <?php endif; ?>
            <?php if($page == "contact") : ?>
                <li>
                    <a href="<?= ROOT ?>/contact">Contact</a>
                </li>
            <?php else : ?>
                <li>
                    <a href="<?= ROOT ?>/contact">Contact</a>
                </li>
            <?php endif; ?>
            <?php if($page == "services") : ?>
                <li>
                    <a href="<?= ROOT ?>/services">Services</a>
                </li>
            <?php else : ?>
                <li>
                    <a href="<?= ROOT ?>/services">Services</a>
                </li>
            <?php endif; ?>


            <?php if($page == "account/login") : ?>
                <li>
                    <a class="button alt" href="<?= ROOT ?>/account/login">Inloggen</a>
                </li>
            <?php else : ?>
                <li>
                    <a class="button" href="<?= ROOT ?>/account/login">Inloggen</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</header>