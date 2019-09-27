<?php 
  require_once "layouts/header.php";
?>
   <div class="container">
       <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
           <h1 class="text-center">Create Account</h1>
        <form action="#" id="register-form">
            <div class="form-group row">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                        </div>
               
                    <input type="text" class="form-control col-md-12" placeholder="Fullname" name="fullname" required>
                </div>
           </div>

           <div class="form-group row">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                        </div>
               
                    <input type="email" class="form-control col-md-12" placeholder="Email Address" name="email" required>
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
           
            <div class="form-group row">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                        </span>
                    </div>
                    <select name="role" class="form-control col-md-12">
                        <option value="#">Account Type</option>
                        <option value="1">Teachers</option>
                        <option value="2">Students</option>
                    </select>
                </div>
           </div>
           
        </form>
        <div class="text-center">
            <button type="button" class="btn btn-primary" id="register">Sign Up</button>
            <br>
        <p>By Clicking <span class="sign-color">Sign Up,</span> you agree to the <span class="terms">terms and privacy.</span></p>
        <p>Already have an Account? <a href="index.php"<span class="sign-color">Sign In</a></span></p>

        </div>
        
    </div>
           </div>
           <div class="col-md-3"></div>
       </div>


<?php 
  require_once "layouts/footer.php";
?>


<script>
      $(document).ready(function(){
        //  console.log(login());   
        $('#register').click((e)=>{
          e.preventDefault();
          //validation should happen here 
          const fullname     = document.querySelector("input[name='fullname']").value;
          const email        = document.querySelector("input[name='email']").value;
          const password     = document.querySelector("input[name='password']").value;
          const role         = document.querySelector("select[name='role']").value;
          //calling function when the event is fired
          register(fullname, email, password, role);
        });   
      });
    
        async function register(fullname, email, password, role){
          try{
            const name      = fullname
            const mail      = email;
            const secret    = password;
            const roles     = role;
            await fetch('http://127.0.0.1:8004/api/register', {
            method: 'POST',
            headers:{
              'Accept': 'application/json',
              'Content-Type': 'application/json',
             },
               body: JSON.stringify({'fullname':fullname,'email':mail, 'password':secret, 'role':roles})
             }).then(response=>{
                if(response.status == 200){
                  console.log(response);
                //   window.location.href = "http://localhost/frontend/mini%20school/classes.html";
                }
             });
          }catch(error){
            console.error('Error:', error);
          }
      
      };

</script>