$(document).ready(function () {

    $(function () {

        $("#products").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": true,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('.col-md-6:eq(0)');
     
    
    
    });
})