  <h2>Añadir Categoria</h2>
<form action="<?php echo APP_URL."/categories/add"; ?>" method="POST">
   
    <div class="form-group">
        <label for="name">Nombre:</label>
        <input class="form-control" type="text" name="name">
    </div>
    
    <button type="submit" class="btn btn-primary">Añadir</button>  

</form>