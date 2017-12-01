<?php
    $user=$_GET['urse'];
    $pass=$_GET['pass'];

    if ($user=='Mercer'){
        if ($pass=='123123'){
            echo '登陆成功 <a href="ok.html">wakwakwak</a>';
        }else{
            echo '密码错误 <a href="logn.html">hahahahaha</a>';
        }
    }else{
        echo '账户不存在 <a href="logn.html">lolololol</a>';

    }
