<h2>Agregar Usuario</h2>

<form action="<?php echo APP_URL."/users/add"; ?>" method="POST">
   
    <div class="form-group">
        <label for="username">Nombre:</label>
        <input class="form-control" type="text" name="username">
    </div>
    
    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input class="form-control" type="password" name="password">
    </div>

        <label for="type_id">Tipo</label>
        <select class="form-control" name="type_id" id="type_id">
            <?php
            foreach ($types as $type):?>
            <option value="<?php echo $type["types"]["id"];?>">
                <?php echo $type ["types"] ["name"];?>
            </option>
            <?php endforeach;?>
        </select>
    <br>
    <center>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </center>
</form>