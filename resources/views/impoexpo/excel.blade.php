<div class="container" style="width: 700px; height: 1000px">
    <div class="container card my-2">
        <form  action="{{ route('impoexpo.importar') }}" method="POST" enctype="multipart/form-data" class="container">
            @csrf
            <div class="mb-3">
                <label class="form-check-label" for="form-control" value="{{ __('Documentos') }}">Documentos</label>
                <input type="file" class="form-control" id="Documentos" name="Documentos" style="width : 250px; heigth : 1px">
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Importar</button>

        </form>

    </div>

</div>