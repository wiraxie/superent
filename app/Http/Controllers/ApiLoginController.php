<?php namespace App\Http\Controllers;

		use Session;
		use Request;
		use DB;
		use CRUDBooster;

		class ApiLoginController extends \crocodicstudio\crudbooster\controllers\ApiController {

		    function __construct() {    
				$this->table       = "customers";        
				$this->permalink   = "login";    
				$this->method_type = "post";    
		    }
		

		    public function hook_before(&$postdata) {
		        //This method will be execute before run the main process
$time = Request::header('X-Authorization-Time');
$useragent = Request::header('User-Agent');
$key = "74a4bb9f42e22bef3977f0a718420b02";
//$email=Request::get('email');


				DB::table('customers')
				->where('email',$email)
				->update(['token' => md5($key.$time.$useragent.$email)]);
				
		    }

		    public function hook_query(&$query) {
		        //This method is to customize the sql query

		    }

		    public function hook_after($postdata,&$result) {
		        //This method will be execute after run the main process
				

		    }

		}