<?php
require_once __DIR__ . '/src/helpers.php';

require_once __DIR__ . '/src/componets.php';

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
    <title>Профиль - <?php $user["firstname"]?></title>
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

<body class="g-sidenav-show   bg-gray-100">
    <style>
.error-message {
  background-color: none;
  border-left: 6.5px solid #cc0033;
  border-top: 1px solid #cc0033;
  border-bottom: 1px solid #cc0033;
  border-right: 1px solid #cc0033;
  float: left;
  width: 100%;
  border-radius: 10px;
  display: block;
  padding: 8px 10px;
  position: relative;
  margin-top: 0px !important;
}
.error-text {
  color: grey;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: bolder;
  line-height: 18px;
  text-shadow: 1px 1px rgba(250,250,250,.3);
}
.nice-message {
  background: none;
  border-left: 6.5px solid #57d8a0;
  border-top: 1px solid #57d8a0;
  border-bottom: 1px solid #57d8a0;
  border-right: 1px solid #57d8a0;
  float: left;
  width: 100%;
  padding: 8px 10px;
  margin-bottom: 8.5px;
  margin-top: -20px;
  border-radius: 5px;
  display: block;
  position: relative;
  opacity: 0.8;
  margin-top: 0px !important;
}
.nice-text {
  color: grey;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: bolder;
  line-height: 18px;
  text-shadow: 1px 1px rgba(250,250,250,.3);
}
.error-message_point {
  background: none;
  border-left: 6.5px solid #cc0033;
  border-top: 1px solid #cc0033;
  border-bottom: 1px solid #cc0033;
  border-right: 1px solid #cc0033;
  float: left;
  width: 100%;
  padding: 8px 8px;
  margin-bottom: 8.5px;
  margin-top: -20px;
  border-radius: 5px;
  display: block;
  position: relative;
  opacity: 0.8;
  margin-top: 0px !important;
}
.error-text_point {
  color: grey;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: bolder;
  line-height: 18px;
  text-shadow: 1px 1px rgba(250,250,250,.3);
}
.remove-message {
  background: none;
  border-left: 6.5px solid #57d8a0;
  border-top: 1px solid #57d8a0;
  border-bottom: 1px solid #57d8a0;
  border-right: 1px solid #57d8a0;
  float: center;
  padding: 8px 8px;
  margin-bottom: 8.5px;
  margin-top: -20px;
  border-radius: 5px;
  display: flex;
  position: relative;
  opacity: 0.8;
  margin-top: 0px !important;
}
.remove-text {
  color: grey;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: bolder;
  line-height: 18px;
  text-shadow: 1px 1px rgba(250,250,250,.3);
}
.form-control {
    background:transparent;
}
    </style>
                    
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="/images/logo/logo.jpg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">ADMIN-MENU-PRO</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">На главную стиницу</span>
          </a>
        </li>
    
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Страницы учётной записи</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/profile.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Профиль</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/register.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Зарегестрироваться</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/login.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
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
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Панель управления</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Сервис ADMIN</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Разработчик NERSISYAN</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li>
                  <a class="dropdown-item border-radius-md" href="https://t.me/ArtemNersisyan">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto"><i class="fa fa-clock-o"></i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Связаться с разработчиком (Артёмом)
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1час - 2 дней
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Информация о коиенте</p>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+70%</span> к обслуживанию клиента</p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Быстрые зачисления</p>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">Удобство</span> ручной системы регулирования баллов</p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Редактирование</p>
                    <p class="mb-0">
                      <span class="text-danger text-sm font-weight-bolder">Защита</span> от потерь данных или проблем с пользователями</p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Быстрая регестрация</p>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">Удобная регестрация</span> нового профиля для личных целях</p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <hr class="horizontal dark">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h5 class="text-capitalize">SQL-Запрос вывод данных пользователей&nbsp;&nbsp;<i class="fa fa-user-circle-o text-primary"></i></h5>
            </div>
      <div class="row mt-4">

<div class="col-lg-4">
    <div class="card h-100">
        <div class="card-header pb-0">
            <form method="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        
    <?php if(hasMessage('error')): ?>
        <div class="error-message">
  <span class="error-text"><?php echo getMessage('error') ?></span></div>
    <?php endif; ?>

                        <label for="userId" class="form-control-label">Введите userID покупателя</label>

                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" name="userId" id="userId">
                        <br>
                        <style>
                          .btner {
                              opacity: 0.7;
                          }  
                        </style>
        <?php
