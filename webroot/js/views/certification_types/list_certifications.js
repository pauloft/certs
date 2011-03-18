$(document).ready(function(){
	$('#certification-type').live('change', function(){
		if($(this).val().length != 0) {
			$.getJSON('/certification_types/getCertificationsAjax',
						{cert_type_id: $(this).val()},
						function(mycerts) {
							if(mycerts != null) {
								populateCertificationsSelect(mycerts);
							}
						});
		}
	});
});

function populateCertificationsSelect(mycerts) {
	var options = '';
	var i=0;
	$.each(mycerts, function(index, cert) {
		options += '<option value="' + index + '">' + cert + '</option>';
		i++;
	});
	
	if(i == 0) {
		options += '<option value="">NONE AVAILABLE</option>';
	}
	$('#certification-name').html(options);
	$('#certifications').show();
}
