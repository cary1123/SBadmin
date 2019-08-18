<?php

namespace App\Http\Controllers;

use App\Http\Requests\SbAdminRequest;
use App\bashloard;
use App\datatable;
use Illuminate\Http\Request;

class SbAdminController extends Controller
{
    public function index($page="index.html")
    {
      switch($page)
       {
        case "index.html":
           $posts = bashloard::all();
           $tables = datatable::all();
            $data = [
                'posts' => $posts,
                'tables' => $tables,
            ];
           return view('SBAdmin.index',$data);
        break;
        case "login.html":
           return view('SBAdmin.login');
        break;
        case "register.html":
           return view('SBAdmin.register');
        break;  
        case "forgot-password.html":
           return view('SBAdmin.forgot-password');
        break;       
        case "404.html":
           return view('SBAdmin.404');
        break;    
        case "blank.html":
           return view('SBAdmin.blank');
        break;  
        case "charts.html":
           return view('SBAdmin.charts');
        break;       
        case "tables.html":
           return view('SBAdmin.tables');
        break;         
       }
    }
    public function create()
    {

        return view('SBAdmin.create');
    }

    public function store(SbAdminRequest $request)
    {
        //dd($request);
        $data = $request->all();

        $post = datatable::create($data);

        //return redirect()->route('SBAdmin.index');
        return redirect()->route('SBAdmin.index');
    }

    public function edit($id)
    {

        $tables = datatable::findOrFail($id);

        $data = [
            'tables' => $tables,
        ];

        return view('SBAdmin.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $tables = datatable::find($id);
        $tables->update($request->all());

        return redirect()->route('SBAdmin.index');
    }

    public function destroy($id)
    {
        datatable::destroy($id);

        return redirect()->route('SBAdmin.index');
    }

    public function orm($id)
    {
        switch ($id)
        {
            case "update":
                $post = datatable::find(1);
                $post->update([
                    'Age' => '23',
                    'Office' => '法國',
                ]);
                $post->save();
                break;
            case "delete":
                $post = datatable::find(3);
                $post->delete();
                break;
            default:
                break;
        }
//        $post = Post::create([
//
//        ]);

//        $post = Post::find(1);
//        $post->update([
//            'title' => 'updated title',
//            'content' => 'updated content',
//        ]);

//        $post->title = 'save title';
//        $post->content = 'save content';
//        $post->save();

//        $post->delete();

//Post::destroy([2,5,7]);

    }
}
