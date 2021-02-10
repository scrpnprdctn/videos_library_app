<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'projects' => Project::orderBy('id', 'DESC')->get()
        ]);
    }

    public function create(){
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());
        return redirect()->route('project.show', $project->slug);
    }

    public function destroy($id){
        $project = Project::where('id', $id)->first();
        $project->delete();
        return back()->with('success', 'Votre projet a bien été supprimé');
    }
}
