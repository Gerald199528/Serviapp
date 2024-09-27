

<div class="col-md-12" >
    <div class="card">
        <div class="card-body" >
<div class="jumbotron">
    <div class="container-fluid">
        <h4 class="card-title mb-0">Deltalle del Reporte.</h4>

       @include('admin.reporte.select')  <!-- Tipo de Reporte -->

        
            <div class="form-group">
                <label for="from" class="col-xs-2 control-label">  </label>
             
                    <label class="form-label"></label>
                    <textarea class="form-control" name="detalle" id="detalle" placeholder="Ingresa una breve descripción del reporte que deseas realizar." rows="3" required oninput="updateCharacterCount()"></textarea>
                    <div id="charCountContainer">
                        <p id="charCount">0 / 20000</p> <!-- Asumiendo que cada palabra tiene un promedio de 5 caracteres -->
                    </div>

                    <script>
                    function updateCharacterCount() {
                        var detalle = document.getElementById('detalle');
                        var charCount = document.getElementById('charCount');
                        var chars = detalle.value.length; // Obtiene la longitud del texto

                        // Actualiza el recuento de caracteres
                        charCount.textContent = chars + ' / 20000';

                        // Si hay más de 20000 caracteres, muestra un mensaje de error y deshabilita el botón de envío
                        if (chars > 20000) {
                            charCount.style.color = 'red';
                            document.getElementById('submitButton').disabled = true;
                        } else {
                            charCount.style.color = 'black';
                            document.getElementById('submitButton').disabled = false;
                        }
                    }
                    </script>

                    <style>
                    #charCountContainer {
                        margin-top: 10px;
                        text-align: right;
                    }

                    #charCount {
                        color: #888;
                        font-size: 14px;
                    }
                    </style>

                <h4 class="card-title mb-0">Por favor, proporciona la dirección exacta donde se encuentra el problema que estás reportando. </h4>
                <br>

                    <div class="col-md-12 position-relative">
                        <label  class="form-label">Municipio</label>
                        <br>
                        <select class="form-select"   name="municipio" id="municipio" required onchange="cargarParroquias();">
                          <option selected disabled value="">Seleccione un Municipio</option>
                                </select>
                                <br>
                      </div>
                      <div class="col-md-12 position-relative">
                          <label class="form-label">Parroquia</label>
                          <select class="form-select"  name="parroquia"  required  id="parroquia" >
                            <option selected disabled value="">Seleccione una Parroquia</option>
                          </select>
                                   </div>
                     <div class="col-md-12 position-relative">
                        <label class="form-label"></label>
                        <textarea class="form-control" name="direccion" id="direccion" placeholder="Descripción" rows="3" required oninput="updateCharacterCountDireccion()"></textarea>
                        <div id="charCountContainerDireccion">
                            <p id="charCountDireccion">0 / 20000</p> <!-- Asumiendo que cada palabra tiene un promedio de 5 caracteres -->
                    </div>
                    <script>
                        function updateCharacterCountDireccion() {
                            var direccion = document.getElementById('direccion');
                            var charCountDireccion = document.getElementById('charCountDireccion');
                            var chars = direccion.value.length; // Obtiene la longitud del texto
    
                            // Actualiza el recuento de caracteres
                            charCountDireccion.textContent = chars + ' / 20000';
    
                            // Si hay más de 20000 caracteres, muestra un mensaje de error y deshabilita el botón de envío
                            if (chars > 20000) {
                                charCountDireccion.style.color = 'red';
                                document.getElementById('submitButton').disabled = true;
                            } else {
                                charCountDireccion.style.color = 'black';
                                document.getElementById('submitButton').disabled = false;
                            }
                        }
                        </script>
                        <style>
                            #charCountContainerDireccion {
                                margin-top: 10px;
                                text-align: right;
                            }
        
                            #charCountDireccion {
                                color: #888;
                                font-size: 14px;
                            }
                            </style>
        
                        </div>
                   </div>
                </div>
        