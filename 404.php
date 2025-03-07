<?php
require_once __DIR__ . '/src/helpers.php';
$user = currentUser();
?>
<!doctype html>
<html lang="ru" data-theme="light">
<?php include_once __DIR__ . '/components/error.php' ?>
<body>
    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 d-flex flex-wrap">
                    
<style>
.floating {
    width: auto;
    height: auto;
}
.profile_log {
    background: none;
    width: 32px;
    height: 32px;
    margin-bottom: -10px;
    margin-top: -4px;
filter: drop-shadow(0px 0px 5px #fff);
    border-radius: 10px 3.5px 10px 3.5px;
}

.ball {
    width: auto;
    height: 31px;
    border-radius: 5px;
    background: #00000078;
    padding: 2.5px;
    margin-left: 10px;
    margin-bottom: -10px;
    margin-top: -4px;
}
.point_count {
    color: white;
    margin-left: 3.5px;
    margin-right: 5px;
    top: 1px;
    font-size: 13px;
}
</style>
<div class='d-flex me-5 floating'>
    <a class="profile_log" href="/profile.php">
<svg style='padding: 1.5px;margin-bottom: 5px' id='Layer_1' enable-background='new 0 0 64 64' viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg'><g><g><circle cx='30.167' cy='32' fill='#99a2b9' r='26'/><path d='m30.167 58.5c-14.612 0-26.5-11.888-26.5-26.5s11.888-26.5 26.5-26.5c14.613 0 26.5 11.888 26.5 26.5s-11.888 26.5-26.5 26.5zm0-52c-14.061 0-25.5 11.439-25.5 25.5s11.439 25.5 25.5 25.5 25.5-11.439 25.5-25.5-11.439-25.5-25.5-25.5z' fill='#212a41'/></g><g><circle cx='34.167' cy='32' fill='#b7c0d7' r='26'/><path d='m34.167 58.5c-14.612 0-26.5-11.888-26.5-26.5s11.888-26.5 26.5-26.5 26.5 11.888 26.5 26.5-11.888 26.5-26.5 26.5zm0-52c-14.061 0-25.5 11.439-25.5 25.5s11.439 25.5 25.5 25.5 25.5-11.439 25.5-25.5-11.439-25.5-25.5-25.5z' fill='#212a41'/></g><g><circle cx='34.167' cy='32' fill='#e0e0e0' r='22'/><path d='m34.167 54.5c-12.407 0-22.5-10.093-22.5-22.5s10.093-22.5 22.5-22.5c12.406 0 22.5 10.093 22.5 22.5s-10.094 22.5-22.5 22.5zm0-44c-11.855 0-21.5 9.645-21.5 21.5s9.645 21.5 21.5 21.5 21.5-9.645 21.5-21.5-9.645-21.5-21.5-21.5z' fill='#212a41'/></g><g><path d='m34.167 52.5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5c10.752 0 19.5-8.748 19.5-19.5 0-.276.224-.5.5-.5s.5.224.5.5c0 11.304-9.196 20.5-20.5 20.5z' fill='#c2c2c2'/></g><g><path d='m14.167 32.5c-.276 0-.5-.224-.5-.5 0-11.304 9.196-20.5 20.5-20.5.276 0 .5.224.5.5s-.224.5-.5.5c-10.752 0-19.5 8.748-19.5 19.5 0 .276-.224.5-.5.5z' fill='#fefefe'/></g><g><path d='m42.167 45h-20v-10c0-3.314 2.686-6 6-6h8c3.314 0 6 2.686 6 6z' fill='#4e4b51'/><path d='m42.167 45.5h-20c-.276 0-.5-.224-.5-.5v-10c0-3.584 2.916-6.5 6.5-6.5h8c3.584 0 6.5 2.916 6.5 6.5v10c0 .276-.224.5-.5.5zm-19.5-1h19v-9.5c0-3.033-2.468-5.5-5.5-5.5h-8c-3.033 0-5.5 2.467-5.5 5.5z' fill='#212a41'/></g><g><path d='m40.167 29h-9c-3.314 0-6 2.686-6 6v10h21v-10c0-3.314-2.687-6-6-6z' fill='#6c696f'/><path d='m46.167 45.5h-21c-.276 0-.5-.224-.5-.5v-10c0-3.584 2.916-6.5 6.5-6.5h9c3.584 0 6.5 2.916 6.5 6.5v10c0 .276-.224.5-.5.5zm-20.5-1h20v-9.5c0-3.033-2.468-5.5-5.5-5.5h-9c-3.033 0-5.5 2.467-5.5 5.5z' fill='#212a41'/></g><g><path d='m27.157 43.5c-.276 0-.5-.224-.5-.5v-8c0-1.852 1.113-3.493 2.834-4.181.257-.104.547.023.65.279s-.022.547-.279.65c-1.34.535-2.206 1.812-2.206 3.252v8c.001.276-.223.5-.499.5z' fill='#8a878d'/></g><g><path d='m44.167 43.5c-.276 0-.5-.224-.5-.5v-8c0-1.44-.866-2.717-2.206-3.252-.257-.103-.381-.394-.278-.65s.394-.382.649-.279c1.722.688 2.835 2.329 2.835 4.181v8c0 .276-.224.5-.5.5z' fill='#4e4b51'/></g><g><path d='m32.194 29.922c1.536 2.687 5.41 2.687 6.946 0l.513-.898c-.161-.012-.322-.024-.486-.024h-7c-.164 0-.325.012-.486.025z' fill='#e0c8a4'/><path d='m35.667 32.438c-1.635 0-3.096-.847-3.907-2.267l-.513-.898c-.085-.148-.088-.331-.008-.482s.232-.251.402-.265c.174-.014.348-.026.525-.026h7c.178 0 .352.012.524.026.171.014.323.113.403.265s.077.333-.008.482l-.513.898c-.809 1.419-2.269 2.267-3.905 2.267zm-3.039-2.764c.631 1.104 1.768 1.763 3.039 1.763s2.408-.659 3.038-1.763l.1-.174h-6.276z' fill='#212a41'/></g><g><circle cx='33.167' cy='23' fill='#c2aa86' r='6'/><path d='m33.167 29.5c-3.584 0-6.5-2.916-6.5-6.5s2.916-6.5 6.5-6.5 6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5zm0-12c-3.033 0-5.5 2.467-5.5 5.5s2.467 5.5 5.5 5.5c3.032 0 5.5-2.467 5.5-5.5s-2.468-5.5-5.5-5.5z' fill='#212a41'/></g><g><circle cx='36.167' cy='23' fill='#e0c8a4' r='6'/><path d='m36.167 29.5c-3.584 0-6.5-2.916-6.5-6.5s2.916-6.5 6.5-6.5 6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5zm0-12c-3.033 0-5.5 2.467-5.5 5.5s2.467 5.5 5.5 5.5c3.032 0 5.5-2.467 5.5-5.5s-2.468-5.5-5.5-5.5z' fill='#212a41'/></g></g></svg>
            </a>
        
            
    <span class='ball'>
      
<svg style='margin-left: 3.5px;' width='22' height='22' id='Capa_1' enable-background='new 0 0 512 512' viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'><g><path d='m330.323 445.935h-256c-4.561 0-8.258-3.697-8.258-8.258v-24.774c0-4.561 3.697-8.258 8.258-8.258h256c4.561 0 8.258 3.697 8.258 8.258v24.774c0 4.561-3.698 8.258-8.258 8.258z' fill='#eceaec' style='fill: rgb(252, 175, 81);'></path><path d='m90.839 437.677c-9.122 0-16.516-7.395-16.516-16.516v-16.516h-41.29c-4.561 0-8.258 3.697-8.258 8.258v33.032c0 4.561 3.697 8.258 8.258 8.258h297.29c4.561 0 8.258-3.697 8.258-8.258v-8.258z' fill='#dad8db' style='fill: rgb(240, 172, 89);'></path><path d='m305.548 396.387h-256c-4.561 0-8.258-3.697-8.258-8.258v-24.774c0-4.561 3.697-8.258 8.258-8.258h256c4.561 0 8.258 3.697 8.258 8.258v24.774c0 4.561-3.697 8.258-8.258 8.258z' fill='#ffe07d'></path><path d='m66.065 388.129c-9.122 0-16.516-7.395-16.516-16.516v-16.516h-41.291c-4.561 0-8.258 3.697-8.258 8.258v33.032c0 4.561 3.697 8.258 8.258 8.258h297.29c4.561 0 8.258-3.697 8.258-8.258v-8.258z' fill='#ffd064'></path><path d='m330.323 346.839h-256c-4.561 0-8.258-3.697-8.258-8.258v-24.774c0-4.561 3.697-8.258 8.258-8.258h256c4.561 0 8.258 3.697 8.258 8.258v24.774c0 4.56-3.698 8.258-8.258 8.258z' fill='#ecbd83'></path><path d='m90.839 338.581c-9.122 0-16.516-7.395-16.516-16.516v-16.516h-41.29c-4.561 0-8.258 3.697-8.258 8.258v33.032c0 4.561 3.697 8.258 8.258 8.258h297.29c4.561 0 8.258-3.697 8.258-8.258v-8.258z' fill='#e2a975'></path><path d='m305.548 297.29h-256c-4.561 0-8.258-3.697-8.258-8.258v-24.774c0-4.561 3.697-8.258 8.258-8.258h256c4.561 0 8.258 3.697 8.258 8.258v24.774c0 4.561-3.697 8.258-8.258 8.258z' fill='#ffe07d'></path><path d='m66.065 289.032c-9.122 0-16.516-7.395-16.516-16.516v-16.516h-41.291c-4.561 0-8.258 3.697-8.258 8.258v33.032c0 4.561 3.697 8.258 8.258 8.258h297.29c4.561 0 8.258-3.697 8.258-8.258v-8.258z' fill='#ffd064'></path><path d='m330.323 247.742h-256c-4.561 0-8.258-3.697-8.258-8.258v-24.774c0-4.561 3.697-8.258 8.258-8.258h256c4.561 0 8.258 3.697 8.258 8.258v24.774c0 4.561-3.698 8.258-8.258 8.258z' fill='#eceaec' style='fill: rgb(252, 175, 81);'></path><path d='m90.839 239.484c-9.122 0-16.516-7.395-16.516-16.516v-16.516h-41.29c-4.561 0-8.258 3.697-8.258 8.258v33.032c0 4.561 3.697 8.258 8.258 8.258h297.29c4.561 0 8.258-3.697 8.258-8.258v-8.258z' fill='#dad8db' style='fill: rgb(240, 172, 89);'></path><path d='m305.548 199.258h-256c-4.561 0-8.258-3.697-8.258-8.258v-25.839c0-4.561 3.697-8.258 8.258-8.258h256c4.561 0 8.258 3.697 8.258 8.258v25.839c0 4.561-3.697 8.258-8.258 8.258z' fill='#ecbd83'></path><path d='m66.065 189.935c-9.122 0-16.516-7.395-16.516-16.516v-16.516h-41.291c-4.561 0-8.258 3.697-8.258 8.258v33.032c0 4.561 3.697 8.258 8.258 8.258h297.29c4.561 0 8.258-3.697 8.258-8.258v-8.258z' fill='#e2a975'></path><path d='m330.323 148.645h-256c-4.561 0-8.258-3.697-8.258-8.258v-24.774c0-4.561 3.697-8.258 8.258-8.258h256c4.561 0 8.258 3.697 8.258 8.258v24.774c0 4.561-3.698 8.258-8.258 8.258z' fill='#ffe07d'></path><path d='m90.839 140.387c-9.122 0-16.516-7.395-16.516-16.516v-16.516h-41.29c-4.561 0-8.258 3.697-8.258 8.258v33.032c0 4.561 3.697 8.258 8.258 8.258h297.29c4.561 0 8.258-3.697 8.258-8.258v-8.258z' fill='#ffd064'></path><path d='m512 297.29c0 43.985-18.099 83.742-47.255 112.231-28.285 27.638-66.978 42.228-109.648 42.228-86.655 0-152.43-67.804-152.43-154.46 0-49.875 18.798-94.316 55.075-123.055 26.752-21.193 60.576-33.848 97.355-33.848 86.655.001 156.903 70.249 156.903 156.904z' fill='#ffd064'></path><circle cx='355.097' cy='297.29' fill='#ffe07d' r='123.871'></circle><path d='m456.667 297.29c0 32.785-8.911 62.137-32.075 81.829-18.727 15.92-42.989 25.526-69.495 25.526-59.29 0-107.355-48.064-107.355-107.355 0-26.513 9.611-50.78 25.539-69.51 19.692-23.155 49.038-32.447 81.816-32.447 59.29 0 101.57 42.667 101.57 101.957z' fill='#ffd064'></path><g fill='#fff'><path d='m330.056 365.879c-1.073 0-2.153-.21-3.194-.649-4.21-1.762-6.185-6.605-4.419-10.81l51.75-123.298c1.766-4.214 6.629-6.181 10.806-4.415 4.21 1.762 6.185 6.605 4.419 10.81l-51.75 123.298c-1.321 3.161-4.386 5.064-7.612 5.064z' fill='#fff' style='fill: rgb(222, 165, 73);'></path><path d='m320.153 289.968c-17.161 0-31.121-15.625-31.121-34.827s13.96-34.827 31.121-34.827 31.121 15.625 31.121 34.827-13.959 34.827-31.121 34.827zm0-53.137c-8.056 0-14.605 8.214-14.605 18.31 0 10.097 6.548 18.31 14.605 18.31s14.605-8.214 14.605-18.31c0-10.097-6.548-18.31-14.605-18.31z' fill='#fff' style='fill: rgb(222, 165, 73);'></path><path d='m390.04 374.266c-17.161 0-31.121-15.625-31.121-34.827s13.96-34.827 31.121-34.827 31.121 15.625 31.121 34.827-13.959 34.827-31.121 34.827zm0-53.137c-8.056 0-14.605 8.214-14.605 18.31s6.548 18.31 14.605 18.31 14.605-8.214 14.605-18.31-6.548-18.31-14.605-18.31z' fill='#fff' style='fill: rgb(222, 165, 73);'></path></g><path d='m367.484 443.355c-86.655 0-156.903-70.248-156.903-156.903 0-43.988 18.043-83.77 47.204-112.259-36.322 28.737-59.591 73.187-59.591 123.098 0 86.655 70.248 156.903 156.903 156.903 42.667 0 81.364-17.038 109.648-44.672-26.739 21.155-60.517 33.833-97.261 33.833z' fill='#ffc250'></path><path d='m355.097 189.935c-32.799 0-62.123 14.664-81.816 37.846 18.723-15.904 42.938-25.459 69.428-25.459 59.29 0 107.355 48.065 107.355 107.355 0 26.491-9.569 50.719-25.473 69.442 23.182-19.692 37.86-49.03 37.86-81.829.001-59.29-48.064-107.355-107.354-107.355z' fill='#ffc250'></path><path d='m305.548 99.097h-256c-4.561 0-8.258-3.697-8.258-8.258v-24.774c0-4.561 3.697-8.258 8.258-8.258h256c4.561 0 8.258 3.697 8.258 8.258v24.774c0 4.561-3.697 8.258-8.258 8.258z' fill='#eceaec' style='fill: rgb(252, 175, 81);'></path><path d='m66.065 90.839c-9.122 0-16.516-7.395-16.516-16.516v-16.517h-41.291c-4.561 0-8.258 3.698-8.258 8.259v33.032c0 4.561 3.697 8.258 8.258 8.258h297.29c4.561 0 8.258-3.697 8.258-8.258v-8.258z' fill='#dad8db' style='fill: rgb(240, 172, 89);'></path></g></svg>

<span class='point_count'><?php
    if(empty($user['points'])){
        echo "0 баллов";
    } else {
        echo $user["points"]."&nbsp;баллов";
    }?>
    </span>

    </span>
    
        </div>

                    <p class="d-flex d-lg-block d-md-block d-none me-4 mb-0">
                        <i style="transform: translateY(0.4em)" class="bi-clock-fill me-2"></i>
                        <strong class="me-2">Понедельник - Суббота</strong> 8:00 - 21:00
                    </p>

                    <p class="site-header-icon-wrap text-white d-flex mb-0 ms-auto">
                        <i style="transform: translateY(0.2em)" class="site-header-icon bi-whatsapp me-2"></i>

                        <a href="tel: +7 916 182-92-72" class="text-white">
                            +7 916 182-92-72
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </header>
<p id="list">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo/logo.jpg" class="logo img-fluid" alt="">

                <span style="font-family: serif" class="ms-2">MandoMemori</span>                <span style="font-family: American Vendarna; color: #755c48; position: absolute; font-size: 12.95px; transform: translateX(-13em) translateY(3.9em); text-decoration: overline; letter-spacing: .15em;" class="ms-2;">новая химчистка обуви</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <p class="nav-link active">ГЛАВНОЕ МЕНЮ</p>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nersisyan_srech" href="#partners-section">Политика компании</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nersisyan_srech nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Дополнительное</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><p class="nersisyan_srech nav-link active">КОНТАКТЫ</p>

                            <li><a class="nersisyan_srech dropdown-item" href="coming-soon.html">Мы WhatsApp</a></li>

                            <li><a class="nersisyan_srech dropdown-item" href="page-404.html">Мы Telegram</a></li>
                        </ul>
                    </li>
        <div style="border-top: 1px solid #000; position: relative; z-index: 2; margin-top: 15px; padding-top: 15px;"></div>
                    <li class="nav-item">
<label class="search" style="transform: translateX(3.65em);">

  <div class="one">
    <div class="two">
      <div class="three">
        <input type="search" id="searchbar" onkeyup="search_animal()" type="text"
        name="search" class="four" placeholder="Поиск" />
      </div>
      <div class="stick"></div>
    </div>
  </div>

</label>
<!-- partial -->
  <script  src="js/script.js"></script>
    <script>
// JavaScript code
function search_animal() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('nersisyan_srech');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="block";
        } 
    }
}
    </script>
                    </li>
                            <div style="border-top: 1px solid #000; position: relative; z-index: 2; margin-top: 8px; padding-top: 15px;"></div>
                    <li class="nav-item">
                        <body id="main">
                          <a id="select" onclick="darkLight()" style="cursor: help;" class="nersisyan_srech nav-link">Включить тёмную тему</a>
                          <script>
                          
