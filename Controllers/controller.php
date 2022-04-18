<?php

namespace App\Controllers;
use App\Models\Model;


class Controller extends BaseController
{
	
	
public function __construct()
 {
 Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
 Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
 Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
 
 }

     public function index()
    {
		
		
   print('here');
       $model = model(TaskModel::class);

        $data['news'] = $model->getNews();

    }
	
}
