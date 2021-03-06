$(document).ready(function() {

    $('select[name="kecamatan_pengirim"]').on('change', function(){
        var kecamatanId = $(this).val();
        if(kecamatanId) {
            $.ajax({
                url: '/kelurahan/get/'+kecamatanId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="kelurahan_pengirim"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="kelurahan_pengirim"]').append('<option value="'+ value +'">' + key + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kelurahan_pengirim"]').empty();
        }

    });

});