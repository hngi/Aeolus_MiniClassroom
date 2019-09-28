<?php 
  require_once "layouts/header.php";
?>
 

  <div style="padding:20px; text-align:center; margin-top:200px">

    <h1>Aeolus-Miniclassroom</h1>
                
  <!-- <a href="login.html"><input type="submit" value="Log in" style="border-radius:20px; "></a> -->
  <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-3"></div>
        <div class="col-md 6 ">
        <!-- <h2>Log in to your TeachMe Account!</h2> -->
          <div class="card mt-0">
              <div class="card-header"><h3>Login Here</h3></div>
              <div class="card-body">

              <form class="mt-auto">
            <div class="form">
            <div class="form-group row">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                        </div>
               
                    <input type="email" class="form-control col-md-12" placeholder="Email Address" name="email" value required>
                </div>
           </div>
           <div class="form-group row">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                </span>
                        </div>
               
                    <input type="password" class="form-control col-md-12" placeholder="Password" name="password" required>
                </div>
           </div>
                <button type="submit" class="btn btn-primary" id="login">Log in</button>
                <!-- <small id="forgotten" class="form-text text-muted"><a href="#">Forgotten Password?</a></small> -->
                <small id="account" class="form-text text-muted">Don't have an Account?<a href="signup.php">Sign up</a></small>
              </div>
          </form>
              
              </div>
          
          </div>
       
      
        
        </div>
        <div class="col-md-3"></div>
      
      </div>
        
    </div>

<?php 
  require_once "layouts/footer.php";
?>


<script>
      $(document).ready(function(){
        //  console.log(login());   
        $('#login').click((e)=>{
          e.preventDefault();
          //validation should happen here 
          const email     = $("input[name='email']").val();
          const password     = $("input[name='password']").val();
          // //calling function when the event is fired
          login(email, password);
        });   
      });
    
        async function login(email, password){
          try{
            const emails     = email;
            const passwords  = password;
            await fetch('http://127.0.0.1:8004/api/login', {
            method: 'POST',
            headers:{
              'Accept': 'application/json',
              'Content-Type': 'application/json',
             },
               body: JSON.stringify({'email':emails, 'password':passwords})
             })
             .then((resp)=> resp.json())
             .then((data)=>{
               if(data.status == 200){
                let result = data.data;
                let fullname = localStorage.setItem('fullname',result.fullname);
                let role_id  = localStorage.setItem('role_id',result.role_id);
                let user_id  = localStorage.setItem('user_id',result.user_id);
                if(role_id == 1){
                  window.location.href = "http://127.0.0.1/mini-classroom/teacher.php";
                }
                window.location.href = "http://127.0.0.1/mini-classroom/student.php";
               }
             })
          } catch (error) {
            console.error('Error:', error);
          }
      
      };

     


</script>
 