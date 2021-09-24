<!doctype html>
<html lang="en">
    <?php require_once("model/config.php");
    if(!empty($_GET["accion"])) 
        $accion=$_GET["accion"];
    else
        $accion="home";
    
    if(is_file("controller/".$accion."Controller.php"))
        require_once("controller".$accion."Controller.php");
    else
        require_once("controller/errorController.php");
    ?>
    <?php include("view/index/header.php") ?>
    <section id="slideshow" class="slideshow">
        <?php include("view/index/slideshow.php") ?>
    </section>
    <div class="col-md-12">
        <h3 class="title t-center">NUESTROS PRODUCTOS </h3>
    </div> <!-- /.col -->
    <section class="feature-top">
        <?php include("view/index/ourproducts.php") ?>
    </section>
    <section class="drk-bg pad80">
        <?php include("view/index/whoweare.php") ?>
    </section>
    <footer>
        <?php include("view/index/footer.php") ?>
    </footer>

<!-- load jquery -->
<script src="assets/js/jquery-2.2.2.min.js"></script>
<!-- load bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- revolution slider js files -->
<script src="assets/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
<!-- odometer js -->
<script src="assets/js/jquery.appear.js"></script>
<!-- countTo js -->

<script type="text/javascript" src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.video.min.js"></script>

<!-- load theme js script file -->
<script src="assets/js/itl_script.js"></script>

</body>

</html>