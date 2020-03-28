<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Constantes</div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-1">
                        <small>ARS/USD</small>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control right" id="exchange_rate" onblur="exchangeRateUpdated();">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Predeterminado" onclick="setDefault('exchange_rate');">
                                    <i class="fas fa-check-double"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-1">
                        <small>Potencia panel</small>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control right" id="panel_potency" onblur="panelPotencyUpdated();">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Predeterminado" onclick="setDefault('panel_potency');">
                                    <i class="fas fa-check-double"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-2">
                        <small>Conversión kg CO<sub>2</sub></small>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control right" id="kg_co2" onblur="kgCo2Updated();">
                            <div class="input-group-append">
                                <span class="input-group-text">kg/kWh</span>
                                <button class="btn btn-outline-success" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Predeterminado" onclick="setDefault('kg_co2');">
                                    <i class="fas fa-check-double"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-2">
                        <small>Conversión árboles</small>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control right" id="trees">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Predeterminado" onclick="setDefault('trees');">
                                    <i class="fas fa-check-double"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-2">
                        <small>Límite beneficio</small>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control right" id="benefit" onblur="benefitUpdated();">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="button" data-toggle="tooltip"
                                            data-placement="top" title="Predeterminado"
                                            onclick="setDefault('benefit');">
                                            <i class="fas fa-check-double"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">USD</span>
                                    </div>
                                    <input type="text" class="form-control right" id="benefit_usd" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-2">
                        <small>Límite kWp</small>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control right" id="limit_kwp" onblur="limitKwpUpdated();">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="button" data-toggle="tooltip"
                                            data-placement="top" title="Predeterminado"
                                            onclick="setDefault('limit_kwp');">
                                            <i class="fas fa-check-double"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">USD</span>
                                    </div>
                                    <input type="text" class="form-control right" id="limit_usd_kwp" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>