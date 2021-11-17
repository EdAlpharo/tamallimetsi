<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }

    public function sendMessage()
    {
        $activity = Telegram::getUpdates();
        return view('message');
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'verdes' => 'required',
            'rojos' => 'required',
            'paquetes' => 'required',
        ]);

        $text = "Tienes un nuevo pedido...\n"
            . "Estos son los datos del cliente\n"
            . "<b>nombre: </b>"
            . "$request->nombre\n"
            . "<b>Telefono: </b>"
            . "$request->telefono\n"
            . "<b>Direccion: </b>"
            . "$request->direccion\n"
            . "<b>Correo electronico: </b>"
            . "$request->email\n"
            . "<b>Cantidad de tamales verdes: </b>"
            . "$request->verdes\n"
            . "<b>Cantidad de tamales rojos: </b>"
            . "$request->rojos\n"
            . "<b>Cantidad de paquetes al vacio: </b>"
            . "$request->paquetes\n";

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '-561064647'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        return redirect()->back();
    }
}
