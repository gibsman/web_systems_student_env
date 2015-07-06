<?php

Router::get('^\/user(\/?)$', 'user');
Router::get('^\/login(\/?)$', 'login');
Router::get('^\/user\/(\w+)(\/?)', 'tr');
Router::get('^\/home$', 'home');
Router::get('^\/$', 'home');
Router::get('^\/logout(\/?)$', 'logout');
Router::post('^\/user\/(\w+)(\/?)', 'reg');
Router::post('^\/login\/(\w+)(\/?)', 'loglogin');

function user(){
    $Fenom = get_fenom();
    $content = $Fenom->fetch('/fenom/sandbox/templates/pract/registration.tpl', array('content' => $content));
    $error = "";
    if($_SESSION['enter']=='yes')
        $links = $Fenom->fetch('/fenom/sandbox/templates/pract/logout.tpl', array('links' => $links));
    else
        $links = $Fenom->fetch('/fenom/sandbox/templates/pract/loginbutton.tpl', array('links' => $links));
    return array('content' => $content, 'error' => $error, 'links' => $links);
}

function login(){
    $Fenom = get_fenom();
    $content = $Fenom->fetch('/fenom/sandbox/templates/pract/login.tpl', array('content' => $content));
    $error = "";
    if($_SESSION['enter']=='yes')
        $links = $Fenom->fetch('/fenom/sandbox/templates/pract/logout.tpl', array('links' => $links));
    else
        $links = $Fenom->fetch('/fenom/sandbox/templates/pract/loginbutton.tpl', array('links' => $links));
    return array('content' => $content, 'error' => $error, 'links' => $links);
}

function loglogin()
{
    $str=file_get_contents('users/'.$_POST['nick'].'.txt');
    $str1=unserialize($str);
    if($_POST['password']==$str1['password'])
    {
        header('Location: /home');
        $_SESSION['enter']='yes';
        $_SESSION['user']=$_POST['nick'];
    }
    else
    {
        $Fenom = get_fenom();
        $error = $Fenom->fetch('/fenom/sandbox/templates/pract/error.tpl', array('error' => $error));
        $content = $Fenom->fetch('/fenom/sandbox/templates/pract/login.tpl', array('content' => $content, 'error'=>$error));
        if($_SESSION['enter']=='yes')
            $links = $Fenom->fetch('/fenom/sandbox/templates/pract/logout.tpl', array('links' => $links));
        else
            $links = $Fenom->fetch('/fenom/sandbox/templates/pract/loginbutton.tpl', array('links' => $links));
        return array('content' => $content, 'error' => $error, 'links' => $links);
    }
}


function tr($id){
    return "Страница пользователя $id";
}

function logout()
{
    session_destroy();
    header('Location: /home');
}

function reg(){
    if($_POST['password']==$_POST['password1'])
    {
        $str = serialize($_POST);
        file_put_contents('users/'.$_POST['nick'].'.txt', $str);
        header('Location: /home');
        $_SESSION['enter']='yes';
        $_SESSION['user']=$_POST['nick'];
    }
    else
    {
        $Fenom = get_fenom();
        $error = $Fenom->fetch('/fenom/sandbox/templates/pract/error.tpl', array('error' => $error));
        $content = $Fenom->fetch('/fenom/sandbox/templates/pract/registration.tpl', array('content' => $content, 'error'=>$error));
        if($_SESSION['enter']=='yes')
            $links = $Fenom->fetch('/fenom/sandbox/templates/pract/logout.tpl', array('links' => $links));
        else
            $links = $Fenom->fetch('/fenom/sandbox/templates/pract/loginbutton.tpl', array('links' => $links));
        return array('content' => $content, 'error' => $error, 'links' => $links);
    }

}

function HOME(){
    if ($_SESSION['enter']=='yes')
        echo 'Welcome, '.$_SESSION['user'];
    $Fenom = get_fenom();
    $content = $Fenom->fetch('/fenom/sandbox/templates/pract/home.tpl', array('content' => $content));
    $error = "";
    if($_SESSION['enter']=='yes')
        $links = $Fenom->fetch('/fenom/sandbox/templates/pract/logout.tpl', array('links' => $links));
    else
        $links = $Fenom->fetch('/fenom/sandbox/templates/pract/loginbutton.tpl', array('links' => $links));
    return array('content' => $content, 'error' => $error, 'links' => $links);
}

?>
