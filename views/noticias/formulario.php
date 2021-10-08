<fieldset class="form-crear">
    <label for="titulo">Titulo</label>
    <input type="text" placeholder="Título" id="titulo" name="noticia[titulo]" class="input-info" value="<?php echo s($noticia->titulo); ?>">

    <label for="descripcion">Descripción 1</label>
    <textarea id="descripcion" name="noticia[descripcion]" placeholder="Descripción" class="input-info txt_desc"><?php echo s($noticia->descripcion); ?></textarea>

    <label for="descripcion2">Descripción 2</label>
    <textarea id="descripcion2" name="noticia[descripcion2]" placeholder="Descripción" class="input-info txt_desc"><?php echo s($noticia->descripcion2); ?></textarea>
</fieldset>
<fieldset class="form-crear">
    <legend>Agregar Imagenes</legend>

    <label for="imagen">Imagen Principal</label>
    <input type="file" id="imagen" accept="image/jpeg, image/png" name="noticia[imagen]">

    <?php if($noticia->imagen) {?>
        <img src="../../imagenes/<?php echo $noticia->imagen ?>" class="imagen-small">
    <?php } ?>

    <label for="imagen2">Imagen Secundaria</label>
    <input type="file" id="imagen2" accept="image/jpeg, image/png" name="noticia[imagen2]">

    <?php if($noticia->imagen2) { ?>
        <img src="../../imagenes/<?php echo $noticia->imagen2; ?>" class="imagen-small">
    <?php } ?>

</fieldset>
