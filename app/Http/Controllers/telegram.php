<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class telegram extends Controller
{
     public function enviarTelegram(){

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        date_default_timezone_set('America/Guatemala');

        $token = "AAEBEEWXxqdURrPJhYNmO0yKxmc1wYF4wa0";

        $datos = [
            'chat_id' => '-561064647',
            #'chat_id' => '@el_canal si va dirigido a un canal',
            'text' => 'El mensaje con *formato* que el bot va a enviar, los puntos van escapados con barra invertida\. Un enlace a un [sitio](https://www.sitio.com/)\.',
            'parse_mode' => 'MarkdownV2' #formato del mensaje
        ];


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $token . "/sendMessage");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);



        $r_array = json_decode(curl_exec($ch), true);

        curl_close($ch);
        if ($r_array['ok'] == 1) {
            echo "Mensaje enviado.";
        } else {
            echo "Mensaje no enviado.";
            print_r($r_array);
        }

            }
}
