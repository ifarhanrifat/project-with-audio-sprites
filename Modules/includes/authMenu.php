<?php

?>

<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top top-nav" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="../Images/itrainLogo.png" alt="I-Train" id="logo" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right hidden-menu">
                    <li><a href="#"><i class="fa fa-info-circle"></i> About</a></li>
                    <li><a href="#"><i class="fa fa-phone-square"></i> Contact</a></li>
<?php				
					if ($_SESSION['trainee']){
?>
            			<li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class='fa fa-cogs'></i> Tools <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class='fa fa-address-book-o'></i> Account</a></li>
                                <li><a href="#"><i class='fa fa-tachometer'></i> Modules</a></li>
                                <li><a href="#"><i class='fa fa-file-text-o'></i> Tests</a></li>
                                <li><a href="#"><i class='fa fa-newspaper-o'></i> Module/Exam Report</a></li>
                                <li><a href="#"><i class='fa fa-folder-o'></i> Files</a></li>
                            </ul>
                        </li>
<?php					
					}
?>
                    <li class="dropdown-toggle">
                    	<a href="#" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome <?php echo $_SESSION['firstname']; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu multi-level">
                             <li><a href="#"><i class="fa fa-bell"></i> Notifications</a></li>
<?php
                             if ($_SESSION['trainee']){echo "<li><a href='#'><i class='fa fa-question-circle'></i> Help</a></li>";}
?>
                             <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li> 
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        <div class="subHeader"></div>
        
    </nav>