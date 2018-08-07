<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

	protected $table = '';
	
    protected $fillable = ['name', 'dob', 'gender', 'city', 'photourl', 'about', 'website'];
    protected $hidden = [''];
}
