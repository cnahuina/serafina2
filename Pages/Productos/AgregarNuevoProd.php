<!-- The Modal -->
<div class="modal" id="formNuevoProd">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Nuevo Producto</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <aside style="width: 100%">
                    <form name="form">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresar descripcion">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput2">Presentacion</label>
                            <input type="text" class="form-control" id="presentacion" name="presentacion" placeholder="Ingresar presentacion">
                        </div>

                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label >IMAGEN</label>
                                <input  type="file" class="form-control" name="foto" id="foto" accept="image/*" placeholder="IMAGEN" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <center><output  id="list"></output></center>
                        </div>


                        <div class="form-group">
                            <label for="formGroupExampleInput2">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresar precio">
                        </div>

                        <input  class="btn-seguir-vendiendo" type="submit"  onclick="registrarProducto('../Controller')" value="registrar">

                        <script>

                            function archivo(evt) {
                                var files = evt.target.files; // FileList object

                                // Obtenemos la imagen del campo "file".
                                for (var i = 0, f; f = files[i]; i++) {
                                    //Solo admitimos imágenes.
                                    if (!f.type.match('image.*')) {
                                        continue;
                                    }

                                    var reader = new FileReader();

                                    reader.onload = (function (theFile) {
                                        return function (e) {

                                            // Insertamos la imagen
                                            document.getElementById("list").innerHTML = [' <img height="150px" width="200" class="img-circle"  src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                                        };
                                    })(f);

                                    reader.readAsDataURL(f);
                                }
                            }

                            document.getElementById('foto').addEventListener('change', archivo, false);
                        </script>
                    </form>

                </aside>
            </div>



        </div>
    </div>
</div>
