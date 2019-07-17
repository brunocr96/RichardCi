<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Alunos</h1><p></p>
        <?php echo form_open('alunos/inserir'); ?>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="nome" placeholder="Nome" />
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="rg" placeholder="Rg" />
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="endereco" placeholder="Endereco" />
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="cpf" placeholder="Cpf" />
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Feminino">
            <label class="form-check-label" for="inlineRadio1">Feminino</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Masculino">
            <label class="form-check-label" for="inlineRadio2">Masculino</label>
        </div>

        <div class="form-group">
            <input type="submit" name="acao" value="salvar" class="btn btn-success" />
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
<div class="row">
    <div class="col-lg-2 col-md-2 col-2"></div>
    <div class="col-lg-7 col-md-7 col-7">

        <table class="table table dark">
            <thead>
                <tr class="table-active">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereco</th>
                    <th scope="col">RG</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $row): ?>
                    <tr>
                        <td><?php echo $row->Id_Aluno; ?></td>
                        <td><?php echo $row->Nome; ?></td>
                        <td><?php echo $row->RG; ?></td>
                        <td><?php echo $row->Endereco; ?></td>
                        <td><?php echo $row->CPF; ?></td>
                        <td><?php echo $row->Sexo; ?></ltd>
                        <td>
                            <a href="<?php echo base_url(). 'alunos/excluir/'.$row->Id_Aluno;?>">Excluir</a>
                            <a href="<?php echo base_url(). 'alunos/editar/'.$row->Id_Aluno;?>">Editar</a>
                        </td>
                    </tr>
                    
                    
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>

