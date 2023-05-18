<?php 
if($_POST){
    $imagen=(isset($_POST['imagen'])?$_POST['imagen']:"");
    $titulo=(isset($_POST['titulo'])?$_POST['titulo']:"");
    $contenido=(isset($_POST['contenido'])?$_POST['contenido']:"");
    $fecha=(isset($_POST['fecha'])?$_POST['fecha']:"");

    $stm=$conn->prepare("INSERT INTO noticias(imagen, titulo, contenido, fecha) VALUES(:imagen,:titulo,:contenido,:fecha)");
    $stm->bindParam(":imagen",$imagen);
    $stm->bindParam(":titulo",$titulo);
    $stm->bindParam(":contenido",$contenido);
    $stm->bindParam(":fecha",$fecha);
    $stm->execute();

    header("location:index.php");
}
?>


<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar noticia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <label for="">Imagen:</label>
        <input type="file" class="form-control" name="imagen" value=""></input>

        <label for="">Titulo</label>
        <input type="text" class="form-control" name="titulo" value=""></input>

        <label for="">Contenido</label>
        <input type="text" class="form-control" name="contenido" value=""></input>

        <label for="">Fecha</label>
        <input type="text" class="form-control" name="fecha" value=""></input>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>