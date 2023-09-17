<?php

declare(strict_types=1);

// basis verwijzing
const ROOT = "/Athvise";

// classes
require_once("classes/DBConn.php");
require_once("classes/Pages.php");
require_once("classes/Customer.php");
require_once("classes/Status.php");
//require_once("classes/Tickets.php");

// session_start wordt zo opgeroepen over de gehele website
session_start();

?>
<!-- html / pagina oproepen -->
<!DOCTYPE html>
<html lang="nl">

<head>
    <?php $page = Pages::getHeader(); ?>
    <?php if ($page == "" || $page == "home" || $page == "about" || $page == "contact" || $page == "services") : ?>
        <link rel="stylesheet" href="src/css/styles.css">
    <?php else : ?>
        <link rel="stylesheet" href="../src/css/styles.css">
    <?php endif; ?>
    <title>Athvise</title>
</head>
<body>
<!-- pages worden zo opgeroepen -->
<?php
$page = Pages::getHeader();
require_once("required/header.php");

if ($page == "Login" ) {
    require_once("pages/account/" . $page . ".php");
} else {
    $page = empty($page) ? "Home" : $page;

    require_once("pages/" . $page . ".php");
}

require_once("required/footer.php");
?>
</body>

</html>