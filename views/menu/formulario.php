<fieldset class="form-crear">
    <label for="nombre">Nombre del Producto</label>
    <input type="text" placeholder="nombre" id="nombre" name="comidas[nombre]" class="input-info" value="<?php echo s($comidas->nombre); ?>">

    <div class="div-form">
        <label for="imagen">Imagen de Producto</label>
        <input type="file" id="imagen" accept="image/jpeg, image/png" name="comidas[imagen]">

        <?php if($comidas->imagen) {?>
            <img src="../../imagenes/<?php echo $comidas->imagen ?>" class="imagen-small">
        <?php } ?>

    </div>
    
    <label for="descripcion">Descripción del Producto</label>
    <textarea id="descripcion" name="comidas[descripcion]" placeholder="descripcion" class="input-info txt_desc"><?php echo s($comidas->descripcion); ?></textarea>
</fieldset>

