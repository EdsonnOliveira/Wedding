<?php
    include('PHP/conn.php');
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Lucas & Rebeca | Presenças Confirmadas</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel='stylesheet' type='text/css' href='CSS/all.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/subscribe.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/header.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/text.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/button.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/form.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/table.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/footer.css'/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <section class='preview small'>
            <header>
                <img src="IMG/Custom/Menu.webp" alt="Menu" class='button' id='openMenu'>
                <nav>
                    <ul>
                        <li><a href="index.php" class='txtWhite'>Início</a></li>
                        <li><a href="index.php#he" class='txtWhite'>Sobre Ele</a></li>
                        <li><a href="index.php#she" class='txtWhite'>Sobre Ela</a></li>
                        <a href="index.php"><img src="IMG/Logo.webp" alt="logo"></a>
                        <li><a href="index.php#we" class='txtWhite'>Sobre Nós</a></li>
                        <li><a href="index.php#galery" class='txtWhite'>Galeria</a></li>
                        <li><a class='txtWhite button btContribute'>Como ajudar</a></li>
                    </ul>
                </nav>
                <div id='headerMobile'>
                    <img src="IMG/Logo.webp" alt="logo">
                    <nav>
                        <ul>
                            <li><a href="index.php" class='txtWhite'>Início</a></li>
                            <li><a href="index.php#he" class='txtWhite'>Sobre Ele</a></li>
                            <li><a href="index.php#she" class='txtWhite'>Sobre Ela</a></li>
                            <li><a href="index.php#we" class='txtWhite'>Sobre Nós</a></li>
                            <li><a href="index.php#galery" class='txtWhite'>Galeria</a></li>
                            <li><a class='txtWhite button btContribute'>Como ajudar</a></li>
                        </ul>
                    </nav>
                    <a id='closeMenu' class='button btWhite btBorder btSmall txtWhite txt500 txtMuli txtUpper'>Fechar</a>
                </div>
            </header>
        </section>
        <main>
            <section class="container">
                <h1 class='txtTitle txtBlack txtCenter'>Presenças Confirmadas</h1>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Data e Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $SQL = $conn->prepare('SELECT * FROM subscribe');
                            $SQL->execute();
                        
                            $SQLSubscribe = $SQL->fetchAll();
                            $i = 1;
                            foreach ($SQLSubscribe as $value) {
                                echo "<tr>";
                                    echo "<td>" . $i . '</td>';
                                    echo "<td>" . $value['Nome'] . '</td>';
                                    echo "<td>" . $value['Telefone'] . '</td>';
                                    echo "<td>" . $value['DataHora'] . '</td>';
                                echo "</tr>";
                                $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </section>
            <section class='backdrop'>
                <div class='modal'>
                    <h2 class='txtMuli txtBlack txt400 txtCenter'>(61) 99671-6315</h2>
                    <img src="List/QR.webp" alt="">
                    <h1 class='txtBrown txt400 txtCenter'>Obrigado!</h1>
                </div>
            </section>
        </main>
        <footer>
            <h1 class='txtCenter txtWhite txt400'>©CopyRight - Todos os direitos reservados</h1>
            <h2 class='txtMuli txtCenter txtWhite txt400'>Criado por: Edson Pinheiro</h2>
        </footer>
        <script src='JS/header.js'></script>
        <script src='JS/contribute.js'></script>
        <script src="JS/mask.js"></script>
    </body>
</html>