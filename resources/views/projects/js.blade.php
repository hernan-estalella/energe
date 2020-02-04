<script>
    $('select[name="client_id"]').selectpicker({
        noneResultsText: $.fn.selectpicker.Constructor.DEFAULTS.noneResultsText + "<br><button type='button' class='btn btn-success' onclick='newClient()'>Crear nuevo</button>"
    });    

    function newClient() {
        $('#newClientModal').modal('show');
    }

    function storeNewClient(){
        if ($("#new_name").val() != "") {
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
            //Show error
        }
    }
</script>