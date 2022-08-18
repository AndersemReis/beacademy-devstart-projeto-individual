<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaRequest;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

    public function __construct(Empresa $empresa)
    {
        $this->model = $empresa;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->type;
        $this->validType($type);


        $empresas = Empresa::allForTypes($type);

        return view('empresa.index', compact('empresas','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = $request->type;
        
        $this->validType($type);
       
        return view('empresa.create', ['type' => $request->$type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequest $request)
    {
        
        $empresas = Empresa::create($request->all());
        
        return redirect()->route('empresas.show',$empresas->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        
        return view('empresa.show', \compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$empresa = $this->model->find($id))
            return redirect()->route('empresa.index');
        
        return view('empresa.edit', compact('empresa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresaRequest $request, Empresa $empresa)
    {
        $empresa->update($request->all());

        return redirect()->route('empresas.show', $empresa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa, Request $request)
    {
        
        $this->validType($request->type);

        $empresa->delete();

        return redirect()->route('empresas.index',['type'=> $request->$type]);
    }

    private function validType(string $type){

        if($type !== 'cliente' && $type !== 'fornecedor'){
            \abort(404);
        }
    }
}
