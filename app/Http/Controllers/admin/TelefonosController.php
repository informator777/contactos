<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Telefono;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class TelefonosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function  __construct()
    {
        $this->middleware('auth')->only('index', 'show', 'edit','delete'); 
    }



    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $telefonos = Telefono::where('ci', 'LIKE', "%$keyword%")
                ->orWhere('extension', 'LIKE', "%$keyword%")
                ->orWhere('telefono_movil', 'LIKE', "%$keyword%")
                ->orWhere('telefono_fijo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $telefonos = Telefono::latest()->paginate($perPage);
        }

        return view('admin.telefonos.index', compact('telefonos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.telefonos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
    

        $requestData = $request->validate([
            'ci' => 'required|max:12',
            'telefono_movil' => 'required|max:8',
            'telefono_fijo' => 'max:8',    
        ]);

        Telefono::create($request->all());

       // Telefono::create($validatedData);

        return redirect('gracias')->with('flash_message', '¡Telefono adicionado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $telefono = Telefono::findOrFail($id);

        return view('admin.telefonos.show', compact('telefono'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $telefono = Telefono::findOrFail($id);

        return view('admin.telefonos.edit', compact('telefono'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $telefono = Telefono::findOrFail($id);
        $telefono->update($requestData);

        return redirect('admin/telefonos')->with('flash_message', 'Telefono updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Telefono::destroy($id);

        return redirect('admin/telefonos')->with('flash_message', 'Telefono deleted!');
    }
}
