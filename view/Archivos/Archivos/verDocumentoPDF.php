
<div class="form-group">
    <a class='btn btn-success' href="<?php echo getUrl("Archivos", "Archivos", "listarArchivos"); ?>" >Regresar</a></button>
</div>
<div class="form-group">
    <h1 class="page-header"> Ver Documento PDF </h1>
</div>

<div>
    <embed src="<?php echo "archivos/".$archivo[0]['ruta'] ?>" type="application/pdf" width="1400px" height="900px">
</div>
