<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Lucas & Rebeca</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel='stylesheet' type='text/css' href='CSS/all.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/header.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/text.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/index.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/button.css'/>
        <link rel='stylesheet' type='text/css' href='CSS/footer.css'/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <section class='preview'>
            <header>
                <img src="IMG/Custom/Menu.webp" alt="Menu" class='button' id='openMenu'>
                <nav>
                    <ul>
                        <li><a href="#" class='txtWhite'>Início</a></li>
                        <li><a onclick="scrollToElement('#he')" class='txtWhite'>Sobre Ele</a></li>
                        <li><a onclick="scrollToElement('#she')" class='txtWhite'>Sobre Ela</a></li>
                        <a href="index.php"><img src="IMG/Logo.webp" alt="logo"></a>
                        <li><a onclick="scrollToElement('#we')" class='txtWhite'>Sobre Nós</a></li>
                        <li><a onclick="scrollToElement('#galery')" class='txtWhite'>Galeria</a></li>
                        <li><a class='txtWhite button btContribute'>Como ajudar</a></li>
                    </ul>
                </nav>
                <div id='headerMobile'>
                    <img src="IMG/Logo.webp" alt="logo">
                    <nav>
                        <ul>
                            <li><a href="#" class='txtWhite'>Início</a></li>
                            <li><a onclick="scrollToElement('#he')" class='txtWhite'>Sobre Ele</a></li>
                            <li><a onclick="scrollToElement('#she')" class='txtWhite'>Sobre Ela</a></li>
                            <li><a onclick="scrollToElement('#we')" class='txtWhite'>Sobre Nós</a></li>
                            <li><a onclick="scrollToElement('#galery')" class='txtWhite'>Galeria</a></li>
                            <li><a class='txtWhite button btContribute'>Como ajudar</a></li>
                        </ul>
                    </nav>
                    <a id='closeMenu' class='button btWhite btBorder btSmall txtWhite txt500 txtMuli txtUpper'>Fechar</a>
                </div>
            </header>
            <div>
                <img src="IMG/Logo2.webp" alt="Logo">
                <h5 class='txtMuli txtUpper txtWhite txt400 txtCenter'>Nosso sonho acontecerá dia <b class='txtMuli txt700'>16 de Abril</b></h5>
                <div>
                    <span>
                        <h1 class='txtWhite txtItalic txt400' id='days'>0</h1>
                        <h3 class='txtWhite txtMuli txtUpper txt400'>Dias</h3>
                    </span>
                    <span>
                        <h1 class='txtWhite txtItalic txt400' id='hours'>0</h1>
                        <h3 class='txtWhite txtMuli txtUpper txt400'>Horas</h3>
                    </span>
                    <span>
                        <h1 class='txtWhite txtItalic txt400' id='minutes'>0</h1>
                        <h3 class='txtWhite txtMuli txtUpper txt400'>Minutos</h3>
                    </span>
                    <span>
                        <h1 class='txtWhite txtItalic txt400' id='seconds'>0</h1>
                        <h3 class='txtWhite txtMuli txtUpper txt400'>Segundos</h3>
                    </span>
                </div>
                <a href="password.php" class='button btSmall btBorder btWhite txtWhite txtItalic'>Confirmar Presença!</a>
            </div>
        </section>
        <main>
            <section class='container' id='he' name="he">
                <h1 class='txtTitle txtBlack txtCenter'>Sobre Ele</h1>
                <div class='subContainer about'>
                    <article>
                        <img src="Photos/noivo.webp" alt="" loading='lazy' class='imgEngaged'>
                    </article>
                    <article class='auto'>
                        <h1 class='txtTitle'>Não aguenta mais esperar!</h1>
                        <h3 class='txtBlack txtMuli txt400'>Nascido em 27 de julho de 1999 em Brasília, Lucas Melo Oliveira jamais imaginava um dia encontrar o seu verdadeiro amor e, assim como Jacó, esperou 19 anos por sua Raquel.</h3>
                        <img src="IMG/AssinatureLucas.webp" alt="" loading='lazy'>
                    </article>
                </div>
            </section>
            <img src="IMG/Custom/Divisor.webp" alt="Divisor" class='imgDivisor'>
            <section class='container' id='she' name="she">
                <h1 class='txtTitle txtBlack txtCenter'>Sobre Ela</h1>
                <div class='subContainer about'>
                    <article class='auto'>
                        <h1 class='txtTitle'>O dia que ela sonhava chegou!</h1>
                        <h3 class='txtBlack txtMuli txt400'>Nascida em 12 de setembro de 2001 em Brasília, Rebeca Vilar Rezende desde sempre uma menina sonhadora, idealizava o seu príncipe encantado e, assim como Raquel, esperava um dia encontrar o seu Jacó.</h3>
                        <img src="IMG/AssinatureRebeca.webp" alt="" loading='lazy'>
                    </article>
                    <article>
                        <img src="Photos/noiva.webp" alt="" loading='lazy' class='imgEngaged' style='object-position: -65px 0px;'>
                    </article>
                </div>
            </section>
            <img src="IMG/Custom/Divisor2.webp" alt="Divisor" class='imgDivisor' loading='lazy'>
            <section class='container fullWidth' id='checkDate' name="checkDate">
                <h1 class='txtWhite txtCenter txtMuli txt400 txtUpper'>Marque essa data</h1>
                <img src="IMG/Date.webp" alt="" loading='lazy'>
            </section>
            <section class="container fullWidth" id='we' name="we">
                <h1 class='txtTitle txtBlack txtCenter txtUpper'>... E Deus estava com eles</h1>
                <div class="subContainer fullWidth" id='god'>
                    <article>
                        <img src="IMG/AssinatureLucas.webp" class='assinature' loading='lazy'>
                        <h4 class='txt400 txtMuli txtBlack txtCenter'>Eu a vejo como a menina segundo o coração de Deus: esforçada, carinhosa, sem paciência, que me apoia nas minhas escolhas. Eu quero casar com essa princesa.</h4>
                        <a href="https://instagram.com/lucasmeloprodutor?utm_medium=copy_link" target='_blank'>
                            <img src="IMG/Custom/instagram.webp" alt="" loading='lazy'>
                        </a>
                    </article>
                    <article>
                        <img src="Photos/noivos.webp" alt="noivos" loading='lazy'>
                    </article>
                    <article>
                        <img src="IMG/AssinatureRebeca.webp" class='assinature' loading='lazy'>
                        <h4 class='txt400 txtMuli txtBlack txtCenter'>Eu o vejo como um homem responsável, honesto, cuidadoso, que se preocupa, paciente com minhas impaciências e tenho certeza que daria sua vida por mim. Mal posso  esperar para ser um com ele.</h4>
                        <a href="https://instagram.com/rebeca.vilar?utm_medium=copy_link" target='_blank'>
                            <img src="IMG/Custom/instagram.webp" alt="" loading='lazy'>
                        </a>
                    </article>
                </div>
            </section>
            <section class='container fullWidth' id='contributors' name="contributors">
                <img src="IMG/contributors.webp" alt="" loading='lazy'>
                <h1 class='txtWhite txtCenter txtMuli txt400 txtUpper'>A festa fica bem melhor com eles!</h1>
                <div>
                    <article>
                        <img src="Providers/Fabiana_Oliveira.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtMuli txtCenter txt500 txtUpper'>Fabiana Oliveira</h1>
                        <h1 class='txtBrown txtMuli txtCenter txt700'>Decoração</h1>
                        <a href="https://www.instagram.com/fabianaoliveiradecoracoes/" target='_blank' class='txtBrown txtMuli txtCenter txt700'>@fabianaoliveiradecoracoes </a>
                    </article>
                    <article>
                        <img src="Providers/Mayk_Barber.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtMuli txtCenter txt500 txtUpper'>Mayk Barber</h1>
                        <h1 class='txtBrown txtMuli txtCenter txt700'>Barbeiro</h1>
                        <a href="https://www.instagram.com/mayk__barber/" target='_blank' class='txtBrown txtMuli txtCenter txt700'>@mayk__barber</a>
                    </article>
                    <article>
                        <img src="Providers/Marlene.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtMuli txtCenter txt500 txtUpper'>Marlene Ferraz</h1>
                        <h1 class='txtBrown txtMuli txtCenter txt700'>Maquiadora</h1>
                        <a href="https://www.instagram.com/marleneferrazz/" target='_blank' class='txtBrown txtMuli txtCenter txt700'>@marleneferrazz</a>
                    </article>
                    <article>
                        <img src="Providers/Kleiton_Oliveira.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtMuli txtCenter txt500 txtUpper'>Kleiton Oliveira</h1>
                        <h1 class='txtBrown txtMuli txtCenter txt700'>Fotógrafo</h1>
                        <a href="https://www.instagram.com/kleitonoliveiraph/" target='_blank' class='txtBrown txtMuli txtCenter txt700'>@kleitonoliveiraph</a>
                    </article>
                    <article>
                        <img src="Providers/Lucas_Alvez.webp" alt="" style='border-radius:0' loading='lazy'>
                        <h1 class='txtBlack txtMuli txtCenter txt500 txtUpper'>Lucas Alvez & Guilherme</h1>
                        <h1 class='txtBrown txtMuli txtCenter txt700'>Banda</h1>
                        <a href="https://www.instagram.com/lucasalvezeguilherme/" target='_blank' class='txtBrown txtMuli txtCenter txt700'>@lucasalvezeguilherme</a>
                    </article>
                    <article>
                        <img src="Providers/zeitfilms.webp" alt="" loading='lazy' style='object-fit: cover;'>
                        <h1 class='txtBlack txtMuli txtCenter txt500 txtUpper'>Zeit Films</h1>
                        <h1 class='txtBrown txtMuli txtCenter txt700'>Filmagem</h1>
                        <a href="https://www.instagram.com/zeit.filmes/" target='_blank' class='txtBrown txtMuli txtCenter txt700'>@zeit.filmes</a>
                    </article>
                    <article>
                        <img src="Providers/Fernanda.webp" alt="" loading='lazy' style='object-fit: cover;'>
                        <h1 class='txtBlack txtMuli txtCenter txt500 txtUpper'>Letícia Fernanda</h1>
                        <h1 class='txtBrown txtMuli txtCenter txt700'>Cerimonial</h1>
                        <a href="https://www.instagram.com/lfernanda.asa/" target='_blank' class='txtBrown txtMuli txtCenter txt700'>@lfernanda.asa</a>
                    </article>
                    <article>
                        <img src="Providers/silvana.webp" alt="" loading='lazy' style='object-fit: cover;'>
                        <h1 class='txtBlack txtMuli txtCenter txt500 txtUpper'>Silvana Carvalho Noivas</h1>
                        <h1 class='txtBrown txtMuli txtCenter txt700'>Vestido da Noiva</h1>
                        <a href="https://www.instagram.com/silvanacarvalhonoivasefestas/" target='_blank' class='txtBrown txtMuli txtCenter txt700'>@silvanacarvalhonoivasefestas</a>
                    </article>
                </div>
            </section>
            <section class="container" id="godParents" name="godParents">
                <h1 class='txtTitle txtBlack txtCenter'>Padrinhos & Madrinhas</h1>
                <div>
                    <article>
                        <img src="Godparents/KellRogerio.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtCenter txt400'>Rogério & Kellayne</h1>
                        <a href="https://www.instagram.com/kellaynevilar/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@kellaynevilar</a>
                    </article>
                    <article>
                        <img src="Godparents/LuccianaBrenno.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtCenter txt400'>Brenno & Lucciana</h1>
                        <a href="https://www.instagram.com/jeffersonbrenno/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@jeffersonbrenno</a>
                        <a href="https://www.instagram.com/luccianasm/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@luccianasm</a>
                    </article>
                    <article>
                        <img src="Godparents/HayaneAnderson.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtCenter txt400'>Anderson & Hayane</h1>
                    </article>
                    <article>
                        <img src="Godparents/ThaisCaio.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtCenter txt400'>Caio & Thaís</h1>
                        <a href="https://www.instagram.com/thais_muniz_lima/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@thais_muniz_lima</a>
                        <a href="https://www.instagram.com/caio_m_lima/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@caio_m_lima</a>
                    </article>
                    <article>
                        <img src="Godparents/KarlaJardel.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtCenter txt400'>Jardel & Karlla</h1>
                        <a href="https://www.instagram.com/jardeldbrito/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@jardeldbrito</a>
                        <a href="https://www.instagram.com/lindezabykarllavieira/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@lindezabykarllavieira</a>
                    </article>
                    <article>
                        <img src="Godparents/RonilsonNeia.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtCenter txt400'>Ronilson & Neia</h1>
                    </article>
                    <article>
                        <img src="Godparents/BarbaraEdson.webp" alt="" loading='lazy' style="object-position: 0px 0px;">
                        <h1 class='txtBlack txtCenter txt400'>Edson & Bárbara</h1>
                        <a href="https://www.instagram.com/edsonoliveirap2/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@edsonoliveirap2</a>
                        <a href="https://www.instagram.com/barbara_gmso/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@barbara_gmso</a>
                    </article>
                    <article>
                        <img src="Godparents/MarianaDouglas.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtCenter txt400'>Douglas & Mariana</h1>
                        <a href="https://www.instagram.com/douglas.hs10/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@douglas.hs10</a>
                        <a href="https://www.instagram.com/marii_emanuelle/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@marii_emanuelle</a>
                    </article>
                    <article>
                        <img src="Godparents/EvelynMaykson.webp" alt="" loading='lazy'>
                        <h1 class='txtBlack txtCenter txt400'>Maykson & Evelyn</h1>
                        <a href="https://www.instagram.com/@mayk__barber/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@mayk__barber</a>
                        <a href="https://www.instagram.com/evellyn_xavier_vilar_/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@evellyn_xavier_vilar_</a>
                    </article>
                    <article>
                        <img src="Godparents/IsabelaRobson.webp" alt="" loading='lazy' style="object-position: 0px -10px;">
                        <h1 class='txtBlack txtCenter txt400'>Robson & Isabela</h1>
                        <a href="https://www.instagram.com/robsonbrittojr/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@robsonbrittojr</a>
                        <a href="https://www.instagram.com/isabelaleticia_/" target='_blank' class='txtBlack txtMuli txt700 txtUnderline'>@isabelaleticia_</a>
                    </article>
                </div>
            </section>
            <section class="container" id="galery" name="galery">
                <h1 class='txtTitle txtBlack txtCenter'>Galeria</h1>
                <div id='first'>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                </div>
                <div id='second'>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                </div>
            </section>
            <section class="container" id="part" name="part">
                <img src="IMG/Part.webp" alt="" loading='lazy'>
                <h1 class='txtMuli txtBlack txtCenter txt400'>Nos ajude com um valor!</h1>
                <a class='button btSmall btBorder btBlue btContribute txtBlue txtItalic'>Ajudar casal!</a>
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
        <!-- <script src='JS/countDays.js'></script> -->
        <script src='JS/header.js'></script>
        <script src='JS/contribute.js'></script>
        <script src='JS/anchor.js'></script>
    </body>
</html>