<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/FAQ.css')}}" />
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="select">

    <div><a id="stud" href="{{url('faq')}}">Student Account</a></div><div id="teacher"><a id="stud" href="{{url('faq1')}}">Teacher Account</a></div>
</div>

<h1 id="asked">Freqently Asked Question</h1>
<div class="container">
    <div class="How-student">
        <h3>How to sign up as a student</h3>
        <p>On the Aeolus MiniClassroom entry page</p>
        <ul>
            <li>Click on Register</li>
            <li>Enter the required fields</li>
            <li>select register as student</li>
        </ul>
        <p>When you click on register button you student membership on Aeolus MiniClassroom is activated
            and you will be redirected to your home page where you can choose any course to enroll.
            Remember all field are mandatory.
        </p>
    </div>
    <div class="how-password">
        <h3>How to Login and retrieve Password</h3>
        <p>On the Aeolus MiniClassroom entry page Navbar</p>
        <ul>
            <li>Click on Login on the top menu</li>
            <li>Fill out Email address and Password used during registeration</li>
            <li>Click on the Login button to complete user authenticaton.</li>
        </ul>
        <p>Forgotten password?</p>
        <ul>
            <li>Clicck on forgotten password link</li>
            <li>Fill in your email adddress on the pop up form requesting for your email</li>
            <li>You will recieve an email about resetting your password</li>
            <li>In some cases when email are not recieved you can check your spam folder to be sure before requesting for a resend</li>
        </ul>
    </div>
    <div class="pickcourse">
        <h3>How to pick a course</h3>
        <p>Browse our course list to find something that you did like to learn about.
            We have diverse range of subjects and are always adding more. Courses vary in length,
            learning mode which include PDF and video. You might want to choose a learning mode that
            is most suitable for you. also ypu can click on course details to review the course before joining the class.
        </p>
    </div>
    <div class="Howcontacr">
        <h3>How to contact your Course teacher</h3>
        <p>Aeolus teachers works hard to provide high quality and compelling course. If you have any question or
            comments about a course you are enrolled in, you can contact the instructor via direct message or the Q&A.
            Please note: This service is not yet available.
        </p>
    </div>
    <div class="Codindexer">
        <h3>What are coding exercise</h3>
        <p>Coding exercises are an interactive tool that teachers can add to their courses. You Enter
            code directley onto the page and can run the function without switching programs or screens.The exercise can also provide
            hints when you've made an entry error, so you can correct the mistake and proceed with your coding. </p>
    </div>
</div>


</body>
</html>