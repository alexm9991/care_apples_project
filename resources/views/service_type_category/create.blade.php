<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">CREAR RELACION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('service_type_category.store') }}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">TIPO DE SERVICIO</label>
                        <select type="form-select" name="service_type_id" class="form-control"
                            placeholder="TIPO DE SERVICIO" required>
                            <option selected>Seleccione un tipo de servicio</option>
                            @foreach ($service_types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">CATEGORIA DE SERVICIO</label>
                        <select type="form-select" name="service_category_id" class="form-control"
                            placeholder="CATEGORIA DE SERVICIO" required>
                            <option selected>Seleccione una categoria</option>
                            @foreach ($service_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="bi bi-x-lg"></i> Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>
