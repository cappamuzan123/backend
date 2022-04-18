<?php

namespace App\Controllers;
use App\Models\Mymodel;


class Project extends BaseController
{

     public function index()
    {
		
		
       $model = model(MyModel::class);

        $data['data'] = $model->getNews();
		
		echo json_encode($data);

    }
	
}
