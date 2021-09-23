<?php
include '../../model/dbconnection.php';
if (isset($_GET['crear'])) {
    $lastId = getLastId($conexion);
    if ($_GET['crear'] === 'error') {
        echo "<script> alert('Producto no pudo ser creado') </script>";
    }
?>
    <form action="../../controller/product.controller.php?create" method="POST">
        <div class="form-group ">
            <label class='fw-bold mt-3' for="codigoProducto">Código</label>
            <input type="text" name="codigoProducto" placeholder='Código del producto...' class='form-control mt-1' value=<?= $lastId ?> disabled>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="username">Nombre</label>
            <input type="text" name="nombreProducto" placeholder='Nombre del producto...' class='form-control mt-1' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="fullname">Tipo Producto</label>
            <select name="tipoProducto" id="tipoProducto">
                <option value="1">Silla</option>
                <option value="2">Mesa</option>
                <option value="3">Bombo</option>
                <option value="4">Triptico</option>
                <option value="5">Lampara</option>
            </select>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="referenciaProducto" required>Referencia del producto</label>
            <input type="text" name="referenciaProducto" placeholder='ADJK-23  ...' class='form-control mt-1' required style='height:30px;'>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="precioProducto" required>Precio</label>
            <input type="number" name="precioProducto" placeholder='Precio producto...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="saldoInicialProducto" required>Saldo Inicial</label>
            <input type="number" name="saldoInicialProducto" placeholder='Saldo inicial producto...' class='form-control mt-1' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="urlImgProducto" required>Imágen URL</label>
            <input type="text" name="urlImgProducto" placeholder='URL imágen producto...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="stockMaximoProducto" required>Stock máximo</label>
            <input type="number" name="stockMaximoProducto" placeholder='URL imágen producto...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="stockMinimoProducto" required>Stock minimo</label>
            <input type="number" name="stockMinimoProducto" placeholder='URL imágen producto...' class='form-control mt-1' required>
        </div>



        <div class="form-group">
            <label class='fw-bold mt-3' for="estadoProducto">Estado</label>
            <select name="estadoProducto" id="tipoProducto">
                <option value="nuevo">Nuevo</option>
                <option value="garantia">Garantia</option>
                <option value="devuelto">Devuelto</option>
            </select>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="garantiaProducto" required>Garantía en meses</label>
            <input type="number" name="garantiaProducto" placeholder='Garantia producto...' class='form-control mt-1' value='12' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="descripcionProducto" required>Descripción</label>
            <input type="text" name="descripcionProducto" placeholder='URL imágen producto...' class='form-control mt-1' required style='height:60px;'>
        </div>


        <input type="submit" class='btn  btn-success w-100 pt-10 mt-3' name='registeruser' value="Crear Producto" style='margin:40px;'>
    </form>
<?php

} else if (isset($_GET['editar'])) {

    require '../../controller/product.controller.php';

    if ($_GET['editar'] === 'error') {
        echo "<script> alert('Producto no pudo ser editado') </script>";
    }
    $id = $_GET['editar'];
    $traerproductos = resultsById($conexion, $id);
    $productos = mysqli_fetch_array($traerproductos);
?>

    <form action="../../controller/product.controller.php?edit=<?= $productos['pro_cod'] ?>" method="POST">
        <div class="form-group ">
            <label class='fw-bold mt-3' for="codigoProducto">Código</label>
            <input type="text" value=<?= $productos['pro_cod'] ?> name="codigoProducto" placeholder='Código del producto...' class='form-control mt-1' disabled>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="username">Nombre</label>
            <input type="text" name="nombreProducto" placeholder='Nombre del producto...' value='<?php echo $productos['pro_nomb'] ?> ' class='form-control mt-1' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="tipoProducto">Tipo Producto</label>
            <select name="tipoProducto" id="tipoProducto">
                <option <?php if ($productos['pro_idtipro'] == '1') {
                            echo ("selected");
                        } ?> value="1">Silla</option>
                <option <?php if ($productos['pro_idtipro'] == '2') {
                            echo ("selected");
                        } ?> value="2">Mesa</option>
                <option <?php if ($productos['pro_idtipro'] == '3') {
                            echo ("selected");
                        } ?> value="3">Bombo</option>
                <option <?php if ($productos['pro_idtipro'] == '4') {
                            echo ("selected");
                        } ?> value="4">Triptico</option>
                <option <?php if ($productos['pro_idtipro'] == '5') {
                            echo ("selected");
                        } ?> value="5">Lampara</option>
            </select>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="referenciaProducto" required>Referencia del producto</label>
            <input type="text" name="referenciaProducto" placeholder='ADJK-23  ...' class='form-control mt-1' value='<?= $productos['pro_referencia'] ?>' required style='height:30px;'>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="precioProducto" required>Precio</label>
            <input type="number" value=<?= $productos['pro_Valor'] ?> name="precioProducto" placeholder='Precio producto...' class='form-control mt-1' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="cantidadProducto" required>Cantidad Disponible</label>
            <input type="number" value=<?= $productos['pro_CantDisponible'] ?> name="cantidadProducto" placeholder='Precio producto...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="saldoInicialProducto" required>Saldo Inicial</label>
            <input type="number" value=<?= $productos['pro_saldoInicial'] ?> name="saldoInicialProducto" placeholder='Saldo inicial producto...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="entradasProducto" required>Entradas</label>
            <input type="number" value=<?= $productos['pro_entrada'] ?> name="entradasProducto" placeholder='Entradas producto...' class='form-control mt-1' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="salidasProducto" required>Salidas</label>
            <input type="number" value=<?= $productos['pro_salidas'] ?> name="salidasProducto" placeholder='Salidas producto...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="saldoProducto" required>Saldo</label>
            <input type="number" value=<?= $productos['pro_saldo'] ?> name="saldoProducto" placeholder='Saldo producto...' class='form-control mt-1' required disabled>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="urlImgProducto" required>Imágen URL</label>
            <input type="text" value='<?= $productos['pro_image'] ?>' name="urlImgProducto" placeholder='URL imágen producto...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="stockMaximoProducto" required>Stock máximo</label>
            <input type="number" value=<?= $productos['pro_stockMax'] ?> name="stockMaximoProducto" placeholder='URL imágen producto...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="stockMinimoProducto" required>Stock minimo</label>
            <input type="number" value=<?= $productos['pro_stockMin'] ?> name="stockMinimoProducto" placeholder='URL imágen producto...' class='form-control mt-1' required>
        </div>



        <div class="form-group">
            <label class='fw-bold mt-3' for="estadoProducto">Estado</label>
            <select name="estadoProducto" id="tipoProducto">
                <option <?php if ($productos['pro_estado'] == 'nuevo') {
                            echo ("selected");
                        } ?> value="nuevo">Nuevo</option>
                <option <?php if ($productos['pro_estado'] == 'garantia') {
                            echo ("selected");
                        } ?> value="garantia">Garantia</option>
                <option <?php if ($productos['pro_estado'] == 'devuelto') {
                            echo ("selected");
                        } ?> value="devuelto">Devuelto</option>
            </select>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="garantiaProducto" required>Garantía en meses</label>
            <input type="number" value=<?= $productos['pro_garant'] ?> name="garantiaProducto" placeholder='Garantia producto...' class='form-control mt-1' value='12' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="descripcionProducto" required>Descripción</label>
            <input type="text" value='<?= $productos['pro_observac'] ?> ' name="descripcionProducto" placeholder='URL imágen producto...' class='form-control mt-1' required style='height:60px;'>
        </div>


        <input type="submit" class='btn  btn-info w-100 pt-10 mt-3' name='editproduct' value="editar Producto" style='margin:40px;'>
    </form>
<?php
} else {
    require '../../controller/product.controller.php';
    $todosProductos = results($conexion);
    if (isset($_GET['deleted'])) {
        if ($_GET['deleted'] == 'true') {
            echo '<script type="text/javascript">
    alert ("☝ ☝ ☝ - Su Producto ha Sido eliminado Exitosamente - ☝ ☝ ☝ ");
    </script>';
        } else {
            echo '<script type="text/javascript">
    alert ("¡Oops! Algo ha salido mal. Intentalo mas tarde");
    </script>';
        }
    }
?>
    <table class="table table-bordered">
        <tr>
            <th>Código</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Entradas</th>
            <th>Salidas</th>
            <th>Saldo</th>
            <th>Descripcion</th>
            <th>Opciones</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($todosProductos)) {
        ?>
            <tr>
                <td><?php echo $row["pro_cod"] ?></td>
                <td><?php echo $row["pro_nomb"] ?></td>
                <td><?php echo $row["pro_Valor"] ?></td>
                <td><?php echo $row["pro_entrada"] ?></td>
                <td><?php echo $row["pro_salidas"] ?></td>
                <td><?php echo $row["pro_saldo"] ?></td>
                <td><?php echo $row["pro_referencia"] ?></td>
                <td class="d-flex align-items-center justify-content-center text-center">
                    <a href="../admin/productsview.php?editar=<?= $row['pro_cod'] ?>" class='btn btn-info'><i class="fas fa-user-edit"></i></a>
                    <a class='deleted btn btn-danger <?= $row['pro_cod'] ?>' value='<?= $row['pro_nomb'] ?>'><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="../admin/productsview.php?crear" class='btn btn-success mt-2'>Crear Producto</a>
<?php
} ?>