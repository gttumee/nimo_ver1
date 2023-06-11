<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public function index(Request $request){
            $result = $request->input('name');
            $lastResult = Http::get("http://beta.jisho.org/api/v1/search/words?keyword=".$result)->json();
            $resp = $lastResult['data'];
            $translate = new GoogleTranslate('en');
            $convert = function($data) use($translate){
                return $translate->setSource("en")->setTarget("mn")->translate($data);
            };
         return view('index',compact('resp','result','convert'));
   }
}