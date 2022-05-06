<?php

namespace App\Models;

use CodeIgniter\Model;

class MyModel extends Model
{
    protected $table = 'project';
	
		
	 protected $allowedFields = ['name', 'phone','people','hotel'];
	

	//to get alll data
	public function getData($slug = false)
	{
		if ($slug === false) {
			return $this->findAll();
		}

		return $this->where(['slug' => $slug])->first();
	}
		
	
	
}