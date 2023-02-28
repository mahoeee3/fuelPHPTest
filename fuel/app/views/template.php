<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <?php echo Asset::css('bootstrap.css'); ?>

</head>

<body>

    <?php isset($header) && print $header; ?>

    <div class="container">


        <?php isset($content) && print $content; ?>


        <?php isset($footer) && print $footer; ?>

    </div>

</body>

</html>