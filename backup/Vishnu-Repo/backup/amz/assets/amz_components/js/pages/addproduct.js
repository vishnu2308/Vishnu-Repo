$(document).ready(function(){

	load_data();

	function load_data()
	{
		$.ajax({
			url: baseURL+"AddProducts/AddProducts/fetch",
			method:"POST",
			success:function(data){
				$('#customer_data').html(data);
			}
		})
	}

	$('#import_form').on('submit', function(event){
		event.preventDefault();
		$.ajax({
			url: baseURL+"AddProducts/AddProducts/import",
			method:"POST",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success:function(data){
				$('#file').val('');
				load_data();
				alert(data);
			}
		})
	});

});
