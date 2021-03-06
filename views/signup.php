<?php
require ROOT . 'views/templates/header.php';
require ROOT . 'views/templates/navbar.php';
?>

    <form action="/signup" method="post">
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Confirm password</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php
if (isset($_SESSION['validation_errors'])) echo $_SESSION['validation_errors'];
require ROOT . 'views/templates/footer.php';
