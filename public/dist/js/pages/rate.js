$(document).ready(function(){

    var url = $(".url").val()

        $("#modifyRate").submit(function (e) {
                
            e.preventDefault();



            $.ajax({
                type: "POST",
                url: url+'Inventory/modifyRate',
                data: $(this).serialize(),
                success: function(response){

                    var jsonData = JSON.parse(response);

                    if (jsonData == "ok") {


                        window.location ="rate"
                        
                    }
                }

            })

        })



})