/*check imformation */
if(!$user){
    echo '<span style="color: white" class="btner btn btn-primary btn-sm ms-auto">Подать запрос</span>';
    } elseif($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["firstname"] == "Нерсисян" and $user["lastname"] == "Артём" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Бирюков" and $user["lastname"] == "Максим" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2"){ //sis-admin
    echo '<button style="color: white" class="btn btn-primary btn-sm ms-auto" type="send_mysqli_info" name="send_mysqli_info">Подать запрос</button>';
    } else { echo '<span style="color: white" class="btner btn btn-primary btn-sm ms-auto">Подать запрос</span>'; }
                        ?>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body p-3">
        <h6>Контактные данные:</h6>
            <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                    <span class="timeline-step">
                        <i class="ni ni-bell-55 text-success text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">
                            <?php
                            date_default_timezone_set('Europe/Moscow');
                            echo date("Y") . "г – " . date("d") . " " . date("M") . " " . date("H:i");
                            ?>
                        </h6>
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Время получения данных</p>
                    </div>
                </div>
                <div class="timeline-block mb-3">
                    <span class="timeline-step">
                        <i class="fa fa-user me-sm-1 text-warning text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Ф.И.О</h6>
                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" id="email" value="<?php 
    if(!isset($firstname) and !isset($lastname)){
        echo "?????";
    } else {
echo htmlspecialchars($firstname)." ".htmlspecialchars($lastname); 
    }
                        ?>" readonly>
                    </div>
                </div>
                <div class="timeline-block mb-3">
                    <span class="timeline-step">
                        <i class="fa fa-phone me-sm-1 text-danger text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Номер телефона</h6>
                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" name="phone" id="phone" type="text" value="<?php 
    if(!isset($phone)){
        echo "?????";
    } else {
    echo htmlspecialchars($phone); 
    }
                        ?>" readonly>
                    </div>
                </div>
                <div class="timeline-block mb-3">
                    <span class="timeline-step">
                        <i class="fa fa-city me-sm-1 text-primary text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Адрес проживания</h6>
                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" name="address" id="address" type="text" readonly value="<?php 
    if(!isset($adress)){
        echo "?????";
    } else {
    echo htmlspecialchars($adress); 
    }
                        ?>">
                    </div>
                </div>
                <div class="timeline-block">
                    <span class="timeline-step">
                        <i class="ni ni-money-coins text-dark text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">база-данных => <?php 
    if(!isset($user_id)){
        echo "?????";
    } else {
    echo "UserID: ".htmlspecialchars($user_id); 
    }
                        ?></h6>
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Все данные готовы</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


            <div class="card-header pb-0 pt-3 bg-transparent">
              <h5 class="text-capitalize">Статистика активности базы-данных [ <i class="fa fa-chart-line text-dark"></i> ]</h5>
            </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Таблица</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-arrow-up text-success"></i>
                <span class="font-weight-bold">5% больще</span>
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card card-carousel overflow-hidden h-100 p-0">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
              <div class="carousel-inner border-radius-lg h-100">
                <div class="carousel-item h-100 active" style="background-image: url('./assets/img/carousel-1.jpg');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Начало процветания в новом цвете</h5>
                    <p>Система базы-данных в порядке.</p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="background-image: url('./assets/img/carousel-2.jpg');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Быстрый веб-сервис от Nersisyan</h5>
                    <p>Аналитика и панельные ресурсы +100% общирнее.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">PANEL-ADMIN</span>
              </button>
              <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Дальше</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      
<div class="card-header pb-0 pt-3 bg-transparent">
    <h6 class="text-capitalize">Список последних 10 регистраций&nbsp;&nbsp;<i class="fa fa-group text-primary"></i></h6>
</div>

<!-- End Navbar -->
<div class="py-4 col-lg-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Таблица пользователей</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NUM</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Пользователи</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Телефон</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Статус</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Запрос для получения последних 5 зарегистрированных пользователей
                                $sql = "SELECT firstname, lastname, phone, email, avatar, id FROM users ORDER BY id DESC LIMIT 10";
                                $result = mysqli_query($conn, $sql);

                                // Проверка наличия результатов
                                if (mysqli_num_rows($result) > 0) {
                                    // Индекс для блоков
                                    $index = 1; // нумерация регистрации
                                    // Цикл для вывода данных
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Вывод блока для каждого пользователя
                                        $list_id = $row["id"];
                                        $list_avatar = $row["avatar"];
                                        $list_email = $row["email"];
                                        $list_phone = $row["phone"];
                                        $list_lastname = $row["lastname"];
                                        $list_firstname = $row["firstname"];

                                        // Увеличение индекса при регистрации
                                        $print = '<tr>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">';
                                        if (!isset($index) or empty($index)) {
                                            $print .= '0';
                                        } else {
                                            $print .= $index;
                                        }
                                        $print .= '</span>
                                        </td>';

                                        $print2 = '<td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="';
                                        if (!isset($list_avatar) or empty($list_avatar)) {
                                            $print2 .= '/images/no-profile.jpg';
                                        } else {
                                            $print2 .= $list_avatar;
                                        }
                                        $print2 .= '" class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">';
                                        if (!isset($list_firstname) or empty($list_firstname)) {
                                            $print2 .= 'Нет имени';
                                        } else {
                                            $print2 .= $list_firstname;
                                        }
                                        if (!isset($list_lastname) or empty($list_lastname)) {
                                            $print2 .= ' Нет фамилии';
                                        } else {
                                            $print2 .= ' ' . $list_lastname;
                                        }
                                        $print2 .= '</h6>
                                                <p class="text-xs text-secondary mb-0">';
                                        if (!isset($list_email) or empty($list_email)) {
                                            $print2 .= 'Нет почты';
                                        } else {
                                            $print2 .= $list_email;
                                        }
                                        $print2 .= '</p>
                                            </div>
                                        </div>
                                        </td>';

                                        $print3 = '<td>
                                        <p class="text-xs font-weight-bold mb-0">';
                                        if (!isset($list_phone) or empty($list_phone)) {
                                            $print3 .= 'Нет номера';
                                        } else {
                                            $print3 .= $list_phone;
                                        }
                                        $print3 .= '</p>
                                        </td>';

                                        $print4 = '<td class="align-middle text-center text-sm">';
                                        if (!empty($list_phone)) {
                                            $print4 .= $add_colon;
                                        } else {
                                            $print4 .= $add_colon2;
                                        }
                                        $print4 .= '</td>';

                                        $print5 = '<td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">';
                                        if (!isset($list_id) or empty($list_id)) {
                                            $print5 .= 'Нет ID';
                                        } else {
                                            $print5 .= $list_id;
                                        }
                                        $print5 .= '</span>
                                        </td>';

                                        $print6 = '<td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                        </td>
                                    </tr>';
                                    
    echo $print . "" . $print2 . "" . $print3 . "" . $print4 . "" . $print5 . "" . $print6;
                                        $index++;
                                    }
        } else {
setMessage("error_text_list", "<i class='fas fa-exclamation text-danger'></i></button>&nbsp;&nbsp;Нет зарегистрированных пользователей.");
                                }

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <div class="card-header pb-0 pt-3 bg-transparent" style="transform: translateY(-25px)">
              <h6 class="text-capitalize">Панель управления баллами пользователей&nbsp;&nbsp;<i class="fa fa-tags text-warning"></i></h6>
            </div>
