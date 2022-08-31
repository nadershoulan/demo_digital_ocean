<?php

// require 'vendor/autoload.php';
// require 'vendor/aws-autoloader.php';
use Illuminate\Support\Facades\Route;
use Aws\Laravel\AwsServiceProvider;
use Aws\Credentials\CredentialProvider;

use Aws\Sns\SnsClient;
use Aws\Exception\AwsException;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {

//     return view('welcome');

// });


Route::get('/', function () {


// $SnSclient = new SnsClient([
//     // 'profile' => 'default',
//     'region' => 'me-south-1',
//     'version' => 'latest',
//     // 'credentials' => CredentialProvider::defaultProvider(),
//         'credentials' => [
//             'key'    => env('AWS_ACCESS_KEY_ID', 'AKIASYGZUJCSXIEBEMCE'),
//             'secret' => env('AWS_SECRET_ACCESS_KEY', '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'),
//         ],
//         'scheme' =>'http',
//         // 'options' => [
//         //     'scheme' => 'http',
//         //     ],

// ]);


// $message = "مرحبا نحن دواء فاست هل هذا عنوان على الخريط
// https://www.arcgis.com/apps/OnePane/basicviewer/index.html?webmap=f5b13dbed07c46cdb783cf361833aa6b
// الرجاء التاكيد لتوصيل طلبك";
// $phone = "+967773491899";
// // $phone = "+967733562817";

// // $phone = "+967775141319";

// try {
//     $result = $SnSclient->publish([
//         'Message' => $message,
//         'PhoneNumber' => $phone,
//     ]);
//     dd($result);
//     var_dump($result);
// } catch (AwsException $e) {
//     // output error message if fails
//     error_log($e->getMessage());
//     dd($e->getMessage());
// }




return view('welcome');

});



Route::post('/home',function (){
   $SnSclient = new SnsClient([
    // 'profile' => 'default',
    'region' => 'me-south-1',
    'version' => 'latest',
    // 'credentials' => CredentialProvider::defaultProvider(),
        'credentials' => [
            'key'    => env('AWS_ACCESS_KEY_ID', 'AKIASYGZUJCSXIEBEMCE'),
            'secret' => env('AWS_SECRET_ACCESS_KEY', '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'),
        ],
        'scheme' =>'http',
        // 'options' => [
        //     'scheme' => 'http',
        //     ],

]);


$message = "مرحبا نحن دواء فاست هل هذا عنوان على الخريط
https://www.arcgis.com/apps/OnePane/basicviewer/index.html?webmap=f5b13dbed07c46cdb783cf361833aa6b
الرجاء التاكيد لتوصيل طلبك";
$phone = "+967775141319";

// $phone = "+967773491899";


try {
    $result = $SnSclient->publish([
        'Message' => $message,
        'PhoneNumber' => $phone,
    ]);
    dd($result);
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    error_log($e->getMessage());
    dd($e->getMessage());
}



})->name('admin.home_page');
