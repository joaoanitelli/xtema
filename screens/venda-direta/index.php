<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/assets/style.global.css?<?=random_int(100, 999)?>" />
    <link rel="stylesheet" href="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/screens/venda-direta/style.css?<?=random_int(100, 999)?>" />
    <!-- FAVICON -->
    <link rel="shortcut icon" href="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/assets/logo.png" type="image/x-icon">
</head>
<body>
    <div class="container" style="display: flex;">
        <?php include('../../includes/menu/index.php') ?>
        <div id="pagina" style="display: flex;width: 100%;">
            <div class="background">
                <div class="header-products">
                    <p class="product-title"><a class="text-none black" href="#">Tela Inicial</a> -> <a><b>Venda Direta</b></a></span></p>
               </div>
               <div class="titulo-produto"><h1>Venda Direta</h1></div>
               <div class="sublinhado"></div>
               <div class="body-venda-direta">
                    <div class="div-pesquisa">
                        <div>
                            <input
                                placeholder="Pesquisar Produto"
                            />
                        </div>
                        <div class="card-pesquisa">
                            <span>Proditp</span>
                        </div>
                    </div>
                    <div class="div-lista-pesquisa">
                        <div style="padding-left: 20px;"><ul><li>sadadandsad</li></ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>