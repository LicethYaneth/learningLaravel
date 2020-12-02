<?php

Route::get('/', function(){
    echo "<a href='" .route('Contactanos')."'> Comunicarme</a><br>";
    return "MindGround";
});

Route::get('contactanos',function(){
    return "<a href='https://api.whatsapp.com/send/?phone=573017105792&text&app_absent=0'>Whatsapp</a>";
})->name('Contactanos');