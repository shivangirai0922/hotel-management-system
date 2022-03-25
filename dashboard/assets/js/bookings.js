$(document).on('change', '.booking-status-update', function() {
    var select=$(this);
    var status=select.find('option:selected').val();
    var id=select.attr('id');
    $.ajax({
        type: 'GET',
        url: './functions/bookings.php',
        data: {id: id, status: status, action: 'update-booking-status'},
        dataType: 'json',
        beforeSend: function() {
            select.attr('disabled', true);
        },
        success: function(response) {
            alert('Status has been updated');
            window.location.reload();
            select.attr('disabled', false);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR, textStatus, errorThrown);
            alert('Error occurred. Please try after sometime');
            select.attr('disabled', false);
        }
    })
});