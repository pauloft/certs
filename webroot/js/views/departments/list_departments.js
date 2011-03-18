$(function() {
	$('#department-name').live('change', function() {
		if($(this).val().length != 0) {
			$.getJSON('/departments/getUsersAjax',
				{userID: $(this).val()},
				function(usersAjax) {
					if(usersAjax != null) {
						// populate the user selection listbox
						populateUsersNameList(usersAjax);
					}
				});
		}
	});
});

function populateUsersNameList(usersAjax){
	var options = '';
	var i = 0;
	$.each(usersAjax, function(index, user){
		options += '<option value="' + index + '">' + user + '</option>';
		i++;
	});
	if(i==0) {
		options += 'option value="">No Users found</option>'; 
	}
	$('#users-name').html(options);
	$('#users_list').show();
}
