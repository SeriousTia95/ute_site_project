<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CMS Theme</title>
        <meta name="description" content="Drunken Parrot UI Kit is a Twitter Bootstrap Framework design and Theme."/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Loading Bootstrap -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">      
        <!-- Loading Drunken Parrot UI -->
        <link href="css/drunken-parrot.css" rel="stylesheet">
        <link href="css/demo.css" rel="stylesheet">

        <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>

    <body background="images/wallpaper-01.jpg">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <img class="navbar-brand-img" src="images/logo-dark.png">
            </div>
            <div class="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Ranger</a></li>
                    <li><a href="#">Walrus</a></li>
                    <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dah <span class="ss-navigatedown"></span></a>
                       <ul class="dropdown-menu">
                          <div class="arrow top"></div>
                          <li><a href="#">Action</a></li>
                          <li class="active"><a href="#">Another action</a></li>
                          <li><a href="#">Something else</a></li>
                       </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-icons">
                    <li>
                        <a href="#">
                          <span class="fa fa-cog fa-lg"></span><span class="hidden-lg">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                          <span class="fa fa-sign-out fa-lg"></span><span class="hidden-lg">Exit</span>
                        </a>
                    </li>
                </ul>
                <p class="navbar-text navbar-right">Benvenuto, <?php echo $userRow['username']; ?></p>
            </div>
        </nav>
        
        <br><br>
        <!--inizio delle thumbnail-->   
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail thumbnail-caption">
                        <img src="images/thumbnail-large-01.jpg">
                        <div class="caption">
                            <h4>Studenti</h4>
                            <p>
                                <a href="#" class="btn btn-primary">Aggiungi</a>
                                <a href="#" class="btn btn-primary">Elenco</a>
                                <button class="btn btn-primary ss-send" width="60" height="100"> Send</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail thumbnail-caption">
                        <img src="images/thumbnail-large-01.jpg">
                        <div class="caption">
                            <h4>Professori</h4>
                            <p>
                                <a href="#" class="btn btn-primary">Aggiungi</a>
                                <a href="#" class="btn btn-primary">Elenco</a>
								<button class="btn btn-primary ss-send"> Send</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail thumbnail-caption">
                        <img src="images/thumbnail-large-01.jpg">
                        <div class="caption">
                            <h4>Corsi</h4>
                            <p>
                                <a href="#" class="btn btn-primary">Aggiungi</a>
                                <a href="#" class="btn btn-primary">Elenco</a>
								<button class="btn btn-primary ss-send" width="60" height="100"> Send</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/checkbox.js"></script>
        <script src="js/radio.js"></script>
        <script src="js/bootstrap-switch.js"></script>
        <script src="js/toolbar.js"></script>

        <script src="bootstrap/js/prettify.js"></script>
        <script>window.prettyPrint && prettyPrint();</script>
        <script type="text/javascript">
            (function($) {
                // Switch
                $("[data-toggle='switch'][class='switch-large']").bootstrapSwitch({
                    baseClass: 'switch',
                    wrapperClass: 'switch-large'
                });
                $("[data-toggle='switch']").bootstrapSwitch();

                $('#top-toolbar').toolbar({
                    content: '#user-toolbar-options',
                    position: 'top'
                });

                $('#vertical-top-toolbar').toolbar({
                    content: '#user-toolbar-options',
                    position: 'vertical-top'
                });

                $('#vertical-bottom-toolbar').toolbar({
                    content: '#user-toolbar-options',
                    position: 'vertical-bottom'
                });


                var animateButtons = Array.prototype.slice.call( document.querySelectorAll( '.btn-animate' ) ),
                    totalButtons = animateButtons.length;
                    animateButtons.forEach( function( el, i ) {
                        el.addEventListener( 'click', activate, false );
                    } );

            function activate() {
                var self = this, activatedClass = 'btn-activated';

                if( classie.has( this, 'btn-animate-result' ) ) {

                    if( classie.has( this, 'btn-result-success' ) ) {
                        activatedClass = 'btn-animate-success';
                    }

                    if( classie.has( this, 'btn-result-error' ) ) {
                        activatedClass = 'btn-animate-error';
                    }
                }

                if( !classie.has( this, activatedClass ) ) {
                    classie.add( this, activatedClass );
                    setTimeout( function() { classie.remove( self, activatedClass ) }, 1500 );
                }
            }

            })(jQuery);
        </script>       
    </body>

</html>