<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
@include('reports.projects.project-head')
<body>
    <div id="sidebar">
        <div id="outline">
        </div>
    </div>
    <div id="page-container">
        <div id="pf1" class="pf w0 h0" data-page-no="1">
            <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="img/fondo-portada.jpg" />
                <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">SOLUCIÓN</div>
                <div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">SOLAR</div>
                <div class="t m0 x3 h3 y3 ff2 fs1 fc1 sc0 ls0 ws0">PROPUESTA</div>
                <div class="t m0 x4 h4 y4 ff3 fs2 fc2 sc0 ls0 ws0">NOMBRE CLIENTE:</div>
                <div class="t m0 x4 h4 y5 ff3 fs2 fc2 sc0 ls0 ws0">UBICACIÓN DEL PROYECTO:</div>
                <div class="t m0 x4 h4 y6 ff3 fs2 fc2 sc0 ls0 ws0">ASESOR COMERCIAL:</div>
                <div class="t m0 x4 h4 y7 ff3 fs2 fc2 sc0 ls0 ws0">CONTACTO:</div>
                <div class="t m0 x5 h4 y4 ff3 fs2 fc2 sc0 ls0 ws0">{{$project->client->name}}</div>
                <div class="t m0 x5 h4 y5 ff3 fs2 fc2 sc0 ls0 ws0">{{$project->client->address}}</div>
                <div class="t m0 x5 h4 y6 ff3 fs2 fc2 sc0 ls0 ws0">{{$project->assessor->name}}</div>
                <div class="t m0 x5 h4 y7 ff3 fs2 fc2 sc0 ls0 ws0">{{$project->assessor->telephone}}</div>
            </div>
            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>
        <div class="page-break"></div>
        <div id="pf2" class="pf w0 h0" data-page-no="2">
            <div class="pc pc2 w0 h0"><img class="bi x6 y8 w2 h5" alt="" src="img/fondo-propuesta.jpg" />
                <div class="c x7 y9 w3 h6">
                    <div class="t m0 x8 h7 ya ff4 fs3 fc3 sc0 ls0 ws0">!</div>
                </div>
                <div class="t m0 x9 h8 yb ff4 fs4 fc4 sc0 ls0 ws0">&quot;</div>
                <div class="t m0 xa h8 yc ff4 fs4 fc4 sc0 ls1 ws1">#&quot;&quot;&quot;&quot;</div>
                <div class="t m0 xa h8 yd ff4 fs4 fc4 sc0 ls1 ws1">$&quot;&quot;&quot;&quot;</div>
                <div class="t m0 xa h8 ye ff4 fs4 fc4 sc0 ls1 ws1">%&quot;&quot;&quot;&quot;</div>
                <div class="t m0 xa h8 yf ff4 fs4 fc4 sc0 ls1 ws1">&amp;&quot;&quot;&quot;&quot;</div>
                <div class="t m0 xa h8 y10 ff4 fs4 fc4 sc0 ls1 ws1">&apos;&quot;&quot;&quot;&quot;</div>
                <div class="t m0 xa h8 y11 ff4 fs4 fc4 sc0 ls1 ws1">(&quot;&quot;&quot;&quot;</div>
                <div class="t m0 xb h8 y12 ff4 fs4 fc4 sc0 ls0 ws0">#<span class="_ _3"> </span>$<span class="_ _3">
                    </span>%<span class="_ _3"> </span>&amp;<span class="_ _3"> </span>&apos;<span class="_ _3">
                    </span>(<span class="_ _3"> </span>)<span class="_ _3"> </span>*<span class="_ _3"> </span>+<span
                        class="_ _4"> </span><span class="ls1 ws1">#&quot;<span class="_ _5"> </span>##<span
                            class="_ _5"> </span>#$</span></div>
                <div class="t m0 xc h9 y13 ff5 fs5 fc5 sc0 ls0 ws0">PRESUPUESTO</div>
                <div class="t m0 xc ha y14 ff1 fs5 fc5 sc0 ls0 ws0">SISTEMA FOTOVOLTAICO</div>
                <div class="t m0 xd hb y15 ff6 fs2 fc5 sc0 ls0 ws0">SU FACTURA DE ELECTRICIDAD ACTUAL</div>
                <div class="t m0 xe hc y16 ff3 fs6 fc5 sc0 ls0 ws0">kWh/año</div>
                <div class="t m0 xa hd y17 ff5 fs7 fc6 sc0 ls0 ws0">kWh</div>
                <div class="t m0 xf hd y18 ff5 fs7 fc6 sc0 ls0 ws0">Mes</div>
                <div class="t m0 x10 hc y19 ff3 fs6 fc5 sc0 ls0 ws0">$ /MES</div>
                <div class="t m0 x11 he y1a ff7 fs8 fc5 sc0 ls0 ws0">Tu actual emisión de CO2</div>
                <div class="t m0 x11 hf y1b ff8 fs8 fc5 sc0 ls0 ws0">{{$project->invoices->actual_kg_co2}} KG/AÑO</div>
                <div class="t m0 x12 h10 y16 ff1 fs9 fc5 sc0 ls0 ws0">{{$project->invoices->annual_consumption}}</div>
                <div class="t m0 xc h11 y19 ff6 fsa fc5 sc0 ls0 ws0">{{$project->invoices->average_consumption}}</div>
                <div class="t m0 x13 hc y1c ff3 fs6 fc5 sc0 ls0 ws0">kWp</div>
                <div class="t m0 x14 h10 y1d ff1 fs9 fc5 sc0 ls0 ws0">{{$project->project_main_proposal->kw}}</div>
                <div class="t m0 x13 h11 y1e ff3 fs6 fc5 sc0 ls0 ws0">MT2<span class="_ _6"></span>SUPERFICIE<span
                        class="_ _7"> </span><span class="ff6 fsa">{{$project->project_main_proposal->m2}}</span></div>
                <div class="t m0 xc hf y1f ff7 fs8 fc5 sc0 ls0 ws0">Precio de 1kWh de electricidad =<span class="ff5">
                        <span class="ff8">${{$project->invoices->kw_cost}} </span></span></div>
                <div class="t m0 xc hf y20 ff7 fs8 fc5 sc0 ls0 ws0">Potencia Contratada =<span class="ff5"> <span
                            class="ff8">{{$project->invoices->hired_potency}}kW </span></span></div>
                <div class="t m0 x15 h4 y21 ff3 fs2 fc5 sc0 ls0 ws0">TAMAÑO RECOMENDADO</div>
                <div class="t m0 x16 h4 y22 ff3 fs2 fc5 sc0 ls0 ws0">DEL SISTEMA FOTOVOLTAICO</div>
                <div class="t m0 x17 h12 y23 ff3 fs8 fc5 sc0 ls0 ws0">Producción</div>
                <div class="t m0 x18 h12 y24 ff3 fs8 fc5 sc0 ls0 ws0">Anual Estimada</div>
                <div class="t m0 x19 hf y25 ff8 fs8 fc5 sc0 ls0 ws0">{{$project->project_main_proposal->kw}} kWh</div>
                <div class="t m0 x1a h13 y26 ff5 fsb fc5 sc0 ls0 ws0">{{$project->project_main_proposal->porc_price}}%</div>
                <div class="t m0 x1b h12 y27 ff3 fs8 fc5 sc0 ls0 ws0">Consumo</div>
                <div class="t m0 x1c h12 y28 ff3 fs8 fc5 sc0 ls0 ws0">Anual</div>
                <div class="t m0 x1d hf y29 ff8 fs8 fc5 sc0 ls0 ws0">{{$project->invoices->annual_consumption}} kWh
                </div>
                <div class="t m0 x1e h14 y2a ff7 fs6 fc5 sc0 ls0 ws0">+IVA</div>
                <div class="t m0 x1f h14 y2b ff7 fs6 fc5 sc0 ls0 ws0">USD</div>
                <div class="t m0 x20 h10 y2c ff1 fs9 fc5 sc0 ls0 ws0">{{$project->project_main_proposal->usd_iva}}</div>
                <div class="t m0 x21 h15 y2d ff1 fsc fc5 sc0 ls0 ws0">{{$project->project_main_proposal->benefit}}</div>
                <div class="t m0 x22 h16 y2e ff7 fs6 fc5 sc0 ls0 ws0">USD/Wp<span class="_ _8"></span><span
                        class="ff8">$ {{$project->project_main_proposal->usd_w}}</span></div>
                <div class="t m0 x23 h11 y2f ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_main_proposal->panels_q}}</div>
                <div class="t m0 x24 h4 y30 ff3 fs2 fc5 sc0 ls0 ws0">INVERSIÓN ESTIMADA<span class="_ _9"> </span>APORTE
                    AMBIENTAL</div>
                <div class="t m0 x25 h12 y31 ff3 fs8 fc5 sc0 ls0 ws0">PANELES</div>
                <div class="t m0 x26 hf y32 ff8 fs8 fc5 sc0 ls0 ws0">{{$project->constants->panel_potency}}wP</div>
                <div class="t m0 x27 h11 y2f ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_main_proposal->total_inverters}}</div>
                <div class="t m0 x28 h12 y31 ff3 fs8 fc5 sc0 ls0 ws0">INVERSORES</div>
                <div class="t m0 x29 hf y32 ff8 fs8 fc5 sc0 ls0 ws0">27KW</div>
                <div class="t m0 x2a h4 y33 ff3 fs2 fc5 sc0 ls0 ws0">POTENCIA</div>
                <div class="t m0 x2a h4 y34 ff3 fs2 fc5 sc0 ls0 ws0">INSTALADA</div>
                <div class="t m0 x2b h11 y35 ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_main_proposal->kw}} <span
                        class="ff3 fs2">kWp</span></div>
                <div class="t m0 x9 h17 y36 ff7 fs2 fc5 sc0 ls0 ws0">EQUIVALENTE A LO ABSORBIDO</div>
                <div class="t m0 x2c h17 y37 ff7 fs2 fc5 sc0 ls0 ws0">EN 30 AÑOS POR</div>
                <div class="t m0 x2d h11 y38 ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_main_proposal->co2}} <span
                        class="ff5 fs6">KG Año</span></div>
                <div class="t m0 x2e h18 y39 ff5 fsd fc5 sc0 ls0 ws0">CO2</div>
                <div class="t m0 x15 h11 y3a ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_main_proposal->trees}} <span
                        class="ff7 fs6">ALGARROBOS</span></div>
                <div class="t m0 x26 h19 y3b ff8 fse fc5 sc0 ls0 ws0">Potencial</div>
                <div class="t m0 x26 h1a y3c ff9 fse fc5 sc0 ls0 ws0">Beneﬁcio Fiscal </div>
                <div class="t m0 x2f h1b y3d ff5 fsf fc5 sc0 ls0 ws0">{{$project->project_main_proposal->benefit_porc}}%</div>
                <!-- <div class="t m0 x30 h4 y3e ff3 fs2 fc5 sc0 ls0 ws0">02</div> -->
            </div>
            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>
        <div id="pf3" class="pf w0 h0" data-page-no="3">
            <div class="pc pc3 w0 h0"><img class="bi x4 y3f w4 h1c" alt="" src="img/fondo-alternativas.jpg" />
                <div class="t m0 xc h9 y13 ff5 fs5 fc5 sc0 ls0 ws0">ALTERNATIVAS</div>
                <div class="t m0 xc ha y14 ff1 fs5 fc5 sc0 ls0 ws0">SISTEMA FOTOVOLTAICO</div>
                <!-- <div class="t m0 x27 h4 y3e ff3 fs2 fc5 sc0 ls0 ws0">99</div> -->
                <div class="t m0 x4 h1d y40 ff5 fs10 fc5 sc0 ls0 ws0">Monto a cancelar en pesos argentinos según </div>
                <div class="t m0 x4 h1d y41 ff5 fs10 fc5 sc0 ls0 ws0">cotización tipo billete vendedor del Banco Nación
                </div>
                <div class="t m0 x4 h1d y42 ff5 fs10 fc5 sc0 ls0 ws0">Argentina a fecha de pago</div>
                <div class="t m0 x4 hf y43 ff3 fs8 fc5 sc0 ls0 ws0">Dolar Rerencia<span class="_ _a"> </span><span
                        class="ff8">1 USD = ${{$project->constants->exchange_rate}}</span></div>
                <div class="t m0 x4 hf y44 ff3 fs8 fc5 sc0 ls0 ws0">FORMA PAGO<span class="_ _b"> </span><span
                        class="ff8">A CONVENIR</span></div>
                <div class="t m0 x4 hf y45 ff3 fs8 fc5 sc0 ls0 ws0">PLAZO EJECUCIÓN<span class="_ _c"> </span><span
                        class="ff8">30 DÍAS</span></div>
                <div class="t m0 x1f h14 y46 ff7 fs6 fc5 sc0 ls0 ws0">+IVA</div>
                <div class="t m0 x27 h14 y47 ff7 fs6 fc5 sc0 ls0 ws0">USD</div>
                <div class="t m0 x31 h10 y48 ff1 fs9 fc5 sc0 ls0 ws0">{{$project->project_proposal_2->usd_iva}}</div>
                <div class="t m0 x32 h15 y49 ff1 fsc fc5 sc0 ls0 ws0">{{$project->project_proposal_2->benefit}}</div>
                <div class="t m0 x33 h16 y4a ff7 fs6 fc5 sc0 ls0 ws0">USD/Wp<span class="_ _d"></span><span
                        class="ff8">$ {{$project->project_proposal_2->usd_w}}</span></div>
                <div class="t m0 x34 h4 y4b ff3 fs2 fc5 sc0 ls0 ws0">ALTERNATIVA 02</div>
                <div class="t m0 x35 h11 y4c ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_proposal_2->panels_q}}</div>
                <div class="t m0 x24 h4 y4d ff3 fs2 fc5 sc0 ls0 ws0">INVERSIÓN ESTIMADA<span class="_ _9"> </span>APORTE
                    AMBIENTAL</div>
                <div class="t m0 x25 h12 y4e ff3 fs8 fc5 sc0 ls0 ws0">PANELES</div>
                <div class="t m0 x26 hf y4f ff8 fs8 fc5 sc0 ls0 ws0">{{$project->constants->panel_potency}}wP</div>
                <div class="t m0 x1a h11 y4c ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_proposal_2->total_inverters}}</div>
                <div class="t m0 x28 h12 y4e ff3 fs8 fc5 sc0 ls0 ws0">INVERSORES</div>
                <div class="t m0 x29 hf y4f ff8 fs8 fc5 sc0 ls0 ws0">27KW</div>
                <div class="t m0 x2a h4 y50 ff3 fs2 fc5 sc0 ls0 ws0">POTENCIA</div>
                <div class="t m0 x2a h4 y51 ff3 fs2 fc5 sc0 ls0 ws0">INSTALADA</div>
                <div class="t m0 x36 h11 y52 ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_proposal_2->kw}} <span
                        class="ff3 fs2">kWp</span></div>
                <div class="t m0 x9 h17 y53 ff7 fs2 fc5 sc0 ls0 ws0">EQUIVALENTE A LO ABSORBIDO</div>
                <div class="t m0 x2c h17 y54 ff7 fs2 fc5 sc0 ls0 ws0">EN 30 AÑOS POR</div>
                <div class="t m0 x2d h11 y55 ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_proposal_2->co2}} <span
                        class="ff5 fs6">KG Año</span></div>
                <div class="t m0 x2e h18 y56 ff5 fsd fc5 sc0 ls0 ws0">CO2</div>
                <div class="t m0 x15 h11 y57 ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_proposal_2->trees}} <span
                        class="ff7 fs6">ALGARROBOS</span></div>
                <div class="t m0 x37 h19 y58 ff8 fse fc5 sc0 ls0 ws0">Potencial</div>
                <div class="t m0 x37 h1a y59 ff9 fse fc5 sc0 ls0 ws0">Beneﬁcio Fiscal </div>
                <div class="t m0 x14 h1b y5a ff5 fsf fc5 sc0 ls0 ws0">{{$project->project_proposal_2->benefit_porc}}%</div>
                <div class="t m0 x1e h14 y5b ff7 fs6 fc5 sc0 ls0 ws0">+IVA</div>
                <div class="t m0 x1e h14 y5c ff7 fs6 fc5 sc0 ls0 ws0">USD</div>
                <div class="t m0 x38 h10 y5d ff1 fs9 fc5 sc0 ls0 ws0">{{$project->project_proposal_3->usd_iva}}</div>
                <div class="t m0 x32 h15 y5e ff1 fsc fc5 sc0 ls0 ws0">{{$project->project_proposal_3->benefit}}</div>
                <div class="t m0 x33 h16 y5f ff7 fs6 fc5 sc0 ls0 ws0">USD/Wp<span class="_ _e"></span><span
                        class="ff8">$ {{$project->project_proposal_3->usd_w}}</span></div>
                <div class="t m0 x34 h4 y60 ff3 fs2 fc5 sc0 ls0 ws0">ALTERNATIVA 03</div>
                <div class="t m0 x39 h11 y61 ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_proposal_3->panels_q}}</div>
                <div class="t m0 x24 h4 y62 ff3 fs2 fc5 sc0 ls0 ws0">INVERSIÓN ESTIMADA<span class="_ _9"> </span>APORTE
                    AMBIENTAL</div>
                <div class="t m0 x25 h12 y63 ff3 fs8 fc5 sc0 ls0 ws0">PANELES</div>
                <div class="t m0 x26 hf y64 ff8 fs8 fc5 sc0 ls0 ws0">{{$project->constants->panel_potency}}wP</div>
                <div class="t m0 x27 h11 y61 ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_proposal_3->total_inverters}}</div>
                <div class="t m0 x28 h12 y63 ff3 fs8 fc5 sc0 ls0 ws0">INVERSORES</div>
                <div class="t m0 x29 hf y64 ff8 fs8 fc5 sc0 ls0 ws0">27KW</div>
                <div class="t m0 x9 h4 y65 ff3 fs2 fc5 sc0 ls0 ws0">POTENCIA</div>
                <div class="t m0 x9 h4 y66 ff3 fs2 fc5 sc0 ls0 ws0">INSTALADA</div>
                <div class="t m0 x3a h11 y67 ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_proposal_3->kw}} <span
                        class="ff3 fs2">kWp</span></div>
                <div class="t m0 x9 h17 y68 ff7 fs2 fc5 sc0 ls0 ws0">EQUIVALENTE A LO ABSORBIDO</div>
                <div class="t m0 x2c h17 y69 ff7 fs2 fc5 sc0 ls0 ws0">EN 30 AÑOS POR</div>
                <div class="t m0 x2d h11 y6a ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_proposal_3->co2}} <span
                        class="ff5 fs6">KG Año</span></div>
                <div class="t m0 x2e h18 y6b ff5 fsd fc5 sc0 ls0 ws0">CO2</div>
                <div class="t m0 x15 h11 y6c ff6 fsa fc5 sc0 ls0 ws0">{{$project->project_proposal_3->trees}} <span
                        class="ff7 fs6">ALGARROBOS</span></div>
                <div class="t m0 x37 h19 y6d ff8 fse fc5 sc0 ls0 ws0">Potencial</div>
                <div class="t m0 x37 h1a y6e ff9 fse fc5 sc0 ls0 ws0">Beneﬁcio Fiscal </div>
                <div class="t m0 x3b h1b y5e ff5 fsf fc5 sc0 ls0 ws0">{{$project->project_proposal_3->benefit_porc}}%</div>
                <div class="t m0 x1 h1e y6f ff8 fs11 fc5 sc0 ls0 ws0">{{$project->project_proposal_2->kw}} kWh</div>
                <div class="t m0 x3c h1f y70 ff5 fs12 fc5 sc0 ls0 ws0">{{$project->project_proposal_2->porc_price}}%</div>
                <div class="t m0 x3d h1e y6f ff8 fs11 fc5 sc0 ls0 ws0">{{$project->invoices->annual_consumption}} kWh
                </div>
                <div class="t m0 x1 h1e y71 ff8 fs11 fc5 sc0 ls0 ws0">{{$project->project_proposal_3->kw}} kWh</div>
                <div class="t m0 x3c h1f y72 ff5 fs12 fc5 sc0 ls0 ws0">{{$project->project_proposal_3->porc_price}}%</div>
                <div class="t m0 x3d h1e y71 ff8 fs11 fc5 sc0 ls0 ws0">{{$project->invoices->annual_consumption}} kWh
                </div>
            </div>
            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>
        <div id="pf4" class="pf w0 h0" data-page-no="4">
            <div class="pc pc4 w0 h0"><img class="bi x4 y73 w5 h20" alt="" src="img/fondo-flujo.jpg" />
                <div class="t m0 xc h9 y13 ff5 fs5 fc5 sc0 ls0 ws0">ACUMULADO</div>
                <div class="t m0 xc ha y14 ff1 fs5 fc5 sc0 ls0 ws0">FLUJO DE FONDOS</div>
                <!-- <div class="t m0 x30 h4 y3e ff3 fs2 fc5 sc0 ls0 ws0">03</div> -->
                <div class="t m0 x3e h21 y74 ff3 fs13 fc5 sc0 ls0 ws0">Potencia solar a instalar</div>
                <div class="t m0 x3d h12 y75 ff3 fs8 fc5 sc0 ls0 ws0"> {{$project->project_main_proposal->kw}} <span
                        class="_ _f"> </span>Wp</div>
                <div class="t m0 x3e h22 y76 ff1 fs2 fc7 sc0 ls0 ws0">SISTEMA SOLAR<span class="ffa fs14 fc3 ws2">
                    </span></div>
                <div class="t m0 x3e h21 y77 ff3 fs13 fc5 sc0 ls0 ws0">Costo inversion</div>
                <div class="t m0 x1f h12 y78 ff3 fs8 fc5 sc0 ls0 ws0"> {{$project->project_main_proposal->usd_iva}} <span
                        class="_ _10"> </span>USD </div>
                <div class="t m0 x3e h21 y79 ff3 fs13 fc5 sc0 ls0 ws0">Bono Fiscal</div>
                <div class="t m0 x27 h12 y7a ff3 fs8 fc5 sc0 ls0 ws0"> {{$project->project_main_proposal->benefit}} <span
                        class="_ _11"> </span>USD</div>
                <div class="t m0 x3e h21 y7b ff3 fs13 fc5 sc0 ls0 ws0">Tipo de cambio</div>
                <div class="t m0 x27 h12 y7c ff3 fs8 fc5 sc0 ls0 ws0"> $ {{$project->constants->exchange_rate}} <span
                        class="_ _12"> </span>$/USD</div>
                <div class="t m0 x3e h23 y7d ffb fs13 fc5 sc0 ls0 ws0">Inﬂación energética primer año</div>
                <div class="t m0 x3f h12 y7e ff3 fs8 fc5 sc0 ls0 ws0">{{$project->recovery->inflation_1}}%</div>
                <div class="t m0 x3e h23 y7f ffb fs13 fc5 sc0 ls0 ws0">Inﬂación energética año 2 a 8</div>
                <div class="t m0 x3f h12 y80 ff3 fs8 fc5 sc0 ls0 ws0">{{$project->recovery->inflation_8}}%</div>
                <div class="t m0 x3e h23 y81 ffb fs13 fc5 sc0 ls0 ws0">Inﬂación energética año 9 a 25</div>
                <div class="t m0 x40 h12 y82 ff3 fs8 fc5 sc0 ls0 ws0">{{$project->recovery->inflation_rest}}%</div>
            </div>
            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>
    </div>
</body>

</html>