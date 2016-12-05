<div class="modal fade" tabindex="-1" role="dialog" id="modal-delete-user">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="/admin/users/" id="form-delete-user" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="id" id="delete-user-id">
        <input type="hidden" name="_method" value="DELETE">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="delete-user-title"></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger">Si</button>
        </div>
        </form>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->