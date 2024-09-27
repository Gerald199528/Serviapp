
function cargarMunicipios() {
    var array = ["Municipio_Andrés_Bello",  "Municipio_Boconó",  "Municipio_Bolívar",  "Municipio_Candelaria",  "Municipio_Carache",  "Municipio_Escuque",  "Municipio_José_Felipe_Márquez_Cañizales",  "Municipio_Juan_Vicente_Campos_Elías",  "Municipio_La_Ceiba",  "Municipio_Miranda",  "Municipio_Monte_Carmelo",  "Municipio_Motatán",  "Municipio_Pampán",  "Municipio_Pampanito", "Municipio_Rafael_Rangel",  "Municipio_San_Rafael_de_Carvajal",  "Municipio_Sucre",  "Municipio_Trujillo",  "Municipio_Urdaneta",  "Municipio_Valera"];
    array.sort();
    addOptions("municipio", array);
}

function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (municipio in array) {
        var opcion = document.createElement("option");
        opcion.text = array[municipio];
        opcion.value = array[municipio].toLowerCase()
        selector.add(opcion);
    }
}
function cargarParroquias() {

    // Modifique los nombres de tus propiedas a minúsculas.
    var listaParroquias = {
        municipio_andrés_bello: ["Parroquia Araguaney", "Parroquia El Jaguito", "Parroquia La Esperanza", "Parroquia Santa Isabel"],
        municipio_boconó: ["parroquia Boconó", "Parroquia El Carmen", "Parroquia Mosquey", "Parroquia Ayacucho", "Parroquia Burbusay", "Parroquia General Ribas", "Parroquia Guaramacal", "Parroquia Vega de Guaramacal",  "Parroquia Monseñor Jáuregui",  "Parroquia Rafael Rangel", "Parroquia San Miguel",  "Parroquia José"],
        municipio_bolívar: ["PARROQUIA SABANA GRANDE", "PARROQUIA CHEREGÜÉ", "PARROQUIA GRANADOS"],
        municipio_candelaria: ["PARROQUIA ARNOLDO GARRAFÓN", "PARROQUIA BOLIVIA", "PARROQUIA CARRILLO", "PARROQUIA CEGARRA", "PARROQUIA CHEJENDÉ", "PARROQUIA MANUEL SALVADOR ULLOA", "PARROQUIA SAN JOSÉ"],
        municipio_bolívar: ["PARROQUIA SABANA GRANDE", "PARROQUIA CHEREGÜÉ", "PARROQUIA GRANADOS"],
        municipio_candelaria: ["parroquia carache", "parroquia la concepción", "parroquia panamericana", "parroquia santa cruz"],
        municipio_carache: ["Parroquia homónima o cabecera", "Parroquia Cuicas", "Parroquia La Concepción", "Parroquia Panamericana", "Parroquia Santa Cruz"],
        municipio_escuque: ["Parroquia Escuque", "Parroquia La Unión (El Alto Escuque)", "Parroquia Santa Rita", "Parroquia Sabana Libre"],
        municipio_josé_felipe_márquez_cañizales: ["Parroquia El Socorro", "Parroquia Los Caprichos",  "Parroquia Antonio José de Sucre"],
        municipio_juan_vicente_campos_elías: ["Parroquia Campo Elías", "Parroquia Arnoldo Gabaldón"],
        municipio_la_ceiba: ["Parroquia Santa Apolonia", "Parroquia El Progreso", "Parroquia La Ceiba", "Parroquia Tres de Febrero"],
        municipio_miranda: ["Parroquia El Dividive", "Parroquia Agua Santa", "Parroquia Agua Caliente", "Parroquia El Cenizo", "Parroquia Valerita"],
        municipio_monte_carmelo: ["Parroquia Monte Carmelo", "Parroquia Buena Vista", "Parroquia Santa María del Horcón"],
        municipio_motatán: ["Parroquia Motatán", "Parroquia El Baño", "Parroquia Jalisco"],
        municipio_pampán: ["Parroquia Pampán", "Parroquia Flor de Patria", "Parroquia La Paz", "Parroquia Santa Ana"],
        municipio_pampanito: ["Parroquia Pampanito", "Parroquia La Concepción", "Parroquia Pampanito II"],
        municipio_rafael_rangel: ["Parroquia Betijoque", "Parroquia José Gregorio Hernández", "Parroquia José Gregorio Hernández", "Parroquia Los Cedros"],
        municipio_san_rafael_de_carvajal: ["Parroquia San Rafael de Carvajal", "Parroquia Campo Alegre", "Parroquia Antonio Nicolás Briceño", "Parroquia José Leonardo Suárez"],
        municipio_sucre: ["Parroquia Sabana de Mendoza", "Parroquia Junín", "Parroquia Valmore Rodríguez", "Parroquia Valmore Rodríguez"],
        municipio_trujillo: ["Parroquia Andrés Linares", "Parroquia Chiquinquirá", "Parroquia Cristóbal de Mendoza", "Parroquia Cruz Carrillo", "Parroquia Matriz", "Parroquia Monseñor Carrillo", "Parroquia Tres Esquinas"],
        municipio_urdaneta: ["Parroquia Cabimbú", "Parroquia Jajó", "Parroquia La Mesa de Esnujaque", "Parroquia Tuñame", "Parroquia La Quebrada", "Parroquia Santiago de Trujillo"],
        municipio_valera: ["Parroquia Juan Ignacio Montilla", "Parroquia La Beatriz", "Parroquia La Puerta", "Parroquia Mendoza del Valle de Momboy", "Parroquia Mercedes Díaz", "Parroquia San Luis"]

    }
    var municipios = document.getElementById('municipio')
    var parroquias = document.getElementById('parroquia')
    // La carrera seleccionada se convierte a minúsuculas para que podás buscarla tal cual en tu array de listaMaterias
    var municipioSeleccionada = municipios.value.toLowerCase()

    parroquias.innerHTML = '<option selected disabled value="">Seleccione una Parroquias</option>'

    if (municipioSeleccionada !== '') {
        // sistemas que es lo que seleccionaste, si es igual a sistemas en tu array listaMaterias
        municipioSeleccionada = listaParroquias[municipioSeleccionada]
        // Validamos que traiga el listado de materias, ya que sino te dará un error que no existe el método sort, porque no es un array sino un texto
        if (!!municipioSeleccionada.length) municipioSeleccionada.sort()

        municipioSeleccionada.forEach(function (parroquia) {
            let opcion = document.createElement('option')
            opcion.value = parroquia
            opcion.text = parroquia
            parroquias.add(opcion)
        });
    }

}

cargarMunicipios();
