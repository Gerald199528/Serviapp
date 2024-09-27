function inicializarSelectores() {
    var categoriaSel = document.getElementById("categoria");
    var subcategoriaSel = document.getElementById("subcategoria");
    var tipoSel = document.getElementById("tipo");

    // Verificar si los selectores existen antes de intentar acceder a sus propiedades
    if (categoriaSel && subcategoriaSel && tipoSel) {
        categoriaSel.onchange = function() {
            // Vaciar subcategorias
            while (subcategoriaSel.options.length > 0) {
                subcategoriaSel.remove(0);
            }
            while (tipoSel.options.length > 0) {
                tipoSel.remove(0);
            }

            // Mostrar subcategorias
            for (var y in data[this.value]) {
                subcategoriaSel.options[subcategoriaSel.options.length] = new Option(y, y);
            }
        }

        subcategoriaSel.onchange = function() {
            // Vaciar tipos
            while (tipoSel.options.length > 0) {
                tipoSel.remove(0);
            }

            // Mostrar tipos
            var z = data[categoriaSel.value][this.value];
            for (var i = 0; i < z.length; i++) {
                tipoSel.options[tipoSel.options.length] = new Option(z[i], z[i]);
            }
        }
    }
}

document.addEventListener('livewire:load', function () {
    // Llama a la función cuando Livewire termina de cargar.
    inicializarSelectores();

    window.livewire.on('contentChanged', function () {
        // Llama a la función cuando se emite el evento 'contentChanged'.
        inicializarSelectores();
    });
});

// Datos de ejemplo
var data = {
    "Servicios": {
      "Agua": ["Atención inmediata de agua potable", "Atención inmediata de aguas servidas", "Atencion de instalaciones y equipos", "Ciclos de Abastecimiento"],
      "Electricidad": ["Transformador", "Alumbrador publico", "Pica y Poda", "Proyecto de Electrificación", "Falla de Servicio Electrico", "Gestion comercial"],
      "Telecomunicaciones": ["Cantv", "Movilnet"],
      "Gas_Comunical": ["Ciclo de atencion", "Sustitución de cilindros o tanques estacionarios", "Fugas"],
      "Gas_directo por tuberia": ["Nueva instalación de gas", "Fugas externas (Calle)", "Fuga interna (Residencial)"]
    },
    "Social": {
      "Salud": ["Centro de Salud Cerrado", "Caso Salud Individual","Infraestructura", " Falta de Insumos", "Cobro Ilegal y Sustracción de Insumos", "Traslado asistencial"],
      "Educación Universitaria": ["Infraestructura y servicio", "Asuntos Académicos", "Becas y Ayudas", "Trasporte", "Tecnologia y Equipamiento"],
      "Educación Básica": ["Infraestructura E", "Administrativo (Casos colectivos)", "Adminsitrativo (Casos personales)"]
    },
    "Desastres Naturales": {
        "Tormentas Tropicales": ["Ayuda Damnificados por lluvia", "Daños diversos en als edificaciones"],
        "Huracanes ": ["Daños en elementos no estructurales"]
      }
  };



var categoriaSel = document.getElementById("categoria");
var subcategoriaSel = document.getElementById("subcategoria");
var tipoSel = document.getElementById("tipo");

for (var x in data) {
    categoriaSel.options[categoriaSel.options.length] = new Option(x, x);
}

















