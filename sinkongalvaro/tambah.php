<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="dist/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

  <!-- Fav Icon -->
  <link rel="shortcut icon" href="assets/icon/nm.png" type="image/x-icon" />

  <!-- Font Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Animate Style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>


  <div class="kotak_login">



    <!-- Hero -->
    <div class="container">
      <!-- Login -->
      <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>

        <div class="form-box register">
          <h2>Registration</h2>
          <form method="POST" action="tambah_aksi.php">
            <div class="input-box">
              <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
              <input type="number" name="username_id" style="color: black" />
              <label>Username_ID</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
              <input type="email"  name="email" style="color: black" />
              <label>Email</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
              <input type="password" name="password" style="color: black" />
              <label>Password</label>
            </div>
            <div class="remember-forgot">
              <label><input type="checkbox" "/> I agree to the terms &
                  conditions</label
                >
                <a href=" #"></a>
            </div>
            <button type="submit" class="btn btn-outline-dark" style="background-color:white;">
              Register
            </button>
            <div class="login-register">
              <p>
                Already have an account?
                <a href="#" class="login-link">Login</a>
              </p>
            </div>
          </form>
        </div>
      </div>
      <!-- Login -->

        <!-- Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!-- JS -->
<script src="dist/js/script.js"></script>

<!-- AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>