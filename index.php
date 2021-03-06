<?php include_once("inc/config.php"); ?>

<?php
if ($debug === TRUE)
{
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $osworldmap.' v'.$version ?></title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <?php if ($useTheme === TRUE): ?>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
    <?php endif ?>

    <!-- Ribbon -->
    <?php if ($useRibbon === TRUE): ?>
        <link href="css/gh-fork-ribbon.min.css" rel="stylesheet" />
    <?php endif ?>

    <link rel="stylesheet" href="css/osworldmap.css" />   

    <script src="http://maps.google.com/maps/api/js?v=<?php echo $apyversion; ?>&key=<?php echo $apykey; ?>"></script>
    <script src="js/maps.js"></script>
    <script src="js/copyright.js"></script>
</head>

<body onload="load()" onunload="GUnload()">

<?php if ($useRibbon === TRUE): ?>
    <div class="github-fork-ribbon-wrapper left">
        <div class="github-fork-ribbon">
            <a href="<?php echo $urlRibbon; ?>" target="_blank">Fork me on GitHub</a>
        </div>
    </div>
<?php endif ?>

<div id="content">
    <div id="map-canvas"></div>
</div>

</body>
</html>
