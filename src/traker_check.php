<?php 
if(!isset($user["id"])){
    echo "";
}
elseif($user["firstname"] == "Артём" and $user["lastname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["firstname"] == "Максим" and $user["lastname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2" or $user["lastname"] == "Артём" and $user["firstname"] == "Нерсисян" and $user["email"] == "artemnersisyan777@gmail.com" and $user["id"] == "1" or $user["lastname"] == "Максим" and $user["firstname"] == "Бирюков" and $user["email"] == "biryukov.maksim2006@mail.ru" and $user["id"] == "2"){ //admin

        echo '<li class="nav-item">
          <a class="nav-link " href="/main-panel.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Панель управления</span>
          </a>
        </li>';

} else { echo ""; }
?>