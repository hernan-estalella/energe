<script>
    loan_ammount = new AutoNumeric("#loan_ammount", integer);
    loan_rate = new AutoNumeric("#loan_rate", decimal);
    loan_years = new AutoNumeric("#loan_years", integer);

    function loanUpdated() {
        
        cashflowItems[8][0] = loan_ammount.getNumber();
        calculateCashflow();
    }
</script>