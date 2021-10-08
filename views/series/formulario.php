<fieldset class="form-crear">
    <label for="titulo">Titulo</label>
    <input type="text" placeholder="Título" id="titulo" name="serie[titulo]" class="input-info" value="<?php echo s($serie->titulo); ?>">

    <div class="div-form">
        <label for="año">Año</label>
        <select name="year">
            <option value="0">Año</option>
            <?php  for($i=1990;$i<=2020;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
        </select>

        <label for="imagen">Imagen</label>
        <input type="file" id="imagen" accept="image/jpeg, image/png" name="serie[imagen]">

        <?php if($serie->imagen) {?>
            <img src="../../imagenes/<?php echo $serie->imagen ?>" class="imagen-small">
        <?php } ?>
    </div>
    
    
    <label for="trama">Trama</label>
    <textarea id="trama" name="serie[trama]" placeholder="trama" class="input-info txt_desc"><?php echo s($serie->trama); ?></textarea>
</fieldset>

