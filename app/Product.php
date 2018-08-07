<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
<<<<<<< HEAD
=======

>>>>>>> 4019fc7b0a1b08b8b05b51e87b1b25be25277347
class Product extends Model
{
    use SoftDeletes;

<<<<<<< HEAD
	protected $table='products';
	
    protected $fillable = ['productname', 'photourl', 'stock', 'totalpoint', 'status'];
    protected $hidden = [];
=======
	protected $table = '';
	
    protected $fillable = ['name', 'dob', 'gender', 'city', 'photourl', 'about', 'website'];
    protected $hidden = [''];
>>>>>>> 4019fc7b0a1b08b8b05b51e87b1b25be25277347
}