<div class="row">
<!-- col-lg-4 = на весь экран -->
<div class="col-md-6 col-mt-6 mb-4">
    <div class="card h-100">
        <div class="card-header pb-0 px-3">
            <form method="POST">
                    <div class="form-group">

<!-- error message -->                
    <?php if(hasMessage('error_points')): ?>
        <div class="error-message_point">
  <span class="error-text_point"><?php echo getMessage('error_points') ?></span></div>
    <?php endif; ?>
    
<!-- accept message -->                
    <?php if(hasMessage('nice')): ?>
        <div class="nice-message">
  <span class="nice-text"><?php echo getMessage('nice') ?></span></div>
    <?php endif; ?>

                        <label for="userId" class="form-control-label">Укажите ID получателя</label>

                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" name="user_id" id="user_id">
              
                        <label for="userId" class="form-control-label">Укажите количество баллов</label>

                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" name="points" id="points">
                        <br>
                        <style>
                          .btner {
                              opacity: 0.7;
                          }  
                        </style>
        <?php
/*check imformation */
if(!$user){
    echo '<span style="color: white" class="btner btn btn-primary btn-sm ms-auto">Зачилисть</span>';
    } elseif($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["firstname"] == "Нерсисян" and $user["lastname"] == "Артём" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Бирюков" and $user["lastname"] == "Максим" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2"){ //sis-admin
    echo '<button style="color: white" class="btn btn-primary btn-sm ms-auto" type="add_points" name="add_points">Зачислить</button>';
    } else { echo '<span style="color: white" class="btner btn btn-primary btn-sm ms-auto">Зачислить</span>'; }
                        ?>
                    </div>
            </form>
        </div>
        <div class="card-body p-3">
        <h6>Сведения:</h6>
            <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                    <span class="timeline-step" style="margin-left: 5px">
                        <i class="fas fa-calendar-alt me-2 text-warning text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">
                            <?php
                            date_default_timezone_set('Europe/Moscow');
                            echo date("Y") . "г – " . date("d") . " " . date("M") . " " . date("H:i");
                            ?>
                        </h6>
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Время зачисления баллов</p>
                    </div>
                </div>
                <div class="timeline-block mb-3">
                    <span class="timeline-step">
                        <i class="fa fa-user me-sm-1 text-danger text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Получатель</h6>
                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" id="firstname" value="<?php 
    if(!isset($firstname) and !isset($lastname)){
        echo "?????";
    } else {
echo htmlspecialchars($firstname)." ".htmlspecialchars($lastname); 
    }
                        ?>" readonly>
                    </div>
                </div>
                
                <div class="timeline-block mb-3">
                    <span class="timeline-step">
                        <i class="fa fa-coins me-sm-1 text-warning text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Количество баллов в профиле</h6>
                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" value="<?php 
    if(!isset($count_point)){
        echo "?????";
} elseif($check_id_points == FALSE){
        echo "?????";
        } elseif(empty($count_point)) {
        echo "0";
    } elseif($check_id_points == TRUE) {
        echo htmlspecialchars($count_point)." баллов + $points баллов";
    }
                        ?>" readonly>
                    </div>
                </div>
                
                <div class="timeline-block mb-3">
                    <span class="timeline-step">
                        <i class="fa fa-plus me-sm-1 text-success text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Количество баллов к зачислению</h6>
                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" value="<?php 
    if(!isset($points)){
        echo "?????";
} elseif($check_id_points == FALSE){
        echo "?????";
        } elseif(empty($points)) {
        echo "0";
    } elseif($check_id_points == TRUE) {
        echo "+".htmlspecialchars($points)." баллов";
    }
                        ?>" readonly>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


<!-- col-lg-4 = на весь экран -->
<div class="col-md-6 col-mt-6">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <form method="POST">
                    <div class="form-group">
<!-- error message -->                
    <?php if(hasMessage('error_points_remove')): ?>
        <div class="error-message_point">
  <span class="error-text_point"><?php echo getMessage('error_points_remove') ?></span></div>
    <?php endif; ?>
    
<!-- accept message -->                
    <?php if(hasMessage('remove_accept')): ?>
        <div class="remove-message">
  <span class="remove-text"><?php echo getMessage('remove_accept') ?></span></div>
    <?php endif; ?>

                        <label for="userId" class="form-control-label">Укажите ID пользователя</label>

                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" name="user_id_remove" id="user_id_remove">
              
                        <label for="userId" class="form-control-label">Укажите количество баллов</label>

                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" name="points_remove" id="points_remove">
                        <br>
                        <style>
                          .btner {
                              opacity: 0.7;
                          }  
                        </style>
        <?php