// на старте тёмная тема не установлена
var dark = false;
// получаем доступ ко всей странице и к абзацу с переключателем
var a = document.body;
var p = document.getElementById("select")

// эта функция будет срабатывать при нажатии на переключатель
function darkLight() {
	// если тёмная тема не активна
	if (!dark) {
		// добавляем класс с тёмной темой ко всей странице
		a.className = "theme-dark";
		// меняем надпись на переключателе
		p.innerHTML = "Включить светлую тему";
	// а если активна — 
	} else {
		// добавляем класс со светлой темой ко всей странице
		a.className = "theme-light";
		// меняем надпись на переключателе
		p.innerHTML = "Включить тёмную тему";
	}

	// меняем значение темы на противоположное
	dark = !dark;
	
}
                          </script>
                        </body>
                    </li>
                    <li class="nav-item ms-3">
                        <a style="transform: translateX(-0.3em)" class="nersisyan_srech nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="#services-section">Оформить заказ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <main>

            <section class="banner-section d-flex justify-content-center align-items-end">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <h1 class="text-white mb-lg-0">ОШИБКА 404</h1>
                        </div>

                        <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a style="color: white; font-size: 16px;text-decoration: overline" href="index.html">Вернуться на главную</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">ошибка 404</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>
         

            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="page-404-title">404</h2>

                            <h3>Странрца не найдена</h3>

                            <p>Даннсая страница не найдена, пожалуйста вернитесь на глааную страницу нажав на кнопку [ВЕРНУТЬСЯ]</p>

                            <a style="position: relative;transform: translateX(0.5em)" class="custom-btn btn button button--atlas mt-4" href="index.html">
                                <span>Вернуться</span>

                                <div class="marquee" aria-hidden="true">
                                    <div class="marquee__inner">
                                        <span>Главная</span>
                                        <span>Главная</span>
                                        <span>Главная</span>
                                        <span>Главная</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </section>
        </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 d-flex align-items-center mb-4 pb-2">
                    <div>
                        <img src="images/logo/white.jpg" style="width: 200px; height: 100px;" class="img-fluid" alt="">
                    </div>

                    <ul class="footer-menu d-flex flex-wrap ms-5">
                        <li class="nersisyan_srech footer-menu-item"><a href="https://wa.me/+7 916 182-92-72" class="footer-menu-link">Связаться</a></li>

                        <li id="select" onclick="darkLight()" class="nersisyan_srech footer-menu-item"><a class="footer-menu-link">Ночная тема</a></li>

                        <li class="nersisyan_srech footer-menu-item"><a href="#services-section" class="footer-menu-link">Услуги</a></li>

                        <li class="nersisyan_srech footer-menu-item"><a href="#" class="footer-menu-link">Отзывы</a></li>
                        <li class="nersisyan_srech footer-menu-item"><a href="#intro-section" class="footer-menu-link">Примеры</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="nersisyan_srech site-footer-title mb-3">Наш офис</h5>

                    <p class="text-white d-flex mb-2">
                        <i style="transform: translateY(0.15em)" class="bi-telephone-fill me-2"></i>

                        <a style="font-size: 16px;" href="tel: +7 916 182-92-72" class="nersisyan_srech site-footer-link">
                            +7 916 182-92-72
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i style="transform: translateY(0.3em)" class="bi-envelope-fill me-2"></i>

                        <a style="font-size: 16px;" href="mailto:mandomemori@list.ru" class="nersisyan_srech site-footer-link">
                           mandomemori@list.ru
                        </a>
                    </p>

                <div class="col-lg-3 col-md-6 col-6 mt-3 mt-lg-0 mt-md-0">
                    <div class="featured-block">
                        <h5 style="width: 200px" class="nersisyan_srech text-white mb-3">График работы</h5>

                        <strong class="nersisyan_srech d-block text-white mb-1" style="width: 200px">Понедельник - Суббота</strong>

                        <p class="nersisyan_srech text-white mb-3">
                            С 8:00 - 20:00
                        </p>

                        <strong class="nersisyan_srech d-block text-white mb-1">Воскресенье</strong>

                        <p class="nersisyan_srech text-white mb-0">
                            С 10:00 - 19:00
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <p style="color: white" class="nersisyan_srech copyright-text mb-0">
                         MandoMemori © 2023 shoe cleaning office.
                        </p>
                    </div>

                    <div class="col-lg-6 col-12 text-end">
                        <p style="color: white; transform: translateX(2em)" class="nersisyan_srech copyright-text mb-0">
                            new office vk <a href="404.html" target="_parent"><font style="font-family: American bold" size="5px">MandoMemori</a>
                        </p></p>
                    </div>
                  </div>
                </div>
            
        </div>
    </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/init.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
