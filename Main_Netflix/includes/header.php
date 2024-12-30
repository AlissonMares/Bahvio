<header id="main-header">
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <div class="navbar-toggler-icon" data-toggle="collapse">
                                <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                            </div>
                        </a>
                        <a href="tela_principal.php" class="navbar-brand">
                            <img src="assets/images/bahviologo.png" class="img-fluid logo" alt="" />
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="menu-main-menu-container">
                                <ul id="top-menu" class="navbar-nav ml-auto">
                                    <li class="menu-item"><a href="tela_principal.php">Começo</a></li>
                                    <li class="menu-item"><a href="tela_filmes.php">Filmes</a></li>
                                    <li class="menu-item"><a href="tela_series.php">Séries</a></li>
                                    <li class="menu-item"><a href="categoria.php">Categorias</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mobile-more-menu">
                            <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton" data-toggle="more-toggle"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-h"></i>
                            </a>
                            <div class="more-menu" aria-labelledby="dropdownMenuButton">
                                <div class="navbar-right position-relative">
                                    <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                        <li>
                                            <a href="#" class="search-toggle">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <div class="search-box iq-search-bar">
                                                <form action="#" class="searchbox">
                                                    <div class="form-group position-relative">
                                                        <input type="text" class="text search-input font-size-12"
                                                            placeholder="escreva para pesquisar..." />
                                                        <i class="search-link fa fa-search"></i>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                                <img src="images/user/user.png" class="img-fluid user-m rounded-circle" alt="" />
                                            </a>
                                            <div class="iq-sub-dropdown iq-user-dropdown">
                                                <div class="iq-card shadow-none m-0">
                                                    <div class="iq-card-body p-0 pl-3 pr-3">
                                                        <a href="genr.user.php" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="fa fa-user text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">Gerenciar perfil</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="gerenciamento.php" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="fa-solid fa-user-shield"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">Gerenciar Catálogo</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <!-- <a href="#" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="fa fa-inr text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0"> Plano de preços</h6>
                                                                </div>
                                                            </div>
                                                        </a> -->
                                                        <a href="#" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="fa fa-sign-out text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">Sair</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="navbar-right menu-right">
                            <ul class="d-flex align-items-center list-inline m-0">
                                <li class="nav-item nav-icon">
                                    <a href="#" class="search-toggle device-search">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <div class="search-box iq-search-bar d-search">
                                        <form action="#" class="searchbox">
                                            <div class="form-group position-relative">
                                                <input type="text" class="text search-input font-size-12"
                                                    placeholder="escreva para pesquisar..." />
                                                <i class="search-link fa fa-search"></i>
                                            </div>
                                        </form>

                                        <div class="movies-search-container hide"></div>

                                    </div>
                                </li>
                                <li class="nav-item nav-icon">
                                    <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center p-0">
                                        <img src="images/user/user.png" class="img-fluid user-m rounded-circle" alt="" />
                                    </a>
                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                        <div class="iq-card shadow-none m-0">
                                            <div class="iq-card-body p-0 pl-3 pr-3">
                                                <a href="genr.user.php" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="fa fa-user text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Gerenciar perfil</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="gerenciamento.php" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="fa-solid fa-user-shield"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Gerenciar Catálogo</h6>
                                                        </div>
                                                    </div>
                                                </a> 
                                                <!-- <a href="#" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="fa fa-inr text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Plano de preços</h6>
                                                        </div>
                                                    </div>
                                                </a> -->
                                                <a href="logout.php" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="fa fa-sign-out text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Sair</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="nav-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</header>