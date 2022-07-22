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

    public function show($id)
    {
        if(!$zoo = Zoo::findOrFail($id))
            return redirect()->route('zoos.index');
        $title = 'Animal: ' . $zoo->name;

        return view('zoos.show', compact('zoo', 'title'));
    }

    public function edit($id)
    {
        if(!$zoo = $this->model->find($id))
            return redirect()->route('zoos.index');
        
        return view('zoos.edit', compact('zoo'));
    }

    public function update(StoreUpdateZooFormRequest $request, $id)
    {
        if(!$zoo = $this->model->find($id))
            return redirect()->route('zoos.index');
        
        
        $data = $request->only('name','family');
        
        if($request->image){
            $file = $request['image'];
            $path = $file->store('profile','public');
            $data['image'] = $path;
        }
            
        $zoo->update($data);

        return redirect()->route('zoos.index');
    }

}
