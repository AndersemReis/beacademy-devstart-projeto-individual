<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateZooFormRequest;
use App\Models\Zoo;
use Illuminate\Http\Request;

class ZooController extends Controller
{
    public function __construct(Zoo $zoo)
    {
        $this->model = $zoo;
    }

    public function index(Request $request)
    {

        $zoos = $this->model->getZoos(
            $request->search?? ''
        );
        
        return view('zoos.index', compact('zoos'));
    }
    
    public function create()
    {
        return view('zoos.create');
    }

    public function store(StoreUpdateZooFormRequest $request)
    {
       
        $data = $request->all();
        
    
        if($request->image){
            $file = $request['image'];
            $path = $file->store('profile','public');
            $data['image'] = $path;
        }   

        $this->model->create($data);

        return redirect()->route('zoos.index');
    }
}
