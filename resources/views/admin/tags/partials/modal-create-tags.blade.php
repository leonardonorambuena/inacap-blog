<div class="modal fade" tabindex="-1" role="dialog" id="modal-create-tags">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"> Crear nueva etiqueta </h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="control-label">Nombre</label>
            <input type="text" class="form-control" name="name"  id="create-name">
            <span id="help-create-name" class="help-block"></span>
          </div>
          <div class="form-group">
            <label class="control-label">Descripción</label>
            <input type="text" name="description" class="form-control" id="create-description">
            <span id="help-create-description" class="help-block"></span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success" id="btn-create-tag">Crear</button>
        </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->