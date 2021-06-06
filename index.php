<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moura & Freitas Advogados</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">

</head>
<body>
    <!--header-->
    <div class="header">
        <div class="container">
            <div class="logo inline"><a href=""><img src="img/logo.png" alt="Logo Moura & Freitas Advogados"></a></div>
            <div class="menu inline">
                <ul class="menu-list inline">
                    <li class="menu-item"><a href="" class="menu-active">Home</a></li>
                    <li class="menu-item"><a href="">Legado</a></li>
                    <li class="menu-item"><a href="">Advogados</a></li>
                    <li class="menu-item"><a href="">Atuação</a></li>
                    <li class="menu-item"><a href="">Editorial</a></li>
                    <li class="menu-item"><a href="">Contato</a></li>
                </ul>
                <div class="menu-featured inline">
                    <a href=""><img src="img/icon-linkedin.png" alt="Linkedin"></a>
                </div> 
   
            </div>
        </div>
    </div>

    <!--slider-->
    <div class="slider">
        <div><img src="img/slide/1.png" width="100%"></div>
        <div><img src="img/slide/1.png" width="100%"></div>
    </div>

    <!--page-content-->
    <div class="page-content">
        <div class="container">
            <div class="width-40 inline">
                <div class="h-group">
                    <span class="h-light-title">Olá, Sejam Bem Vindo a</span>
                    <span class="h-bold-title">Moura & Freitas Advogados</span>
                </div>

            </div>
            <div class="width-60 inline">
                <div class="p-group">
                    <span class="p-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                        ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</span>
                </div>

            </div>
        </div>
    </div>

    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="f-group">
                <span class="block font-small">Moura & Advogados - Com todos os Direitos Reservados</span>
                <span class="block font-small">Produzido por <a href="">Homaker Conteúdos</a></span>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script>
        $('.slider').bxSlider({
            mode: 'horizontal',
	        auto: true,
            adaptiveHeight: true
        });
    </script>
</body>
</html>