<?php
namespace App\Http\Controllers\Api;
/**
 * Created by PhpStorm.
 * User: LvFish
 * Date: 2020/1/10
 * Time: 14:01
 */
use App\Http\Controllers\Api\BaseController;
use Illuminate\Support\Facades\DB;
class NumberController extends BaseController{

    public function index(){
        $list = \DB::table('f_number')->get();
        dd($list);
    }

}