/*check imformation */
if(!$user){
    echo '<span style="color: white" class="btner btn btn-primary btn-sm ms-auto">Зачилисть</span>';
    } elseif($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["firstname"] == "Нерсисян" and $user["lastname"] == "Артём" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Бирюков" and $user["lastname"] == "Максим" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2"){ //sis-admin
    echo '<button style="color: white" class="btn btn-primary btn-sm ms-auto" type="remove_points" name="remove_points">Зачислить</button>';
    } else { echo '<span style="color: white" class="btner btn btn-primary btn-sm ms-auto">Зачислить</span>'; }
                        ?>
                    </div>
            </form>
        </div>
        <div class="card-body p-3">
        <h6>Сведения:</h6>
            <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                    <span class="timeline-step" style="margin-left: 5px">
                        <i class="fas fa-calendar-alt me-2 text-warning text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">
                            <?php
                            date_default_timezone_set('Europe/Moscow');
                            echo date("Y") . "г – " . date("d") . " " . date("M") . " " . date("H:i");
                            ?>
                        </h6>
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Время вычитание баллов</p>
                    </div>
                </div>
                <div class="timeline-block mb-3">
                    <span class="timeline-step">
                        <i class="fa fa-user me-sm-1 text-danger text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Пользователь</h6>
                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" id="firstname" value="<?php 
    if(!isset($firstname) and !isset($lastname)){
        echo "?????";
    } else {
echo htmlspecialchars($firstname)." ".htmlspecialchars($lastname); 
    }
                        ?>" readonly>
                    </div>
                </div>
                
                <div class="timeline-block mb-3">
                    <span class="timeline-step">
                        <i class="fa fa-coins me-sm-1 text-warning text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Количество баллов в профиле</h6>
                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" value="<?php 
    if(!isset($count_point_rem)){
        echo "?????";
} elseif($check_id_points_rem == FALSE){
        echo "?????";
        } elseif(empty($count_point_rem)) {
        echo "0";
    } elseif($check_id_points_rem == TRUE) {
        echo htmlspecialchars($count_point_rem)." баллов - $points_rem баллов";
    }
                        ?>" readonly>
                    </div>
                </div>
                
                <div class="timeline-block mb-3">
                    <span class="timeline-step">
                        <i class="fa fa-minus me-sm-1 text-info text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Количество баллов к изъятию</h6>
                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" value="<?php 
    if(!isset($points_rem)){
        echo "?????";
} elseif($check_id_points_rem == FALSE){
        echo "?????";
        } elseif(empty($points_rem)) {
        echo "0";
    } elseif($check_id_points_rem == TRUE) {
        echo "-".htmlspecialchars($points_rem)." баллов";
    }
                        ?>" readonly>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
      
      </div>
      
<div class="card-header pb-0 pt-3 bg-transparent">
  <h6 class="text-capitalize">Регистрация нового пользователя&nbsp;&nbsp;<i class="fa fa-user-plus text-success"></i></h6>
</div>
<form method="POST" enctype="multipart/form-data">
<div class="col-md-12 mb-lg-0 mb-4">
  <div class="card mt-4">
    <!-- error message -->
    <?php if(hasMessage('error-message')): ?>
    <div class="error-message">
      <span class="error-text"><?php echo getMessage('error-message') ?></span>
    </div>
    <?php endif; ?>

    <!-- accept message -->
    <?php if(hasMessage('nice-reg-message')): ?>
    <div class="nice-message">
      <span class="nice-text"><?php echo getMessage('nice-reg-message') ?></span>
    </div>
    <?php endif; ?>
    <div class="card-header pb-0 p-3">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <?php 
            $print = '<h6 class="mb-0">Регистрация</h6>';
            if(isset($firstname_register) && !empty($firstname_register)){
              $print .= $firstname_register;
            }
            echo $print;
          ?>
        </div>
        <div class="col-6 text-end">
          <?php
            /*check information */
            if(!$user){
              echo '<span style="color: white" class="btner btn bg-gradient-dark mb-0"><i class="fas fa-plus"></i>&nbsp;&nbsp; Добавить</span>';
            } elseif($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["firstname"] == "Нерсисян" and $user["lastname"] == "Артём" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Бирюков" and $user["lastname"] == "Максим" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2"){
              //sis-admin
              echo '<button style="color: white" class="btn bg-gradient-dark mb-0" name="sqli_reg_new_user" type="sumbit"><i class="fas fa-plus"></i>&nbsp;&nbsp; Добавить</button>';
            } else { 
              echo '<span style="color: white" class="btner btn bg-gradient-dark mb-0"><i class="fas fa-plus"></i>&nbsp;&nbsp; Добавить</span>'; 
            }
          ?>
          </form>
        </div>
      </div>
    </div>
    <div class="card-body p-3">
      <div class="row">
        <div class="col-md-6 mb-md-0 mb-4">
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" name="lastname_reg" style="text-align: center" placeholder="****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;">
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Имя"></i>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-md-0 mb-4">
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" name="firstname_reg" style="text-align: center" placeholder="****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;">
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Фамилия"></i>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-md-0 mb-4">
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" name="email_reg" style="text-align: center" placeholder="****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;@gmail">
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Почта"></i>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-md-0 mb-4">
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" name="password_reg" style="text-align: center" placeholder="****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;">
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Пароль"></i>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="file" id="avatar" name="avatar">
          <?php if(hasValidationError('avatar')): ?>
          <small><?php echo validationErrorMessage('avatar'); ?></small>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </div>
</div>
      
      
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Изменения данных пользователей / Найти UserID&nbsp;&nbsp;<i class="fa fa-spinner fa-spin text-info"></i></h6>
            </div>
      <div class="pb-3">
      <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Редактирование данных</h6>
            </div>
            <div class="card-body pt-4 p-3">
            <form method="POST">
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_date"])) {
    
    
    // Получение значения id пользователя из поля ввода
    $id_click = $_POST['id_click'];

    $check_id_click = findID($id_click);
    
 // Осуществляем проверки  
