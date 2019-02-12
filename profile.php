<style>
    h2{
        text align: center;
    }
</style>
<?php echo file_get_contents("header.html"); ?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
</nav>
<div class="container">
    <h2>Have an account?</h2>
    <form>
        <div class="form-group">
            <legend>Sign In</legend>
            <label for="exampleInputEmail1">Email:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
<br/>
        <div class="form-group">
            <label for="loginPwd">Password:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" lass="btn btn-primary">Sign In</button>
    </form>
<br/>
    <h2>Create an account?</h2>
    <form>
        <div class="form-row">
            <legend>Sign On</legend>
            <div class="col">
                <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                </div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-group">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <button type="submit" class="btn btn-primary">Create Account</button>
    </form>
</div>
<?php echo file_get_contents("footer.html"); ?>