<?php

require_once 'assets/php/functions.php';


if (isset($_GET['signup'])) {
    showPage('header', ['page_title' => 'Reeller - Criar conta']);
    showPage('signup', []);

} 
elseif(isset($_GET['login'])) {
    showPage('header', ['page_title' => 'Reeller - Login']);
    showPage('login', []);
}

showPage('footer');

unset($_SESSION['error']);
unset($_SESSION['userdata']);