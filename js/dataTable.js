$(document).ready(function() {
    $('#table').DataTable({
      responsive: true,
      "language": {
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      }
    });
  });