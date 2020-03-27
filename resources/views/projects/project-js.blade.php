<script>
    $('select[name="client_id"]').selectpicker({
        noneResultsText: $.fn.selectpicker.Constructor.DEFAULTS.noneResultsText + "<br><button type='button' class='btn btn-success' onclick='newClient()'>Crear nuevo</button>"
    });

    clientsData = [];

    @foreach($clients as $client)
    clientsData.push({
        'address': "{{$client->address}}"
    });
    @endforeach

    function setAddress() {
        let index = $('select[name="client_id"]').prop('selectedIndex');
        $("#client_address").html(clientsData[index].address);
    }

    function newClient() {
        $('#newClientModal').modal('show');
    }

    function storeNewClient(){
        if ($("#new_name").val() != "" && $("#new_address").val() != "") {
                var _token = $('input[name="_token"]').val();
                var data = {
                    'name' : $("#new_name").val(),
                    'address' : $("#address").val(),
                    _token : _token
                };
                $.ajax({
                    type: "POST",
                    url: "{{route('clients.fastStore')}}",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        $('select[name="client_id"]').append(
                            $("<option></option>")
                                .attr("value", response["id"])
                                .text(response["name"])
                        ).selectpicker('refresh');
                        $('select[name="client_id"]').selectpicker('val', response["id"]);   
                        $.notify(
                            {
                                // options
                                icon: 'fas fa-check-circle',
                                title: def_title,
                                message: "Nuevo cliente registrado"
                            },{
                                // settings
                                type: "success",
                                newest_on_top: newest,
                                showProgressbar: progressBar,
                                mouse_over: mouse,
                                animate: {
                                    enter: animate_enter,
                                    exit: animate_exit
                                }
                            }
                        );
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(JSON.stringify(jqXHR));
                        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                        $.notify(
                            {
                                // options
                                icon: 'fas fa-exclamation-circle',
                                message: "Se ha producido un error"
                            },{
                                // settings
                                type: "warning",
                                showProgressbar: false,
                                mouse_over: 'pause',
                                animate: {
                                    enter: 'animated bounceIn',
                                    exit: 'animated bounceOut'
                                }
                            }
                        );
                    }
                });
                $("#new_name").val("");
                $("#new_address").val("");
                $("#newClientModal").modal('hide');           
        } else {
            $.notify(
                {
                    // options
                    icon: 'fas fa-exclamation-circle',
                    title: def_title,
                    message: "Ingrese todos los campos obligatorios"
                },{
                    // settings
                    type: "warning",
                    newest_on_top: true,
                    showProgressbar: false,
                    mouse_over: 'pause',
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    },
                    z_index: 9000
                }
            );
        }
    }
    
    function setRadiationValues() {
        var _token = $('input[name="_token"]').val();
        var data = {
            'id' : $("select[name='zone_id'").val(),
            _token : _token
        };

        $.ajax({
            type: "GET",
            url: "{{route('zones.ajaxGetRadiations')}}",
            data: data,
            dataType: "json",
            success: function (response) {
                radiationItems.forEach(element => {
                    element.radiation = response[0]["m_"+element.month];
                    calculateGeneration(element.month);
                });
                radiationTable.ajax.reload();
                radiationTable.columns.adjust().draw();
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                $.notify({
                    icon: 'fas fa-wrench',
                    title: '&nbsp;<strong>{{ config('app.name', 'Laravel') }}</strong>',
                    message: 'Ha ocurrido un error',
                },{
                    type: 'danger',
                    newest_on_top: true,
                    showProgressbar: true,
                    mouse_over: 'pause',
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });
            }
        });
    }
</script>