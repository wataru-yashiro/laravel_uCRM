<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaModel;


class InertiaTestController extends Controller
{
    public function index(){
        return Inertia::render('Inertia/index',['blogs'=>InertiaModel::all()]);
    }
    public function create(){
        return Inertia::render('Inertia/create');
    }

    public function show($id){

        return Inertia::render('Inertia/Show',[
            'id' =>$id,
            'blog' =>InertiaModel::findOrFail($id)
            
        ]);
        
    }

    public function store(Request $request){

            $request->validate([
                'title'=>['required','max:20'],
                'content'=>['required']
            ]);

              $inertiaModel = new InertiaModel;
              $inertiaModel->title = $request->title;
              $inertiaModel->content = $request->content;
              $inertiaModel->save();

              return to_route('inertia.index')->with([
                'message'=>'登録しました'
              ]);
    }
    public function delete($id){
        $book=InertiaModel::findOrFail($id);
        $book->delete();


        return to_route('inertia.index')->with([
            'message'=>'削除しました'
        ]);
    }
    
}
