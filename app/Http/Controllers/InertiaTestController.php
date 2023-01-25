<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaModel;


class InertiaTestController extends Controller
{
    public function index(){
        return Inertia::render('Inertia/index');
    }

    public function show($id){

        return Inertia::render('Inertia/Show',[
            'id' =>$id
        ]);
        
    }

    public function store(Request $request){
              $inertiaModel = new InertiaModel;
              $inertiaModel->title = $request->title;
              $inertiaModel->content = $request->content;
              $inertiaModel->save();

              return to_route('inertia.index');
    }
}
