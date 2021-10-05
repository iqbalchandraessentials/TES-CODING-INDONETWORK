<?php


// untuk membuat configurasi routing url / membuat prety url 
class App
{
    // method default
    // url slash / pertama adalah untuk controller dan default nya adalah controller HOME
    protected $controller = 'Home';
    // url slash / kedua adalah untuk Method dan default nya adalah method index
    protected $method = 'index';
    // url slash / ketiga adalah untuk Parameter dan default nya adalah kosong
    protected $params = [];



    // yang pertma dijalankan adalah __construct
    public function __construct()
    {


        // jalankan method parseURL()
        $url = $this->parseUrl();



        // contrller
        // controller - jika url index ke [0] controller nya ada didalam folder Controller maka jalankan
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            // lalu kita timpa nilai default Home menjadi sesuai dengan url index [0]
            $hasil =  $this->controller = $url[0];
            // lalu di hilangkan url index ke [0]
            unset($url[0]);
        }
        // lalu kita panggil controller nya melalui require_once
        require_once '../app/controllers/' . $this->controller . '.php';
        // lalu di instansiasi agar kita bisa panggil controller nya
        $this->controller = new $this->controller;




        // method url index [1]
        if (isset($url[1])) {
            // lakukan pengecekan apakah didalam CLASS/contrller ada METHOD nya maka jalankan 
            if (method_exists($this->controller, $url[1])) {
                // kita timpa method default nya yang index itu menjadi sesuai dengan url index ke [1]
                $this->method = $url[1];
                // lalu kita hilangkan
                unset($url[1]);
            }
        }


        // untuk parameter
        // jika parameter nya ada maka
        if (!empty($url)) {
            // lalu masukan paramter dari url nya ke dalam variable params
            $this->params = array_values($url);
        }


        // lalu untuk menjalankan controller , method dan parameter jika ada menggunakan function call_user_func_array 
        call_user_func_array(
            [$this->controller, $this->method],
            $this->params
        );
    }

    // tangkap url nya
    public function parseUrl()
    {
        // jika url nya ada maka
        if (isset($_GET['url'])) {
            // hapus tanda slash nya /
            $url = rtrim($_GET['url'], '/');
            // bersihkan url nya dari karakter-karakter aneh
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // pecah url nya menjadi array dipisahkan oleh tanda / slash 
            $url = explode('/', $url);
            return $url;
        }
    }

    // lalu melalui file .htaccess kita block 
    // malalui method Option -Indexes yang artinya "jika user ingin membuka file selain file Indexes maka 'BLOCK' jangan di tampilkan



    // untuk menghindari ambigu atau kelahan saat memanggil file
    // Options -Multiviews

    // Yang penting adalah Method Rewrite

    // RewriteEngine On

    // jika url merupakan folder makan ABAIKAN
    // RewriteCond %{REQUEST_FILENAME} !-d

    // jika url merupakan FIle makan ABAIKAN
    // RewriteCond %{REQUEST_FILENAME} !-f

    // terakhir ambil semua url yang diketik maka masukan ke $1
    // RewriteRule ^(.*)$ index.php?url=$1 [L]
};
