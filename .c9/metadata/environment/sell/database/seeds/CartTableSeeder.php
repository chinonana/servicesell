{"filter":false,"title":"CartTableSeeder.php","tooltip":"/sell/database/seeds/CartTableSeeder.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":10,"column":7},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":11,"column":0},"end":{"row":11,"column":5},"action":"insert","lines":["     "]},{"start":{"row":11,"column":5},"end":{"row":12,"column":0},"action":"insert","lines":["",""]},{"start":{"row":12,"column":0},"end":{"row":12,"column":5},"action":"insert","lines":["     "]}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":[" "],"id":3}],[{"start":{"row":12,"column":4},"end":{"row":25,"column":5},"action":"insert","lines":["public function run()","    {","        DB::table('carts')->truncate();","        ","        DB::table('carts')->insert([","            'stock_id' => 1,","            'user_id' => 1,","       ]);","       ","       DB::table('carts')->insert([","            'stock_id' => 2,","            'user_id' => 2,","       ]);","    }"],"id":4}]]},"ace":{"folds":[],"scrolltop":168,"scrollleft":0,"selection":{"start":{"row":25,"column":5},"end":{"row":25,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1637438628217,"hash":"0a659e1022929147e6faa303b615862dd9685c83"}