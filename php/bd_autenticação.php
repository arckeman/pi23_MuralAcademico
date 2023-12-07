<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
</head>
<body>
<div class="container">
  <div class="col-md-4 offset-md-4 col-8 offset-2">
    <form name="sentMessage" id="contactForm" novalidate action="admin.html">
      <div class="control-group form-group">
        <div class="controls">
          <label>Login:</label>
          <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Senha:</label>
          <input type="password" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
        </div>
      </div>
      <div id="success"></div>
      <!-- For success/fail messages -->
      <button type="submit" class="btn btn-primary" id="sendMessageButton">Autenticar</button>
    </form>
  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->
<br />
<?php include 'bases/rodape.php'; ?>

</body>

</html>
</body>
</html>