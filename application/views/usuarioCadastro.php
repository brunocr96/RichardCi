
<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Usuario</h1><p></p>
        <?php echo form_open('usuario/inserir'); ?>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="nomeUsuario" placeholder="nomeUsuario" />
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="user" placeholder="user" />
        </div>

        <div class="form-group">
            <input type="password" class="form-control form-control-lg" name="senha" placeholder="senha" />
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio1" value="Adm">
            <label class="form-check-label" for="inlineRadio1">Adm</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio2" value="Usuario">
            <label class="form-check-label" for="inlineRadio2">Usuario</label>
        </div>

        <div class="form-group">
            <input type="submit" name="acao" value="salvar" class="btn btn-success" />
        </div>
        
        <div class="form-group">
        <a class="btn btn-info" id="btn-lista" href="#">Listar Contatos</a>
        </div>
        
        <div class="form-group">
            <input type="reset" class="btn btn-danger" /><p></p>
        </div>

        <div class="form-group">
            <a class="btn btn-primary" href="<?php base_url(); ?>Home" id="cancelar">Cancelar</a>
        </div>
        <?php form_close(); ?>

    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
<div id="div-lista" class="hide row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-8 col-6">

        <table id="table_id"
               class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr class="table-active">
                    
                    <th scope="col">Nome</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Acesso</th>
                    <th scope="col">Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuario as $row): ?>
                    <tr>
                        <td><?php echo $row->nomeUsuario; ?></td>
                        <td><?php echo $row->user; ?></td>
                        <td><?php echo $row->perfilAcesso; ?></td>
                        <td>
                            <a href="<?php echo base_url(). 'usuario/excluir/'.$row->idusuario;?>">Excluir</a>
                            <a href="<?php echo base_url(). 'usuario/editar/'.$row->idusuario;?>">Editar</a>
                        </td>
                    </tr>
                    
                    
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-3 col-md-8 col-3"></div>
</div>
<script>
    $(document).ready(function(){
        $('#table_id').DataTable({
            language: {
                "url": "//cdn.datatable.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
            }
        });
    });
    $("#btn-lista").click(function () {
        $("#div-lista").toggleClass("hide");
    });

</script>
