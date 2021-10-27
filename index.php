<?php

require_once __DIR__ . '/Classes/Product/Product.php';
require_once __DIR__ . '/Classes/Product/Categories/Keyboard.php';
require_once __DIR__ . '/Classes/User/User.php';
require_once __DIR__ . '/Classes/User/CreditCard/CreditCard.php';

$user = new User('Manuel', 'Infante', true);

try{
    $c = new CreditCard('1234567890123456', '123', '20/10/2022');
    $user->insertCreditCard($c);
} catch(Exception $e){
    echo "Errore: {$e->getMessage()}";
}

$keychron_k7 = new Keyboard('Keychron K7' , 84, 'mechanical', 'optical blue');

?>