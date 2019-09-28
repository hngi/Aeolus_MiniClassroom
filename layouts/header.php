<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
   
    <title>Aeolus-Miniclassroom</title>
</head>

<body>
    <!-- Navigation Start Here -->
       <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color:#E9E9E9;" >
               <a class="navbar-brand" href="index.php"><img src="https://res.cloudinary.com/kngkay/image/upload/v1569408433/kngkay/lll.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <p class="p1">Teach</p>
                        <p class="p2">Me</p>
                    </ul>
                      
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div id="name"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Logout</a>
                          </div>
                        </li>
                   </ul>
                 
                   
                  </div>
                <!-- <p class="p3"><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Login/Register</a></p> -->
            </nav>
            <div class="container-fluid">

<script>
    const fullname = localStorage.getItem('fullname');
    const role_id  = localStorage.getItem('role_id');
    const user_id  = localStorage.getItem('user_id');
    if(role_id == 1){
        document.getElementById('name').innerHTML = fullname;
    } 
    if (role_id == 2){
        document.getElementById('name').innerHTML = fullname;
    }

</script>