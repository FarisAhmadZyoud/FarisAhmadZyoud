<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class Mycontroller extends Controller {
public function index(){
$users = DB::select('select * from info');
return view('myview',['users'=>$users]);

}
}