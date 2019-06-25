<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-home" aria-selected="true">Login</a>
                <a class="nav-item nav-link" id="nav-registration-tab" data-toggle="tab" href="#nav-registration" role="tab" aria-controls="nav-profile" aria-selected="false">Registration</a>
            </div>
        </nav>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="tab-content" id="nav-tabContent">
            
            <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                
                <form action="<?php echo site_url('login/f_login'); ?>" method="POST">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_id" required class="form-control" id="staticEmail" placeholder="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" required name="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                        <div class="col-sm-10">
                            <a class="nav-item nav-link" id="nav-registration-tab" data-toggle="tab" href="#nav-registration" role="tab" aria-controls="nav-profile" aria-selected="false">New to Ecom? Create an account</a>
                        </div>
                    </div>
                </form>
            
            </div>
        
            <div class="tab-pane fade" id="nav-registration" role="tabpanel" aria-labelledby="nav-registration-tab">

                <form>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" value="email@example.com" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" placeholder="Password" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Proceed</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        
      </div>
    </div>
  </div>
</div>