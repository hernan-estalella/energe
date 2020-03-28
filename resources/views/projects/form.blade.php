@csrf
@include('projects.constants')
<hr>
<div class="row">
    <div class="col-12 col-sm-8 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="project-list" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#project" role="tab" aria-controls="project"
                            aria-selected="true">Proyecto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#invoices" role="tab" aria-controls="invoices"
                            aria-selected="false">Facturas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#proposals" role="tab" aria-controls="proposals"
                            aria-selected="false">Propuestas</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#loan" role="tab" aria-controls="loan"
                            aria-selected="false">Financiamiento</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#recovery" role="tab" aria-controls="recovery"
                            aria-selected="false">Recupero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cashflow" role="tab" aria-controls="cashflow"
                            aria-selected="false" data-toggle="tab">Flujo de fondos</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content mt-3">
                    @include('projects.project')
                    @include('projects.invoices')
                    @include('projects.proposals')
                    {{-- @include('projects.loan') --}}
                    @include('projects.recovery')
                    @include('projects.cashflow')
                </div>
            </div>
        </div>
    </div>
</div>
