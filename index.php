<!doctype html>
<html lang="en">
    <?php require_once("model/config.php");
    if(!empty($_GET["accion"])) 
        $accion=$_GET["accion"];
    else
        $accion="home";
    
    if(is_file("CONTROLLER/".$accion."Controller.php"))
        require_once("CONTROLLER".$accion."Controller.php");
    else
        require_once("CONTROLLER/errorController.php");
    ?>
    <?php include("VIEW/index/header.php") ?>
    <section id="slideshow" class="slideshow">
        <?php include("VIEW/index/slideshow.php") ?>
    </section>
    <div class="col-md-12">
        <h3 class="title t-center">NUESTROS PRODUCTOS </h3>
    </div> <!-- /.col -->
    <section class="feature-top">
        <?php include("VIEW/index/ourproducts.php") ?>
    </section>
    <section class="drk-bg pad80">
        <?php include("VIEW/index/whoweare.php") ?>
    </section>
    <footer>
        <?php include("VIEW/index/footer.php") ?>
    </footer>

<!-- load jquery -->
<script src="ASSETS/js/jquery-2.2.2.min.js"></script>
<!-- load bootstrap -->
<script src="ASSETS/js/bootstrap.min.js"></script>

<!-- revolution slider js files -->
<script src="ASSETS/js/jquery.themepunch.tools.min.js"></script>
<script src="ASSETS/js/jquery.themepunch.revolution.min.js"></script>
<!-- odometer js -->
<script src="ASSETS/js/jquery.appear.js"></script>
<!-- countTo js -->

<script type="text/javascript" src="ASSETS/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="ASSETS/js/extensions/revolution.extension.video.min.js"></script>

<!-- load theme js script file -->
<script src="ASSETS/js/itl_script.js"></script>

</body>

</html>