<?php

namespace Megadesby\Adminavel\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Content;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{

    public function index()
    {
        $contents = Content::all();
        return view('megadesby/adminavel::admin.content.index', compact('contents'));
    }

    public function create()
    {
        return view('megadesby/adminavel::admin.content.create');
    }

    public function store()
    {
        $content = Request::all();
        Content::create($content);
        return Redirect::route('admin.content.index');
    }

    public function show($id)
    {
        $content = Content::find($id);
        return view('megadesby/adminavel::admin.content.show', compact('content'));
    }

    public function edit($id)
    {
        $content = Content::find($id);
        return view('megadesby/adminavel::admin.content.edit',compact('content'));
    }

    public function update($id)
    {
        $contentUpdate=Request::all();
        $content = Content::find($id);
        $content->update($contentUpdate);
        return Redirect::route('admin.content.index');
    }

    public function destroy($id)
    {
        Content::find($id)->delete();
        return Redirect::route('admin.content.index');
    }
}
