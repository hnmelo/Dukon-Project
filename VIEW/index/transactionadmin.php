<?php
include '../../model/dbconnection.php';
if (isset($_GET['crear'])) {
    $lastId = getLastId($conexion);
    if ($_GET['crear'] === 'error') {
        echo "<script> alert('La transaccion no pudo ser creada') </script>";
    }
?>
    <form action="../../controller/trans.controller.php?create" method="POST">
        <div class="form-group ">
            <label class='fw-bold mt-3' for="idTrans">Código</label>
            <input type="text" name="idTrans" placeholder='Código de transacción...' class='form-control mt-1' value=<?= $lastId ?> disabled>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="idEmpleado">Empleado</label>
            <input type="text" name="idEmpleado" placeholder='Código del empleado...' class='form-control mt-1' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="fullname">Código de Documento</label>
            <select name="idDoc" id="idDoc">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="numDoc" required>Número Documento</label>
            <input type="number" name="numDoc" placeholder='Número consecutivo del documento. class='form-control mt-1' required style='height:30px;' value=<?= $lastId ?> disabled>>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="idUsuario" required>Usuario</label>
            <input type="text" name="idUsuario" placeholder='Código del usuario...' class='form-control mt-1' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="valTotal" required>Valor Total</label>
            <input type="number" name="valTotal" placeholder='Valor total de transacción...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="fechaTrans" required>Fecha</label>
            <input type="date" name="fechaTrans" placeholder='Fecha Transacción...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="garantiaTrans" required>Garantía en meses</label>
            <input type="number" name="garantiaTrans" placeholder='Garantia producto...' class='form-control mt-1' value='12' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="tipoPago" required>Tipo Pago</label>
            <input type="text" name="tipoPago" placeholder='Tipo de pago...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="valorPago" required>Valor pago</label>
            <input type="number" name="valorPago" placeholder='Valor del pago...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="descuentoTrans" required>Descuento</label>
            <input type="number" name="descuentoTrans" placeholder='Descuento...' class='form-control mt-1' value='0' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="impuestoTrans" required>impuesto</label>
            <input type="number" name="impuestoTrans" placeholder='Impuesto en porcentaje...' class='form-control mt-1' value='19' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="estadoTrans" required>Estado</label>
            <input type="text" name="estadoTrans" placeholder='Fecha Transacción...' class='form-control mt-1' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="observacionesTrans" required>Obsevaciones</label>
            <input type="text" name="observacionesTrans" placeholder='Observaciones de transacción...' class='form-control mt-1' required style='height:60px;'>
        </div>


        <input type="submit" class='btn  btn-success w-100 pt-10 mt-3' name='registeruser' value="Crear Producto" style='margin:40px;'>
    </form>
<?php

} else if (isset($_GET['editar'])) {

    require '../../controller/trans.controller.php';

    if ($_GET['editar'] === 'error') {
        echo "<script> alert('La transaccion no pudo ser editada') </script>";
    }
    $id = $_GET['editar'];
    $traerTrans = resultsById($conexion, $id);
    $Transaccion= mysqli_fetch_array($traerTrans);
?>

    <form action="../../controller/trans.controller.php?edit=<?= $Transaccion['trans_id'] ?>" method="POST">
        <div class="form-group ">
            <label class='fw-bold mt-3' for="idTrans">Código</label>
            <input type="text" value='<?= $Transaccion['trans_id'] ?>' name="idTrans" placeholder='Código de transacción...' class='form-control mt-1' disabled>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="idEmpleado">Empleado</label>
            <input type="text" name="idEmpleado" placeholder='Código del empleado...' value='<?php echo $Transaccion['trans_idemple']?>' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="fullname">Código de Documento</label>
            <select name="idDoc" id="idDoc">
                <option <?php if ($Transaccion['trans_docod'] == '1') {
                            echo ("selected");
                        } ?> value="1">1</option>
                <option <?php if ($Transaccion['trans_docod'] == '2') {
                            echo ("selected");
                        } ?> value="2">2</option>
                <option <?php if ($Transaccion['trans_docod'] == '3') {
                            echo ("selected");
                        } ?> value="3">3</option>
                <option <?php if ($Transaccion['trans_docod'] == '4') {
                            echo ("selected");
                        } ?> value="4">4</option>
                <option <?php if ($Transaccion['trans_docod'] == '5') {
                            echo ("selected");
                        } ?> value="5">5</option>
            </select>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="numDoc" required>Número Documento</label>
            <input type="number" name="numDoc" placeholder='Número consecutivo del documento.' class='form-control mt-1' required style='height:30px;' value='<?= $Transaccion['trans_numdoc'] ?>' disabled>>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="idUsuario" required>Usuario</label>
            <input type="text" value='<?= $Transaccion['trans_usuid'] ?>' name="idUsuario" placeholder='Código del usuario...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="valTotal" required>Valor Total</label>
            <input type="number" value='<?= $Transaccion['trans_valtotal'] ?>' name="valTotal" placeholder='Valor total de transacción...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="fechaTrans" required>Fecha</label>
            <input type="date" value='<?= $Transaccion['trans_fecha'] ?>' name="fechaTrans" placeholder='Fecha Transacción...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="garantiaTrans" required>Garantía en meses</label>
            <input type="number" value='<?= $Transaccion['trans_estgarantia'] ?>' name="garantiaTrans" placeholder='Garantia producto(s)...' class='form-control mt-1' value='12' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="tipoPago" required>Tipo Pago</label>
            <input type="text" value='<?= $Transaccion['trans_Tipago'] ?>' name="tipoPago" placeholder='Tipo de pago...' class='form-control mt-1'  required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="valorPago" required>Valor pago</label>
            <input type="number" value='<?= $Transaccion['trans_valpago'] ?>' name="valorPago" placeholder='Valor del pago...' class='form-control mt-1' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="descuentoTrans" required>Descuento</label>
            <input type="number" value='<?= $Transaccion['trans_desc'] ?>' name="descuentoTrans" placeholder='Descuento...' class='form-control mt-1' value='0' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="impuestoTrans" required>impuesto</label>
            <input type="number" value='<?= $Transaccion['trans_impuesto'] ?>' name="impuestoTrans" placeholder='Impuesto en porcentaje...' class='form-control mt-1' value='19' required>
        </div>

        <div class="form-group">
            <label class='fw-bold mt-3' for="estadoTrans" required>Estado</label>
            <input type="text" value='<?= $Transaccion['trans_Estado'] ?>' name="estadoTrans" placeholder='Fecha Transacción...' class='form-control mt-1' required>
        </div>


        <div class="form-group">
            <label class='fw-bold mt-3' for="observacionesTrans" required>Obsevaciones</label>
            <input type="text" value='<?= $Transaccion['trans_Obser'] ?>' name="observacionesTrans" placeholder='Observaciones de transacción...' class='form-control mt-1' required style='height:60px;'>
        </div>

        <input type="submit" class='btn  btn-success w-100 pt-10 mt-3' name='editTrans' value="Editar Transacción" style='margin:40px;'>

    </form>
<?php
} else {
    require '../../controller/trans.controller.php';
    $todatransaccion = results($conexion);
    if (isset($_GET['delete'])) {
        if ($_GET['delete'] == 'true') {
            echo '
    alert ("☝ ☝ ☝ - Su transacción ha Sido eliminada Exitosamente - ☝ ☝ ☝ ");
    </script>';
        } else {
            echo '
    alert ("¡Oops! Algo ha salido mal. Intentalo mas tarde");
    </script>';
        }
    }
?>
    <table class="table table-bordered">
        <tr>
            <th>Código</th>
            <th>Empleado</th>
            <th>Usuario</th>
            <th>Valor Total</th>
            <th>Tipo Pago</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Observaciones</th>
            <Th></th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($todatransaccion)) {
        ?>
            <tr>
                <td><?php echo $row["trans_id"] ?></td>
                <td><?php echo $row["trans_idemple"] ?></td>
                <td><?php echo $row["trans_usuid"] ?></td>
                <td><?php echo $row["trans_valtotal"] ?></td>
                <td><?php echo $row["trans_Tipago"] ?></td>
                <td><?php echo $row["trans_fecha"] ?></td>
                <td><?php echo $row["trans_Estado"] ?></td>
                <td><?php echo $row["trans_Obser"] ?></td>
                <td class="d-flex align-items-center justify-content-center text-center">
                    <a href="../admin/transactionview.php?editar=<?= $row['trans_id'] ?>" class='btn btn-info'><i class="fas fa-user-edit"></i></a>
                    <a class='delete btn btn-danger <?= $row['trans_id'] ?>' value='<?= $row['trans_idemple'] ?>'><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="../admin/transactionview.php?crear" class='btn btn-success mt-2'>Crear Transacción</a>
<?php
} ?>