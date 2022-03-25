$(document).on('change', 'input[name="duration"]', function() {
    var rate=parseInt($('input[name="rate"]').val());
    var payable=rate*parseInt($(this).val());
    $('.rate').html(`&#8377; ${payable}`);
    $('input[name="payable"]').val(payable);
});