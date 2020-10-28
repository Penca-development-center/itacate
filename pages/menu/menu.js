$(document).ready( () => {
    $('#example').DataTable();
});
    // alert('as');
// Obtener los datos de la base de datos con php y akax

    function actualizarProducto(idProducto) {
        console.log(idProducto);
        $.ajax({
            type: "POST",
            url: "buscarProductos.php",
            data: { "idProducto": idProducto },
            success: function (response) {

                let datos = jQuery.parseJSON(response);
                console.log(datos[0]);
                $('#idProducto').val(datos[0].id_producto);
                $('#categoriaU').val(datos[0].id_categoria);
                $('#seccionU').val(datos[0].id_seccion);
                $('#nombreU').val(datos[0].nombre);
                $('#descripcionU').val(datos[0].descripcion);
                $('#precioU').val(datos[0].precio);
            },

            error: (error) => console.error(error)
        });
    }

    // actualizar en el server

    $('#btnActualizar').click(e => {
        const datos = $('#editForm').serialize();
        console.log(`${$('#editForm').serialize()}`);
        $.ajax({
            type: "POST",
            url:"actualizar.php",
            data: datos ,
            success: (response) => { 
                console.log(response);
                if (response !== 0) {
                    alert("Datos modificados");
                    window.location.reload();
                } else { 
                    alert("Error en la actualizacion de datos");
                }
            },

            error: (error) => console.error(error.responseText)
        });
    });

    // Eliminar datos 

function eliminarDatos(idProducto){
    if (confirm('Desea borrar este producto?')) {
        console.log(idProducto);
    // Save it!
        $.ajax({
            type: "POST",
            url:"borrar.php",
            data: {'idProducto': idProducto} ,
            success: (response) => { 
                console.log(response);
                if (response !== 0) {
                    alert("Producto borrado");
                    window.location.reload();
                } else { 
                    alert("Error a la hora de borrar el producto");
                }
            },

            error: (error) => console.error(error.responseText)
        });
    } else {
    // Do nothing!
    window.location.reload();
    }
}
