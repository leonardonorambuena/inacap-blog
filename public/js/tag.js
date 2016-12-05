$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
	getTags()
})

function getTags()
{
	$.ajax({
		url : '/admin/getTags',
		data: {name: $('#search-name').val()},
		method: 'GET',
		success : function(res)
		{
			if(res.length > 0)
			{
				RenderListTags(res)
			}
		},
		error : function(err)
		{

		}
	})
}


function getTag(tagId)
{
	if(tagId != null)
	{
		$.ajax({
			url : '/admin/tags/'+tagId,
			method: 'GET',
			success : function(res)
			{
				$("#edit-title").text(`Actualizar la etiqueta ${res.name} creada el ${res.created_at}`)
				$("#edit-id").val(res.id)
				$("#edit-name").val(res.name)
				$("#edit-description").val(res.description)
			},
			error : function(err)
			{
				console.log(err)
			}
		})	
	}
	
}

function RenderListTags(res)
{
	var tags = ''
	for(let tag of res)
	{
		tags += `<tr>
					<td>${tag.name}</td>
					<td>${tag.description}</td>
					<td>${tag.created_at}</td>
					<td>
						<a href='' data-toggle='modal' data-id='${tag.id}' class='btn btn-info btn-edit-tag' data-target='#modal-edit-tags'>
							<i class='glyphicon glyphicon-pencil' data-toggle='tooltip' data-placement='top' title='Actualizar Etiqueta ${tag.name}'></i>
						</a>
						<a href='' data-toggle='modal' data-id='${tag.id}' data-name='${tag.name}' class='btn btn-danger btn-delete-tag' data-target='#modal-delete-tags'>
							<i class='glyphicon glyphicon-trash' data-toggle='tooltip' data-placement='top' title='Eliminar Etiqueta ${tag.name}'></i>
						</a>
					</td>
				</tr>`
	}
	$("#table-tags tbody").html('')
	$("#table-tags tbody").append(tags)
}

/*Eventos*/
$(document).on("click", "#btn-create-tag", function(){
	addTag()
})
$(document).on("click", "#btn-edit-tag", function(){
	updateTag()
})
$(document).on("keyup", "#search-name", function(){
	getTags()
})

$(document).on("click", ".btn-edit-tag", function()
{
	getTag($(this).data('id'))
})

$(document).on("click", "#btn-delete-tag", function()
{
	deleteTag()
})

$(document).on("click", ".btn-delete-tag", function()
{
	$("#delete-tag-title").text(`¿Esta seguro de eliminar la etiqueta ${$(this).data('name')}?`)
	$("#delete-id").val($(this).data('id'))
})


function addTag()
{
	$.ajax({
		url: '/admin/tags',
		method: 'post',
		data: {name : $("#create-name").val(), description : $("#create-description").val()},
		success : function(res){
			if(res.status == 200)
			{
				$('#modal-create-tags').modal('hide')
				clearCreateForm()
				getTags()
			} 

		},
		error: function(err){
			if(err.status == 422)
			{
				var message = jQuery.parseJSON(err.responseText) 
				if(message.description)
				{
					$("#create-description").parent().addClass('has-error')
					$("#help-create-description").text(message.description);
				}
				else
				{
					$("#create-description").parent().removeClass('has-error')
					$("#create-description").parent().addClass('has-success')
					$("#help-create-description").text('')
				}

				if(message.name)
				{
					$("#create-name").parent().addClass('has-error')
					$("#help-create-name").text(message.name);
				}
				else
				{
					$("#create-description").parent().removeClass('has-error')
					$("#create-name").parent().addClass('has-success')
					$("#help-create-name").text('');
				}
			}
		}
	})
}

function updateTag()
{
	$.ajax({
		url: '/admin/tags/'+$("#edit-id").val(),
		method: 'post',
		data: {id: $("#edit-id").val(), _method: 'PUT',name : $("#edit-name").val(), description : $("#edit-description").val()},
		success : function(res){
			if(res.status == 200)
			{
				$('#modal-edit-tags').modal('hide')
				clearCreateForm()
				getTags()
			}
		},
		error: function(err){
			console.log(err)
		}
	})
}


function deleteTag()
{
	$.ajax({
		url: '/admin/tags/'+$("#delete-id").val(),
		method: 'post',
		data: {id: $("#delete-id").val(), _method: 'DELETE'},
		success : function(res){
			if(res.status == 200)
			{
				$('#modal-delete-tags').modal('hide')
				clearCreateForm()
				getTags()
			}
		},
		error: function(err){
			console.log(err)
		}
	})
}
function clearCreateForm()
{
	$("#create-name").val('')
	$("#create-description").val('')
}