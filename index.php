<!doctype html>
<html lang="vi">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <!-- Bootswatch Theme -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.2/lux/bootstrap.min.css" integrity="sha512-MBgc5bwXZibAgent3ACFcBOVNeIH8Y5RIO662NI7dLX92zeeSd4xb2izk3dzU+WJlmjEZKjU+/qoXvSP7qKPaA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <!-- Main style -->
        <link rel="stylesheet" href="./style.css?t=<?php echo date('YmdHis'); ?>"> 
        <link rel="icon" sizes="512x512" href="./favicon.png">
        <meta property="og:image" content="./200x200.png">
        <meta property="og:image:alt" content="Chatbox">
        <meta property="og:image:width" content="200" >
        <meta property="og:image:height" content="200" >
        <meta name="description" content="Ứng dụng chat miễn phí với trí thông minh nhân tạo nổi tiếng ChatGPT của OpenAI">
        <meta name="og:description" content="Ứng dụng chat miễn phí với trí thông minh nhân tạo nổi tiếng ChatGPT của OpenAI">
        <meta name="og:title" content="Chatbox - Powered by ChatGPT">
        <title>Chatbox - Powered by ChatGPT</title>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3585118770961536" crossorigin="anonymous"></script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-KDNS75K5C2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-KDNS75K5C2');
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card bg-light shadow-lg rounded">
                        <div class="card-header">
                            <i class="fa-solid fa-comment"></i> <h1>Chatbox</h1><span> - Powered by ChatGPT</span> <i data-toggle="tooltip" data-placement="bottom" title="Đây là một ứng dụng chat miễn phí với trí thông minh nhân tạo nổi tiếng ChatGPT của OpenAI" class="fa-regular fa-circle-question"></i>
                        </div>
                        <div class="card-body" id="chatbox">
                            <div class="waitingIndicator"><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span></div>
                        </div>
                        <div class="card-footer">
                            <form>
                                <div class="form-group mt-2">
                                    <textarea class="form-control bg-light text-dark" id="message" rows="5"></textarea>
                                </div>
                                <button id="enter" type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Gửi</button>
                                <a id="erase" class="btn btn-secondary"><i class="fa-solid fa-xmark"></i> Xóa</a>
                            </form>
                            <a href="https://cotuong.top/" target="_blank" class="btn btn-light btn-sm float-right" id="credit"><i class="fa-solid fa-copyright"></i> Cờ tướng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/js/bootstrap.bundle.min.js" integrity="sha512-igl8WEUuas9k5dtnhKqyyld6TzzRjvMqLC79jkgT3z02FvJyHAuUtyemm/P/jYSne1xwFI06ezQxEwweaiV7VA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js" integrity="sha512-oVbWSv2O4y1UzvExJMHaHcaib4wsBMS5tEP3/YkMP6GmkwRJAa79Jwsv+Y/w7w2Vb/98/Xhvck10LyJweB8Jsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="./script.js?t=<?php echo date('YmdHis'); ?>"></script>
    </body>
</html>