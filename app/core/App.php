<?php
class App {
    public function __construct(){
        $url = $this->parseURL();
        var_dump(($url));
    }

    //mengambil url dan memecah
    public function parseURL(){
        if(isset($_GET['url'])){
            //menghapus / di depan
            $url = rtrim($_GET['url'],'/');
            //filter karakter aneh di url
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //memecah url berdasarkan /
            $url = explode('/',$url);
            return $url;
        }
    }
}
?>