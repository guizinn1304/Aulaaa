<?php

    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $email = null;
    }

    if(isset($_POST['pass'])){
       
        $pass = $_POST['pass'];
    }else{
        $pass = null;
    }

    if($email != null && $pass != null){
    
    if($email == 'guizinn@gmail.com' && $pass == '1234') {
        $msg = 'Bem vindo !';
        $redirect = "<meta http-equiv='refresh' content='3; url=https://nike.com' />";
    }else{
        $msg = 'Acesso negado !';
        $redirect = "<meta http-equiv='refresh' content='3; url=../index.php' />";
    }
}

require_once "../src/views/header_nav.php";
?>


        <div class="container mt-3 p-2">
        
        <div class="text-center">
            <h1> <?= isset ($msg) ? $msg : 'Lista de pedidos' ?> </h1>
            <?= isset ($redirect) ? $redirect : '<hr>' ?>
        </div>

        
             <form method='get' action="pedido.php">
              <b style="font-size: 20px">Itens:</b> <br>
                <div class="form-check">
                    <input type="checkbox" name="ingrediente[]" class="form-check-input" value="Pão"/> Pão <br>
                    <input type="checkbox" name="ingrediente[]" class="form-check-input" value="Alface"/> Alface <br>
                    <input type="checkbox" name="ingrediente[]" class="form-check-input" value="Queijo"/> Queijo <br>
                    <input type="checkbox" name="ingrediente[]" class="form-check-input" value="Molho especial"/> Molho especial <br>
                    <input type="checkbox" name="ingrediente[]" class="form-check-input" value="Cebola"/> Cebola <br>
                    <input type="checkbox" name="ingrediente[]" class="form-check-input" value="Picles"/> Picles <br>
                    <input type="checkbox" name="ingrediente[]" class="form-check-input" value="Hamburguer"/> Hamburguer <br>
                </div>

                <hr> <b style="font-size:20px "> Quantidade: </b> <br>
              <div class="row">
              <div class="col-lg-5 col-sm-6">
                    <input type="number" class="form-control" name="qtde" value="1" min='1' />
              </div>
              </div>

                <hr> <b style="font-size:20px "> Pagamento: </b><br>

                <div class="d-flex">
                 <div class=" col-lg-2 col-sm-4 form-check">
                <input type="radio" class="form-check-input" name="pgto" value="Dinheiro" checked /> Dinheiro
                 </div>

                 <div class=" col-lg-2 col-sm-4 form-check">
                <input type="radio" class="form-check-input" name="pgto" value="Pix" /> Pix
                 </div>

                 <div class=" col-lg-2 col-sm-4 form-check">
                <input type="radio" class="form-check-input" name="pgto" value="Cartao" /> Cartao
                </div>

                </div>

                <hr> <b style="font-size:20px "> Entrega: </b> <br>

                <div class="row">
                   <div class="col-lg-5 col-sm-6">   
                        <select name="entrega" required class="form-select" >
                            <option value=""> Selecione.. </option>
                            <option value="Intersul"> Intersul </option>
                            <option value="Bela Vista"> Bela Vista </option>
                            <option value="Aparecida"> Aparecida </option>
                            <option value="Umbú"> Umbú </option>
                        </select>
                  </div>
                </div>

                <br>
                <br>
                <div class="row">
                     
                        <input type="submit" class=" col-lg-4 ofset-lg-2 btn btn-outline-dark" values='Enviar Pedido'/>
                        &nbsp;
                        <input type='reset' class=" col-lg-4 btn btn-danger" values='Apagar Pedido'/>
                    
                </div>

             </form>
             
            </div>     

             <?php require_once "../src/views/footer.php";