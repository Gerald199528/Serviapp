/*--------- Crear Categoria----------*/
$('#Nueva').on('submit',  function(e) {
    e.preventDefault();

Swal.fire({
    title: 'Nueva Categoría!',
    text: "¿Deseas realizar un nuevo registro?",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Confirmar'
  }).then((result) => {
    if (result.isConfirmed) {
        this.submit(
          )


    }
  })


})


/*--------- Actualizar usuario----------*/
$('#uses').on('submit',  function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Actualización de Usuario',
        text: "¿Deseas actualizar sus datos de perfil?",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar'
      }).then((result) => {
        if (result.isConfirmed) {
            this.submit(
              )


        }
      })


    })


/*--------- Actualizar usuario----------*/
$('#example-form').on('submit',  function(e) {
  e.preventDefault();
  Swal.fire({
      title: 'Continuar con la operación',
      text: "¿Deseas continuar con la operación?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Confirmar'
    }).then((result) => {
      if (result.isConfirmed) {
          this.submit(
            )


      }
    })


  })




/*--------- Actualizar pass----------*/
$('#pass').on('submit',  function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Actualizacion de Contraseña',
        text: "¿Deseas actualizar su Contraseña?",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar'
      }).then((result) => {
        if (result.isConfirmed) {
            this.submit(
              )


        }
      })

})
/*--------- Registrar datos----------*/
$('#user').on('submit',  function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Registrar datos de usuario',
        text: "Estimado usuario, estos datos son obligatorios si deseas generar un reporte. ¿Deseas proporcionarlos?",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar'
      }).then((result) => {
        if (result.isConfirmed) {
            this.submit(
              )


        }
      })

})

$('#datos_admin').on('submit',  function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Actualizar usuario',
        text: "Estimado usuario, estos datos son obligatorios si deseas generar un reporte. ¿Deseas Actualizar los datos del usuario seleccionado?",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar'
      }).then((result) => {
        if (result.isConfirmed) {
            this.submit(
              )


        }
      })

})
$('#datos_user').on('submit',  function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Actualizar Datos Personales',
        text: "Estimado usuario, estos datos son obligatorios si deseas generar un reporte. ¿Deseas actualizarlos?",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar'
      }).then((result) => {
        if (result.isConfirmed) {
            this.submit(
              )


        }
      })

})


/*--------- Registrar datos----------*/
$('#my-dropzone').on('submit',  function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Importar una imagen',
        text: "¿Deseas registrar una imagen de perfil?",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar'
      }).then((result) => {
        if (result.isConfirmed) {
            this.submit(
              )


        }
      })

    })
    $('.Eliminar').on('click', function(e) {
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: '¿Deseas Eliminar este usuario?',
            text: "Estás a punto de eliminar este usuario de la base de datos. Una vez eliminado, el usuario no podrá ser recuperado. ¿Estás seguro de que deseas continuar con esta operación?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar'
          }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
          })
    });

    $('.Reporte').on('click', function(e) {
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: '¿Deseas eliminar el reporte generado?',
            text: "Estimado usuario, ¿Desea continuar con la operación?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar'
          }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
          })
    });




    $('.Category').on('click', function(e) {
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: '¿Deseas Eliminar esta Categoría',
            text: "Al eliminar esta categoría, también se borrarán todas las subcategorías y tipos asociados. ¿Deseas continuar?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar'
          }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
          })
    });

    $('.Cerrar').on('click', function(e) {
      e.preventDefault();
      var href = $(this).attr('href');
      Swal.fire({
          title: '¿Deseas Salir del SIstema',        
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Confirmar'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = href;
          }
      })
  });
  
