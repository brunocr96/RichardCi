
<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Editar Aluno</h1><p></p>
        <?php echo form_open('alunos/atualizar'); ?>
        <div class="form-group">
                   
                 <input type="text" value="<?php echo $alunosEditar[0]->Nome; ?>" class="form-control form-control-lg" name="Nome" placeholder="Nome"/><p></p>
                 
                 <input type="text" value="<?php echo $alunosEditar[0]->RG; ?>" class="form-control form-control-lg" name="RG" placeholder="RG"/><p></p>
           
                 <input type="text" value="<?php echo $alunosEditar[0]->Endereco; ?>" class="form-control form-control-lg" name="Endereco" placeholder="Endereco"/><p></p>
            
                 <input type="text" value="<?php echo $alunosEditar[0]->CPF; ?>" class="form-control form-control-lg" name="CPF" placeholder="CPF"/><p></p>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Feminino">
                <label class="form-check-label" for="inlineRadio1">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Masculino">
                <label class="form-check-label" for="inlineRadio2">Masculino</label>
            </div>
            <p></p>

            <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>

            <input type="reset" class="btn btn-danger"/>

            <a class="btn btn-primary" href="<?php base_url(); ?> ../../alunos" Id_Alunos="cancelar">Cancelar</a>

            <p></p>
        </div>
        <?php form_close(); ?>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>

