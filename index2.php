<html>
    <head> 
        <title>Formulario</title>
    </head>
    <body>
        Resultado do formulario <br>
    <?php
    print("");
    $n1 = $_POST["nome"];
    $n2 = $_POST["email"];
    $n3= $_POST["senha"];
    $n4 = $_POST["senha-confirmacao"];
        
    print("<br> O seu nome é $n1");
    
    print("<br> O email é $n2");
        
    print("<br> Sua senha é $n3");
        
    print("<br> Esté é a confirmação da sua senha: $n4 ");
    ?>

    </body>
    </html>