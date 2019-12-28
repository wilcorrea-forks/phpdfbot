<?php

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
Route::get('/setWebhook/{bot}', 'Bot\DefaultController@setWebhook');
Route::any('/webhook/{token}/{bot}', 'Bot\DefaultController@webhook');
//Route::get('/getMe', 'Bot\DefaultController@getMe');

Route::get('/oauth/gmail', function (){
    return LaravelGmail::redirect();
});

Route::get('/oauth/gmail/callback', function (){
    LaravelGmail::makeToken();
    return redirect()->to('/');
});

Route::get('/oauth/gmail/logout', function (){
    LaravelGmail::logout(); //It returns exception if fails
    return redirect()->to('/');
});

Route::get('test', function (\GrahamCampbell\GitHub\GitHubManager $github){
    try {
//        dump($github->me());https://github.com/phpdevbr/vagas/issues
//        $github->issues()->create('php-df', 'phpdfbot', array('title' => 'The issue title', 'body' => 'The issue body'));
        $issues = $github->issues()->all('phpdevbr', 'vagas', [
            'state' => 'open',
            'since' => '2019-12-19'
        ]);
        dump($issues);
//        $github->issues()->comments()->create('php-df', 'phpdfbot', $issues['issues'][0]['number'], [
//            'body' => '```'.$issues['issues'][0]['body'].'```'
//        ]);
    } catch (\Exception $exception) {
        dump($exception);die;
    }
});