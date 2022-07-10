$(document).ready(function () {

    $(function () {

        

        $("#products").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#products .col-md-6:eq(0)');
     
    
    
    });
})