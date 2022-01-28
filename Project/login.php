<?php
$username = filter_input(INPUT_POST, 'user'); 
$password = filter_input(INPUT_POST, 'pass');
if($username && $password){
  // echo $username.' '.$password.'<br>';
  include('connection.php');  

    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
    $password=hash('sha256', $password);
    $sql = "select * from Alogin where username = '$username' and passhash = '$password'"; 
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
      $cookie_name = "user";
      // $value= $row["id"]."*".$row["name"]."*".$row["email"];
      $cookie_value = $row["name"];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            echo '
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <div class="container mt-5">
            <div class="toast show">
            <div class="toast-header">
            <strong class="me-auto">Welcome '. $row["name"].'</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
            <p>Success, You authed!</p>
            </div>
            </div>
            </div>
            <script>
         setTimeout(function(){
            window.location.href = \'profile.php\';
         }, 3000);
      </script>
            ';
            
            exit();
        }
    }
        else {
            echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <div class="container mt-5">
            <div class="toast show">
            <div class="toast-header">
            <strong class="me-auto">Login failed</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
            <p>Invalid username or password.</p>
            </div>
            </div>
            </div>
            <script type="text/javascript">
            setTimeout(function(){
              window.history.back();
         }, 3000);
            </script>
            '; 
            exit();
          }
    $con->close();
    }
    ?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <meta charset="UTF-8">
  
<title>PVWA Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="files/normalize.css">
  <link rel="stylesheet" href="files/bootstrap.css">
<link rel="stylesheet" href="files/css_002.css">
<link rel="stylesheet" href="files/css.css">
<link rel="stylesheet" href="files/font-awesome.css">
  
<style>
body {
  font: 100%/1.414 "Open Sans", "Roboto", arial, sans-serif;
  background: #e9e9e9;
}

a,
[type=submit] {
  transition: all 0.25s ease-in;
}

.signup__container {
  position: absolute;
  top: 50%;
  right: 0;
  left: 0;
  margin-right: auto;
  margin-left: auto;
  transform: translateY(-50%);
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50rem;
  height: 20rem;
  border-radius: 0.1875rem;
  box-shadow: 0px 0.1875rem 0.4375rem rgba(0, 0, 0, 0.25);
}

.signup__overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.76);
}

.container__child {
  width: 50%;
  height: 100%;
  color: #fff;
}

.signup__thumbnail {
  position: relative;
  padding: 2rem;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  background-repeat: no-repeat;
  background-position: top center;
  background-size: cover;
}

.thumbnail__logo,
.thumbnail__content,
.thumbnail__links {
  position: relative;
  z-index: 2;
}

.thumbnail__logo {
  align-self: flex-start;
}

.logo__shape {
  fill: #fff;
}

.logo__text {
  display: inline-block;
  font-size: 0.8rem;
  font-weight: 700;
  vertical-align: bottom;
}

.thumbnail__content {
  align-self: center;
}

h1,
h2 {
  font-weight: 300;
  color: white;
}

.heading--primary {
  font-size: 1.999rem;
}

.heading--secondary {
  font-size: 1.414rem;
}

.thumbnail__links {
  align-self: flex-end;
  width: 100%;
}

.thumbnail__links a {
  font-size: 1rem;
  color: #fff;
}
.thumbnail__links a:focus, .thumbnail__links a:hover {
  color: rgba(255, 255, 255, 0.5);
}

.signup__form {
  padding: 2.5rem;
  background: #fafafa;
}

label {
  font-size: 0.85rem;
  text-transform: uppercase;
  color: #ccc;
}

.form-control {
  background-color: transparent;
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}
.form-control:focus {
  border-color: #111;
}

[type=text] {
  color: #111;
}

[type=password] {
  color: #111;
}

.btn--form {
  padding: 0.5rem 2.5rem;
  font-size: 0.95rem;
  font-weight: 600;
  text-transform: uppercase;
  color: #fff;
  background: #111;
  border-radius: 2.1875rem;
}
.btn--form:focus, .btn--form:hover {
  background: #323232;
}

.signup__link {
  font-size: 0.8rem;
  font-weight: 600;
  text-decoration: underline;
  color: #999;
}
.signup__link:focus, .signup__link:hover {
  color: #787878;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>

<body translate="no" data-new-gr-c-s-check-loaded="8.892.0" data-gr-ext-installed="">
  <div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
      <h1 class="logo__text">PVWA<br></h1>
    </div>
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary"><br>Welcome to PVWA<br></h1>
      <h2 class="heading--secondary">Login to continue</h2>
    </div>
    <div class="thumbnail__links">
      
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form action = "<?php $_PHP_SELF ?>" method = "POST">
      <div class="form-group">
        <label for="name">username</label>
        <input class="form-control" type="text" name="user" placeholder="Tom" id="name"  >
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="pass" placeholder="********" id="password" >
    </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Login">
          </li>
          <li>
            <a class="signup__link" href="signup.php">Register here</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
<html>
<body>












