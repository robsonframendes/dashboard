<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
  <head>
    <title>TotClean | Login dashboard</title>
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
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="/Totclean/site/resources/img/logo-big.png"></a>
        </div>
        <h4 class="auth-header">
          Login Form
        </h4>
        <form action="">
          <div class="form-group">
            <label for="">ID</label><input name="idfunc" class="form-control" placeholder="Digite seu id" type="text" maxlength="11" required>
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
            <label for="">Senha</label><input name="senha" class="form-control" placeholder="Digite sua senha" type="password" maxlength="11" required>
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="buttons-w">
            <button class="btn btn-primary">Logar</button>
            <div class="form-check-inline">
              <label class="form-check-label"><input class="form-check-input" type="checkbox">Mantenha-me logado</label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