if (empty($id_click)) { // пустая строка
    setMessage('error_update', "Пожалуйста, заполните пустую строку USER_ID!");
 } elseif($id_click == 1 or $id_click == 2){
    setMessage('error_update', "<i class='fas fa-exclamation text-danger'></i></button>&nbsp;&nbsp;Данный userID <font color='#cc0033'>запрешён в редактировании!</font>");
     } elseif($check_id_click == false) { // Проверка ID пользователей с базы данных
    setMessage('error_update', "<i class='fas fa-exclamation text-danger'></i></button>&nbsp;&nbsp;Введённый вами USER_ID: <font color='#cc0033'>$id_click не найден</font> в базе данных");
    } elseif($check_id_click == true){

        // SQL-запрос для получения почты пользователя по его id
        $sql = "SELECT * FROM users WHERE id = $id_click";
        
        $result = $conn->query($sql);

        // Проверка, найдены ли данные пользователя
        if ($result->num_rows > 0) {
            // Вывод информации о пользователе
            $row = $result->fetch_assoc();
            $email_client = $row["email"];
            $adress_client = $row["adress"];
            $phone_client = $row["phone"];
            $id_client = $row["id"];
            $firstname_client = $row["firstname"];
            $lastname_client = $row["lastname"];
            $descriptions_client = $row["descriptions"];
            $city_client = $row["city"];
            $password_client = $row["password"];
            
    // уведомление
    setMessage('nice_update', "<i class='fas fa-arrow-up text-success'></i></button>&nbsp;&nbsp;<font color='#57d8a0'>Успешно обновленно!</font>");
        } else {
            setMessage("error_update", "<i class='fas fa-exclamation text-danger'></i></button>&nbsp;&nbsp;Подключение не удалось!". mysqli($result));
        }
    }
}


// Обработка POST-запроса для внесения изменений

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["replace_date"])) {
// Получение данных из формы
   $adress_replace = $_POST['adress_client'];
   $city_replace = $_POST['city_client'];
   $firstname_replace = $_POST['firstname_client'];
   $lastname_replace = $_POST['lastname_client'];
   $email_replace = $_POST['email_client'];
   $userID_replace = $_POST['id_client'];
   $phone_replace = $_POST['phone_client'];
   $descriptions_replace = $_POST['descriptions_client'];
   
   $sql = "UPDATE users SET email = '$email_replace', city = '$city_replace', lastname = '$lastname_replace', firstname = '$firstname_replace', adress = '$adress_replace', descriptions = '$descriptions_replace', phone = '$phone_replace' WHERE id = $userID_replace";
  if(mysqli_query($conn, $sql)) {
    // уведомление
    setMessage('nice_update', "<i class='fas fa-arrow-up text-success'></i></button>&nbsp;&nbsp;Данные успешно <font color='#57d8a0'>изменены!</font> Обновите запрос поиска, чтобы проверить <font class='text-warning'> корректировку изменения!</font>");
  } else {
    setMessage("error_update", "<i class='fas fa-exclamation text-danger'></i></button>&nbsp;&nbsp;Ошибка внесения данных: " . mysqli_error($conn));
  }
}
    ?>
                    <div class="form-group">

<!-- error message -->                
    <?php if(hasMessage('error_update')): ?>
        <div class="error-message_point">
  <span class="error-text_point"><?php echo getMessage('error_update') ?></span></div>
    <?php endif; ?>
    
<!-- accept message -->                
    <?php if(hasMessage('nice_update')): ?>
        <div class="nice-message">
  <span class="nice-text"><?php echo getMessage('nice_update') ?></span></div>
    <?php endif; ?>

                        <label for="userId" class="form-control-label">Укажите ID пользователя</label>

                        <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" name="id_click" id="id_click">
                        <br>
                        <style>
                          .btner {
                              opacity: 0.7;
                          }  
                        </style>
            <div class="row">
        <?php
/*check imformation */
if(!$user){
    echo '<span style="color: white" class="btner btn btn-primary btn-sm ms-auto">Обновить</span>';
    } elseif($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["firstname"] == "Нерсисян" and $user["lastname"] == "Артём" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Бирюков" and $user["lastname"] == "Максим" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2"){ //sis-admin
    echo '<button style="color: white" class="btn btn-primary btn-sm ms-auto" type="update_date" name="update_date">Обновить</button>';
    } else { echo '<span style="color: white" class="btner btn btn-primary btn-sm ms-auto">Обновить</span>'; }
                        ?>
