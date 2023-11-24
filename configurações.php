<!DOCTYPE html>
<html lang="en">

<?php include 'bases/head'

?>
<body>
    
<!--menu-->

<?php include 'bases/menu.php' ?>



<div class="principal">
    <div class="informacoes">
        <label>

    </div>
</div>

<!--Fora da Tela-->
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">icon menu</button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col-4">
                    <div id="list-example" class="list-group">
                        <a class="list-group-item list-group-item-action" href="#list-item-1">Início</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-2">Salvos</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-3">Configurações</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Form-->
<form>
        <label for="perfil">PERFIL</label>
        <div class="img">
            <img>
        </div>
        <div class="form-floating mb-3">
            <input type="email" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder="@gmail.com" value="@gmail.com">
            <label for="floatingPlaintextInput">FULANO DE TAL</label>
        </div>

        <h3>NOTIFICAÇÕES</h3>
        <label>E-MAIL</label>
        <div class="form-floating mb-3">
            <input type="email" readonly class="form-control-plaintext" id="floatingEmptyPlaintextInput" placeholder="@gmail.com">
            <label for="floatingEmptyPlaintextInput">Essas configuações se aplicam às notificações que você recebe por e-mail.</label>
            <h3>Permitir notificações por e-mail</h3>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">On</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Off</label>
                </div>
        </div>

    </form>

<!--Rodapé-->

<?php include 'bases/rodape.php' ?>
    
</body>
</html>