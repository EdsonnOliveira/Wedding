<?php
    if ($_POST['password'] != '123') {
        header('location: password.php?incorrect');
        die();
    }

    include('PHP/conn.php');
    if (isset($_POST['submit'])) {
        $SQL = $conn->prepare('INSERT INTO subscribe (Nome, Telefone, DataHora) VALUES (?, ?, ?)');
        $SQL->execute([$_POST['name'], $_POST['telephone'], date('d/m/Y') . ' às ' . date('h:i')]);
        echo "<script>alert('Presença Confirmada com Sucesso!')</script>";
    }
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Lucas & Rebeca | Confirmar Presença</title>
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
                <h1 class='txtTitle txtBlack txtCenter'>Lista de Presença</h1>
                <form method='post'>
                    <label for="name">
                        <h5 class="txtBlack txt600">Nome completo</h5>
                        <input type="text" name="name" id="name" class="input ip100 txtBrown" placeholder="Digite seu nome aqui" maxlength="40">
                    </label>
                    <label for="phone">
                        <h5 class="txtBlack txt600">Telefone</h5>
                        <input type="text" name="telephone" id="phone" class="input ip100 ipPhone txtBrown" placeholder="(00) 0000-0000">
                    </label>
                    <input type="hidden" name='password' value='123'>
                    <input type="submit" name="submit" class="button btBorder btBlue bt100" value="Confirmar Presença!">
                </form>
            </section>
            <section class='backdrop'>
                <div class='modal'>
                    <h2 class='txtMuli txtBlack txt400 txtCenter'>(61) 99671-6315</h2>
                    <img src="List/QR.webp" alt="">
                    <h1 class='txtBrown txt400 txtCenter'>Obrigado!</h1>
                </div>
            </section>
        </main>
        <?php include("Components/footer.php") ?>
        <script src='JS/header.js'></script>
        <script src='JS/contribute.js'></script>
        <script src="JS/mask.js"></script>
    </body>
</html>