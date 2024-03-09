<?php 
    $cadastrar = basename($_SERVER['PHP_SELF']) === 'cadastrar.php';
?>

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

    <title>Xtema | Gerenciamento Eficiente para Restaurantes e Derivados.</title>
  </head>
  <body>
    <div class="container" style="display: flex;">
        <?php include('../../includes/menu/index.php') ?>
        <div id="pagina" style="display: flex;width: 100%;">
            <div class="background">
               <div class="header-products">
                <p class="product-title"><a class="text-none black" href="#">Tela Inicial</a> -> <a class="text-none black" href="consultar.php">Produtos</a>  -> <span class="bold"><a class="text-none black" href="#"><?= $cadastrar?'Adicionar Produto' : 'Editar Produto' ?></a></span></p>
               </div>
               <div class="titulo-produto">
                    <h1 
                    <?php if (!$cadastrar): ?>
                        action="alterar.php" 
                    <?php endif; ?>
                    name="fProdutos" 
                    data-codigo="<?php echo $resultado['codigo']; ?>" 
                    class="fProdutos">
                        <?php echo !$cadastrar ? $resultado['nome'] . " #" . $resultado['codigo'] : 'ADICIONAR PRODUTO'; ?>
                    </h1>
                </div>
               <div class="sublinhado"></div>
               <div class="body-cadastro">
                    <form class="form-alterar-produto" method="POST" action="<?= $cadastrar ? 'cadastrar.php' : 'alterar.php' ?>" name="fProdutos" data-codigo="<?php echo $resultado["codigo"]; ?>" class="fProdutos">
                        <div class='hidden'>
                            <label for="codigo">Código <?=$resultado['codigo'] ?? 0?></label>
                            <input class="hidden" autocomplete="off" value="<?=$resultado['codigo']?>" id="codigo" type="text" name="codigo" />
                        </div>
                        <div class="linha1-form">
                            <div>
                                <label for="nome">Nome: </label>
                                <input autocomplete="off" value="<?=$resultado['nome'] ?? ''?>" id="nome" type="text" name="nome" />
                            </div>
                            <div>
                                <label for="preco">Preço: R$</label>
                                <input class="input-preco" autocomplete="off" value="<?=$resultado['preco'] ?? ''?>" placeholder="0.00" id="preco" type="text" name="preco" />
                            </div>
                            <fieldset>
                            <legend for="tipo"><b>Tipo:</b></legend>
                            <div>
                              <input type="radio" id="pratofeito" name="tipo" value="Prato Feito" <?= ($resultado['tipo']??"") === "Prato Feito" ? 'checked' : '' ?>/>
                              <label for="pratofeito">Prato Feito</label>
                            </div>
                            <div>
                              <input type="radio" id="produtolacrado" name="tipo" value="Produto Lacrado" <?= ($resultado['tipo']??"") === "Produto Lacrado" ? 'checked' : '' ?>/>
                              <label for="produtolacrado">Produto Lacrado</label>
                            </div>
                          </fieldset>
                        </div>
                          <input class="button" type="submit" value="<?= $cadastrar?'Adicionar' : 'Alterar' ?>" onclick="addProduto(nome.value,preco.value,tipo.value)" />
                    </form>
                    <div class="excluir-item <?= $cadastrar?'hidden' : '' ?>">
                        <p>Deseja excluir este produto?</p>
                        <input class="button btn-excluir" type="button" value="Excluir">
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
    
  </body>
</html>
