<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes;

	protected $table='products';
	
    protected $fillable = ['productname', 'photourl', 'stock', 'totalpoint', 'status'];
    protected $hidden = [];
}
