<?php
if (isset($_POST['register'])) {
       $username = htmlspecialchars($_POST['username']);
       $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
       $email = htmlspecialchars($_POST['email']);
       // on cree un tableau pour insere les valeur dans la base de donnee
       $add = array(
         'username'=>$username,
         'password'=>$password,
         'email'=>$email);
       $req = $conn->prepare('INSERT INTO user (username, password, email) VALUES (:username, :password, :email)');
       $req->execute($add);
       $req->closeCursor();
     }
?>


<div class="container-fluid">
      <form class="form-signin" method="POST">

        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="register" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login_user.php">Login</a>
      </form>
</div>
