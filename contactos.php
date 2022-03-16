
<?php session_start(); ?>

<!DOCTYPE html>
<html>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <?php 
        if(isset($_SESSION['username']) == FALSE){
            include('pages/header.php');
        }elseif($_SESSION['username']=="admin"){
            include('pages/headerAdmin.php');
        }else{
            include('pages/headerUser.php');
        }
    ?>

    <style>
        h2{
            text-decoration: underline;
        }
    </style>

    <body>
        
        <br><br id="contacto">
        <hr >
        <br>
    

        <!--Formulário para contacto e informações de contacto-->
        
        <div  class="container col-5">
            <h2 class="text-center mg-top">Contactos</h2>
            <br>
            <form name="insc" action="mailto:jonatasnetto@gmail.com" method="post"
                class="was-validated">
                <div class="mb-3 row">
                    <div class="col-3">
                        <label for="nome" class="form-label">Nome </label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="nome completo"
                            eonfocus='this.placeholder=""' onblur='this.placeholder="nome completo"' required>
                    </div>

                </div>
                <div class="mb-3 row">
                    <div class="col-3">
                        <label for="email" class="form-label">Email </label>
                    </div>
                    <div class="col-8">
                        <input type="email" class="form-control" placeholder="email@example.com" id="email" name="email"
                            aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text"><mark>Não partilhamos o seu email</mark></div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-3">
                        <label for="contacto" class="form-label">Contacto</label>
                    </div>
                    <div class="col-8">
                        <input type="tel" class="form-control" placeholder="999-888-777" id="email" name="contacto"
                            aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
                        <div id="emailHelp" class="form-text"><mark>Não partilhamos o seu contacto</mark></div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-3">
                        <label for="dn" class="form-label">Mensagem</label>
                    </div>
                    <div class="col">
                        <textarea name="mensagem" cols="59" rows="6" required></textarea>
                    </div>
                </div>
                <!--validar radiobuttons -->
                <div class="container mb-3 mt-3">
                    <p>Quem está a contratar:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="particular" name="pessoa" value="particular" required>
                        <label class="form-check-label" for="radio1">Particular</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="empresa" name="pessoa" value="empresa">
                        <label class="form-check-label" for="radio2">Empresa</label>
                    </div>
                </div>
                <div class="container mt-3 mb-3">
                    <p>Marque os serviços desejados:</p>
                    <div class="form-check input-group">
                        <input class="form-check-input" type="checkbox" id="Software" name="servico" value="Software">
                        <label class="form-check-label ps-2 pe-4">Software</label>
                        <input class="form-check-input" type="checkbox" id="BCP" name="servico" value="BCP">
                        <label class="form-check-label ms-2 me-4">BCP</label>
                        <input class="form-check-input" type="checkbox" id="CyberRisk" name="servico" value="CyberRisk">
                        <label class="form-check-label ms-2 me-4">CyberRisk</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-info text-white" value="Submit">Enviar</button>
                <button type="reset" class="btn btn-info text-white">Cancelar</button>
            </form>
        </div>
        
        <br>
        
        <br>
    
        <?php include('pages/footer.php');?>
    </body>

</html>