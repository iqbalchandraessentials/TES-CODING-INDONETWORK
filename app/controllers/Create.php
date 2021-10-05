<?php

class Create extends Controller
{
    public function index()
    {

        // curl
        // $curl = curl_init();
        // curl_setopt_array($curl, [
        //     CURLOPT_URL => 'http://52.231.204.198:3010/api/transaction/product/item/list',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_POSTFIELDS => 'channel_code=LINE&category_id=37406418-32d9-461c-ba7c-17328036d95d',
        //     CURLOPT_HTTPHEADER => array(
        //         'Content-Type: application/x-www-form-urlencoded'
        //     ),
        // ]);

        // $response = curl_exec($curl);

        // curl_close($curl);
        // $data = utf8_decode($response);
        // $cod = json_decode($data, true);
        // // var_dump($cod);


        // foreach ($cod['data'] as $data) {
        //     echo $data['price'] . '\n';
        // }

        // bwa - api 

        // init
        // $curl = curl_init();
        // curl_setopt_array($curl, [
        //     CURLOPT_URL => 'https://shamo-backend.buildwithangga.id/api/products',
        //     CURLOPT_HTTPHEADER => array(
        //         'Content-Type: application/json'
        //     ),
        //     CURLOPT_POST => false,
        //     CURLOPT_RETURNTRANSFER => true,
        //     // CURLOPT_POSTFIELDS => '',
        // ]);

        // $response = curl_exec($curl);

        // curl_close($curl);
        // $data = utf8_decode($response);
        // $cod = json_decode($data, true);
        // $product = $cod['data']['data'];

        // foreach ($product as $data) {
        //     echo $data['name'] . "\t";
        // }

        $location = $_POST['nama'];
        // var_dump($location);
        // weather
        $curl = curl_init();
        curl_setopt_array($curl, [
            // CURLOPT_URL => 'http://api.weatherstack.com/current?access_key=aa8322137afd2ba9d96a85501940c387&query=' . $location,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            // CURLOPT_HEADER => [
            //     'access_key' => "aa8322137afd2ba9d96a85501940c387",
            //     'query' => "jakarta",
            // ],
            // CURLOPT_POSTFIELDS =>
            // "access_key=aa8322137afd2ba9d96a85501940c387&query=jakarta"
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        $data = utf8_decode($response);
        $data = json_decode($data, true);
        // var_dump($data['location']);
        return $this->view("create.php", $data);





        // captha google

        // curl
        // $curl = curl_init();
        // curl_setopt_array($curl, [
        //     CURLOPT_RETURNTRANSFER => 1,
        //     CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        //     CURLOPT_POST => 1,
        //     CURLOPT_POSTFIELDS => [
        //         'secret' => '6LdVo6kcAAAAAJsmGX8woySvCWIdk0yUCQdZUcU0',
        //         'response' => $_POST['g-recaptcha-response'],
        //     ]
        // ]);


        // var_dump(curl_exec($curl));
    }
}
