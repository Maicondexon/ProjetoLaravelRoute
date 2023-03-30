<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');


});
*/

/*
Route::get('/', function () {
    return view('rotas');


});
*/
Route::get('/hello/{nome}', function (String $nome) {
    if(strlen($nome) < 3) {
        echo ('Este nome é inválido... Tente novamente! <br> Obs:. (Em um nome é esperado 3 ou mais letras!)');
    } else {
        echo 'Olá '. $nome . '! Bem-vindo ao meu site.';
    };


    Route::get('/conta/{x}/{y}/{operacao?}', function (int $x , int $y, String $operacao = null){
        switch($operacao){
            case null:
        
                $adicao = $x + $y;
                
                $subtracao = $x - $y;
                
                $divisao = $x / $y;
                
                $multiplicacao = $x * $y;
                
                echo "Adição :" . $adicao.'<br>'
                
                . "Subtração :" . $subtracao.'<br>'
                
                . "Divisão :"  . $divisao.'<br>'
                
                . "Multiplicação :" . $multiplicacao.'<br>';
                
                break;
        
            case 'adicao';
        
                $resultado = $x + $y;
                
                echo $resultado;
        
            case 'subtração';
            
                $resultado = $x - $y;
                
                echo $resultado;
                
                break;
                
                case 'divisao';
                
                $resultado = $x / $y;
                
                echo $resultado;
                
                break;
            
            case 'multiplicacao';
            
                $resultado = $x * $y;
                
                echo $resultado;
                
                break;
                
                default;
                
                echo 'operação invalida';
                
        };
        
    })->where ('x', '[0-9]+' ) ->where('y', '[0-9]+');
});


Route::get('/idade/{ano}/{mes?}/{dia?}', function (int $ano, int $mes = null, int $dia = null) {
    if($mes = null && $dia = null){
        if(count_chars($ano) < 4){
            echo 'Ano incorreto! (Obs:. Espera-se um ano completo - 4 [quatro] digitos!)';
            
        } else {
            echo 'Sua idade é ' . 2023 - $ano . ' de acordo com o ano de seu nascimento!';
            
        }
    } 
    else if($dia = null){
        if(count_chars($ano) < 4 && count_chars($mes) < 1){
            echo 'Ano e mês incorretos! (Obs:. Espera-se um ano completo - 4 [quatro] digitos e um mês completo - 1 ou 2 dígitos!)';
            
        } else {
            echo 'Sua idade é ' . (2023 - $ano)  . ' de acordo com o ano de seu nascimento!';
            
        }
    } else {
        if(count_chars($ano) < 4 || count_chars($mes) < 1 || count_chars($dia) < 1 ){
            echo 'Ano, mês ou dia incorretos! (Obs:. Espera-se um ano completo - 4 [quatro] digitos e um mês e dia completos - 1 ou 2 dígitos!)';
            
        } else {
            echo 'Sua idade é ' . 2023 - $ano . ' de acordo com o ano de seu nascimento!';
            
        }
    };
});

