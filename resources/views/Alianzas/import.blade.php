<div class="mb-3">
    <label class="form-check-label" for="form-control" value="{{ __('Importar') }}"></label>
    <input type="file" class="form-control" id="Importar" name="Importar" style="width : 250px; heigth : 1px">
        <a href="{{route('alianzas.import')}}">
            <button class="btn btn-success">Importar</button>
        </a>
</div>