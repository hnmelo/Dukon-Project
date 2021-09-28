<!-- header start -->
<header id="header" class="header">
    <div class="container">
        <nav class="navbar">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./index.html">
                    <div class="logo">
                        <img src="<?php echo Conectar::ruta();?>ASSETS/images/logo/logo.png" class="img-responsive" alt="Dukon" style="width: 220px; height:60px;">
                    </div>
                </a>
            </div>

            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME</a>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo Conectar::ruta();?>VIEW/pages/auth.php" class="dropdown-toggle">INGRESO</a>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo Conectar::ruta();?>VIEW/pages/project.html" class="dropdown-toggle">NUESTRO PROYECTO</a>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo Conectar::ruta();?>VIEW/pages/team.html" class="dropdown-toggle">GRUPO EJECUTOR</a>
                </ul>
            </div><!-- /.nav-collapse -->
        </nav>
    </div>
</header> <!-- /header -->