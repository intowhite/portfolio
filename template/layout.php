<?php
    $y = date('y');
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta charset="UTF-8">
    <title>Josh Kovitz 20<?=$y;?></title>
    <style><?=$css;?></style>
    <script><?=$js_lib;?></script>
</head>
<body>
    <?php include "template/intro.php"; ?>
    <?php include "template/about.php"; ?>
    <?php include "template/skills.php"; ?>
    <?php include "template/work.php"; ?>
    <?php include "template/contact.php"; ?>
    <?php include "template/popup.php"; ?>
    <script><?=$js;?></script>
</body>
</html>