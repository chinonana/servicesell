{"filter":false,"title":"Handler.php","tooltip":"/sell/app/Exceptions/Handler.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":50,"column":4},"end":{"row":50,"column":7},"action":"insert","lines":["// "],"id":2},{"start":{"row":51,"column":4},"end":{"row":51,"column":7},"action":"insert","lines":["// "]},{"start":{"row":52,"column":4},"end":{"row":52,"column":7},"action":"insert","lines":["// "]},{"start":{"row":53,"column":4},"end":{"row":53,"column":7},"action":"insert","lines":["// "]}],[{"start":{"row":53,"column":8},"end":{"row":54,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":4},"end":{"row":55,"column":0},"action":"insert","lines":["",""]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":55,"column":4},"end":{"row":66,"column":1},"action":"insert","lines":["public function render($request, Exception $exception)","{","    if ($exception instanceof ErrorException) {","        error_reporting(0);","","        $kernel = app(\\Illuminate\\Contracts\\Http\\Kernel::class);","        $response = $kernel->handle($request)->send();","        return $kernel->terminate($request, $response);","    }","","    return parent::render($request, $exception);","}"],"id":4}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":66,"column":1},"end":{"row":66,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":4,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1637478513152,"hash":"e8b15339d878cf43abe5069dcbaddeeb87741743"}