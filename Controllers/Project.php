<?php

namespace App\Controllers;
use App\Models\Mymodel;

//to read date code saves
class Project extends BaseController
{

     public function index()
    {
		
		
       $model = model(MyModel::class);

        $data['data'] = $model->getData();
		
		echo json_encode($data);

    }
	// file to create file 
	public function save()
    {
		
		
	    $model = model(MyModel::class);
		 
			$result = $model->save([
            'name' => $this->request->getPost('name'),      
            'phone'  => $this->request->getPost('phone'),
		    'people'  => $this->request->getPost('people'),
			    'hotel'  => $this->request->getPost('hotel'),
        ]);
		 
	echo json_decode($result);
		
			
	}
	//to delete file components
public function cancel($id){
		  $model = model(MyModel::class);
		$response=$model->delete($id);
		
		echo $response;
	
		
	}
	
}
