<div class="modal fade" tabindex="-1" role="dialog" id="modal-edit-tags">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="edit-title"></h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" name="id" id="edit-id">
            <label class="control-label">Nombre</label>
            <input type="text" class="form-control" name="name" id="edit-name">
          </div>
          <div class="form-group">
            <label class="control-label">Descripción</label>
            <input type="text" name="description" class="form-control" id="edit-description">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success" id="btn-edit-tag">Actualizar</button>
        </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->