@include('login.components.header')

<section class="h-100 gradient-form" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Forgot Password</h4>
                  </div>
  
                  <form action="{{route('login.verify')}}" method="post">
                    @csrf
                    @method('post')
                    <p>Please Enter Your Email</p>
                    <div class="form-outline mb-4" data-mdb-input-init>
                        <input type="text" id="form11" name="email" class="form-control" />
                        <label class="form-label" for="form11">Example label</label>
                      </div>    
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Reset Password</button>                  
                    </div>
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Reset Password Reminder:</h4>
                  <p class="small mb-0">If you've forgotten your password, don't worry! You can easily reset it by following these simple steps:

                    
                    
                  
                    
                    
                    </p>
                    <ul>
                        <li>Click on the "Forgot Password?" link on the login page.</li>
                        <li>Enter your email address associated with your account.</li>
                        <li> Check your email inbox for further instructions.</li>
                        <li>Follow the link provided in the email to reset your password.</li>
                        <li>Choose a new password and confirm it.</li>
                        <li>Log in with your new password.</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 

@include('login.components.footer')