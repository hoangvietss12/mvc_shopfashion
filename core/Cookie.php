<?php 
class Cookie{
    public function setCookie($name, $value, $path = '/') {
      setcookie($name, $value, time() + (7 * 24 * 60 * 60), $path);
    }

    public function getCookie($name, $default = null) {
      return isset($_COOKIE[$name]) ? $_COOKIE[$name] : $default;
    }

    public function deleteCookie($name, $path = '/') {
      setcookie($name, '', time() - 3600, $path);
      unset($_COOKIE[$name]);
    }
} 