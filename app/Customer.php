<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;


class Customer extends Model
{
    use SoftDeletes;

	protected $table='customers';
	
    protected $fillable = ['custname', 'joindate', 'email', 'phone', 'password', 'notes', 'location', 'status', 'created_at', 'updated_at'];
    protected $hidden = [];

}
