<?php

if(isset($_COOKIE['my_cookie'])) {
        setcookie("my_cookie", "", time() - 3600);
}

if(isset($_COOKIE['yearly_cookie'])) {
    setcookie("yearly_cookie", "", time() - 3600);
}

