<?php session_start();?>

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
        <br>


        <?php
            $erro_nome = $erro_mail = $erro_msg="";

            $nome = $mail = $site = $mensagem = $sl = "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nome = verifica($_POST["nome"]);

                    if(empty($_POST["nome"])){
                        $erro_nome = "É necessário inserir o nome!";
                    }

                $mail = verifica($_POST["mail"]);

                    if(empty($_POST["mail"])){
                        $erro_mail = "É necessário inserir o e-mail!";
                    }

                $site = verifica($_POST["site"]);
                $mensagem = verifica($_POST["mensagem"]);
                $sl = verifica($_POST["sl"]);

                    if(empty($_POST["mensagem"])){
                        $erro_msg = "É necessário inserir uma mensagem!";
                    }
            }

            function verifica($in){
                $in = trim($in);
                $in = stripcslashes($in);
                $in = htmlspecialchars($in);

                return $in;
            }
                
        ?>

        <br><br><br>

        <!--Carousel with imgs-->
        <div id="carouselExampleIndicators" class="carousel slide col-12 mx-auto" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner img-thumbnail mx-auto d-block">
                <div class="carousel-item active">
                    <img src="img/1.jpg" class="d-block w-100" style="height: 500px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/Business-Continuity-graphic-1024x316.png" class="d-block w-100" style="height: 500px;"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/hacking-detected CyberRisk.jpeg" class="d-block w-100" style="height: 500px;" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <br><br><br>


        <!--About the company--> 
        <div class="col-10 mx-auto">
            <h2 class="text-center">Sobre nós</h2>
            <p class="justify-text-center text-center">
                <br>
                A Compliance foi fundada em 2021 com o objetivo de oferecer aos clientes (pessoas físicas e/ou coletivas), serviços de tecnologia com metodologias eficientes e abordagem inovadora. Dentro deste contexto buscamos oferecer aos nossos clientes todos os insights e dados relevantes que auxiliam na tomada de decisão e agregam valor ao negócio através da tecnologia.

                Estamos focados em oferecer aos clientes soluções personalizadas e integradas visando o melhor aproveitamento da tecnologia para atender as necessidades do negocio e satisfação no ponto de vista de segurança.
            </p>
        </div>
        
        <br><br><br>
        <hr>
        <br><br><br>

        <!--Card titles with services description-->

        <div class="container">
            <h2 class="text-center">Serviços</h2>
            <br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="img/snow-license-manager-dashboard.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Software</h5>
                            <p class="card-text text-center">A avaliação de software tem o objetivo de avaliar de maneira minuciosa os ativos de software do cliente e prover um overview de legalidade claro e objetivo apontando as discrepâncias de uso e possíveis melhorias.</p> <br><a href="software.php">Saiba mais...</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/bia-bcp.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Continuidade de Negócios - BCP</h5>
                            <p class="card-text text-center">A avaliação de continuidade de negócios tem como objetivo levantar os principais ativos do negócio para verificar as principais ameaças e oferecer um feedback de ações necessárias para melhorias baseadas em metodologias globais de segurança e continuidade.</p> </p> <a href="BCP.php">Saiba mais...</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/Cyberrisk.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">CyberRisk</h5>
                            <p class="card-text text-center">A Avaliação de CyberRisk tem como objetivo realizar testes tecnológicos de natureza invaziva e de massividade para identificar os principais riscos de segurança e prover orientação técnica profissional na resolução e mitigação dos riscos que podem causar impacto no negócio.</p> <a href="cyberrisk.php">Saiba mais...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br id="contacto">
        <hr >
        <br><br>

        <!--Form to contact the company-->
        
        <div  class="container col-5">
            <h2 class="text-center mg-top">Dúvidas???</h2>
            <br>
            <h4 class="text-center">Envie-nos uma mensagem!</h4>
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
                        <input type="tel" class="form-control" placeholder="999-888-777" id="contacto" name="contacto"
                            aria-describedby="contacto" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
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
                <!--radio buttons -->
                <div class="container mb-3 mt-3">
                    <p>Quem está a contratar:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="particular" name="pessoa" value="particular" required>
                        <label class="form-check-label" for="radio1">Particular</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="empresa" name="pessoa" value="empresa">
                        <label class="form-check-label" for="radio2">Coletiva</label>
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
        <br><hr><br>  
        <?php include('pages/footer.php');?>
    </body>

</html>