<?php
if(!$user){
    echo '<span style="color: white;" class="btner btn btn-dark btn-sm ms-auto">Изменить</span>';
    } elseif($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["firstname"] == "Нерсисян" and $user["lastname"] == "Артём" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Бирюков" and $user["lastname"] == "Максим" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2"){ //sis-admin
    echo '<button style="color: white;" class="btn btn-dark btn-sm ms-auto" type="submit" name="replace_date">Изменить</button>';
    } else { echo '<span style="color: white" class="btner btn btn-dark btn-sm ms-auto">Изменить</span>'; }
                        ?>
                        </div>
                        
                    </div>
                    
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg row">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm"><?php
        if(empty($firstname_client)){
            echo "Firstname";
        } else {
            echo $firstname_client;
        }
        if (empty($lastname_client)) {
           echo " Lastname <i class='fa fa-close text-danger'></i>";
        } else {
            echo " ".$lastname_client." <i class='fa fa-check text-success'></i> ";
        }
                    ?></h6>
                    <span class="mb-2 text-xs">Город: <span class="text-dark font-weight-bold ms-sm-2"><?php 
        if (empty($city_client)) {
            echo "No find";
        } else {
            echo $city_client;
        }  
                    ?></span></span>
                    <span class="mb-2 text-xs">Почтовый адрес: <span class="text-dark ms-sm-2 font-weight-bold"><?php 
        if (empty($email_client)) {
            echo "Email no find";
        } else {
            echo $email_client;
        }  
                    ?></span>
                    </span>
                    
                    <span class="mb-2 text-xs">Номер телефона: <span class="text-dark ms-sm-2 font-weight-bold"><?php 
        if (empty($phone_client)) {
            echo "Not phone";
        } else {
            echo $phone_client;
        }  
                    ?></span>
                    </span>
                    
                    <span class="mb-2 text-xs">Адрес: <span class="text-dark ms-sm-2 font-weight-bold"><?php 
        if (empty($adress_client)) {
            echo "No find adress";
        } else {
            echo $adress_client;
        }  
                    ?></span>
                    </span>
                    
                    <span class="mb-2 text-xs">Описание: <span class="text-dark ms-sm-2 font-weight-bold"><?php 
        if (empty($descriptions_client)) {
            echo "No commend";
        } else {
            echo $descriptions_client;
        }  
                    ?></span>
                    </span>
                    
                    <span class="mb-2 text-xs">UserID: <span class="text-dark ms-sm-2 font-weight-bold"><?php 
        if (empty($id_client)) {
            echo "ID NOT";
        } else {
            echo $id_client;
        }  
                    ?></span>
                    </span>
                    
                  </div>
                </li>
        <!-- edit -->
                <li class="list-group-item border-radius-lg" style="border:none">
                    
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" type="text" name="email_client" style="text-align: center"
<?php
if(!isset($id_click)){
    echo "placeholder='@gmail.com' readonly";
} elseif(empty($email_client)){
    echo "placeholder='@gmail.com'";
} else {
    echo "value='$email_client'";
}
?>>
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" type="submit" data-bs-placement="top" title="Почта"></i>
            </div>
          </div>
          
                </li>
                
        <!-- edit -->
                <li class="list-group-item border-radius-lg" style="border:none">
                    
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" name="lastname_client" type="text" style="text-align: center"
<?php
if(!isset($id_click)){
   echo "placeholder='&nbsp;&nbsp;******' readonly";
} elseif(empty($lastname_client)){
   echo "placeholder='&nbsp;&nbsp;******'";
} else {
    echo "value='$lastname_client'";
}
?>>
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Имя"></i>
            </div>
          </div>
          
                </li>
                
        <!-- edit -->
                <li class="list-group-item border-radius-lg" style="border:none">
                    
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" name="firstname_client" type="text" style="text-align: center"
<?php
if(!isset($id_click)){
   echo "placeholder='&nbsp;&nbsp;******' readonly";
} elseif(empty($firstname_client)){
   echo "placeholder='&nbsp;&nbsp;******'";
} else {
    echo "value='$firstname_client'";
}
?>>
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Фамилия"></i>
            </div>
          </div>
          
                </li>
                
        <!-- edit -->
                <li class="list-group-item border-radius-lg" style="border:none">
                    
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" name="adress_client" type="text" style="text-align: center"
<?php
if(!isset($id_click)){
    echo "placeholder='&nbsp;&nbsp;*****&nbsp;&nbsp;&nbsp&nbsp;*****' readonly";
} elseif(empty($adress_client)){
    echo "placeholder='&nbsp;&nbsp;*****&nbsp;&nbsp;&nbsp&nbsp;*****'";
} else {
    echo "value='$adress_client'";
}
?>>
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Адрес"></i>
            </div>
          </div>
          
                </li>
                
        <!-- edit -->
                <li class="list-group-item border-radius-lg" style="border:none">
                    
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" name="city_client" type="text" style="text-align: center"
<?php
if(!isset($id_click)){
    echo "placeholder='&nbsp;&nbsp;*****' readonly";
} elseif(empty($city_client)){
    echo "placeholder='&nbsp;&nbsp;*****'";
} else {
    echo "value='$city_client'";
}
?>>
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Город"></i>
            </div>
          </div>
          
                </li>
                
        <!-- edit -->
                <li class="list-group-item border-radius-lg" style="border:none">
                    
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" name="phone_client" type="text" style="text-align: center"
<?php
if(!isset($id_click)){
   echo "placeholder='&nbsp;&nbsp;+7 (***) *** ** **' readonly";
} elseif(empty($phone_client)){
    echo "placeholder='&nbsp;&nbsp;+7 (***) *** ** **'";
} else {
    echo "value='$phone_client'";
}
?>>
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Номер телефона"></i>
            </div>
          </div>
          
                </li>
                
        <!-- edit -->
                <li class="list-group-item border-radius-lg" style="border:none">
                    
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" name="descriptions_client" type="text" style="text-align: center"
<?php
if(!isset($id_click)){
   echo "placeholder='&nbsp;&nbsp;******&nbsp;&nbsp;&nbsp;&nbsp;******&nbsp;&nbsp;&nbsp;&nbsp;******' readonly";
} elseif(empty($descriptions_client)){
   echo "placeholder='&nbsp;&nbsp;******&nbsp;&nbsp;&nbsp;&nbsp;******&nbsp;&nbsp;&nbsp;&nbsp;******'";
} else {
    echo "value='$descriptions_client'";
}
?>>
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Описание"></i>
            </div>
          </div>
          
                </li>
                
        <!-- edit -->
                <li class="list-group-item border-radius-lg" style="border:none">
                    
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" type="text" name="id_client" style="text-align: center"
<?php
if(!isset($id_click)){
  echo "placeholder='&nbsp;&nbsp;*****' readonly";
} elseif(empty($id_client)){
  echo "placeholder='&nbsp;&nbsp;*****' readonly";
} else {
    echo "value='$id_client' readonly";
}
?>>
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="ID"></i>
            </div>
          </div>
          
                </li>
                
        <!-- edit -->
                <li class="list-group-item border-radius-lg" style="border:none">
                    
          <div class="input-group">
            <input class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px" name="password_client" type="text" style="text-align: center"
