Complaince website

Complaince is a PHP dynamic webpage created to present the company services and user/service management. It was created as the final project from my Web-Programming course.

Goals:
    Easy access to detailed information about the services deliveried by the company
    Ability to register user and customize their data personal
    Ability to ask services
    Easy way to contact the company
    Estimate the value to the services

Instructions:
    Please start your IDE executing the Webpage at index.php

    Login: admin
    Password: Admin123456

    Login: jonatas
    Password: Jonatas123456

Structure:
    /data_base
        /bd_compliance.sql - Database script made with MySQL (Workbench)
        /bd.php - Connection script to the database
        /deletedb_services.php - Script to remove the services from the Database
        /deletedb_users.php - Script to remove the user from the Database
        /fecharLigacao.php - Script to close the Database connection
        /registoservicos.php - Script to register the service on the database
        /registousers.php - Script to validate and register the service on the database
        /selectallservicos.php - Admin page to present all of existing services
        /selectallusers.php - Admin page to present all of existing services
        /selectservicos.php - User page to present their existing services
        /updatedb_services.php - Script to update the service data existing on the database
        /updatedb_users_perfil.php - Script to check the user personal data that will be updated
        /updatedb_users.php - Script to update the user data existing on the database

    /img - Folder with all images used on the WebSite

    /pages
        /footer.php - Block script to include the footer on the page
        /header.php - Script to include the standard header page
        /headerAdmin.php - Script to include the Admin header page
        /headerUser.php - Script to include the user header page
        /logout.php - Script to close the session

    /acesso.php - Access page to login or register the user in the personal area
    /BCP.php - Details information to BCP service
    /calcular.js - Script to calc the services value (JS)
    /contactos.php - Contacto page to send questions to the company
    /cyberrisk.php - Details information to CyberRisc service
    /deleteservices.php - Page to confirm the service will be removed from the Database
    /deleteusers.php - Page to confirm the user will be removed from the Database
    /gestaoservicos.php - Admin page to service management
    /gestaousuarios.php - Admin page to user management
    /index.php - Main page - Home
    /inserirservicos.php - Admin page to insert a new service
    /inserirusuarios.php - Admin page to insert a new user
    /meusservicos.php - User page to consult the services status
    /perfil_atualizar.php - User page to customize the data personal
    /perfil.php - User page to present the data personal
    /simular.php - Page to simulate the value of the services
    /software.php - Details information to Software service
    /solicitarservico.php - User page to request services to the customer
    /updateservices.php - Page to check the service data that will be updated
    /updateusers.php - Page to check the user data that will be updated

Features:
    Add, customize and remove the users
    Add, customize and remove the services
    Send mensage to the company
    Simulate the amount to contract the services
    Login/Logout

Sintax and Tools:
    HTML
    PHP
    CSS
    JavaScript
    MySQL
    Bootstrap
    VSCode
    Workbench