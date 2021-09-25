$(function() {
	$('#login-form').submit(function(event) {
		event.preventDefault();
		$('#notification').removeClass('alert alert-danger');
		$('#notification').text('');
		var username = $('#user_login').val().trim();
		var pass = $('#user_key').val().trim();
		if (!(username && pass)) {
			var notification = $('#notification');
			notification.addClass('alert alert-danger')
			notification.val('username or password cannot be empty');
			return;
		}
		var form = new FormData($(this)[0]);
		form.append('login-btn','btn');
		$.ajax({
		    url : "auth.php",
		    type: "POST",
		    data : form,
		    processData: false,
		    contentType: false,
		    success:function(data, textStatus, jqXHR){
		    	data= JSON.parse(data);
		    	if (data.status) {
		    		location.assign('dashboard.php');
		    	}
		    	else{
		    		var notification = $('#notification');
					notification.addClass('alert alert-danger')
					notification.text('invalid login details');
		    	}
		    },
		    error: function(jqXHR, textStatus, errorThrown){
		       var notification = $('#notification');
				notification.addClass('alert alert-danger')
				notification.text('invalid login details');    
		    }
		});
	});
});