<?php
if(!isset($id_click)){
    echo "placeholder='&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;&nbsp;****' readonly";
} elseif(empty($password_client)){
    echo "placeholder='&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;&nbsp;****'";
} else {
    echo "value='$password_client'";
}
?>>
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Пароль"></i>
            </div>
          </div>
          
                </li>
                
              </ul>
              </form>
            </div>
          </div>
        </div>

       
       
       
       

<?php

// отказ 
$button_danger = '<button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center" type="submit" name="SEND_SQL_POST" id="SEND_SQL_POST"><i class="fas fa-arrow-down" title="Поиск"></i></button>';

// отказ 
$not_found = '<div class="d-flex align-items-center text-warning text-gradient text-sm font-weight-bold">Ожидание</div>';

// найден пуст
$found = "";

// найден пуст
$button_success = "";

// input
$good_input = '<div class="input-group">
              <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px;padding-top: 5px;text-align: center;" name="lastname" placeholder="*****">
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Имя"></i>
            </div>
        </div>';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["SEND_SQL_POST"])) {

    $firstname = $lastname = "";

    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
    }

    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
    }

    // Поиск пользователя по имени и фамилии
    $sql = "SELECT id FROM users WHERE firstname = ? AND lastname = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $firstname, $lastname);
        $stmt->execute();
        $stmt->bind_result($user_id);

        if ($stmt->fetch()) {
            // Пользователь найден
            $found = '<div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">&nbsp;&nbsp;Найден</div>';
            $button_success = '<button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center" type="submit" name="SEND_SQL_POST" id="SEND_SQL_POST"><i class="fas fa-arrow-down" title="Поиск"></i></button>';
            $not_input = "";
            $good_input = '<div class="input-group">
              <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px;padding-top: 5px;text-align: center;" name="lastname" placeholder="*****">
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Имя"></i>
            </div>
        </div>';
            $button_danger = "";
            $not_found = "";
        } else {
            $found = "";
            $button_success = "";
            $not_found = '<div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">Не найден</div>';
            $button_danger = '<button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center" type="submit" name="SEND_SQL_POST" id="SEND_SQL_POST"><i class="fas fa-arrow-down" title="Поиск"></i></button>';
            $good_input = '<div class="input-group">
              <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px;padding-top: 5px;text-align: center;" name="lastname" placeholder="*****">
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Имя"></i>
            </div>
        </div>';
        }

        $stmt->close();
    }
}



// отказ 
$button_danger_email = '<button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center" type="submit" name="SEND_SQL_POST_EMAIL" id="SEND_SQL_POST_EMAIL"><i class="fas fa-arrow-down" title="Поиск"></i></button>';

// отказ 
$not_found_email = '<div class="d-flex align-items-center text-warning text-gradient text-sm font-weight-bold">Ожидание</div>';

// найден пуст
$found_email = "";

// найден пуст
$button_success_email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["SEND_SQL_POST_EMAIL"])) {

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }

    // Поиск пользователя по почте
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($user_id);

        if ($stmt->fetch()) {
            // Пользователь найден
            $found_email = '<div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">&nbsp;&nbsp;Найден</div>';
            $button_success_email = '<button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center" type="submit" name="SEND_SQL_POST_EMAIL" id="SEND_SQL_POST_EMAIL"><i class="fas fa-arrow-down" title="Поиск"></i></button>';
            $button_danger_email = "";
            $not_found_email = "";
        } else {
            $found_email = "";
            $button_success_email = "";
            $not_found_email = '<div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">Не найден</div>';
            $button_danger_email = '<button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center" type="submit" name="SEND_SQL_POST_EMAIL" id="SEND_SQL_POST_EMAIL"><i class="fas fa-arrow-down" title="Поиск"></i></button>';
        }

        $stmt->close();
    }
}

?>
<div class="col-md-5 mt-4" style="height: auto">
  <div class="card h-100 mb-4">
    <div class="card-header pb-0 px-3">
      <div class="row">
        <div class="col-md-6">
          <h6 class="mb-0">Получения ID</h6>
        </div>
      </div>
    </div>
    <div class="card-body pt-4 p-3">
      <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Фамилия & Имя or email</h6>
      <form method="POST" action="">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
                
    <?php echo $button_danger."".$button_success; ?> 
            
        </div>  
        
    <div class="d-flex align-items-center">
                
          <div class="input-group" style="right: 8px !important">
              <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px;padding-top: 5px;text-align: center;" id="lastname" name="lastname" placeholder="*****">
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Фамилия"></i>
            </div>
            </div>
            
            </div>
            <?php echo $found."".$not_found; ?>
          </li>
          
          
          
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
                
