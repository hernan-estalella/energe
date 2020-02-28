<div class="tab-pane" id="proposals" role="tabpanel">
    <div class="row">
        <div class="col-2">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Inversor (1)</label>
                <select id="inverter_1" class="selectpicker"></select>
            </div>
        </div>
        <div class="col-1">
            <div class="form-group">
                <label>Cantidad</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Inversor (2)</label>
                <select id="inverter_2" class="selectpicker"></select>
            </div>
        </div>
        <div class="col-1">
            <div class="form-group">
                <label>Cantidad</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Inversor (3)</label>
                <select id="inverter_3" class="selectpicker"></select>
            </div>
        </div>
        <div class="col-1">
            <div class="form-group">
                <label>Cantidad</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-1">
            <div class="form-group">
                <label>Paneles</label>
                <input type="text" class="form-control">
                <small>Max. <span id="max-panels">240</span></small>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-1">
            <button type="button" class="btn btn-success btn-block">Crear&nbsp;</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <table id="proposalsTable">
                <thead>
                    <th>Nombre</th>
                    <th>USD/W</th>
                    <th>Inversor (1)</th>
                    <th></th>
                    <th>Inversor (2)</th>
                    <th></th>
                    <th>Inversor (3)</th>
                    <th></th>
                    <th>Paneles</th>
                    <th>USD (+IVA)</th>
                    <th>kW</th>
                    <th>Beneficio fiscal</th>
                    <th>% precio</th>
                    <th>m<sup>2</sup></th>
                    <th>Generación</th>
                    <th>Fracción solar</th>
                    <th>CO<sub>2</sub></th>
                    <th>Árboles</th>
                    <th>Específica</th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
</div>