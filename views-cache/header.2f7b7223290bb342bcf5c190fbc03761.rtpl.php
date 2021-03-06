<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
  <head>
    <title>TotClean Admin Dashboard</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="TotClean Admin dashboard" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="/Totclean/site/resources/favicon.png" rel="shortcut icon">
    <link href="/Totclean/site/resources/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="/Totclean/site/resources/fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css" rel="stylesheet" type="text/css">
    <link href="/Totclean/site/resources/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="/Totclean/site/resources/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="/Totclean/site/resources/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="/Totclean/site/resources/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/Totclean/site/resources/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="/Totclean/site/resources/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="/Totclean/site/resources/css/main.css?version=2.6" rel="stylesheet">
    <link href="/Totclean/site/resources/icon_fonts_assets/dripicons/webfont.css" rel="stylesheet">  
  </head>
  <body>
    <!--INI MENU MOBILE-->
    <div class="all-wrapper menu-side with-side-panel">
      <div class="layout-w">
        <div class="menu-mobile menu-activated-on-click color-scheme">
          <div class="mm-logo-buttons-w">
            <a class="mm-logo" href="index.html"><img src="/Totclean/site/resources/img/logo.png"><span>TotClean</span></a>
            <div class="mm-buttons">
              <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
              </div>
              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="avatar-w">
                <img alt="" src="/Totclean/site/resources/img/avatar1.jpg">
              </div>
              <div class="logged-user-info-w">                
                <!-- INI NOME DO USUARIO-->
                <div class="logged-user-name">
                  Usuário
                </div>
                <!-- FIM NOME DO USUARIO-->
                <!-- INI NOME DO CARGO-->
                <div class="logged-user-role">
                  Administrador
                </div>
                <!-- FIM NOME DO CARGO-->
            </div>
            </div>
            <ul class="main-menu">
              <li class="has-sub-menu">
                <a href="index.html">
                  <div class="icon-w">
                    <div class="dripicons-graph-pie"></div>
                  </div>
                  <span>Dashboard</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="#">Financeiro</a>
                  </li>
                  <li>
                    <a href="#">Contas a pagar</a>
                  </li>
                  <li>
                    <a href="#">Contas a receber</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-cart"></div>
                  </div>
                  <span>Clientes</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="users_profile_big.html">Lista de clientes</a>
                  </li>
                  <li>
                    <a href="users_profile_small.html">Cadastro de clientes</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-clipboard"></div>
                  </div>
                  <span>Fornecedores</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="apps_email.html">Lista de fornecedores</a>
                  </li>
                  <li>
                    <a href="apps_projects.html">Cadastro de fornecedores</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-list"></div>
                  </div>
                  <span>Produtos</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="misc_invoice.html">Lista de produtos</a>
                  </li>
                  <li>
                    <a href="misc_charts.html">Cadastro de produtos</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-rocket"></div>
                  </div>
                  <span>Funcionário</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="forms_regular.html">Lista de funcionários</a>
                  </li>
                  <li>
                    <a href="forms_validation.html">Cadastro de funcionários</a>
                  </li>
                </ul>
              </li>
              <li class="menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-gear"></div>
                  </div>
                  <span>Meu perfil</span></a>
              </li>
              <li class="menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-power"></div>
                  </div>
                  <span>Sair</span></a>
              </li>
            </ul>
          </div>
        </div>
        <!--FIM MENU MOBILE-->  
        <!--INI MENU DESKTOP-->  
        <div class="desktop-menu menu-side-w menu-activated-on-click">
          <div class="logo-w">
            <a class="logo" href="index.html"><img src="/Totclean/site/resources/img/logo.png"><span>TotClean</span></a>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="avatar-w">
                <img alt="" src="/Totclean/site/resources/img/avatar1.jpg">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  Usuário
                </div>
                <div class="logged-user-role">
                  Cargo
                </div>
              </div>
              <div class="logged-user-menu">
                <div class="avatar-w">
                  <img alt="" src="/Totclean/site/resources/img/avatar1.jpg">
                </div>
                <div class="logged-user-info-w">
                  <div class="logged-user-name">
                    Usuário
                  </div>
                  <div class="logged-user-role">
                    Cargo
                  </div>
                </div>
                <div class="bg-icon">
                  <i class="dripicons-gear"></i>
                </div>
                <ul>
                  <li>
                    <a href="#"><i class="dripicons-checkmark"></i><span>Meus clientes</span></a>
                  </li>
                  <li>
                    <a href="users_profile_big.html"><i class="dripicons-wallet"></i><span>Meus bônus</span></a>
                  </li>
                  <li>
                    <a href="users_profile_small.html"><i class="dripicons-gear"></i><span>Meu perfil</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="dripicons-power"></i><span>Sair</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <ul class="main-menu">
              <li class="has-sub-menu">
                <a href="index.html">
                  <div class="icon-w">
                    <div class="dripicons-graph-pie"></div>
                  </div>
                  <span>Dashboard</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="#">Financeiro</a>
                  </li>
                  <li>
                    <a href="#">Contas a pagar</a>
                  </li>
                  <li>
                    <a href="#">Contas a receber</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-cart"></div>
                  </div>
                  <span>Clientes</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="users_profile_big.html">Lista de clientes</a>
                  </li>
                  <li>
                    <a href="users_profile_small.html">Cadastro de clientes</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-clipboard"></div>
                  </div>
                  <span>Fornecedores</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="apps_email.html">Lista de fornecedores</a>
                  </li>
                  <li>
                    <a href="apps_projects.html">Cadastro de fornecedores</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-list"></div>
                  </div>
                  <span>Produtos</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="misc_invoice.html">Lista de produtos</a>
                  </li>
                  <li>
                    <a href="misc_charts.html">Cadastro de produtos</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-rocket"></div>
                  </div>
                  <span>Funcionário</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="forms_regular.html">Lista de funcionários</a>
                  </li>
                  <li>
                    <a href="forms_validation.html">Cadastro de funcionários</a>
                  </li>
                </ul>
              </li>
              <li class="menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-gear"></div>
                  </div>
                  <span>Meu perfil</span></a>
              </li>
              <li class="menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="dripicons-power"></div>
                  </div>
                  <span>Sair</span></a>
              </li>
            </ul>
          </div>
        </div>
        <!--FIM MENU DESKTOP-->
