var datatable = $('#Table').DataTable({
    "bPaginate": false,
    "bInfo": false,
    "bFilter": false,
    "bLenghtChange": false,
    "pageLenght":5,
    'serverSide': true,
    'serverMethod': 'post',
    'ajax': {
        url:"http://localhost/codeigniter_login/index.php/User/mostrar",
        "dataSrc": ""
    },
    'columns': [{
        data:'codproducto'
    },{
        data:'nombre'
    },{
        data: 'precio'
    },{
        data: 'descripcion'
    },{
        data: 'descuento'
    },
    {
        "render": function (){
            return '<button type="button" id="ButtonEliminar" class="eliminar edit-modal btn btn-warning botonEditar"><span class="fa fa-edit"></span><span class="hidden-xs"></span></button>';
        }
    },
    {
        "render": function (){
            return '<button type="button" id="ButtonEditar" class="editar edit-modal btn btn-warning botonEditar"><span class="fa fa-edit"></span><span class="hidden-xs"></span></button>';
        }
    },
    ]
});

var eliminar = function (tbody, table) {
    $(tbody).on("click", "button.eliminar", function(){
        if (table.row(this).child.isShown()){
            var data = table.row(this).data();
        } else {
            var data = table.row($(this).parents("tr")).data();
        }

        var codproducto = data.codproducto;
        functioneliminar(codproducto);
        
    })
}
eliminar("#Table tbody", datatable);

function functionmodificar(codproducto){
    var url = 'http://localhost/codeigniter_login/index.php/User/mostrarbusqueda/' + codproducto + '';
    window.location.replace(url);
}

var editar = function (tbody, table) {
    $(tbody).on("click", "button.editar", function(){
        if (table.row(this).child.isShown()){
            var data = table.row(this).data();
        } else {
            var data = table.row($(this).parents("tr")).data();
        }

        var codproducto = data.codproducto;
        console.log(codproducto);
        functionmodificar(codproducto);
        
    })
}
editar("#Table tbody", datatable);

$('#editar').click(function(){
    console.log('Llega hasta aqui')
    var datos = {};
    //var id =$('#id').val();
    var codproducto =$('#codproducto').val();
    var nombre =$('#nombre').val();
    var precio =$('#precio').val();
    var descripcion =$('#descripcion').val();
    var descuento =$('#descuento').val();
    
    datos.codproducto = codproducto;
    datos.nombre = nombre;
    datos.precio = precio;
    datos.descripcion = descripcion;
    datos.descuento = descuento;
        $.ajax({
            type: "POST",
            url: "http://localhost/codeigniter_login/index.php/User/modificar",
            data: datos,
            cache: false,
            success: function (data)
            {
                console.log("El Producto se editó correctamente")
                location.reload();
            }
        });
    
});




function functioneliminar(codproducto){
    var datos = {};
    //var id =$('#id').val();
    var codproducto2 = codproducto;  
    datos.codproducto = codproducto2;
        $.ajax({
            type: "POST",
            url: "http://localhost/codeigniter_login/index.php/User/eliminar",
            data: datos,
            cache: false,
            success: function (data)
            {
                console.log("El Producto se elimina correctamente")
            }
        });
    }



$('#agregar').click(function(){
var datos = {};
//var id =$('#id').val();
var codproducto =$('#codproducto').val();
var nombre =$('#nombre').val();
var precio =$('#precio').val();
var descripcion =$('#descripcion').val();
var descuento =$('#descuento').val();

datos.codproducto = codproducto;
datos.nombre = nombre;
datos.precio = precio;
datos.descripcion = descripcion;
datos.descuento = descuento;
    $.ajax({
        type: "POST",
        url: "http://localhost/codeigniter_login/index.php/User/agregar",
        data: datos,
        cache: false,
        success: function (data)
        {
            console.log("El Producto se ingresa correctamente")
        }
    });

    location.reload();
});