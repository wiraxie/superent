<?php namespace App\Http\Controllers;

		use Session;
		use Request;
		use DB;
		use CRUDBooster;
		use App\Customer;
		
		class ApiCustomerinsertController extends \crocodicstudio\crudbooster\controllers\ApiController {

		    function __construct() {    
				$this->table       = "customers";        
				$this->permalink   = "customerinsert";    
				$this->method_type = "post";    
		    }
		

		    public function hook_before(&$postdata) {
		        //This method will be execute before run the main process
				$email = Request::get('email');
				//echo ($email);die();
				
				$checkemail = Customer::select('email')->where('email', $email)->get();
				$unnecessary = array('[{', '"email"', '"', ':', "}]", '[', ']');
				$checkemail2 = str_replace($unnecessary, '', $checkemail);
				//echo $checkemail2;die();
		
				if($checkemail2 != NULL || $checkemail2 != '')
				{
					echo '[{"message":"email already registered!"}]';
					http_response_code(406);
				}
				else
				{
					//Customer::create($postdata->all());
					
					DB::table('customers')->insert(
						[
							'custname' => Request::get('custname'), 
							'joindate' => now(), 
							'email' => Request::get('email'), 
							'phone' => Request::get('phone'), 
							'password' => base64_encode(md5(Request::get('password'))),
							'status' => Request::get('status'), 
							'location' => Request::get('location'),
							'notes' => Request::get('notes')
						]
					);
					
					//echo response()->json(['message' => 'success'], 200);
					echo '[{"message":"success"}]';
					http_response_code(200);
				}
				die();

		    }

		    public function hook_query(&$query) {
		        //This method is to customize the sql query

		    }

		    public function hook_after($postdata,&$result) {
		        //This method will be execute after run the main process

		    }

		}