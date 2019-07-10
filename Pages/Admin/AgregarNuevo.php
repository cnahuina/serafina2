<!-- The Modal -->
<div class="modal" id="formNuevo">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Nuevo trabajador</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <aside style="width: 100%">
                    <form name="form">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nombres y apellidos</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingresar nombres">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Ingresar Email">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresar Usuario">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Clave</label>
                            <input type="password" class="form-control" id="clave" name="clave" placeholder="Ingresar clave">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Repetir Clave</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Repetir clave">
                        </div>
                        <input  class="btn btn-default" type="submit"  onclick="register_user('../Controller')" value="registrar">
                    </form>

                </aside>
            </div>



        </div>
    </div>
</div>