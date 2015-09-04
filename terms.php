<?php 
session_start();
if(isset($_SESSION['uid'])){
$uid=$_SESSION['uid'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title>ENQUIP- A Classifieds Ads for engg. students</title>

        <!-- Bootstrap core CSS -->
        <link id="switch_style" href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/dropzone.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link rel="stylesheet" type="text/css" href="js/fancybox/helpers/jquery.fancybox-buttons.css?v=2.1.5" media="screen" />
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        



        <nav class="navbar navbar-default" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="index.php" class="navbar-brand ">
                        <span class="logo"><strong>classified</strong><span class="handwriting">ads</span><br />
                            <small >a minimalist theme built with bootstrap </small></span>
                    </a>

                </div>



                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right visible-xs">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="my_account.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="listings.php">Listings</a></li>
                        <li><a href="account_dashboard.php">My account</a></li>
                        <li><a href="account_ad_create.php">Post an ad</a></li>
                    </ul> 
                    <div class="nav navbar-nav navbar-right hidden-xs">
                        <div class="row">

                            <div class="pull-right">


                                <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>Login</a> | ";}
                                else {echo "<a href='logout.php'>logout</a> | ";} ?>
                                <a href="register.php">Register</a> | 
                                <!-- <a href="listings.php">Listings</a> |  -->
                                <a href="account_dashboard.php">My account</a>
                                <a href="account_ad_create.php" class="btn btn-default post-ad-btn">Post an ad</a>

                            </div>	
                        </div>




                    </div>

                </div>
                </div>





            </nav>



            

                        <hr class="topbar"/>
            <div class="container">
    <div class="row">


        <div class="col-md-12">

            <h1>Terms and conditions</h1>
            <hr />
            <!-- Headings & Paragraph Copy -->
            <div class="row">

                <div class="col-md-12">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non nibh sit amet tortor varius ornare ornare varius metus. Nunc mollis elit quis ante ornare at viverra elit porttitor. Cras libero neque, tincidunt molestie malesuada a, iaculis nec dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio erat, hendrerit nec imperdiet vitae, posuere a nulla. Etiam elementum nulla in quam posuere porttitor. Curabitur eget enim libero, a laoreet metus. Suspendisse vitae augue leo, quis porttitor eros. Ut ullamcorper lectus non ipsum dignissim interdum id a magna. Vivamus et augue non ligula sagittis dictum. In sit amet lacus neque. Pellentesque risus ipsum, rhoncus vel viverra sit amet, aliquet ac leo. Phasellus pharetra orci in justo scelerisque et tincidunt lectus rutrum. Aenean enim magna, pellentesque sit amet condimentum eget, euismod ut orci. Duis accumsan iaculis libero, nec elementum turpis viverra pulvinar.
                    </p>
                    <p>
                        Vivamus porta auctor metus eget viverra. Vivamus eu diam metus. Sed vitae sem et justo congue luctus et vitae diam. Nunc at nibh nulla, nec pretium est. Donec eleifend convallis dui vitae rutrum. Fusce eget diam tellus. Suspendisse sagittis sollicitudin erat ac faucibus. Phasellus ut turpis turpis, vel pellentesque enim. Vivamus vitae nibh et justo porttitor dictum porta a orci.
                    </p>
                    <p>
                        Nulla mauris tellus, laoreet id interdum eu, ornare quis lacus. Donec pretium condimentum turpis, sit amet elementum ligula mollis sit amet. Morbi porta sodales velit sed volutpat. Fusce at erat sed sem lobortis mollis quis sed ipsum. Donec facilisis justo at ipsum euismod eu vulputate ligula tempus. Nulla facilisi. Curabitur vitae enim sit amet augue tristique sollicitudin. Nulla dui augue, viverra non bibendum ultrices, luctus eget magna.
                    </p>
                    <p>
                        Donec odio odio, ultrices ac volutpat vel, vestibulum et ante. Donec porttitor commodo facilisis. Nullam feugiat adipiscing nulla, sit amet porttitor nulla consequat non. Duis vitae purus leo, sit amet elementum tortor. Sed blandit iaculis elit id vestibulum. Maecenas quam diam, bibendum ac pharetra vulputate, porta non lectus. Nullam purus augue, tristique ac imperdiet sed, scelerisque eget velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas molestie dignissim. Vestibulum cursus, leo interdum semper gravida, eros enim mollis dolor, vitae aliquam purus risus at justo. Cras quis lacus non lectus rutrum pretium vitae quis nisi. Donec urna nisl, volutpat nec hendrerit vel, auctor a libero. Aenean erat dui, hendrerit eget rhoncus eget, bibendum ut metus.
                    </p>
                    <p>
                        Donec sodales faucibus convallis. Nam vel interdum dolor. Nulla facilisi. Proin varius, mauris vel posuere condimentum, ante orci dictum neque, congue suscipit turpis est sit amet arcu. Mauris et pulvinar orci. Curabitur imperdiet, arcu a tempor accumsan, tortor eros tincidunt elit, sit amet fermentum justo ligula in leo. Nunc felis ligula, placerat sit amet tincidunt et, tincidunt eu urna. Sed at enim neque, ut feugiat sapien. Nulla rhoncus semper rhoncus. Suspendisse vulputate justo nec dui iaculis ut varius arcu scelerisque. Duis fermentum fermentum massa, eget fringilla est condimentum tincidunt.
                    </p>
                </div>


                <!-- Misc Elements -->

            </div><!-- /row -->

        </div>

    </div>
</div><!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sign in to your account</h4>
            </div>
            <div class="modal-body">
                <p>If you have an account with us, please enter your details below.</p>

                <form method="POST" action="account_dashboard.php" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

                    <div class="form-group">
                        <input placeholder="Your username/email" class="form-control" name="email" type="text">                </div>

                    <div class="form-group">
                        <input placeholder="Your password" class="form-control" name="password" type="password" value="">                </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary pull-right">Login</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="modal" href="#modalForgot">Forgot your password?</a>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer" style="text-align: center">
                <div class="error-message"><p style="color: #000; font-weight: normal;">Don't have an account? <a class="link-info" href="register.php">Register now</a></p></div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal -->
<div class="modal fade" id="modalForgot" tabindex="-1" role="dialog" aria-labelledby="modalForgot" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot your password?</h4>
            </div>
            <div class="modal-body">
                <p>Enter your email to continue</p>

                <form role="form">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your email address">
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div><div class="col-md-6">
                        <a href="my_account.php" class="btn btn-primary pull-right">Continue</a>
                        </div>
                    </div>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="footer">
    <div class="container">

        <div class="row">

            <div class="col-sm-4 col-xs-12">
                <p><strong>&copy; Bootstrap Classifieds 2014</strong></p>
                <p>All rights reserved</p>
            </div>			

            <div class="col-sm-8 col-xs-12">
                <p class="footer-links">
                    <a href="index.php" class="active">Home</a>
                    <a href="typography.php">Typography</a>
                    <a href="terms.php">Terms and Conditions</a>
                    <a href="contact.php">Contact Us</a>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/dropzone.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=2.1.5"></script>
<script src="js/global.js"></script>
</body>
</html>