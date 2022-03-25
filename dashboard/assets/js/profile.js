$(document).on('submit', '#update-profile-form', function(e) {
    e.preventDefault();
    var form=$(this);
    var fd=new FormData(this);
    $.ajax({
        type: 'POST',
        url: './functions/profile.php',
        data: fd,
        dataType: 'json',
        processData: false,
        contentType: false,
        beforeSend: function() {
            form.find('.alert').hide();
            form.find('input:not([name="email"])').attr('disabled', true);
        },
        success: function(response) {
            console.log(response);
            form.find('input:not([name="email"])').attr('disabled', false);
            if(response.status==true)
                form.find('.alert.alert-success').show().fadeOut(3000);
            else
                form.find('.alert.alert-danger').show().fadeOut(3000);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR, textStatus, errorThrown);
            form.find('input:not([name="email"])').attr('disabled', false);
            form.find('.alert.alert-danger').show().fadeOut(3000);
        }
    });
});

$(document).on('submit', '#update-password-form', function(e) {
    e.preventDefault();
    var form=$(this);
    var fd=new FormData(this);

    if(fd.get('password')!=fd.get('cpassword')) {
        form.find('.alert.alert-danger').text('Passwords do not match').show();
        return;
    }

    $.ajax({
        type: 'POST',
        url: './functions/profile.php',
        data: fd,
        dataType: 'json',
        processData: false,
        contentType: false,
        beforeSend: function() {
            form.find('.alert').hide();
            form.find('input').attr('disabled', true);
        },
        success: function(response) {
            console.log(response);
            form.find('input').attr('disabled', false);
            if(response.status==true) {
                form.find('.alert.alert-success').show().fadeOut(3000);
                form.trigger('reset');
            }
            else
                form.find('.alert.alert-danger').text('Unable to update password').show().fadeOut(3000);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR, textStatus, errorThrown);
            form.find('input').attr('disabled', false);
            form.find('.alert.alert-danger').text('Unable to update password').show().fadeOut(3000);
        }
    });
});