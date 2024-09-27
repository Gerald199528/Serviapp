
    {!! Html::script('matrix/assets/libs/jquery/dist/jquery.min.js')!!}



    <!-- Bootstrap tether Core JavaScript -->
    {!! Html::script('matrix/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')!!}
    {!! Html::script('matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')!!}
    {!! Html::script('matrix/assets/extra-libs/sparkline/sparkline.js')!!}
     <!--Wave Effects -->
     {!! Html::script('matrix/dist/js/waves.js')!!}
    {!! Html::script('matrix/dist/js/sidebarmenu.js')!!}
     <!--Custom JavaScript -->
     {!! Html::script('matrix/dist/js/custom.min.js')!!}
    {!! Html::script('matrix/assets/libs/flot/excanvas.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.pie.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.time.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.stack.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.crosshair.js')!!}
    {!! Html::script('matrix/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')!!}

     <!-- this page js -->

      {!! Html::script('matrix/assets/libs/jquery-steps/build/jquery.steps.js')!!}
      {!! Html::script('matrix/assets/libs/jquery-validation/dist/jquery.validate.min.js')!!}

     <!-- list category -->

     {!! Html::script('matrix/assets/extra-libs/multicheck/datatable-checkbox-init.js')!!}
     {!! Html::script('matrix/assets/extra-libs/multicheck/jquery.multicheck.js')!!}
     {!! Html::script('matrix/assets/extra-libs/DataTables/datatables.min.js')!!}
     {!! Html::script('sweetalert2/app.js')!!}
     {!! Html::script('date/index.js')!!}
     {!! Html::script('select/user.js')!!}
     {!! Html::script('select/reporte.js')!!}



     <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>





      <script>
      $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No existen datos registrados en la base de datos.",
            "info": "Página _PAGE_ de _PAGES_",
            "infoEmpty": "Mostrando ",
            "infoFiltered": "(filtrado de _MAX_ Registros totales)",
            'search': 'Buscar:',
            'paginate': {
                'next': 'Siguiente',
                'previous': 'Anterior'

            }
        }
    } );
} );
      </script>




<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin="">
</script>


<script>
    navigator.geolocation.getCurrentPosition((position)=>{
        let {latitude,longitude} = position.coords;
        var map = L.map('map').setView([latitude, longitude], 13);

        // Agregar capa de calle
        var street = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
          minZoom: 1,
          attribution: '© <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Agregar capa de satélite
        var satellite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
          maxZoom: 20,
          subdomains: ['mt0','mt1','mt2','mt3']
        });

        // Agregar control de capas
        L.control.layers({
          "Street": street,
          "Satellite": satellite
        }).addTo(map);

        // Agregar un marcador personalizado en la ubicación actual
        var customIcon = L.icon({
         iconUrl: 'https://drive.google.com/file/d/1yzFNVUSLxZGu7ynPRR65FCrpQK7D7UDH/view?usp=drive_link', // reemplaza esto con la URL de tu imagen de ícono rojo
          iconSize: [38, 95], // tamaño del icono
          iconAnchor: [22, 94], // punto del icono que corresponderá a la ubicación del marcador
          popupAnchor: [-3, -76] // punto desde donde se abrirá el popup
        });

        var marker = L.marker([latitude, longitude], {icon: customIcon}).addTo(map);

        // Agregar un popup al marcador
        marker.bindPopup("<b style='color:red;'>Estás aquí</b><br>Latitud: " + latitude + "<br>Longitud: " + longitude).openPopup();

        // Agregar evento de clic al mapa
        map.on('click', function(e) {
          var lat = e.latlng.lat;
          var lng = e.latlng.lng;

          // Asignar latitud y longitud a los campos de entrada
          document.getElementById('latitude').value = lat;
          document.getElementById('longitude').value = lng;

          // Agregar un marcador al mapa en la ubicación del clic
          L.marker(e.latlng).addTo(map);
        });
      });

    </script>


<script>
     // BOTON INSTALAR PWA CON Sweetalert2
  let deferredPrompt;
  window.addEventListener('beforeinstallprompt', (e) => {
    // Prevenir que aparezca la mini-infobar en dispositivos móviles
    e.preventDefault();
    // Almacenar el evento para activarlo más tarde
    deferredPrompt = e;
    // Actualizar la interfaz de usuario para notificar al usuario que puede instalar la PWA
    document.getElementById('install-button').style.display = 'block';
  });

  // Ocultar el botón cuando la aplicación se esté ejecutando como PWA
  if (window.matchMedia('(display-mode: standalone)').matches) {
    document.getElementById('install-button').style.display = 'none';
  }

  document.getElementById('install-button').addEventListener('click', (e) => {
    // Prevenir el comportamiento predeterminado del enlace
    e.preventDefault();
    Swal.fire({
      title: '¿Deseas instalar esta aplicación?',
      showDenyButton: true,
      confirmButtonText: `Instalar`,
      denyButtonText: `No instalar`,
    }).then((result) => {
      /* Leer más sobre isConfirmed, isDenied a continuación */
      if (result.isConfirmed) {
        // Mostrar un mensaje de "Por favor espere..."
        let timerInterval;
        Swal.fire({
          title: 'Por favor espere...',
          html: 'La aplicación se está instalando. Esta ventana se cerrará en <b></b> milisegundos.',
          timer: 7000, // Ajusta este valor al tiempo que deseas que se muestre el mensaje
          timerProgressBar: true,
          allowOutsideClick: false,
          allowEscapeKey: false,
          allowEnterKey: false,
          didOpen: () => {
            Swal.showLoading();
            const b = Swal.getHtmlContainer().querySelector('b');
            timerInterval = setInterval(() => {
              b.textContent = Swal.getTimerLeft();
            }, 100);
          },
          willClose: () => {
            clearInterval(timerInterval);
          }
        });
        // Mostrar el aviso de instalación
        deferredPrompt.prompt();
        // Esperar a que el usuario responda al aviso
        deferredPrompt.userChoice.then((choiceResult) => {
          if (choiceResult.outcome === 'accepted') {
            console.log('El usuario aceptó el aviso de instalación');
          } else {
            console.log('El usuario rechazó el aviso de instalación');
          }
        });
      } else if (result.isDenied) {
        Swal.fire('La instalación ha sido cancelada', '', 'info');
      }
    });
  });
</script>