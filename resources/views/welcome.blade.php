<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome">
    <title>Home Page</title>
</head>
<style>
    .one{
        margin-top: -20px;
        background-image: url(https://res.cloudinary.com/kngkay/image/upload/v1569408433/kngkay/Background.png);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .cover{
        padding: 10%;
        align-content: center;

    }
    img{
        height: 50px;
        width: 60px;
    }
    nav{
        margin-top: 20px;
    }
    .p1{
        font-family:'Lucida Sans';
        font-size: 20px;
        color: #0EAFF4;

    }
    .p2{
        font-family:'Lucida Sans';
        font-size: 20px;
        color: #FEF9F9;
    }
    .p3{
        font-family:'Lucida Sans';
        font-size: 20px;
        border: 1px solid #0EAFF4;
        border-radius: 20px;
        padding: 5px;
    }
    a{

        color: #FEF9F9;
    }
    h1{
        font-family:'Lucida Sans';
        color: #FEF9F9;
    }
    #footer1{
        margin-top:6.8rem;
        line-height: 0.58em;
    }

    .two{
        font-family:'Lucida Sans';
        padding: 20px;
        margin-top:20px;

    }
    .three{
        font-family:'Lucida Sans';
        padding:20px;
        background-color: grey;
    }
    #image{
        height: 100%;
        width: 100%;
    }

</style>

<body>
<section class="one">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img src="https://res.cloudinary.com/kngkay/image/upload/v1569408433/kngkay/lll.png" alt="">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('faq') }}">{{ __('FAQ') }}</a>
                    </li>
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
        </nav>
    </div>


    <div style="padding:10px; text-align:center; margin-top:200px">

        <h1>WELCOME TO TEACH ME SCHOOL!</h1>
        <br>
        <br>
        <br>

    </div>
</section>

<section class="three">
    <div class="container text-center text-white">
        <div class="row">
            <div class="col-sm-12">
                <h2>AVAILABLE COURSES</h2>
            </div>
        </div>
    </div>
</section>

<br> <br>
<div class="container">
    <section>
        <div class="row">
            <div class="col-sm-4">
                <img id="image" src="https://res.cloudinary.com/kngkay/image/upload/v1569596264/kngkay/DS1.png" alt="">
            </div>
            <div class="col-sm-8">
                <h5>DATA SCIENCE</h5>
                <p>Data science is a multi-disciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from structured and unstructured data...</p>
                <p>Enroll for a free course now!</p>
                <a href="{{url('register')}}" type="button" class="btn btn-primary btn-sm">Join</a>
            </div>
        </div> <br> <br>
        <div class="row">
            <div class="col-sm-8 text-right">
                <h5>ARTIFICIAL INTELLIGENCE</h5>
                <p>In computer science, artificial intelligence, sometimes called machine intelligence, is intelligence demonstrated by machines, in contrast to the natural intelligence displayed by humans....</p>
                <p>Enroll for a free course now!</p>
                <a href="{{url('register')}}" type="button" class="btn btn-primary btn-sm">Join</a>
            </div>
            <div class="col-sm-4">
                <img id="image" src="https://res.cloudinary.com/kngkay/image/upload/v1569596263/kngkay/AI.jpg" alt="">
            </div>
        </div> <br> <br>
        <div class="row">
            <div class="col-sm-4">
                <img id="image" src="https://res.cloudinary.com/kngkay/image/upload/v1569596264/kngkay/PRG.png" alt="">
            </div>
            <div class="col-sm-8">
                <h5>PROGRAMMING</h5>
                <p>Programming is the process of creating a set of instructions that tell a computer how to perform a task. Programming can be done using a variety of computer "languages," such as SQL, Java, Python, and C++. Created by Pamela Fox....</p>
                <p>Enroll for a free course now!</p>
                <a href="{{url('register')}}" type="button" class="btn btn-primary btn-sm">Join</a>
            </div>
        </div> <br> <br>
        <div class="row">
            <div class="col-sm-8 text-right">
                <h5>ANATOMY SYSTEM</h5>
                <p>Anatomy is the branch of biology concerned with the study of the structure of organisms and their parts. Anatomy is a branch of natural science which deals with the structural organization of living things. It is an old science, having its beginnings in prehistoric times....</p>
                <p>Enroll for a free course now!</p>
                <a href="{{url('register')}}" type="button" class="btn btn-primary btn-sm">Join</a>
            </div>
            <div class="col-sm-4">
                <img id="image" src="https://res.cloudinary.com/kngkay/image/upload/v1569596264/kngkay/AS.jpg" alt="">
            </div>
        </div> <br> <br>
        <div class="row">
            <div class="col-sm-4">
                <img id="image" src="https://res.cloudinary.com/kngkay/image/upload/v1569596264/kngkay/CC.jpg" alt="">
            </div>
            <div class="col-sm-8">
                <h5>CLOUD COMPUTING</h5>
                <p>Cloud computing is the on-demand availability of computer system resources, especially data storage and computing power, without direct active management by the user. The term is generally used to describe data centers available to many users over the Internet....</p>
                <p>Enroll for a free course now!</p>
                <a href="{{url('register')}}" type="button" class="btn btn-primary btn-sm">Join</a>
            </div>
        </div>
</div>
</section>
</div>
</div>

<footer id="footer1" class="py-3 bg-dark text-white-50">
    <div class="container text-left">
        <div class="row">
            <div class="col-sm-4">
                <p>About Us</p>
                <p>Company that use our service</p>
                <p>Resources and Links</p>
                <p>News</p>
            </div>

            <div class="col-sm-4">
                <p>Contact Us</p>
                <p>+234 000 987 654</p>
                <p>aeolusteachme@gmail.com</p>
                <p>HNG Towers</p>
            </div>

            <div class="col-sm-4">
                <p>Terms and Conditions</p>
                <p>Refund Policy</p>
                <p>Privacy Policy</p>
                <p>Follow Us</p>
            </div>

        </div>
    </div>
</footer>

<footer id="" class="py-2 bg-primary text-white-50">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <p> <i>All right reserve powered by AEOLUS!</i></p>
            </div>

        </div>
    </div>
</footer>

</body>
</html>