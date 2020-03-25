<div class="tab-pane" id="cashflow" role="tabpanel">
    <div class="row">
        <div class="col-12">
            <table id="cashflowTable" style="width: 100%">
                <thead>
                    @for ($i = -1; $i <= 25; $i++)
                    <th>
                    @if($i == 0)
                        Inicio
                    @elseif ($i > 0)
                        {{$i}}
                    @endif 
                    </th>
                    @endfor
                </thead>
            </table>
        </div>
    </div>
</div>