<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Editar Usuario</h1><p></p>
        <?php echo form_open('usuario/atualizar'); ?>
        <div class="form-group">

           <input type="text" value="<?php echo $usuarioEditar[0]->nomeUsuario; ?>" class="form-control form-control-lg" name="nomeUsuario" placeholder="Nomeusuario"/><p></p>

                <input type="text" value="<?php echo $usuarioEditar[0]->user; ?>" class="form-control form-control-lg" name="user" placeholder="User"/><p></p>

                <input type="password" class="form-control form-control-lg" name="senha" placeholder="Senha" required/><p></p>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio1" value="Administrador" <?php if ($usuarioEditar[0]->perfilAcesso === "ADMINISTRADOR") echo set_radio('perfilAcesso', '1', true); ?>>
                <label class="form-check-label" for="inlineRadio1">Administrador</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio2" value="Usuario" <?php if ($usuarioEditar[0]->perfilAcesso === "USUARIO") echo set_radio('perfilAcesso', '1', true); ?>>
                <label class="form-check-label" for="inlineRadio2">Usuario</label>
            </div>
            <p></p>

            <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>

            <input type="reset" class="btn btn-danger"/>
            <p></p>
            <a class="btn btn-primary" href="<?php base_url(); ?> ../../usuario" id="cancelar">Cancelar</a>
            <?php form_close(); ?>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
