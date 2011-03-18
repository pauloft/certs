$(document).ready(function(){
	$('#group-name').live('change', function(){
		if($(this).val().length != 0) {
			$.getJSON('/groups/getUsersAjax', {groupID: $(this).val()}, function(users_list) {
				if(users_list != null) {
					var options = '';
					
					$.each(users_list, function(index, user) {
						options += '<option value="' + index + '">' + user + '</option>';
					});
					$('#users-name').html(options);
					$('#users-in-group').show(); 
					console.log(users_list);
				}
			});
		}
	});
});
