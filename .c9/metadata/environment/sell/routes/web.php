{"filter":false,"title":"web.php","tooltip":"/sell/routes/web.php","undoManager":{"mark":42,"position":42,"stack":[[{"start":{"row":13,"column":0},"end":{"row":13,"column":28},"action":"remove","lines":["Route::view('/', 'welcome');"],"id":102}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":40},"action":"insert","lines":["Route::get('/', 'ShopController@index');"],"id":103}],[{"start":{"row":13,"column":40},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":104}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":47},"action":"insert","lines":["Route::get('/mycart', 'ShopController@myCart');"],"id":105}],[{"start":{"row":13,"column":40},"end":{"row":14,"column":47},"action":"remove","lines":["","Route::get('/mycart', 'ShopController@myCart');"],"id":106}],[{"start":{"row":13,"column":40},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":107}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":47},"action":"insert","lines":["Route::get('/mycart', 'ShopController@myCart');"],"id":108}],[{"start":{"row":13,"column":40},"end":{"row":14,"column":47},"action":"remove","lines":["","Route::get('/mycart', 'ShopController@myCart');"],"id":109}],[{"start":{"row":13,"column":40},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":110}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":67},"action":"insert","lines":["Route::get('/mycart', 'ShopController@myCart')->middleware('auth');"],"id":111}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":51},"action":"insert","lines":["Route::post('/mycart', 'ShopController@addMycart');"],"id":112}],[{"start":{"row":15,"column":51},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":113},{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""]},{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":15,"column":51},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":114}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":54},"action":"insert","lines":["Route::POST('/cartdelete','ShopController@deleteCart')"],"id":115}],[{"start":{"row":16,"column":54},"end":{"row":16,"column":55},"action":"insert","lines":[";"],"id":116}],[{"start":{"row":16,"column":55},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":117}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":52},"action":"insert","lines":["Route::post('/checkout', 'ShopController@checkout');"],"id":118}],[{"start":{"row":13,"column":40},"end":{"row":17,"column":52},"action":"remove","lines":["","Route::get('/mycart', 'ShopController@myCart')->middleware('auth');","Route::post('/mycart', 'ShopController@addMycart');","Route::POST('/cartdelete','ShopController@deleteCart');","Route::post('/checkout', 'ShopController@checkout');"],"id":120}],[{"start":{"row":13,"column":40},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":121}],[{"start":{"row":14,"column":0},"end":{"row":22,"column":3},"action":"insert","lines":["","Route::group(['middleware' => ['auth']], function () {","","    Route::get('/mycart', 'ShopController@myCart');","    Route::post('/mycart', 'ShopController@addMycart');","    Route::post('/cartdelete', 'ShopController@deleteCart');","    Route::post('/checkout', 'ShopController@checkout');","   ","});"],"id":122}],[{"start":{"row":15,"column":54},"end":{"row":16,"column":0},"action":"remove","lines":["",""],"id":123}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":3},"action":"insert","lines":["// "],"id":124},{"start":{"row":16,"column":0},"end":{"row":16,"column":3},"action":"insert","lines":["// "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":3},"action":"insert","lines":["// "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":3},"action":"insert","lines":["// "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":3},"action":"insert","lines":["// "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":125}],[{"start":{"row":15,"column":0},"end":{"row":19,"column":52},"action":"insert","lines":["Route::get('/', 'ShopController@index');","Route::get('/mycart', 'ShopController@myCart')->middleware('auth');","Route::post('/mycart', 'ShopController@addMycart');","Route::post('/cartdelete', 'ShopController@deleteCart');","Route::post('/checkout', 'ShopController@checkout');"],"id":126}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":3},"action":"insert","lines":["// "],"id":127},{"start":{"row":16,"column":0},"end":{"row":16,"column":3},"action":"insert","lines":["// "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":3},"action":"insert","lines":["// "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":3},"action":"insert","lines":["// "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":3},"action":"remove","lines":["// "],"id":128},{"start":{"row":21,"column":0},"end":{"row":21,"column":3},"action":"remove","lines":["// "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":3},"action":"remove","lines":["// "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":3},"action":"remove","lines":["// "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":3},"action":"remove","lines":["// "]}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":3},"action":"remove","lines":["// "],"id":129}],[{"start":{"row":32,"column":54},"end":{"row":32,"column":55},"action":"remove","lines":["e"],"id":130},{"start":{"row":32,"column":53},"end":{"row":32,"column":54},"action":"remove","lines":["m"]},{"start":{"row":32,"column":52},"end":{"row":32,"column":53},"action":"remove","lines":["o"]},{"start":{"row":32,"column":51},"end":{"row":32,"column":52},"action":"remove","lines":["h"]}],[{"start":{"row":32,"column":51},"end":{"row":32,"column":52},"action":"insert","lines":["/"],"id":131}],[{"start":{"row":32,"column":52},"end":{"row":32,"column":53},"action":"insert","lines":["h"],"id":132},{"start":{"row":32,"column":53},"end":{"row":32,"column":54},"action":"insert","lines":["o"]},{"start":{"row":32,"column":54},"end":{"row":32,"column":55},"action":"insert","lines":["m"]},{"start":{"row":32,"column":55},"end":{"row":32,"column":56},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":2},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":133}],[{"start":{"row":12,"column":0},"end":{"row":14,"column":22},"action":"insert","lines":["use Illuminate\\Support\\Facades\\Route;","use Illuminate\\Support\\Facades\\Mail;","use App\\Mail\\MailTest;"],"id":134}],[{"start":{"row":14,"column":22},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":135},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":16,"column":0},"end":{"row":19,"column":3},"action":"insert","lines":["Route::get('/mail', function () {","    $mail_text = \"メールテストで使いたい文章\";","    Mail::to('to_address@example.com')->send(new MailTest($mail_text));","});"],"id":136}],[{"start":{"row":19,"column":3},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":137},{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["",""]},{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["",""]},{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":14,"column":22},"end":{"row":20,"column":0},"action":"remove","lines":["","","Route::get('/mail', function () {","    $mail_text = \"メールテストで使いたい文章\";","    Mail::to('to_address@example.com')->send(new MailTest($mail_text));","});",""],"id":138}],[{"start":{"row":11,"column":2},"end":{"row":14,"column":22},"action":"remove","lines":["","use Illuminate\\Support\\Facades\\Route;","use Illuminate\\Support\\Facades\\Mail;","use App\\Mail\\MailTest;"],"id":139}],[{"start":{"row":11,"column":2},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":140}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":48},"action":"insert","lines":["Route::get('/mail', 'MailSendController@index');"],"id":141}],[{"start":{"row":11,"column":2},"end":{"row":12,"column":48},"action":"remove","lines":["","Route::get('/mail', 'MailSendController@index');"],"id":142}],[{"start":{"row":11,"column":2},"end":{"row":15,"column":0},"action":"remove","lines":["","","","",""],"id":143}],[{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":["",""],"id":144}],[{"start":{"row":13,"column":0},"end":{"row":18,"column":55},"action":"remove","lines":["","// Route::get('/', 'ShopController@index');","// Route::get('/mycart', 'ShopController@myCart')->middleware('auth');","// Route::post('/mycart', 'ShopController@addMycart');","// Route::post('/cartdelete', 'ShopController@deleteCart');","// Route::post('/checkout', 'ShopController@checkout');"],"id":145}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":0},"end":{"row":13,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":20,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1637481900835,"hash":"729ae861e76dbd3145865437fd252e5549bfa025"}