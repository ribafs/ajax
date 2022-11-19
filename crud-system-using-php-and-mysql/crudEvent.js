$(document).ready(function(){

	$(document).on('click' , '.bn-edit' ,function(){
			var id = this.id;
			$.ajax({
				url: 'read.php',
				type: 'POST',
				dataType: 'JSON',
				data: {"id":id,"type":"single"},
				success:function(response){
					$("#edit-modal").modal('show');
					$('#title').val(response.title);
					$('#description').val(response.description);
					$('#url').val(response.url);
					$("#category").val(response.category);
					$("#id").val(id);
				}
			});
		});
	
	
	$(document).on('click' , '#update' ,function(){
			$.ajax({
					url: 'edit.php',
					type: 'POST',
					dataType: 'JSON',
					data: $("#frmEdit").serialize(),
					success:function(response){
						$("#messageModal").modal('show');
						$("#msg").html(response);
						$("#edit-modal").modal('hide');
						loadData();
					}
				});
		});
	
	$(document).on('click' , '.bn-delete' ,function(){
		if(confirm("Are you sure want to delete the record?")) {
			var id = this.id;
			$.ajax({
				url: 'delete.php',
				type: 'POST',
				dataType: 'JSON',
				data: {"id":id},
				success:function(response){
					loadData();
				}
			});
		}
	});
});
	
function loadData() {
	$.ajax({
		url: 'read.php',
		type: 'POST',
		data: {"type":"all"},
		success:function(response){
			$("#container").html(response);
		}
	});
}