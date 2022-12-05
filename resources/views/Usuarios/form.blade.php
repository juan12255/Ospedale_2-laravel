<div class="container" style="width: 700px; height: 1000px">
    <div class="container card my-2">
            <div class="mb-3">
                <label for="Documento" class="form-label"  value="{{ __('Documento') }}">Documento</label>
                <input type="number" class="form-control" name="Documento" id="Documento"style="width : 250px; heigth : 1px" value="{{ $usuario->Documento }}"  required >
            </div>
            <div class="mb-3">
                <label for="Nombre" class="form-label" value="{{ __('Nombre') }}">Nombre</label>
                <input type="text" class="form-control"  name="Nombre" id="Nombre" style="width : 250px; heigth : 1px" value="{{ $usuario->Nombre }}"  required>
            </div>
            <div class="mb-3">
                <label class="form-label"  class="form-label" value="{{ __('Apellido') }}">Apellido</label>
                <input type="text" class="form-control"  name="Apellido" id="Apellido"  style="width : 250px; heigth : 1px" value="{{ $usuario->Apellido }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label"  class="form-label" value="{{ __('Cargo') }}">Cargo</label>
                <input type="text" class="form-control"  name="Cargo" id="Cargo" style="width : 250px; heigth : 1px" value="{{ $usuario->Cargo }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label"  class="form-label" value="{{ __('Password') }}">Contraseña</label>
                <input type="password" class="form-control"  name="Password" id="Password" style="width : 250px; heigth : 1px" value="{{ $usuario->Contraseña }}" required>
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Guardar</button>
    </div>
</div>