<span class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center" style="border:none"><i class="fa fa-user-o"></i></span>
                
          <div class="input-group" style="right: 8px !important">
              <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px;padding-top: 5px;text-align: center;margin-left: 7.5px !important" id="firstname" name="firstname" placeholder="*****">
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Имя"></i>
            </div>
            </div>
            
            </div>
            
            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold"></div>
            </li>
          
          
                <p class="text-sm font-weight-bold mb-2 text-border d-inline z-index-2 px-3" style="margin-left: 103.5px !important;margin-top: -10px">
                  или
                </p>
                
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg" style="margin-top: -10px;">
            <div class="d-flex align-items-center">
                
    <?php echo $button_danger_email."".$button_success_email; ?> 
            
        </div>  
        
    <div class="d-flex align-items-center">
                
          <div class="input-group" style="right: 8px !important">
              <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px;padding-top: 5px;text-align: center;" id="email" name="email" placeholder="@gmail.com">
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Почта"></i>
            </div>
            </div>
            
            </div>
            <?php echo $found_email."".$not_found_email; ?>
          </li>
          
    <hr class="horizontal dark">
    
<!-- ВЫВОД ID --> 
      <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">GET Identifier & User(ID)</h6>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg" style="border: 1px solid red">
            <div style="display: flex">
                
<span class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center" style="border:none; transform: translateY(3.5px)"><i class="fa fa-chevron-right"></i></span>
                
              <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0" style="position: relative;text-align: start;border-radius: 10px;padding-top: 5px;text-align: center;width: 235px;margin-left: -10px" id="text" readonly value="<?php if(empty($user_id)){
                  echo "****";
              } else {
                  echo "》".$user_id."《";
              }
              ?>">
            <div class="input-group-append">
              <i style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="UserID"></i>
            </div>
            
            </div>
            
          </li>
          
          
        </ul>
      </form>
      

    </div>
    
      <div class="card mb-4">
    <!-- End Navbar -->
        <div class="row gx-4" style="margin: 25px 25px 0px 10px">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="
              <?php if(!isset($user["avatar"])) {
                  echo "/images/no-profile.jpg";
              }else{echo $user["avatar"];}?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php
                if(!isset($user["firstname"])){
                echo "Your Name";
                    
                } else {
                    echo $user["firstname"];
                }?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                  <?php
/*check imformation */
if(!isset($user["id"])){
    echo "Null";
}
elseif($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Нерсисян" and $user["lastname"] == "Артём" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1"){ //sis-admin

echo "Системный-Администратор";

} elseif($user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["firstname"] == "Бирюков" and $user["lastname"] == "Максим" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2"){ 
    echo "Главный-Администратор";
} else { echo "Пользователь"; }
                  ?>
              </p>
            </div>
          </div>
        </div>
    
    <form action="/src/actions/replace_admin.php" method="POST">
    <div class="container-fluid py-4">
<!-- error message -->                
    <?php if(hasMessage('replace_myself_data_error')): ?>
        <div class="error-message_point">
  <span class="error-text_point"><?php echo getMessage('replace_myself_data_error') ?></span></div>
    <?php endif; ?>
    
<!-- accept message -->                
    <?php if(hasMessage('replace_myself_data')): ?>
        <div class="nice-message">
  <span class="nice-text"><?php echo getMessage('replace_myself_data') ?></span></div>
    <?php endif; ?>
      <div class="row">
            <div class="pb-0">
              <div class="d-flex align-items-center">
                <p style="transform: translateY(1.75px)" class="mb-0">ADM-PANEL&nbsp;(PRO)</p>
                <style>
                    .nersisyan:hover {
                        background: #A6FFA6;
                    }
                </style>
        <?php
        if(!($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Нерсисян" and $user["lastname"] == "Артём" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["firstname"] == "Бирюков" and $user["lastname"] == "Максим" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2")) {
            echo '<span class="btner btn bg-gradient-dark mb-0 btn-sm ms-auto">Изменить данные</span>';
            } elseif($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Нерсисян" and $user["lastname"] == "Артём" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["firstname"] == "Бирюков" and $user["lastname"] == "Максим" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2") {
            echo '<input style="color: white;" class="btn bg-gradient-dark mb-0 btn-sm ms-auto" type="submit" name="replace_mysql_information_admin" value="ЗАМЕНИТЬ"></input>';
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
                    <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" id="lastname" name="lastname" value="<?php 
    if(!isset($user["lastname"])) {
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
                    <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" id="firstname" name="firstname" value="<?php 
    if(!isset($user["firstname"])) {
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
                    <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" name="email" id="email" value="<?php 
    if(!isset($user["email"])) {
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
                    <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" id="adress" name="adress" value="<?php
                    if(!isset($user['adress'])){
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
                    <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" id="city" name="city" value="<?php 
    if(!isset($user["city"])) {
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
                    <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" id="phone" name="phone" value="<?php
                    if(!isset($user['phone'])){
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
                    <label for="descriptions" class="form-control-label">Пароль (PASSWORD)</label>
                    <input class="card border card-plain border-radius-lg d-flex align-items-center flex-row mb-0 form-control" type="text" name="password" value="<?php 
    if(!isset($user["password"])) {
        echo "";
    } else {
        echo $user["password"];
    }
    ?>">
                </div>
              </div>
            </div>
          </div>
    </div>
    </div>
    </div>
    </div>
    </div>
        </div>
              </form>
    </main>
  <br>
<br>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Панель настроек сайтом</h5>
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
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
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
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">Светлая</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Тёмная</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">Вы можете закрепить блок меню на прокрутку, а так же изменить тему страницы."</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Отобразить меню</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Светлая / Тёмная</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0.9,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 2,
          fill: true,
          data: [50, 40, 300, 100, 500, 250,1150, 40, 300, 100, 500, 250, 400, 230, 500, 800, 100, 1000],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: true,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 12,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 1
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 5,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>