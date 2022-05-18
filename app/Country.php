<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Menu extends Model
{
	protected $table = 'menu_items';
	
	public function children() { return $this->hasMany('App\Menu', 'parent_id', 'id'); }
}
