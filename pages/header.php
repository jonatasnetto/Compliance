<html>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/brands.min.css"
            integrity="sha512-lCU0XyQA8yobR7ychVxEOU5rcxs0+aYh/9gNDLaybsgW9hdrtqczjfKVNIS5doY0Y5627/+3UVuoGv7p8QsUFw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
            
        <title>Header</title>
        
        <nav class="navbar col-12 fixed-top navbar-expand-lg navbar-dark bg-dark">

            <div class="container-fluid p-1 col-11">

                <a class="navbar-brand m-auto" href="index.php"><img src="img/logo.png" width="100px" height="60px"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="software.php">Softwares</a></li>
                                <li><a class="dropdown-item" href="BCP.php">Continuidade de Negócios</a></li>
                                <li><a class="dropdown-item" href="cyberrisk.php">CyberRisk</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="simular.php">Simular</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactos.php">Contactos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acesso.php">LogIn</a>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-info" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

    </head>

</html>
