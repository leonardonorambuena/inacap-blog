$(document).on('click', '.btn-delete-user', function(){
	var id = $(this).data('id')
	var name = $(this).data('name')
	console.log(id) 

	$("#form-delete-user").attr('action', `/admin/users/${id}`)
	$("#delete-user-id").val(id)

	$("#delete-user-title").text(`Esta seguro de eliminar al usuario ${name}`)

})


$(document).on('click', '.btn-restore-user', function(){
	var id = $(this).data('id')
	var name = $(this).data('name')
	$("#restore-user-id").val(id)

	$("#restore-user-title").text(`Esta seguro de restaurar al usuario ${name}`)

})