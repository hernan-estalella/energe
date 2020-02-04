<div class="modal fade" id="newClientModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        @include("commons.asterix-sm")<label>Nombre</label>
                        <input type="text" id="new_name" class="form-control" placeholder="Nombre" autofocus>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label>Dirección</label>
                        <input type="text" id="new_address" class="form-control" placeholder="Dirección">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="storeNewClient();">Guardar</button>
            </div>
        </div>
    </div>
</div>