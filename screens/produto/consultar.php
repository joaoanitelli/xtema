<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/assets/style.global.css?<?=random_int(100, 999)?>" />
    <!-- FAVICON -->
    <link rel="shortcut icon" href="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <title>Produtos</title>
  </head>
  <body>
    <div class="container" style="display: flex;">
        <?php include('../../includes/menu/index.php') ?>
        <div id="pagina" style="display: flex;width: 100%;">
            <div class="background">
               <div class="header-products">
                <p class="product-title"><a class="text-none black " href="#">Tela Inicial</a> -> <span class="bold"><a class="text-none black" href="consultar.php">Produtos</a></span></p>
               </div>
               <div class="titulo-produto"><h1>PRODUTOS</div>
               <div class="sublinhado"></div>
               <div class="body-products">
                <div class="section-1">
                    <input class="search" type="text" placeholder="Digite o nome do produto" autofocus>
                    <a class="text-none" href="cadastrar.php"><div class="button div-button"><i class="icon ph-bold ph-plus"></i> Adicionar Produto</div></a>
                </div>
                <div class="background-lista-produtos">
                        <div class="section-2">
                            <table class="tabela" id="tbProdutos" border="1">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Preço (R$)</th>
                                        <th>Tipo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include_once("../../db/produto.php");
                                        $produtos = consultarProdutos();
                                        if (count($produtos) > 0) {
                                            foreach ($produtos as $produto) {
                                                echo "
                                                    <tr class='linha-clicavel' data-codigo='{$produto['codigo']}' >
                                                        <td>{$produto['codigo']}</td>
                                                        <td>{$produto['nome']}</td>
                                                        <td>{$produto['preco']}</td>
                                                        <td>{$produto['tipo']}</td>
                                                    </tr>
                                                ";
                                            }
                                        }else {
                                            echo "
                                                <tr><td><strong>Tabela vazia</strong></td></tr>
                                            ";
                                        }
                                    ?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
      integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
      crossorigin="anonymous"
    ></script>

    <script src="script.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
            Toastify({
                text: "Produto atualizado com sucesso.",
                duration: 3000,
                destination: "https://github.com/apvarun/toastify-js",
                newWindow: true,
                close: true,
                gravity: "top", 
                position: "center",
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function(){} // Callback after click
            }).showToast();
        </script>
    
  </body>
</html>
