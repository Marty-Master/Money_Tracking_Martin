<h2>Editar Transacción</h2>

<form action="<?php echo APP_URL."/transactions/edit"; ?>" method="POST">
	<input type="hidden" name="id" value="<?php echo $transaction["id"]; ?>">
   
    <div class="form-group">
        <label for="operation">Operación:</label>
        <?php if ($transaction["amount"] <= 0) { ?>
        <select class="form-control" name="operation" id="operation">
            <option value="egreso">Egreso</option>
            <option value="ingreso">Ingreso</option>
        </select>
        <?php } else { ?>
        <select class="form-control" name="operation" id="operation">
            <option value="ingreso">Ingreso</option>
            <option value="egreso">Egreso</option>
        </select>
        <?php } ?>
    </div>
    
    <div class="form-group">
         <label for="account_id">Cuenta</label>
        <select class="form-control" name="account_id" id="account_id">
            <?php
            foreach ($accounts as $account):
                if($account["accounts"]["id"]
                   == $transaction["account_id"]) { ?>
            <option selected value="<?php echo $account["accounts"]["id"];?>">
            <?php echo $account ["accounts"] ["name"];?>
            </option>
                    
                <?php }else{?>
            <option value="<?php echo $account["accounts"]["id"];?>">
            <?php echo $account ["accounts"] ["name"];?>
            </option>
           <?php }?>
            
            <?php endforeach;?>
        </select>
    </div>

    <div class="form-group">
         <label for="category_id">Categoria</label>
        <select class="form-control" name="category_id" id="category_id">
            <?php
            foreach ($categories as $category):
                if($category["categories"]["id"]
                   == $transaction["category_id"]) { ?>
            <option selected value="<?php echo $category["categories"]["id"];?>">
            <?php echo $category ["categories"] ["name"];?>
            </option>
                    
                <?php }else{?>
            <option value="<?php echo $category["categories"]["id"];?>">
            <?php echo $category ["categories"] ["name"];?>
            </option>
           <?php }?>
            
            <?php endforeach;?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="username">Descripción:</label>
        <input class="form-control" type="text" name="description" value="<?php echo $transaction["description"]; ?>">
    </div>
    
    
    <div class="form-group">
        <label for="date">Fecha:</label>
        <input class="form-control" type="date" name="date" value="<?php echo $transaction["date"]; ?>">
    </div>
    
    <div class="form-group">
        <label for="amount">Cantidad:</label>
        <input class="form-control" type="txt" name="amount" value="<?php echo abs($transaction["amount"]); ?>">
    </div>

    <button type="submit" class="btn btn-success">Actalizar</button>
    

</form>