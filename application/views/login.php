<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Game Station</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(VENDOR); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(VENDOR); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="<?php echo base_url(CSS); ?>/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.<?php echo base_url(JS); ?>/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="index">

<!-- Navigation -->
<nav id="mainNav1" class="navbar navbar-default navbar-custom navbar-fixed-top affix">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="<?php echo site_url();?>">Game Station</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#login">Login</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo site_url('users/signup');?>">Sign Up</a>
                </li>
                <li>
                    <a class="page-scroll" href="#games">Games</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Services Section -->
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="icon-paragraph-justify2"></i>Login Form </h4>
                </div>
                <form method="post" action="<?php echo site_url('users/login') ?>">
                    <h5>Email</h5>
                    <input type="text" placeholder="Enter your email id" name="email" value="<?php echo set_value('email'); ?>" class="form-control" size="50" />
                    <div class="errorMessage"><?php echo form_error('email'); ?></div>
                    <h5>Password</h5>
                    <input type="password" placeholder="Enter your password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" size="50" />
                    <div class="errorMessage"><?php echo form_error('password'); ?></div>
                    <div><br>
                        <input type="submit" class="btn btn-primary" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy;</span>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="<?php echo base_url(VENDOR); ?>/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(VENDOR); ?>/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo base_url(JS); ?>/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url(JS); ?>/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="<?php echo base_url(JS); ?>/agency.min.js"></script>

</body>

</html>