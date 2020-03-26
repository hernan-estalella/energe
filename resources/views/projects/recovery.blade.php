<div class="tab-pane" id="recovery" role="tabpanel">
    <div class="row">
        <div class="col-2">
            <div class="card">
                <div class="card-header">Sistema solar</div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Pot. a instalar</label>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control right" id="potency" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text">Wp</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label>Costo inversión</label>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control right" id="investment" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text">USD/Wp</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label>Bono fiscal</label>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">USD</span>
                                </div>
                                <input type="text" class="form-control right" id="fiscal_bonus" readonly>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label>Inflación energética 1° año</label>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control right" id="inflation_1" onblur="someInflationUpdated();">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label>Inflación energética 8 años</label>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control right" id="inflation_8" onblur="someInflationUpdated();">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label>Inflación energética resto</label>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control right" id="inflation_rest" onblur="someInflationUpdated();">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group col-12">
                            <label>Tasa de descuento</label>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control right" id="discount_rate" onblur="discountRateUpdated();">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label>VAN</label>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control right" id="van" readonly>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label>TIR</label>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control right" id="tir" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label>Años de recupero</label>
                            <input type="text" class="form-control right" id="recovery_years" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <table id="radiationTable" class="stripe compact" style="width: 100% !important">
                <thead>
                    <tr>
                        <th></th>
                        <th>Radiación diaria</th>
                        <th>Consumo</th>
                        <th>Generación mensual</th>
                        <th>Fracción solar</th>
                        <th>Volcada a red</th>
                        <th>Comprada a red</th>
                    </tr>
                <thead>
            </table>
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="chart-container" style="position: relative; width:100%">
                        <canvas id="compareChart"></canvas>
                    </div>
                </div>
                <div class="col-6">
                    <div class="chart-container" style="position: relative; width:100%">
                        <canvas id="cashflowChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>