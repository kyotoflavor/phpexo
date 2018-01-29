<?php

        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = htmlspecialchars($_POST['username']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt = $conn->prepare('SELECT * FROM user WHERE username = ?');
            $stmt->execute(array($_POST['username']));
            $user = $stmt->fetch();
            if (($user && password_verify($_POST['password'], $password)) || ($user === true)) {
              $_SESSION['username'] = $_POST['username'];
              echo "bravo, vous êtes connecté!";
              header('Location: index.php');
            } else {
              echo "Erreur, recommencez";
            }
            $stmt->closeCursor();
          }
    ?>

    <div class="bg_violet panpadd"></div>
              <div <div class="container-fluid">
                  <form class="form-signin" method="POST">
                    <h2 class="form-signin-heading">Please Login</h2>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">@</span>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Login</button>
                    <a class="btn btn-lg btn-primary btn-block" href="inscription_user.php">Register</a>
                  </form>
              </div>
      <div class="bg_violet panpadd"></div>
