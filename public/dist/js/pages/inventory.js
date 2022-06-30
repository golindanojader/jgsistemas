$(document).ready(function () {

    var url = $(".url").val();



    // LIMPIAR CATEGORIA

    $('.clearCategory').click(function () {

        $("#categorieName").val("")
        $("#CategoryId").val("")
        
    })

    // CREATE CATEGORIE
    // **********************************************
    // **********************************************
    // **********************************************
    $('#createCategorie').submit(function(e) {

        e.preventDefault();

       
    
        $.ajax({
            type: "POST",
            url: url+'Inventory/createCategory',
            data: $(this).serialize(),
            success: function(response)
        {
        
        
            var jsonData = JSON.parse(response);


            if (jsonData =="ok"){
       

                $("#categoryMessage").html('<h6> <span class="badge badge-success">Categoría Modifcada</span></h6>')
                $("#categorieName").val("")
                $("#CategoryId").val("")
    
    
                $("#categorieName").click(function () {
                    $("#categoriesList").load();
                    $("#categoryMessage").html('')
                    })
    
           
                   
            
                return false
           
           }  

            
            if (jsonData){
            

                    $("#categoryMessage").html('<h6> <span class="badge badge-success">Categoría Creada</span></h6>')
                    $("#categorieName").val("")
                    $("#CategoryId").val("")


                    // $('#categoriesList').load(url+'createProduct');

                    $("#categorieName").click(function () {
                        $("#categoriesList").load();
                        $("#categoryMessage").html('')
                        })

            
                    
                
                    return false
            
            }


       
    
        }
        });
        });


        // edit category
        // **********************************
        // **********************************
        $(".categorySelected").click(function () {

            CategoryId
            $('#categorieName').val($(this).attr("category"))
            $('#CategoryId').val($(this).attr("idCategory"))
            
        })

    // DELETE Category 
    // **********************************************
    // **********************************************
    // **********************************************

    $('.deleteCategorie').click(function() {

        var text = "¿Deseas borrar esta categoría?"

        if (confirm(text) == true) {
            text = "You pressed OK!";
          
        var id = {"id": $(this).attr('idCategory')}
        $.ajax({
            type: "POST",
            url: url+'Inventory/deleteCategory',
            data: id,
            success: function(response)
        {

            window.location = "createProduct"

        
        }

        })

    }


      

    })




      // Create new product
    // **********************************************
    // **********************************************
    // **********************************************
    $('#createNewProduct').submit(function(e) {

        e.preventDefault()


        $.ajax({
            type: "POST",
            url: url+'Inventory/createNewProduct',
            data:$(this).serialize(),
            success: function(response)
        {


            if (response=="true") {

                  window.location = "createProduct"
                
            }else{

                alert("Este Código ya se encuentra registrado")
            }


        
        }

        })

       
    })


    // Edit product
    // **********************************************
    // **********************************************
    // **********************************************

    $('.editProduct').click(function(){

        alert( $('.code_1').attr('attrCode_1') )


    })

    
})