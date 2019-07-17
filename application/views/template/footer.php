
</div>
<!-- DataTables -->
<!-- On Line -->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jszip-2.5.0/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/r-2.2.2/datatables.min.js"></script>-->
<!-- Off Line / Local -->

<script type="text/javascript" 
        src="<?php echo base_url('DataTables/datatables.min.js') ?>">
</script>

<dialog id="sucesso" class="">
    <h3 class="modal-title">Sucesso</h3>
    <div class="modal-body">
        <p>
            Cadastro efetuado!
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary close">OK</button>
    </div>
</dialog>

<dialog id="sucessoUpdate" class="">
    <h3 class="modal-title">Sucesso</h3>
    <div class="modal-body">
        <p>
            Cadastro atualizado!
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-success close">OK</button>
    </div>
</dialog>

<dialog id="err" class="">
    <h3 class="modal-title">Err</h3>
    <div class="modal-body">
        <p>
            Erro ao processar solicitação!
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn close">OK</button>
    </div>
</dialog>

<dialog id="excluirSucesso" class="">
    <h3 class="modal-title">Excluir</h3>
    <div class="modal-body">
        <p>
            Registro excluido!
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn close">OK</button>
    </div>
</dialog>

<?php
if ($this->session->flashdata('true')) {
    ?>
    <script type="text/javascript">
        (function () {
            'use strict';
            var dialog = document.querySelector('#sucesso');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            dialog.showModal();
            dialog.querySelector('button:not([disabled])')
                    .addEventListener('click', function () {
                        dialog.close();
                    });
        }());
    </script>
<?php } else if ($this->session->flashdata('err')) { ?>
    <script type="text/javascript">
        (function () {
            'use strict';
            var dialog = document.querySelector('#err');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            dialog.showModal();
            dialog.querySelector('button:not([disabled])')
                    .addEventListener('click', function () {
                        dialog.close();
                    });
        }());
    </script>
<?php } else if ($this->session->flashdata('excluirSucesso')) { ?>
    <script type="text/javascript">
        (function () {
            'use strict';
            var dialog = document.querySelector('#excluirSucesso');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            dialog.showModal();
            dialog.querySelector('button:not([disabled])')
                    .addEventListener('click', function () {
                        dialog.close();
                    });
        }());
    </script>
<?php } else if ($this->session->flashdata('trueUpdate')) { ?>
    <script type="text/javascript">
        (function () {
            'use strict';
            var dialog = document.querySelector('#sucessoUpdate');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            dialog.showModal();
            dialog.querySelector('button:not([disabled])')
                    .addEventListener('click', function () {
                        dialog.close();
                    });
        }());
    </script>
<?php } ?>

</body>
</html>
