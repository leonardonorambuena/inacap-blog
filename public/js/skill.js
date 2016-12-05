$(document).ready(function(){
	getSkills();
});

function getSkills()
{
	$.ajax({
		'url': '/admin/getSkills',
		'method' : 'GET',
		success : function(res)
		{
			if(res.length == 0)
			{
				$("#table-skills").hide();
			}else{
				
				renderSkills(res)
			}
			console.log(res)
		},
		error : function(err){
			console.log(err)
		}

	})
}

function renderSkills(skills)
{
	var html = ''
	for(let skill of skills)
	{
	   html = `<tr>
					<td>${skill.name}</td>
					<td>${skill.created_at}</td>
			   </tr>`
	}
	$("#table-skills tbody").html('')
	$("#table-skills tbody").append(html)

}