<meta charset="utf-8">
<meta name="robots" content="index,follow" />
<!-- // TODO -->
<meta name="theme-color" content="#D4AF37">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css file -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/custom.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="assets/css/responsive.css">
<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo/logo.png">
<link href="assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" />
<meta name="author" content="Dev Gadhvi">
<link rel="canonical" href="<?= "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<?php
$defaultKeywords = '';
$defaultDescription = '';
?>

<meta name="keywords" content="<?= (isset($metaKeywords) && $metaKeywords != '') ? $metaKeywords  : $defaultKeywords  ?>">
<meta name="description" content="<?= (isset($metaDescription) && $metaDescription != '') ? $metaDescription  : $defaultDescription ?>" />
<!-- Title -->
<title><?= (isset($pageName) && $pageName != '') ? $pageName . ' |' : '' ?> Charani Sahitya</title>