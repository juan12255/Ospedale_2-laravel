<form  action="{{ route('especialistas.import2') }}" method="POST" class="container" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-check-label" for="form-control" value="{{ __('Importar') }}"></label>
        <input type="file" class="form-control" id="Importar" name="import_file" style="width : 250px; heigth : 1px" required>
        <button type="submit" class="btn btn-dark">Importar <i class="bi bi-file-earmark-arrow-up"></i></button>
    </div>
</form>