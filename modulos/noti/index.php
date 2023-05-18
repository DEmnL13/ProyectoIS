<?php
include("../../conn.php");
$stm=$conn->prepare("SELECT * FROM noticias");
$stm->execute();
$noticias=$stm->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['titulo'])){
    $txttitulo=(isset($_GET['titulo'])?$_GET['titulo']:"");
    $stm=$conn->prepare("DELETE FROM noticias WHERE titulo=:txttitulo");
    $stm->bindParam(":txttitulo",$txttitulo);
    $stm->execute();
    header("location:index.php");
}
?>

<?php include ("../../template/header.php");?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
  Nueva
</button>

<div class="table-responsive">
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th scope="col">Imagen</th>
                <th scope="col">Titulo</th>
                <th scope="col">Contenido</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($noticias as $noticias){ ?>
            <tr class="">
                <td scope="row"><img src="data:image/jpg;base64"<?php echo $noticias['imagen']; ?>/></td>
                <td><?php echo $noticias['titulo']; ?></td>
                <td><?php echo $noticias['contenido']; ?></td>
                <td><?php echo $noticias['fecha']; ?></td>
                <td>
                <a href="index.php?titulo=<?php echo $noticias['titulo']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php include ("create.php"); ?>

<?php include ("../../template/footer.php");?>