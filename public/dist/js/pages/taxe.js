$(document).ready(function(){

    var url = $(".url").val()

        $("#modifyTax").submit(function (e) {
                
            e.preventDefault();



            $.ajax({
                type: "POST",
                url: url+'Inventory/modifyTax',
                data: $(this).serialize(),
                success: function(response){

                    var jsonData = JSON.parse(response);

                    if (jsonData == "ok") {


                        window.location ="taxe"
                        
                    }
                }

            })

        })



})