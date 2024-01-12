<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Welcome to TUNGND.TECH</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/fe_style.css')}}" rel="stylesheet">

</head>
<style>
    #hero {
        width: 100%;
        height: 100vh;
        background: url({{isset($setting)&&$settings->background_img?asset('storage/'.$settings->background_img):asset('img/background.jpg')}}) top center;
        background-size: cover;
    }
    /*chat window*/
    .chat_button {
        position: absolute;
        bottom: 0;
        right: 0;
        margin: 30px 40px;
        height: 80px;
        width: 80px;
        text-align: center;
        background-color: #Eff;
        border-radius: 100px;
        border: none;
        font-size: 1.6rem;
        color: #77E;
        cursor: pointer;
        transition: 0.5s ease-in-out;
    }
    .chat_button:hover {
        border: 2px solid #Eff;
        background-color: #77E;
        color: #eff;
    }
    .chat_button:focus, .chat_button:active {
        outline: none;
    }

    .chat_box {
        max-height: 100%;
        max-width: 100%;
        height: 500px;
        width: 350px;
        background-color: #fff;
        position: relative;
        bottom: 100px;
        right: 100px;
        display: none;
        z-index: -1;
        border-radius: 15px;
        background-image: url(https://i.pinimg.com/originals/40/39/e0/4039e0f1ef08b7b965bacb4641a7af49.jpg);
        box-shadow: 0 0 50px rgba(0, 0, 0, 0.45);
    }
    .chat_box_header {
        padding: 20px;
        background: #e1e3e8;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        text-align: center;
        color: #77E;
        font-weight: 600;
        letter-spacing: 0.25rem;
    }
    .chat_box_body {
        padding: 16px;
        height: 100%;
        overflow-y: scroll;
        height: 380px;
        scroll-behavior: smooth;
    }
    .chat_box_body_self {
        padding: 16px 15px;
        float: right;
        border-radius: 25px;
        margin-right: 10px;
        background: #5A5EB9;
        color: white;
        margin: 10px 0;
        clear: both;
        max-width: 75%;
    }
    .chat_box_body_other {
        background: whitesmoke;
        padding: 16px 15px;
        color: #666;
        max-width: 100%;
        float: left;
        margin-left: 10px;
        margin: 10px 0;
        position: relative;
        margin-bottom: 20px;
        border-radius: 25px;
        clear: both;
    }
    .chat_box_body::-webkit-scrollbar {
        width: 5px;
        background-color: #F5F5F5;
    }
    .chat_box_body::-webkit-scrollbar-thumb {
        background-color: #77E;
    }
    .chat_box_footer {
        max-width: 100%;
        height: 80px;
        position: absolute;
        bottom: -31px;
    }
    .chat_box_footer input {
        max-width: 100%;
        width: -webkit-fill-available;
        padding: 17px 15px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        border: none;
        position: fixed;
        background-color: #4e4a4a;
    }
    .chat_box_footer input:focus {
        outline: none;
    }
    .chat_box_footer input::placeholder {
        font-family: nunito;
    }
    .chat_box_footer button {
        /*margin-right: -480px;*/
        position: fixed;
        bottom: -2px;
        right: 5px;
        font-size: 1.4rem;
        background: white;
        box-shadow: none;
        border: none;
        border-bottom-right-radius: 15px;
        color: #5A5EB9;
        /*padding: 12px 15px;*/
        /*left: 360px;*/
    }
    .chat_box_footer button:focus {
        outline: none;
    }

    .toggle {
        display: block;
    }

    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 10%, 0);
            transform: translate3d(0, 10%, 0);
        }
        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }
    .fadeInUp {
        -webkit-animation-name: fadeInUp;
        animation-name: fadeInUp;
    }

    .brand {
        text-align: center !important;
        margin-top: 25px;
    }
    .brand a {
        color: white;
        text-decoration: none;
    }

    @media only screen and (max-width: 420px) {
        #chatbar {
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 8rem;
        }
        #chatbar .chat_box_footer input {
            width: 100%;
        }
        #chatbar .chat_box_footer button {
            width: 30%;
            right: 0;
        }
    }
    .chat-div {
        position: fixed; /* Fixed positioning to make it sticky */
        bottom: 10px; /* Distance from bottom */
        right: 10px; /* Distance from right */
        z-index: 1000; /* High z-index to keep it above other content */
    }
</style>
<body>

@include('frontend.layouts.sidebar')
@yield('content')


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">

    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>


