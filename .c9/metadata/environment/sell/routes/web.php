{"filter":false,"title":"web.php","tooltip":"/sell/routes/web.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":13,"column":0},"end":{"row":13,"column":28},"action":"remove","lines":["Route::view('/', 'welcome');"],"id":73}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":40},"action":"insert","lines":["Route::get('/', 'ShopController@index');"],"id":74}],[{"start":{"row":13,"column":40},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":76}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":47},"action":"insert","lines":["Route::get('/mycart', 'ShopController@myCart');"],"id":77}],[{"start":{"row":13,"column":40},"end":{"row":14,"column":47},"action":"remove","lines":["","Route::get('/mycart', 'ShopController@myCart');"],"id":78}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":40},"end":{"row":13,"column":40},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1637431256399,"hash":"3d03719faa33966f07acffe763a768e144db3869"}