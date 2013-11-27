
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php $this->load->view('template/header'); ?>
  </head>

  <body>

    <!-- container -->
    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Faça seu login</h2>
        <input name="login" id="login" type="text" class="form-control" placeholder="Login" required autofocus>
        <input name="password" id="password" type="password" class="form-control" placeholder="Senha" required>
        <!-- TODO - Gerenciamento de cookie -->
        <!-- <label class="checkbox">
          <input type="checkbox" value="remember-me"> Lembrar-me
        </label> -->
        <button class="btn btn-primary" type="submit">Login</button>
        <!-- TODO - Formulário de recuperação de senha -->
        <!-- <button type="button" class="btn btn-link">Esqueci minha senha</button> -->
      </form>

    </div> 
    <!-- /container -->


    <!-- JavaScripts
    ================================================== -->
    <?php $this->load->view('template/javascripts'); ?>
  </body>
</html>