{{--chat box below, open when you're ready--}}
<div class="chat-div">
    <button class="chat_button" data-toggle="tooltip" data-placement="left" title="{{ session('locale') == 'en' ? 'Chat with me' : 'Trò chuyện với tôi' }}">
        <img src="{{asset('img/chat_icon.png')}}" alt="send"
             style="width: 48px;background-color: transparent">
    </button>
    <div id="chatbar" class="chat_box animated fadeInUp" style="resize: vertical; width: -webkit-fill-available">
        <div class="chat_box_header">
            {{ session('locale') == 'en' ? 'CHAT WITH ME' : 'TRÒ CHUYỆN VỚI TÔI' }}
        </div>
        <div id="chatBody" class="chat_box_body">
            <p><i>{{ session('locale') == 'en' ? 'Powered by OpenAI' : 'Hỗ trợ bởi OpenAI' }}</i></p>
        </div>
        <div class="chat_box_footer">

            <input type="text" id="MsgInput" placeholder="{{ session('locale') == 'en' ? 'Ask me anything!' : 'Hỏi gì cũng được!' }}" autocomplete="off">
            <button  class="chat-send right-boxed" style="background-color: #4e4a4a">
                <img src="{{asset('img/send.png')}}" alt="send"
                     style="width: 48px;background-color: transparent">
            </button>
        </div>
    </div>
</div>

<!-- Vendor JS Files -->
<script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('vendor/aos/aos.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('vendor/typed.js/typed.umd.js')}}"></script>
<script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
<!-- Template Main JS File -->
<script src="{{asset('js/fe/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

@livewireScripts
<script>
    Livewire.on('languageChanged', () => {
        location.reload();
    });
    // chat box
    $('.chat_button').on('click', function () {
        openChatBox();
    });
    $('.chat-send').on('click', function () {
        if ($("#MsgInput").val()){
            send();
        }else{
            var chatBody = document.getElementById("chatBody");

            var divClient = document.createElement("div");
            divClient.classList.add("chat_box_body_other");

            if (lang=='en'){
                divClient.innerHTML = 'You have to ask me out first!';
            }else{
                divClient.innerHTML = 'Bạn phải hỏi thì tôi mới trả lời được chứ!';
            }
            chatBody.append(divClient);
        }
    });
    $(document).on('keypress', function (e) {
        if (e.which == 13) {
            if ($("#MsgInput").is(':focus') && $("#MsgInput").val()){
                send();
            }else{
                var chatBody = document.getElementById("chatBody");

                var divClient = document.createElement("div");
                divClient.classList.add("chat_box_body_other");
                if (lang=='en'){
                    divClient.innerHTML = 'You have to ask me out first!';
                }else{
                    divClient.innerHTML = 'Bạn phải hỏi thì tôi mới trả lời được chứ!';
                }

                chatBody.append(divClient);
            }
        }
    });
    var ischatopen = false;
    var ele = document.getElementById("chatbar");

    function openChatBox() {
        if (ischatopen == false) {
            ele.classList.add("toggle");
            ischatopen = true;
            // document.getElementById("chatOpen").classList.remove("fa-comments");
            // document.getElementById("chatOpen").classList.add("fa-times");

        } else {
            ele.classList.remove("toggle");
            ischatopen = false;
            // document.getElementById("chatOpen").classList.add("fa-comments");
            // document.getElementById("chatOpen").classList.remove("fa-times");
        }
    }


    function send() {
        var chatBody = document.getElementById("chatBody");
        var Clientmsg = document.getElementById("MsgInput").value;
        document.getElementById('MsgInput').value = '';
        var divClient = document.createElement("div");
        var divOther = document.createElement("div");
        divClient.classList.add("chat_box_body_self");
        divOther.classList.add("loading-gif");
        divOther.classList.add("chat_box_body_other");

        divClient.innerHTML = Clientmsg;
        divOther.innerHTML = '<div class="double-bounce1"></div><div class="double-bounce2"></div>';

        chatBody.append(divClient);
        chatBody.append(divOther);
        chatBody.scrollTop = chatBody.scrollHeight;

//call chat here
        $.ajax({
            url: 'chat',
            data: {
                message: Clientmsg
            },
            method: 'GET',
            success: function (data) {
                $(".loading-gif").remove();
                var divBot = document.createElement("div");
                divBot.classList.add("chat_box_body_other");

                divBot.innerHTML = data;
                setTimeout(function () {
                    $('divBot').show();
                }, 5000);
                chatBody.append(divBot);
                chatBody.scrollTop = chatBody.scrollHeight;
            }
        });


    }

</script>
</body>

</html>
