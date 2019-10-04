<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <h3>How to sign up as a teacher</h3>
        <p>On the Aeolus MininClassroom entry page</p>
        <ul>
            <li>Click on Register</li>
            <li>Enter the required fields</li>
            <li>Select register as teacher</li>
        </ul>
        <p>When you click on register button you student membership on Aeolus MininClassroom is activated
            and you will be redirected to your home page where you can choose any course to enroll.
            Remember all field are mandatory.
        </p>
    </div>
    <div class="how-password">
        <h3>How to Login and retrieve Password</h3>
        <p>On the Aeolus MininClassroom entry page Navbar</p>
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
        <h3>How to create course</h3>
        <p>Click on Add course on your dash board, which will then redirect you to your course main page.</p>
        <p>The main course page consist of three text field namely course title, course description and course subject.
            For each text field, fill apprioprately as below</p>
        <ul>
            <li>Course Title: Choose the desired title suitable for your course, e.g. differential equation.</li>
            <li>Course Description: This section describes what tthe course entails or a brief summary of the course,
                e.g. In this course we will be discusing Both first and second order differentiation.
            </li>
            <li>Course Subject: Here we select the subject for our course from the already defined subject.</li>
        </ul>
        <p>Clicking save course button will create your course and class under the selected subject. </p>
    </div>
    <div class="corsemain">
        <h3>How to create class discussion</h3>
        <p>The teacher can create discussion among the classes from the create discussion button
            on the main discussion page under each class. This action will bring out a pop-up menu asking to fill out the following:
        <ul>
            <li>Title: The title of discussion</li>
            <li>Description:This field can be used to add some more information about the discussion</li>
            <li>Upload, MyFiles and Link: The teacher can use thes links to add supportive files or
                links to the discussion
            </li>
            <li>Save button will create your discussion</li>
        </ul>
        </p>

    </div>
    <div class="assignment">
        <h3>How to create assignment</h3>
        <p>Teachers can create online assignment for their student by folloeing the step below.
            You start by first clicking on assignment button. A pop up window will open and ask you to fill out the related field
        <ul>
            <li>Assignment Name: The name of your assignment</li>
            <li>Description: This is an optional field where you can add details of your assignment </li>
            <li>Due Date and Time: Type in the deadline for this assignment</li>
        </ul>
        </p>
        <p>Note: This is not available yet.</p>
    </div>

</div>
<div class="clearfix"></div>
</body>
</html>