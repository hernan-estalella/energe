<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Propuesto final</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('img/icon.png')}}" />
  @include('reports.templates.css')
</head>
<body>
  <div style="position: fixed; left: 0px; top: 0px; right: 0px; bottom: 0px; text-align: center;z-index: -1000;">
    <img src="{{public_path()}}/img/fondo-portada.jpg" style="width: 100%; margin-top: 0%;">
  </div>  
  <table>
    <tbody>
      <tr>
        @for ($i = 1; $i <= 100; $i++)
        <td></td>
        @endfor
      </tr>
      <tr>
        <td colspan="87" class="rightered largest" style="height: 40%; vertical-align: bottom; line-height: 50px;">
          <span class="extra-bold" style="font-size: 5rem">SOLUCIÓN</span>
          <br>
          <span class="extra-bold" style="font-size: 5rem">SOLAR</span>
          <br>
          <span class="gray-energe" style="font-size: 4rem">PROPUESTA</span>
        </td>
        <td colspan="13"></td>
      </tr>
      <tr>
        <td colspan="7"></td>
        <td colspan="30" style="height: 50%; vertical-align: bottom; line-height: 20px;">
          <span class="gray-energe" style="font-size: 0.8rem">NOMBRE CLIENTE:</span>
          <br>
          <span class="gray-energe" style="font-size: 0.8rem">UBICACIÓN DEL PROYECTO:</span>
          <br>
          <span class="gray-energe" style="font-size: 0.8rem">ASESOR COMERCIAL:</span>
          <br>
          <span class="gray-energe" style="font-size: 0.8rem">CONTACTO:</span>
        </td>
        <td colspan="63" style="height: 50%; vertical-align: bottom; line-height: 20px;">
          <span class="gray-energe" style="font-size: 0.8rem">{{$project->client->name}}</span>
          <br>
          <span class="gray-energe" style="font-size: 0.8rem">{{$project->client->address}}</span>
          <br>
          <span class="gray-energe" style="font-size: 0.8rem">{{$project->assessor->name}}</span>
          <br>
          <span class="gray-energe" style="font-size: 0.8rem">{{$project->assessor->telephone}} - {{$project->assessor->email}}</span>
        </td>
      </tr>  
    </tbody>
  </table>
  <div class="page-break"></div>
  <div style="position: fixed; left: 0px; top: 0px; right: 0px; bottom: 0px; text-align: center;z-index: -999; background-color: white;"></div>
  <table>
    <tbody>
      <tr>
        @for ($i = 1; $i <= 100; $i++)
        <td></td>
        @endfor
      </tr>
      @include('reports.projects.logo')
      <tr>
        <td colspan="7"></td>
        <td colspan="93" style="line-height: 30px; height: 10%">
          <span style="font-size: 2.5rem">PRESUPUESTO</span>
          <br>
          <span class="extra-bold" style="font-size: 2.3rem">SISTEMA FOTOVOLTAICO</span>
        </td>
      </tr>
      <tr>
        <td colspan="100" class="rightered">
          <img src="{{public_path()}}/img/coins.jpg" alt="ENERGE" width="3%">&nbsp;<span>SU FACTURA DE ELECTRICIDAD ACTUAL</span>
        </td>
      </tr>
      <tr>
        <td colspan="60" class="top-border left-border bottom-border">
          <span class="extra-bold" style="font-size: 3rem">{{number_format($project->invoices->annual_consumption, 0, ',', '.')}}</span>&nbsp;<span style="font-size: 1.2rem">kWh/año</span>
          <br>
          <b><span style="font-size: 2rem">{{number_format($project->invoices->average_consumption, 0, ',', '.')}}</span></b>&nbsp;<span style="font-size: 1.2rem">$/MES</span>
          <br>
          <span>Precio de 1kWh de electricidad = <b>$ {{number_format($project->invoices->kwh_cost, 2, ',', '.')}}</b></span>
          <br>
          <span>Potencia contratada = <b>{{number_format($project->invoices->hired_potency, 0, ',', '.')}}kW</b></span>
          <br>
          <br>
          <div style="align-content: center;">
            <div style="display: inline-block; vertical-align: top;"><img src="{{public_path()}}/img/world.jpg" alt="world" width="8%"></div>
            <div style="display: inline-block"><span>Tu actual emisión de CO<sub>2</sub><br><b>{{number_format($project->invoices->actual_kg_co2, 0, ',', '.')}} KG/AÑO</b></span></div>
          </div>
        </td>
        <td colspan="40" class="top-border right-border bottom-border">
          Grafico invoices (consumptions)
        </td>
      </tr>
      <tr>
        <td colspan="100" style="height: 1%"></td>
      </tr>
      <tr>
        <td colspan="60"></td>
        <td colspan="40" class="rightered">
          <div style="display: inline-block; vertical-align: top;"><img src="{{public_path()}}/img/panel.jpg" alt="ENERGE" width="20%"></div>
          <div style="display: inline-block"><span>TAMAÑO RECOMENDADO<br>DEL SISTEMA FOTOVOLTAICO</span></div>
        </td>
      </tr>
      <tr>
        <td colspan="100" class="top-border left-border right-border" style="height: 1.5%"></td>
      </tr>
      <tr>
        <td colspan="40" class="left-border right-border centered" style="line-height: 12px;">
          <span class="extra-bold" style="font-size: 3rem">{{number_format($project->project_main_proposal->kw, 2, ',', '.')}}</span>
          <span style="font-size: 1.2rem">&nbsp;kWp</span>
          <br>
          <span style="font-size: 1.2rem">SUPERFICIE</span>
          <span style="font-size: 2rem"><b>{{number_format($project->project_main_proposal->m2, 0, ',', '.')}}</b></span>
          <span style="font-size: 1.2rem">M<sup>2</sup></span>
        </td>
        <td colspan="60" class="right-border" style="line-height: 12px;">
          <table>
            <tbody>
              <tr>
                @for ($i = 1; $i <= 100; $i++)
                <td></td>
                @endfor
              </tr>
              <tr>
                <td colspan="50">
                  <span style="font-size: 3rem">{{number_format($project->project_main_proposal->solar_fraction, 0, ',', '.')}}%</span>
                </td>
                <td colspan="50" class="rightered">
                  <span style="font-size: 0.8rem">Producción anual estimada</span>
                </td>
              </tr>
              <tr>
                <td class="bordered energe-colored" colspan="{{$project->project_main_proposal->solar_fraction}}"></td>
                <td class="bordered" colspan="{{(100 - $project->project_main_proposal->solar_fraction)}}"></td>
              </tr>
              <tr>
                <td colspan="100" class="rightered">
                  <span style="font-size: 0.8rem"><b>{{number_format($project->project_main_proposal->generation, 0, ',', '.')}} kWh</b></span>
                </td>
              </tr>
            </tbody>
          </table>
          <table>
            <tbody>
              <tr>
                @for ($i = 1; $i <= 100; $i++)
                <td></td>
                @endfor
              </tr>
              <tr>
                <td class="bordered energe-colored" colspan="100"></td>
              </tr>
              <tr>
                <td colspan="100" class="rightered">
                  <span style="font-size: 0.8rem"><b>{{number_format($project->invoices->annual_consumption, 0, ',', '.')}} kWh</b> Consumo Anual</span>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr>
        <td colspan="100" class="bottom-border left-border right-border" style="height: 1.5%">
        </td>
      </tr>      
      <tr>
        <td colspan="100" style="height: 1%"></td>
      </tr>
      <tr>
        <td colspan="30" style="line-height: 12px; height: 5%" class="top-border left-border bottom-border">
          <div style="display: inline-block; vertical-align: top;"><img src="{{public_path()}}/img/panel-set.jpg" alt="ENERGE" width="35%"></div>
          <div style="display: inline-block; vertical-align: bottom;">
            <span style="font-size: 2rem"><b>{{number_format($project->project_main_proposal->panels_q, 0, ',', '.')}}</b></span>
            <br>
            <span>PANELES</span>
            <br>
            <span><b>{{number_format($project->constants->panel_potency, 0, ',', '.')}} wP</b></span>
          </div>
        </td>
        <td colspan="30" style="line-height: 12px; height: 5%" class="top-border bottom-border">
          <div style="display: inline-block; vertical-align: top;"><img src="{{public_path()}}/img/inverter.jpg" alt="ENERGE" width="18%"></div>
          <div style="display: inline-block; vertical-align: bottom; text-align: right !important;">
            <span style="font-size: 2rem"><b>{{number_format($project->project_main_proposal->total_inverters, 0, ',', '.')}}</b></span>
            <br>
            <span>INVERSORES</span>
            <br>
            <span><b>27KW</b></span>
          </div>
        </td>
        <td colspan="40" style="line-height: 12px; height: 5%" class="top-border right-border bottom-border">
          <div style="display: inline-block; vertical-align: middle;"><img src="{{public_path()}}/img/arrow.jpg" alt="ENERGE" width="5%"></div>
          <div style="display: inline-block; vertical-align: middle;"><span>POTENCIA<br/>INSTALADA</span></div>
          <div style="display: inline-block; vertical-align: middle;"><span style="font-size: 2rem"><b>{{number_format($project->project_main_proposal->kw, 2, ',', '.')}}</b></span><span> kWp</span></div>
        </td>
      </tr>   
      <tr>
        <td colspan="55" class="rightered">
          INVERSIÓN ESTIMADA
        </td>
        <td colspan="5"></td>
        <td colspan="40" class="rightered">
          APORTE AMBIENTAL
        </td>
      </tr>
      <tr>
        <td colspan="55" class="rightered bordered" style="line-height: 15px; height: 12%; vertical-align: bottom">
          <span class="extra-bold" style="font-size: 4rem">{{number_format($project->project_main_proposal->usd_iva,0,',','.')}}</span>&nbsp;<span style="text-align: right; vertical-align: top">USD+IVA</span>
          <br>
          <b>${{number_format($project->project_main_proposal->usd_w,2,',','.')}}</b> USD/Wp</div>
          <br><br>
          <div style="display: inline-block;">
            <span style="font-size: 2.5rem">{{number_format($project->project_main_proposal->porc_price,0,',','.')}}%</span>
          </div>
          <div style="display: inline-block; text-align: left !important">
            <span><b>Potencial<br>Beneficio Fiscal</b></span>
          </div>
          <div style="display: inline-block;">
            <span class="extra-bold" style="font-size: 2.5rem">{{number_format($project->project_main_proposal->benefit,0,',','.')}}</span>
          </div>
        </td>
        <td colspan="5"></td>
        <td colspan="40" class="bordered" style="height: 12%;">
          <table>
            <tbody>
              <tr>
                @for ($i = 1; $i <= 100; $i++)
                <td></td>
                @endfor
              </tr>
              <tr>
                <td colspan="100" class="centered" style="line-height: 18px;">
                  <span style="font-size: 2rem"><b>{{number_format($project->project_main_proposal->co2,0,',','.')}}</b></span> KG Año
                  <br>
                  <span style="font-size: 2rem">CO2</span>
                  <br>
                  <span>EQUIVALENTE A LO ABSORBIDO<br>EN 30 AÑOS POR</span>
                  <br>
                  <div style="display: inline-block; vertical-align: bottom;"><img src="{{public_path()}}/img/trees.jpg" alt="ENERGE" width="15%"></div>
                  <div style="display: inline-block; vertical-align: bottom;"><span style="font-size: 2rem"><b>{{number_format($project->project_main_proposal->trees, 0, ',', '.')}}</b></span><span> ALGARROBOS</span></div>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="page-break"></div>
  <div style="position: fixed; left: 0px; top: 0px; right: 0px; bottom: 0px; text-align: center;z-index: -999; background-color: white;"></div>
  <table>
    <tbody>
      <tr>
        @for ($i = 1; $i <= 100; $i++)
        <td></td>
        @endfor
      </tr>
      @include('reports.projects.logo')
      <tr>
        <td colspan="7"></td>
        <td colspan="93" style="line-height: 30px; height: 10%">
          <span style="font-size: 2.5rem">ALTERNATIVAS</span>
          <br>
          <span class="extra-bold" style="font-size: 2.3rem">SISTEMA FOTOVOLTAICO</span>
        </td>
      </tr>
      <tr>
        <td colspan="100" class="rightered">
          ALTERNATIVA 02
        </td>
      </tr>
      <tr>
        <td colspan="30" style="line-height: 12px; height: 5%" class="top-border left-border bottom-border">
          <div style="display: inline-block; vertical-align: top;"><img src="{{public_path()}}/img/panel-set.jpg" alt="ENERGE" width="35%"></div>
          <div style="display: inline-block; vertical-align: bottom;">
            <span style="font-size: 2rem"><b>{{number_format($project->project_proposal_2->panels_q, 0, ',', '.')}}</b></span>
            <br>
            <span>PANELES</span>
            <br>
            <span><b>{{number_format($project->constants->panel_potency, 0, ',', '.')}} wP</b></span>
          </div>
        </td>
        <td colspan="30" style="line-height: 12px; height: 5%" class="top-border bottom-border">
          <div style="display: inline-block; vertical-align: top;"><img src="{{public_path()}}/img/inverter.jpg" alt="ENERGE" width="18%"></div>
          <div style="display: inline-block; vertical-align: bottom; text-align: right !important;">
            <span style="font-size: 2rem"><b>{{number_format($project->project_proposal_2->total_inverters, 0, ',', '.')}}</b></span>
            <br>
            <span>INVERSORES</span>
            <br>
            <span><b>27KW</b></span>
          </div>
        </td>
        <td colspan="40" style="line-height: 12px; height: 5%" class="top-border right-border bottom-border">
          <div style="display: inline-block; vertical-align: middle;"><img src="{{public_path()}}/img/arrow.jpg" alt="ENERGE" width="5%"></div>
          <div style="display: inline-block; vertical-align: middle;"><span>POTENCIA<br/>INSTALADA</span></div>
          <div style="display: inline-block; vertical-align: middle;"><span style="font-size: 2rem"><b>{{number_format($project->project_proposal_2->kw, 2, ',', '.')}}</b></span><span> kWp</span></div>
        </td>
      </tr>   
      <tr>
        <td colspan="55" class="rightered">
          INVERSIÓN ESTIMADA
        </td>
        <td colspan="5"></td>
        <td colspan="40" class="rightered">
          APORTE AMBIENTAL
        </td>
      </tr>
      <tr>
        <td colspan="55" class="rightered bordered" style="line-height: 15px; height: 12%; vertical-align: bottom">
          <span class="extra-bold" style="font-size: 4rem">{{number_format($project->project_proposal_2->usd_iva,0,',','.')}}</span>&nbsp;<span style="text-align: right; vertical-align: top">USD+IVA</span>
          <br>
          <b>${{number_format($project->project_proposal_2->usd_w,2,',','.')}}</b> USD/Wp</div>
          <br><br>
          <div style="display: inline-block;">
            <span style="font-size: 2.5rem">{{number_format($project->project_proposal_2->porc_price,0,',','.')}}%</span>
          </div>
          <div style="display: inline-block; text-align: left !important">
            <span><b>Potencial<br>Beneficio Fiscal</b></span>
          </div>
          <div style="display: inline-block;">
            <span class="extra-bold" style="font-size: 2.5rem">{{number_format($project->project_proposal_2->benefit,0,',','.')}}</span>
          </div>
        </td>
        <td colspan="5"></td>
        <td colspan="40" class="bordered" style="height: 12%;">
          <table>
            <tbody>
              <tr>
                @for ($i = 1; $i <= 100; $i++)
                <td></td>
                @endfor
              </tr>
              <tr>
                <td colspan="100" class="centered" style="line-height: 18px;">
                  <span style="font-size: 2rem"><b>{{number_format($project->project_proposal_2->co2,0,',','.')}}</b></span> KG Año
                  <br>
                  <span style="font-size: 2rem">CO2</span>
                  <br>
                  <span>EQUIVALENTE A LO ABSORBIDO<br>EN 30 AÑOS POR</span>
                  <br>
                  <div style="display: inline-block; vertical-align: bottom;"><img src="{{public_path()}}/img/trees.jpg" alt="ENERGE" width="15%"></div>
                  <div style="display: inline-block; vertical-align: bottom;"><span style="font-size: 2rem"><b>{{number_format($project->project_proposal_2->trees, 0, ',', '.')}}</b></span><span> ALGARROBOS</span></div>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    <tr>
      <td colspan="100" class="rightered">
        ALTERNATIVA 03
      </td>
    </tr>
      <tr>
        <td colspan="30" style="line-height: 12px; height: 5%" class="top-border left-border bottom-border">
          <div style="display: inline-block; vertical-align: top;"><img src="{{public_path()}}/img/panel-set.jpg" alt="ENERGE" width="35%"></div>
          <div style="display: inline-block; vertical-align: bottom;">
            <span style="font-size: 2rem"><b>{{number_format($project->project_proposal_3->panels_q, 0, ',', '.')}}</b></span>
            <br>
            <span>PANELES</span>
            <br>
            <span><b>{{number_format($project->constants->panel_potency, 0, ',', '.')}} wP</b></span>
          </div>
        </td>
        <td colspan="30" style="line-height: 12px; height: 5%" class="top-border bottom-border">
          <div style="display: inline-block; vertical-align: top;"><img src="{{public_path()}}/img/inverter.jpg" alt="ENERGE" width="18%"></div>
          <div style="display: inline-block; vertical-align: bottom; text-align: right !important;">
            <span style="font-size: 2rem"><b>{{number_format($project->project_proposal_3->total_inverters, 0, ',', '.')}}</b></span>
            <br>
            <span>INVERSORES</span>
            <br>
            <span><b>27KW</b></span>
          </div>
        </td>
        <td colspan="40" style="line-height: 12px; height: 5%" class="top-border right-border bottom-border">
          <div style="display: inline-block; vertical-align: middle;"><img src="{{public_path()}}/img/arrow.jpg" alt="ENERGE" width="5%"></div>
          <div style="display: inline-block; vertical-align: middle;"><span>POTENCIA<br/>INSTALADA</span></div>
          <div style="display: inline-block; vertical-align: middle;"><span style="font-size: 2rem"><b>{{number_format($project->project_proposal_3->kw, 2, ',', '.')}}</b></span><span> kWp</span></div>
        </td>
      </tr>   
      <tr>
        <td colspan="55" class="rightered">
          INVERSIÓN ESTIMADA
        </td>
        <td colspan="5"></td>
        <td colspan="40" class="rightered">
          APORTE AMBIENTAL
        </td>
      </tr>
      <tr>
        <td colspan="55" class="rightered bordered" style="line-height: 15px; height: 12%; vertical-align: bottom">
          <span class="extra-bold" style="font-size: 4rem">{{number_format($project->project_proposal_3->usd_iva,0,',','.')}}</span>&nbsp;<span style="text-align: right; vertical-align: top">USD+IVA</span>
          <br>
          <b>${{number_format($project->project_proposal_3->usd_w,2,',','.')}}</b> USD/Wp</div>
          <br><br>
          <div style="display: inline-block;">
            <span style="font-size: 2.5rem">{{number_format($project->project_proposal_3->porc_price,0,',','.')}}%</span>
          </div>
          <div style="display: inline-block; text-align: left !important">
            <span><b>Potencial<br>Beneficio Fiscal</b></span>
          </div>
          <div style="display: inline-block;">
            <span class="extra-bold" style="font-size: 2.5rem">{{number_format($project->project_proposal_3->benefit,0,',','.')}}</span>
          </div>
        </td>
        <td colspan="5"></td>
        <td colspan="40" class="bordered" style="height: 12%;">
          <table>
            <tbody>
              <tr>
                @for ($i = 1; $i <= 100; $i++)
                <td></td>
                @endfor
              </tr>
              <tr>
                <td colspan="100" class="centered" style="line-height: 18px;">
                  <span style="font-size: 2rem"><b>{{number_format($project->project_proposal_3->co2,0,',','.')}}</b></span> KG Año
                  <br>
                  <span style="font-size: 2rem">CO2</span>
                  <br>
                  <span>EQUIVALENTE A LO ABSORBIDO<br>EN 30 AÑOS POR</span>
                  <br>
                  <div style="display: inline-block; vertical-align: bottom;"><img src="{{public_path()}}/img/trees.jpg" alt="ENERGE" width="15%"></div>
                  <div style="display: inline-block; vertical-align: bottom;"><span style="font-size: 2rem"><b>{{number_format($project->project_proposal_3->trees, 0, ',', '.')}}</b></span><span> ALGARROBOS</span></div>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr>
        <td colspan="100"></td>
      </tr>
      <tr>
        <td colspan="30" class="bottom-border">
          <span style="font-size: 0.9rem">Dolar Referencia</span>
        </td>
        <td colspan="20" class="bottom-border rightered">
          <span style="font-size: 0.9rem"><b>1 USD = ${{number_format($project->constants->exchange_rate, 2, ',', '.')}}</b></span>
        </td>
      </tr>
      <tr>
        <td colspan="30" class="bottom-border">
          <span style="font-size: 0.9rem">FORMA PAGO</span>
        </td>
        <td colspan="20" class="bottom-border rightered">
          <span style="font-size: 0.9rem"><b>A CONVENIR</b></span>
        </td>
      </tr>
      <tr>
        <td colspan="30" class="bottom-border">
          <span style="font-size: 0.9rem">PLAZO EJECUCIÓN</span>
        </td>
        <td colspan="20" class="bottom-border rightered">
          <span style="font-size: 0.9rem"><b>30 DÍAS</b></span>
        </td>
      </tr>
      <tr>
        <td colspan="50">
          <span style="font-size: 0.7rem">Monto a cancelar en pesos argentinos según cotización tipo billete vendedor del Banco Nación Argentina a fecha de pago</span>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="page-break"></div>
  <div style="position: fixed; left: 0px; top: 0px; right: 0px; bottom: 0px; text-align: center;z-index: -999; background-color: white;"></div>
  <table>
    <tbody>
      <tr>
        @for ($i = 1; $i <= 100; $i++)
        <td></td>
        @endfor
      </tr>
      @include('reports.projects.logo')
      <tr>
        <td colspan="7"></td>
        <td colspan="93" style="line-height: 30px; height: 10%">
          <span style="font-size: 2.5rem">ACUMULADO</span>
          <br>
          <span class="extra-bold" style="font-size: 2.3rem">FLUJO DE FONDOS</span>
        </td>
      </tr>
      <tr>
        <td colspan="100" class="energe-colored"><b>SISTEMA SOLAR</b></td>
      </tr>
      <tr class="bordered">
        <td colspan="35">
          <span style="font-size: 0.9rem">Potencia solar a instalar</span>
        </td>
        <td colspan="30" class="centered">
          <span style="font-size: 0.9rem">{{number_format($project->recovery->potency, 0, ',', '.')}}</span>
        </td>
        <td colspan="35" class="rightered">
          <span style="font-size: 0.9rem">Wp</span>
        </td>
      </tr>
      <tr class="bordered">
        <td colspan="35">
          <span style="font-size: 0.9rem">Costo inversión</span>
        </td>
        <td colspan="30" class="centered">
          <span style="font-size: 0.9rem">{{number_format($project->recovery->investment, 0, ',', '.')}}</span>
        </td>
        <td colspan="35" class="rightered">
          <span style="font-size: 0.9rem">USD</span>
        </td>
      </tr>
      <tr class="bordered">
        <td colspan="35">
          <span style="font-size: 0.9rem">Bono fiscal</span>
        </td>
        <td colspan="30" class="centered">
          <span style="font-size: 0.9rem">{{number_format($project->recovery->fiscal_bonus, 0, ',', '.')}}</span>
        </td>
        <td colspan="35" class="rightered">
          <span style="font-size: 0.9rem">Wp</span>
        </td>
      </tr>
      <tr class="bordered">
        <td colspan="35">
          <span style="font-size: 0.9rem">Tipo de cambio</span>
        </td>
        <td colspan="30" class="centered">
          <span style="font-size: 0.9rem">${{number_format($project->constants->exchange_rate, 2, ',', '.')}}</span>
        </td>
        <td colspan="35" class="rightered">
          <span style="font-size: 0.9rem">Wp</span>
        </td>
      </tr>
      <tr class="bordered">
        <td colspan="35">
          <span style="font-size: 0.9rem">Inflación energética primer año</span>
        </td>
        <td colspan="30" class="centered">
          <span style="font-size: 0.9rem">{{number_format($project->recovery->inflation_1, 2, ',', '.')}}%</span>
        </td>
        <td colspan="35" class="rightered">
          <span style="font-size: 0.9rem">Wp</span>
        </td>
      </tr>
      <tr class="bordered">
        <td colspan="35">
          <span style="font-size: 0.9rem">Inflación energética año 2 a 8</span>
        </td>
        <td colspan="30" class="centered">
          <span style="font-size: 0.9rem">{{number_format($project->recovery->inflation_8, 2, ',', '.')}}%</span>
        </td>
        <td colspan="35" class="rightered"></td>
      </tr>
      <tr class="bordered">
        <td colspan="35">
          <span style="font-size: 0.9rem">Inflación energética año 9 a 25</span>
        </td>
        <td colspan="30" class="centered">
          <span style="font-size: 0.9rem">{{number_format($project->recovery->inflation_rest, 2, ',', '.')}}%</span>
        </td>
        <td colspan="35" class="rightered"></td>
      </tr>
    </tbody>
  </table>
</body>
</html>