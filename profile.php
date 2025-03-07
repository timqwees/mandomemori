<?php
require_once __DIR__ . '/src/helpers.php';
checkAuth();
$user = currentUser();
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
  <meta name="description" content="Mando - профиль пользователей">
  <meta name="author" content="Nersisyan">
  <title>Профиль -
    <?php $user["firstname"] ?>
  </title>
  <meta name="yandex-verification" content="359d02d3f4fb2343" />
  <meta name="yandex-verification" content="30a365b8b91b6936" />

  <!-- CSS FILES -->

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap">

  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="180x180" href="favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="manifest" href="favicon.ico" type="image/x-icon" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0"
    style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="index.php"
        target="_blank">
        <img src="/images/logo/logo.svg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">PROFILE MENU</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/index.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">На главную стиницу</span>
          </a>
        </li>

        <?php
        require_once __DIR__ . '/src/traker_check.php';
        ?>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Страницы учётной записи</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/profile.html">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Профиль</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/register.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Зарегестрироваться</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/login.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <form action="src/actions/logout.php" method="post">
              <span role="button" class="nav-link-text ms-1">Сменить профиль</span>
            </form>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="../assets/img/illustrations/rocket-white.png" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Нужна консультация ?</h6>
            <p class="text-xs font-weight-bold mb-0">Обратитесь в онлайн чат</p>
          </div>
        </div>
      </div>
      <a href="https://vk.me/mandomemori/" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">VKontakte</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://wa.me/+79161829272" type="button">Wathsapp</a>
    </div>
  </aside>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav
      class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
      <div class="container-fluid py-1">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Москва</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Страница профиля</li>
          </ol>
          <h6 class="text-white font-weight-bolder ms-2">
            <?php
            if (!isset($user["email"])) {
              echo "Не авторезирован";
            } else {
              echo $user["email"];
            } ?>
          </h6>
        </nav>
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
          <ul class="navbar-nav justify-content-end" style="margin-left: 75%">

            <?php
            if (!isset($user["id"]) or empty($user["id"])) {
              echo '<li class="nav-item d-flex align-items-center">
              <a href="/login.php" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Войти</span>
              </a>
            </li>';
            } else {
              echo "";
            }
            ?>

            <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                  </div>
                </a>
              </a>
            </li>


            <li class="nav-item px-3 d-flex align-items-center">
              <a class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="
              <?php if (!isset($user["avatar"])) {
                echo "/images/no-profile.jpg";
              } else {
                echo $user["avatar"];
              } ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php
                if (!isset($user["firstname"])) {
                  echo "Your Name";

                } else {
                  echo $user["firstname"];
                } ?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                <?php
                /*check imformation */
                if (!isset($user["id"])) {
                  echo "Null";
                } elseif ($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["lastname"] == "Артём" and $user["firstname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1") { //sis-admin
                
                  echo "Системный-Администратор";

                } elseif ($user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["lastname"] == "Максим" and $user["firstname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2") {
                  echo "Главный-Администратор";
                } else {
                  echo "Пользователь";
                }
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <form action="/src/actions/replace.php" method="POST">
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                  <p style="transform: translateY(-5.65px)" class="mb-0">Изменить профиль</p>
                  <style>
                    .nersisyan:hover {
                      background: #A6FFA6;
                    }
                  </style>
                  <?php
                  if (!isset($user["id"])) {
                    echo '<span style="color: white; opacity: 0.5" class="btn btn-primary btn-sm ms-auto">Сохранить</span>';
                  } else {
                    echo '<input style="color: white;" class="nerisyan btn btn-primary btn-sm ms-auto" type="submit" name="replace_mysql_information" value="Сохранить"></input>';
                  }
                  ?>
                </div>
              </div>

              <div class="card-body">
                <p class="text-uppercase text-sm">ИНФОРМАЦИЯ О ПОЛЬЗОВАТЕЛЕ</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastname" class="form-control-label">Имя</label>
                      <input class="form-control" type="text" id="lastname" name="lastname" value="<?php
                      if (!isset($user["lastname"])) {
                        echo "";
                      } else {
                        echo $user["lastname"];
                      }
                      ?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstname" class="form-control-label">Фамилия</label>
                      <input class="form-control" type="text" id="firstname" name="firstname" value="<?php
                      if (!isset($user["firstname"])) {
                        echo "";
                      } else {
                        echo $user["firstname"];
                      }
                      ?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email" class="form-control-label">Эл. адрес</label>
                      <input class="form-control" type="text" name="email" id="email" value="<?php
                      if (!isset($user["email"])) {
                        echo "";
                      } else {
                        echo $user["email"];
                      }
                      ?>">
                    </div>
                  </div>
                </div>
                <hr class="horizontal dark">
                <p class="text-uppercase text-sm">КОНТАКТНАЯ ИНФОРМАЦИЯ</p>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="adress" class="form-control-label">Адрес</label>
                      <input class="form-control" type="text" id="adress" name="adress" value="<?php
                      if (!isset($user['adress'])) {
                        echo "";
                      } else {
                        echo $user["adress"];
                      }
                      ?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="city" class="form-control-label">Город</label>
                      <input class="form-control" type="text" id="city" name="city" value="<?php
                      if (!isset($user["city"])) {
                        echo "";
                      } else {
                        echo $user["city"];
                      }
                      ?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="adress" class="form-control-label">Контактный номер (Номер телефона)</label>
                      <input class="form-control" type="text" id="phone" name="phone" value="<?php
                      if (!isset($user['phone'])) {
                        echo "";
                      } else {
                        echo $user["phone"];
                      }
                      ?>">
                    </div>
                  </div>

                </div>
                <hr class="horizontal dark">
                <p class="text-uppercase text-sm">ДОПОЛНЕНИЕ</p>



                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="descriptions" class="form-control-label">Обо мне</label>
                      <input class="form-control" type="text" name="descriptions" value="<?php
                      if (!isset($user["descriptions"])) {
                        echo "";
                      } else {
                        echo $user["descriptions"];
                      }
                      ?>">
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="userID" class="form-control-label">Ваш userID профиля</label>
                      <input class="form-control" type="text" value="<?php
                      if (!isset($user["id"])) {
                        echo "";
                      } else {
                        echo $user["id"];
                      }
                      ?>" readonly>
                    </div>
                  </div>
                </div>
    </form>
  </div>
  </div>
  </div>
  <div class="col-md-4">
    <div class="card card-profile">
      <img src="
            <?php
            if (!isset($user["firstname"]) or !isset($user["id"])) {
              echo "../assets/img/no-auth.jpg"; //для не авторезованных
            } elseif ($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["lastname"] == "Артём" and $user["firstname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["lastname"] == "Максим" and $user["firstname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2") { //для adminов
            
              echo "../assets/img/profile/2.jpg";

            } else {
              echo "../assets/img/profile/3.jpg"; // для пользователей
            }
            ?>" alt="Image placeholder" class="card-img-top">
      <div class="row justify-content-center">
        <div class="col-4 col-lg-4 order-lg-2">
          <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
            <a href="javascript:;">
              <img src="
              <?php if (!isset($user["avatar"])) {
                echo "/images/no-profile.jpg";
              } else {
                echo $user["avatar"];
              } ?>" class="rounded-circle img-fluid border border-2 border-white">
            </a>
          </div>
        </div>
      </div>
      <div class="card-body pt-0">
        <div class="row">
          <div class="col">
            <div class="d-flex justify-content-center">
              <div class="d-grid text-center">
                <span class="text-lg font-weight-bolder">
                  <?php if (!isset($user["points"])) {
                    echo "Null";
                  } elseif (isset($user["points"])) {
                    echo $user["points"];
                  } ?>
                </span>
                <span class="text-sm opacity-8">Бонусных баллов</span>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-4">
          <h5>
            <?php
            if (!isset($user["firstname"]) or !isset($user["lastname"]) or !isset($user["id"])) {
              echo "недоступно";
            } elseif (isset($user["firstname"]) or isset($user["lastname"])) {
              echo $user["lastname"] . " " . $user["firstname"];
            }
            ?>
          </h5>
          <div class="h6 mt-4">
            <i class="ni business_briefcase-24 mr-2"></i>
            <?php
            /*check imformation */
            if (!isset($user["id"])) {
              echo "недостаточно прав";
            } elseif ($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["lastname"] == "Артём" and $user["firstname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1") { //sis-admin
            
              echo "— Developers (Разработчик)";

            } elseif ($user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["lastname"] == "Максим" and $user["firstname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2") {
              echo "— Owner (Владелец)";
            } else {
              echo "— User (Пользователь)";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>,
            работа над вашими вещами
            <a href="/index.php" class="font-weight-bold" target="_blank">PRO MandoMemori</a>
            быстро и качество, всегда.
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://vk.com/mandomemori" class="nav-link text-muted" target="_blank">VK</a>
            </li>
            <li class="nav-item">
              <a href="https://t.me/mandomemori" class="nav-link text-muted" target="_blank">Telegram</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="/index.php" class="nav-link pe-0 text-muted" target="_blank">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  </div>
  </div>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">MANDOMEMORI НАСТРОЙКИ</h5>
          <p>Список дополнительных опций</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Цвет бокового меню</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary"
              onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Темы интерфейса страницы</h6>
          <p class="text-sm">Выбор темы для меню (ПК)</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
            onclick="sidebarType(this)">Светлая</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
            onclick="sidebarType(this)">Тёмная</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">Выбор интерфейса страницы (Mobile)</p>
        <!-- Navbar Fixed -->
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Светлая / Тёмная</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <div class="w-100 text-center">
          <h6 class="mt-3">Спасибо, что с нами!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-telegram me-1" aria-hidden="true"></i> Message
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-vk me-1" aria-hidden="true"></i>
            Reviews
          </a>
        </div>
      </div>
    </div>
  </div>
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
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>