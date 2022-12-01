<div class="container" style="width: 700px; height: 1000px">
    <div class="container card my-2">
            <div class="mb-3">
                <label for="Razon_Social" class="form-label"  value="{{ __('Razon_Social') }}">Razon Social</label>
                <input type="text" class="form-control" id="Razon_Social" name="Razon_Social" style="width : 250px; heigth : 1px">
            <div id="" class="form-text">Digite la razon social</div>
            </div>
            <div class="mb-3">
                <label for="Nit" class="form-label">"{{ __('Nit') }}"</label>
                <input type="number" class="form-control" id="Nit" name="Nit" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1"value="{{ __('Representante') }}">Representante Legal</label>
                <input type="text" class="form-control" id="Representante" name="Representante"  style="width : 250px; heigth : 1px">
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="Objeto" value="{{ __('Objeto') }}"></textarea>
                <label for="floatingTextarea"    style="width : 250px; heigth : 1px">objeto del contrato</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('FinicioA') }}">Fecha Inicio Contrato</label>
                <input type="date" class="form-control" id="FinicioA" name="FinicioA" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('FfinA') }}">Fecha Fin Contrato</label>
                <input type="date" class="form-control" id="FfinA" name="FfinA" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('Prorroga') }}">Prorroga Automatica</label>
                <input type="text" class="form-control" id="Prorroga" name="Prorroga" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('Camara') }}">Vigencia Camara de Comercio</label>
                <input type="date" class="form-control"id="Camara" name="Camara" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('Correo') }}">Correo Electronico</label>
                <input type="email" class="form-control" id="Correo" name="Correo" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('Telefono') }}">Telefono</label>
                <input type="number" class="form-control" id="Telefono" name="Telefono" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="form-control" value="{{ __('Supervisor') }}">Supervisor del Contrato</label>
                <input type="text" class="form-control" id="Supervisor" name="Supervisor" style="width : 250px; heigth : 1px">
            </div>
            <select class="form-select" aria-label="Default select example" name="EstadoA" style="width : 250px; heigth : 1px">
                <option selected>Estado</option>
                <option name="EstadoA"  value="{{ __('Activo') }}">Activo</option>
                <option name="EstadoA" value="{{ __('Inactivo') }}">Inactivo</option>
            </select>
            <div class="mb-3">
                <label class="form-check-label" for="form-control" value="{{ __('Documentos') }}">Documentos</label>
                <input type="file" class="form-control" id="Documentos" name="Documentos" style="width : 250px; heigth : 1px">
            </div>
            <br>
                <button type="submit" class="btn btn-dark">Guardar</button>
    </div>
</div>
