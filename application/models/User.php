<?php

use Illuminate\Database\Capsule\Manager as DB;

class UserModel extends EloquentModel
{
    protected $table = 'users';
	protected $guarded = [];
	public function getinfo(){
			return parent::where('id',156)->get()->toArray();
	}
}