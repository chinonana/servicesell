{"filter":false,"title":"shop.blade.php","tooltip":"/sell/resources/views/shop.blade.php","undoManager":{"mark":32,"position":32,"stack":[[{"start":{"row":0,"column":0},"end":{"row":22,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">Dashboard</div>","","                <div class=\"card-body\">","                    @if (session('status'))","                        <div class=\"alert alert-success\" role=\"alert\">","                            {{ session('status') }}","                        </div>","                    @endif","","                    You are logged in!","                </div>","            </div>","        </div>","    </div>","</div>","@endsection"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container-fluid\">","   <div class=\"\">","       <div class=\"mx-auto\" style=\"max-width:1200px\">","           <h1 style=\"color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;\">商品一覧</h1>","           <div class=\"\">","               <div class=\"d-flex flex-row flex-wrap\">","                   商品一覧を出したい","               </div>","           </div>","       </div>","   </div>","</div>","@endsection"],"id":3}],[{"start":{"row":9,"column":23},"end":{"row":9,"column":28},"action":"remove","lines":["を出したい"],"id":4}],[{"start":{"row":9,"column":23},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":10,"column":0},"end":{"row":10,"column":19},"action":"insert","lines":["                   "]},{"start":{"row":10,"column":19},"end":{"row":11,"column":0},"action":"insert","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":11,"column":19},"action":"insert","lines":["                   "]}],[{"start":{"row":10,"column":19},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":11,"column":0},"end":{"row":11,"column":19},"action":"insert","lines":["                   "]}],[{"start":{"row":11,"column":19},"end":{"row":18,"column":38},"action":"insert","lines":["@foreach($stocks as $stock)","                      {{$stock->name}} <br>","                      {{$stock->fee}}円<br>","                      <img src=\"/image/{{$stock->imgpath}}\" alt=\"\" class=\"incart\" >","                      <br>","                      {{$stock->detail}} <br>","                 @endforeach","                 {{$stocks->links()}} "],"id":7}],[{"start":{"row":16,"column":45},"end":{"row":17,"column":17},"action":"remove","lines":["","                 "],"id":8}],[{"start":{"row":16,"column":45},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":17,"column":0},"end":{"row":17,"column":22},"action":"insert","lines":["                      "]}],[{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"remove","lines":[" "],"id":10},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"remove","lines":[" "]}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":20},"action":"remove","lines":["    "],"id":11}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"insert","lines":[" "],"id":12},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":[" "]},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":[" "]},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":[" "]}],[{"start":{"row":9,"column":23},"end":{"row":11,"column":18},"action":"remove","lines":["","                   ","                  "],"id":13}],[{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":[" "],"id":14},{"start":{"row":9,"column":23},"end":{"row":10,"column":0},"action":"insert","lines":["",""]},{"start":{"row":10,"column":0},"end":{"row":10,"column":19},"action":"insert","lines":["                   "]}],[{"start":{"row":15,"column":45},"end":{"row":16,"column":19},"action":"remove","lines":["","                   "],"id":15}],[{"start":{"row":15,"column":45},"end":{"row":15,"column":46},"action":"remove","lines":[" "],"id":16}],[{"start":{"row":15,"column":45},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":16,"column":0},"end":{"row":16,"column":22},"action":"insert","lines":["                      "]}],[{"start":{"row":16,"column":21},"end":{"row":16,"column":22},"action":"remove","lines":[" "],"id":18},{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"remove","lines":[" "]},{"start":{"row":16,"column":16},"end":{"row":16,"column":20},"action":"remove","lines":["    "]}],[{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"insert","lines":[" "],"id":19},{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"insert","lines":[" "]},{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"insert","lines":[" "]}],[{"start":{"row":12,"column":38},"end":{"row":12,"column":39},"action":"insert","lines":["/"],"id":20},{"start":{"row":12,"column":39},"end":{"row":12,"column":40},"action":"insert","lines":["t"]},{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"insert","lines":["u"]},{"start":{"row":12,"column":41},"end":{"row":12,"column":42},"action":"insert","lines":["k"]},{"start":{"row":12,"column":42},"end":{"row":12,"column":43},"action":"insert","lines":["i"]}],[{"start":{"row":12,"column":43},"end":{"row":12,"column":44},"action":"insert","lines":[" "],"id":21}],[{"start":{"row":12,"column":43},"end":{"row":12,"column":44},"action":"remove","lines":[" "],"id":22},{"start":{"row":12,"column":42},"end":{"row":12,"column":43},"action":"remove","lines":["i"]},{"start":{"row":12,"column":41},"end":{"row":12,"column":42},"action":"remove","lines":["k"]},{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"remove","lines":["u"]},{"start":{"row":12,"column":39},"end":{"row":12,"column":40},"action":"remove","lines":["t"]}],[{"start":{"row":12,"column":39},"end":{"row":12,"column":40},"action":"insert","lines":["月"],"id":23}],[{"start":{"row":9,"column":23},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":10,"column":0},"end":{"row":10,"column":19},"action":"insert","lines":["                   "]},{"start":{"row":10,"column":19},"end":{"row":11,"column":0},"action":"insert","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":11,"column":19},"action":"insert","lines":["                   "]}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"remove","lines":[" "],"id":25},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"remove","lines":[" "]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"remove","lines":[" "]},{"start":{"row":11,"column":12},"end":{"row":11,"column":16},"action":"remove","lines":["    "]}],[{"start":{"row":10,"column":19},"end":{"row":11,"column":12},"action":"remove","lines":["","            "],"id":26}],[{"start":{"row":9,"column":23},"end":{"row":9,"column":26},"action":"insert","lines":["-->"],"id":27},{"start":{"row":9,"column":19},"end":{"row":9,"column":23},"action":"insert","lines":["<!--"]}],[{"start":{"row":8,"column":54},"end":{"row":9,"column":30},"action":"remove","lines":["","                   <!--商品一覧-->"],"id":28}],[{"start":{"row":8,"column":54},"end":{"row":9,"column":19},"action":"insert","lines":["","                   "],"id":29}],[{"start":{"row":9,"column":19},"end":{"row":9,"column":21},"action":"insert","lines":["商品"],"id":30}],[{"start":{"row":9,"column":21},"end":{"row":9,"column":26},"action":"insert","lines":["一覧ページ"],"id":31}],[{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"insert","lines":["￣"],"id":32}],[{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"remove","lines":["￣"],"id":33}],[{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"insert","lines":["~"],"id":34}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":39},"end":{"row":13,"column":39},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1637431121459,"hash":"f2a812296e114d7eb9d5d6b70915417dd42941d7"}