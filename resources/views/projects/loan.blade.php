<div class="tab-pane" id="loan" role="tabpanel" aria-labelledby="loan-tab">
    <div class="row">
        <div class="form-group col-2">
            <label>Monto préstamo</label>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control right" id="loan_ammount" onblur="loanUpdated();">
            </div>
        </div>
        <div class="form-group col-1">
            <label>Tasa</label>
            <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control right" id="loan_rate" onblur="loanUpdated();">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
        </div>
        <div class="form-group col-1">
            <label>Años</label>
            <input type="text" class="form-control right" id="loan_years" onblur="loanUpdated();">
        </div>
    </div>
</div>