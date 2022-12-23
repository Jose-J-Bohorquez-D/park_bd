<h1 class="text-center">Pagina de usuarios</h1>

<?php $mstr_usuarios=new Usuarios_Controlador;  $mstr_usuarios->mostrar_todos_los_usuarios_ctlr();?>
<br><br>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<div class="container-fluid">
    <div class="table-responsive">
        <div class="container">
            <table class="table" id="tabla_usuarios_parking">
                <thead>
                    <tr>
                        <th>nombres</th>
                        <th>apellidos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>jose</td>
                        <td>bohorquez</td>
                    </tr>
                    <tr>
                        <td>pita</td>
                        <td>washinton</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<br><br>
<script>
    $(document).ready( function () {
        $('#tabla_usuarios_parking').DataTable();
    } );
</script>

<h6>link de ref <a href="https://www.youtube.com/watch?v=WSaZSGmQ99Q">dataTables avanzados</a></h6>
<br>
<h6>link de ref <a href="https://www.youtube.com/watch?v=0jols5FZcRo">crea tu propiop datatable avanzado</a></h6>