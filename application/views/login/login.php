<link href="<?= base_url(); ?>assets/css/signin.css" rel="stylesheet">

<div class="col-md-12 text-center">
  <form class="form-signin" action="<?= base_url(); ?>usuario/logar" method="post">
    <h1 class="h3 mb-3 font-weight-normal"> SGD's </h1>
    <label for="email" class="sr-only"> Email </label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus> </br>
    <label for="password" class="sr-only"> Password </label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit"> Acessar </button> </br>
    <a href="<?= base_url(); ?>usuario/registrar"> Registrar </a>
  </form>
  <!-- </div> --> <!-- Essa div fecha a div do login "<div class="col-md-12 text-center">" -->
  <!-- Arrumar isso depois  -->
