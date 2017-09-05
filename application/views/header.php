<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><?php if($pageTitle) echo $pageTitle . ' | '; ?>Indian Academy of Sciences</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Raleway:100,400,300,600" rel="stylesheet" type="text/css">

    <!-- Javascript calls
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js"></script> -->
	<script type="text/javascript" src="<?=PUBLIC_URL?>js/content-tools.min.js"></script>
    <script type="text/javascript" src="<?=PUBLIC_URL?>js/editor.js"></script>

    <script type="text/javascript">var base_url = "<?= BASE_URL?>";</script>
    <script type="text/javascript" src="<?=PUBLIC_URL?>js/common.js"></script>
    
    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="css/skeleton.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/content-tools.min.css">

    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/navbar.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/carousel.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/page.css?v=1.0">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/flat.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/archive.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/form.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/general.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/aux.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/social.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/viewer.css">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/favicon.png">
</head>
<body>

    <!-- Google Analytics
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <nav class="navbar navbar-default navbar-fixed-top wider">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?=PUBLIC_URL?>images/logo.png" alt="Logo of the Indian Academy of Sciences" class="img-circle"></a>
                <p class="navbar-text"><span class="head">Indian Academy of Sciences</span><br /><span class="subhead">Content Management System</span></p>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <?=$this->printNavigation($navigation)?>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <!-- End Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
