<div class="modal fade" id="edit{{$type_has_category -> id}}" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDITAR RELACION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('service_type_category.update', $type_has_category->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">TIPO DE SERVICIO</label>
                        <select type="form-select" name="service_type_id" maxlength="255" class="form-control" required>
                            <option>Seleccione un tipo de servicio</option>
                            @foreach ($service_type_category as $type)
                                <option value="{{ $type->service_type_id }}">{{ $type->service_type_id }}</option>
                            @endforeach
                        </select>
                    </div>

					<div class="mb-3">
                        <label class="form-label">CATEGORIA</label>
                        <select type="form-select" name="service_category_id" maxlength="255" class="form-control" required>
                            <option>Seleccione una categoria</option>
                            @foreach ($service_type_category as $category)
                                <option value="{{ $category->service_category_id }}">{{ $category->service_category_id }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="bi bi-x-lg"></i> Cancelar</button>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>