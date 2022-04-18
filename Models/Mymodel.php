<?php

namespace App\Models;

use CodeIgniter\Model;

class MyModel extends Model
{
    protected $table = 'project';
	

	//to get alll data
	public function getNews($slug = false)
	{
		if ($slug === false) {
			return $this->findAll();
		}

		return $this->where(['slug' => $slug])->first();
	}
		
	
	
}