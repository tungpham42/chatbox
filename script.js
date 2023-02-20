function sendMessage() {
    var message = $('textarea#message').val().replace(/(\r\n|\n|\r)/gm, "");
    var latestAnswer = $('p.answer:last-child').text().replace(/(\r\n|\n|\r)/gm, "");
    if (message && message != '' && !message.includes('<') && !message.includes('>')) {
        $('#chatbox').append('<p><u>Tôi:</u></p>');
        $('#chatbox').append('<p>' + message + '</p>');
        $.ajax({
            'type': 'POST',
            'url': './process.php',
            'data': {
                'message': ((latestAnswer == '') ? message : (latestAnswer + ' ' + message))
            },
            'dataType': 'text'
        }).done(function(answer){
            answer.replace(/(\r\n|\n|\r)/gm, "");
            $('#chatbox').append('<p class="botTitle"><u>Máy:</u></p>');
            $('#chatbox').append('<p class="answer">' + answer + '</p>');
        });
        $('textarea#message').val('');
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
    $('textarea#message').focus();
    $('form').submit(function(e) {
        e.preventDefault();
        sendMessage();
    });
    $('textarea#message').keypress(function(e) {
        if(e.which == 13) {
            e.preventDefault();
            sendMessage();
        }
    });
    $('#erase').on('click', function(){
        $('#chatbox').html('<div class="waitingIndicator"><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span></div><div id="theAnswer"></div>');
        $('textarea#message').focus();
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
