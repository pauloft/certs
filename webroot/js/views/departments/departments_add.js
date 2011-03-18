<!-- 
// FILE: js/views/departments/departments_add.js 
-->
$(function(){
	$('#name').blur(function(){
		fieldName = $(this).attr('id');
		fieldValue = $(this).val();
		$.post('/departments/ajax_validate', {
					field: fieldName,
					value: fieldValue
					},
			function(error){
				if(error.length != 0) {
					$('#name').after('<div class="error-message" id="' + fieldName + '-exists">' + error + '</div>');
				} else {
					$('#' + fieldName + '-exists').remove();
				}
			});
	});
});

