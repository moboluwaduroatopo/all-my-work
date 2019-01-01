
	<!-- Material form contact -->
<!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" method="post" action="userlogin.php" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" name="fname" class="form-control">
                        <label for="materialRegisterFormFirstName">First name</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" name="lname" class="form-control">
                        <label for="materialRegisterFormLastName">Last name</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" name="state" class="form-control">
                        <label for="materialRegisterFormFirstName">State</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" name="uname" class="form-control">
                        <label for="materialRegisterFormFirstName">Username</label>
                    </div>
                </div>
            </div>
             <div class="form-row">
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" name="phone" class="form-control">
                        <label for="materialRegisterFormLastName">Phone number</label>
                    </div>
                </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="email" id="materialRegisterFormLastName" name="email" class="form-control">
                        <label for="materialRegisterFormLastName">Email</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="password" id="materialRegisterFormPassword" name="pwd" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Password</label>
                    </div>
                </div>
            </div>
            <!-- Phone number -->
            <label for="materialRegisterFormPassword">Where did you hear about us? </label>
 <select class="mdb-select md-form form-control" name="about" searchable="Search here..">
  <option value="" disabled selected>Choose </option>
  <option value="Facebook">Facebook</option>
  <option value="Google">Google</option>
  <option value="Friend">Friend</option>
  <option value="Instagram">Instagram</option>
  <option value="Other">Other</option>
</select>
            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" type="submit">Sign in</button>

            <!-- Social register -->
            <p>or sign up with: <a href="login.php"><button type="button" class="btn btn-info">Sign up</button></a></p>

           

        </form>
        <!-- Form -->

    </div>

