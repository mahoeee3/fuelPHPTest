<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Initial</title>
    <?php echo Asset::css('bootstrap.css'); ?>

</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">MCCB</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo Uri::create('initial/index');?>">Home</a></li>
                <li><a href="<?php echo Uri::create('company/index');?>">Empresas</a></li>
                <li><a href="<?php echo Uri::create('contact/index');?>">Contatos</a></li>
            </ul>
        </div>
    </nav>

</body>

</html>