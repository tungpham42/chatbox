function sendMessage() {
    var message = $('#message').val();
    if (message && message != '' && !message.includes('<') && !message.includes('>')) {
        $('#chatbox').append('<p><u>Tôi:</u></p>');
        $('#chatbox').append('<p>' + message + '</p>');
        const botAnswer = setTimeout(() => {
            $.ajax({
                'type': 'POST',
                'url': './process.php',
                'data': {
                    'message': message
                },
                'dataType': 'text'
            }).done(function(answer){
                $('#chatbox').append('<p class="botTitle"><u>Máy:</u></p>');
                $('#chatbox').append('<p class="answer">' + answer + '</p>');
            });
        }, 200);
        $('#message').val('');
    } else {
        bootbox.alert({
            message: 'Xin lỗi. Câu hỏi không hợp lệ!',
            size: 'small',
            centerVertical: true,
            closeButton: false,
            buttons: {
                ok: {
                    label: '<i class="fa-solid fa-xmark"></i> Đóng',
                    className: 'btn btn-primary btn-sm'
                }
            }
        });
    }
}
$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault();
        sendMessage();
    });
    $('#message').keypress(function(e) {
        if(e.which == 13) {
            e.preventDefault();
            sendMessage();
        }
    });
    $('#erase').on('click', function(){
        $('#chatbox').html('');
    });
    $('[data-toggle="tooltip"]').tooltip();
}).ajaxStart(function(){
    $('body').addClass('waiting');
    $('#erase').addClass('disabled');
    $('textarea#message, #enter').attr('disabled', true);
    $('.waitingIndicator').css('display', 'block');
}).ajaxComplete(function () {
    $('body').removeClass('waiting');
    $('#erase').removeClass('disabled');
    $('textarea#message, #enter').attr('disabled', false);
    $('textarea#message').focus();
    $('.waitingIndicator').css('display', 'none');
});