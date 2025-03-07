<?php
require_once __DIR__ . '/src/helpers.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="favico.ico">
  <link rel="icon" type="image/png" href="favicon.ico">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Главная страница авторизации профиля">
    <meta name="author" content="Nersisyan">
    <title>Mando - Авторизация</title>
    <meta name="yandex-verification" content="359d02d3f4fb2343" />
    <meta name="yandex-verification" content="30a365b8b91b6936" />

    <!-- CSS FILES -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap">
  
  <link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="180x180" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="manifest" href="favicon.ico" type="image/x-icon" />
</head>

<body>
    <style>
.error-message {
  background-color: #fce4e4;
  border: 1px solid #fcc2c3;
  float: left;
  padding: 8px 10px;
  margin-bottom: 8.5px;
  margin-top: -20px;
  border-radius: 10px;
}
.error-text {
  color: #cc0033;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: bolder;
  line-height: 18px;
  text-shadow: 1px 1px rgba(250,250,250,.3);
}
    </style>
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/index.php">
              MandoMemori - Auth
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link me-2" href="/profile.php">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Профиль
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="/index.php">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    На главную страницу
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="/register.php">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Зарегестрироваться
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Авторезация профиля</h4>
                  <p class="mb-0">Впишите почту и пароль от профиля.</p>
                </div>
                <div class="card-body">
       
       
       
       
       
       
                    
                  <form role="form" action="src/actions/login.php" method="post">
                      
    <?php if(hasMessage('error')): ?>
        <div class="error-message">
  <span class="error-text"><?php echo getMessage('error') ?></span></div>
    <?php endif; ?>
        
                    <div class="mb-3">
                      <input class="form-control form-control-lg" aria-label="Email" type="text" id="email" name="email" placeholder="email" value="<?php echo old('email') ?>"
            <?php echo validationErrorAttr('email'); ?>
        >
        <?php if(hasValidationError('email')): ?>
            <small><?php echo validationErrorMessage('email'); ?></small>
        <?php endif; ?>
                      </div>
    
                    <div class="mb-3">
                      <input class="form-control form-control-lg" aria-label="Password" type="password" id="password" name="password" placeholder="password">
                    </div>
                    
                    
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Запомнить меня</label>
                    </div>
                    <div class="text-center">
                      <button class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" type="submit" id="submit">Войти в профиль</button>
                    </div>
                  </form>
                    
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Еще нет аккаунта?
                    <a href="/register.php" class="text-primary text-gradient font-weight-bold" href="/register.php">Зарегестрироваться</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">Номер 1, всегда рядом MANDO-PRO</h4>
                <p class="text-white position-relative">Мы работаем 24/7 для того, чтобы вам было хорошо. Мы обслужили больще +50тыс покупателей и знаем толк в вашей одежде. Мы готово ответить на все ваши вопросы! MANDO-PRO STYDIO</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
<?php include_once __DIR__ . '/components/scripts.php' ?>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>