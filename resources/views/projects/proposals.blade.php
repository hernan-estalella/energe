<div class="tab-pane" id="proposals" role="tabpanel">
    <div class="row">
        <div class="col-1">
            <div class="form-group">
                @include('commons.asterix-sm')<label>Nombre</label>
                <input type="text" class="form-control" id="proposal_name">
            </div>
        </div>
        <div class="col-1">
            <div class="form-group">
                @include('commons.asterix-sm')<label>USD/W</label>
                <input type="text" class="form-control right" id="proposal_usd_w">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Inversor (1)</label>
                <select id="proposal_inverter_1" class="selectpicker">
                    @foreach ($inverters as $inverter)
                    <option value="{{$inverter->id}}">{{$inverter->name}}</option>
                    @endforeach
                </select>
                
            </div>
        </div>
        <div class="col-1">
            <div class="form-group">
                <label>Cantidad</label>
                <input type="text" class="form-control right" id="proposal_q_inverter_1">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Inversor (2)</label>&nbsp;<button type="button" class="btn btn-sm btn-outline-danger" onclick="clearInverter2();" data-toggle="tooltip"
                data-placement="top" title="Limpiar selección"><i class="fas fa-eraser"></i></button>
                <select id="proposal_inverter_2" class="selectpicker">
                    @foreach ($inverters as $inverter)
                    <option value="{{$inverter->id}}">{{$inverter->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-1">
            <div class="form-group">
                <label>Cantidad</label>
                <input type="text" class="form-control right" id="proposal_q_inverter_2">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Inversor (3)</label>&nbsp;<button type="button" class="btn btn-sm btn-outline-danger" onclick="clearInverter3();" data-toggle="tooltip"
                data-placement="top" title="Limpiar selección"><i class="fas fa-eraser"></i></button>
                <select id="proposal_inverter_3" class="selectpicker">
                    @foreach ($inverters as $inverter)
                    <option value="{{$inverter->id}}">{{$inverter->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-1">
            <div class="form-group">
                <label>Cantidad</label>
                <input type="text" class="form-control right" id="proposal_q_inverter_3">
            </div>
        </div>
        <div class="col-1">
            <div class="form-group">
                @include('commons.asterix-sm')<label>Paneles</label>
                <input type="text" class="form-control right" id="proposal_q_panels">
                {{-- <small>Max. <span id="suggested_panels">240</span></small> --}}
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-1">
            <button type="button" class="btn btn-success btn-block" onclick="addProposal();">Crear</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <table id="proposalsTable" class="stripe compact" style="width: 100%">
                <thead>
                    <th>Nombre</th>
                    <th>USD/W</th>
                    <th></th>
                    <th>Inversor (1)</th>
                    <th></th>
                    <th>Inversor (2)</th>
                    <th></th>
                    <th>Inversor (3)</th>
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
                    {{----}}
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
</div>