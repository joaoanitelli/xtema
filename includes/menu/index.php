<html>
    <head>
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <!-- Exemplo com caminho absoluto: -->
        <link rel="stylesheet" href="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/assets/style.global.css?<?=random_int(100, 999)?>">

    </head>
    <body>
    <div class="sidebar active">
            <div class="menu-btn">
                <i class="ph-bold ph-caret-left"></i>
            </div>
            <div class="head">
                <div class="logo-img rounded-3">
                    <a href="#"><img src="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/assets/pasteloko.jpeg" alt="Xtema - Sistema de Gestão para restaurantes"></a>
                </div>
                <div class="user-details">
                    <p class="title cargo">Gerente</p>
                    <p class="name">Davi Anitelli</p>
                </div>
            </div>
            <div class="nav">
                <div class="menu">
                    <p class="title">Serviço</p>
                    <ul>
                        <li>
                            <a href="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/screens/venda-direta/index.php">
                                <i class="icon ph-bold ph-shopping-cart-simple"></i>
                                <span class="text">Venda Imediata</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="menu">
                    <p class="title">Menu</p>
                    <ul>
                        <li class="active">
                            <a href="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/screens/produto/consultar.php">
                                <i class="icon ph-bold ph-beer-stein"></i>
                                <span class="text">Produtos</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="opcao">
                                <i class="icon ph-bold ph-chart-bar"></i>
                                <span class="text">Relatórios</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <span class="text">Crescimento</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Itens Cancelados</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Venda por Funcionário</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Venda por Período</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--<li class="suporte">
                            <a href="#">
                                <i class="icon ph-bold ph-headset"></i>
                                <span class="text">Suporte</span>
                            </a>
                        </li>
                        <li class="suporte">
                            <a href="#">
                                <i class="icon ph-bold ph-sign-out"></i>
                                <span class="text">Desconectar</span>
                            </a>
                        </li>-->
                    </ul>
                </div>
            </div>
            <div class="menu suporte-menu">
                <p class="title">Perfil</p>
                <ul>
                    <li>
                        <a href="#">
                            <i class="icon ph-bold ph-headset"></i>
                            <span class="text">Suporte</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu suporte">
                <p class="title">Perfil</p>
                <ul>
                    <li>
                        <a href="#">
                            <i class="icon ph-bold ph-headset"></i>
                            <span class="text">Suporte</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon ph-bold ph-sign-out"></i>
                            <span class="text">Desconectar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/includes/menu/script.js"></script>
    </body>
</html>