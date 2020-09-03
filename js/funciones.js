function mostrarDatos(){
    $.ajax({
        url:"php/mostrarDatos.php",
        success:function(r){
            $('#Datos').html(r);

        }
    });
};


function agregarDatos(){

    if($('#Nombre').val()==""){
       Swal.fire({
           text:'Debes agregar un Nombre'
       })
        return false;
    }
   
    else if($('#Apellido').val()==""){
        Swal.fire({
            text:'Debes agregar un Apellido'
        })
        return false;
    }
    
    else if($('#Email').val()==""){
        Swal.fire({
            text:'Debes agregar un Email'
        })
        return false;
    }

    else if($('#Telefono').val()==""){
        Swal.fire({
            text:'Debes agregar un Teléfono'
        })
        return false;
    }

    

    $.ajax({
        type:"POST",
        data:$('#insertarDatos').serialize(),
        url:"php/agregarDatos.php",
        success:function(r){
            
            if(r==1){
                $('#insertarDatos')[0].reset();
                mostrarDatos();
                Swal.fire({
                    icon:'success',
                    text:'Agregado Exitosamente',
                });
            }else{
                Swal.fire({
                    icon:'error',
                    text:'Error al Insertar Los Datos'
                });
            }

        }
    });
};

/*
function eliminarDatos(idEliminar){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: 'Estás Seguro que quieres Eliminarlo?',
        text: "Una vez lo hayas eliminado, no podrás recuperar este Registro!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        } else if (
          /* Read more about handling dismissals below */
        /*  result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
          )
        }
      });
};

*/

function eliminarDatos(idNombre){
    Swal.fire({
        title:'Estás seguro que deseas eliminar este Registro?',
        text:'Una vez eliminado, no podrás recuperarlo!',
        icon:'warning',
        buttons:true,
        dangerMode:true
    })
    .then((willDelete) =>{
        if(willDelete){
            $.ajax({
                type:"POST",
                data:"id=" +idNombre,
                url:"php/eliminar.php",
                success:function(r){
                    if(r==1){
                        mostrarDatos();
                        Swal.fire({
                            icon:'success',
                            text:'El Registro ha sido Eliminado Exitosamente!',
                            cancelButton: 'btn btn-danger'
                        });
                    }else{
                        Swal.fire({
                            icon:'error',
                            text:'Error al Eliminar el Registro.'
                        });
                    }
    
        
                }
            });
        }
    });
}



function agregarDatosActualizar(id){
    $.ajax({
        type:"POST",
        data:"id=" +id,
        url:"php/datosActualizar.php",
        success:function(r){
            datos=jQuery.parseJSON(r);

            $('#idu').val(datos['id']);
            $('#Nombreu').val(datos['Nombre']);
            $('#Apellidou').val(datos['Apellido']);
            $('#Emailu').val(datos['Email']);
            $('#Telefonou').val(datos['Telefono']);

        }
    });
};

function actualizarDatos(){
    if($('#Nombreu').val()==""){
        Swal.fire({
            text:'Debes agregar un Nombre'
        })
         return false;
     }

     $.ajax({
        type:"POST",
        data:$('#insertarDatosu').serialize(),
        url:"php/actualizarDatos.php",
        success:function(r){
            if(r==1){
                mostrarDatos();
                Swal.fire({
                    icon:'success',
                    text:'Campo/s actualizados Exitosamente',
                });
            }else{
                Swal.fire({
                    icon:'error',
                    text:'Error al Actualizar Los Datos'
                });
            }

        }
    });
}

/*Gilbert E. Tineo 2020*/