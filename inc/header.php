<?php require("/var/www/html/config/general_conf.php"); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $TITLE; ?></title>
    <meta name="description" content="<?php echo $DESCRIPTION; ?>">
    <meta name="author" content="<?php echo $AUTHOR; ?>">
    <link href="<?php echo $DOCUMENT_ROOT; ?>/content/css/sticky-footer.css" rel="stylesheet">
    <link href="<?php echo $DOCUMENT_ROOT; ?>/content/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo $DOCUMENT_ROOT; ?>/content/css/style2.min.css" rel="stylesheet">
    <link href="<?php echo $DOCUMENT_ROOT; ?>/content/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="https://cdn1.iconfinder.com/data/icons/devops-cycle/256/devops_cycle_2_flat-512.png" type="image/x-icon" />
</head>

<body>
<div id="wrap">
    <nav class="navbar navbar-default bg-black">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Show menu</span>
                    <i class="fa fa-bars fa-2x"></i>
                </button>
                <a class="navbar-brand" href="<?php echo $DOCUMENT_ROOT; ?>">
                    <img alt="Your Techie Guys" src="" alt="Your Techie Guys" title="Your Techie Guys"> 
                </a> 
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
		    <!-- home -->
		    <li><a href="<?php echo $DOCUMENT_ROOT; ?>"></i>About</a></li>
		    <li><a href="<?php echo $DOCUMENT_ROOT; ?>"></i>Technology</a></li>
 		    <li><a href="<?php echo $DOCUMENT_ROOT; ?>"></i>Blog</a></li>
		    <li><a href="<?php echo $DOCUMENT_ROOT; ?>"></i>Contact Us</a></li>
                    </ul>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
