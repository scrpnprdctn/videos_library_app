<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Project::where('published', 1)){
            return view('index',[
                'projects' => Project::orderBy('id', 'DESC')->get(),
                'bestproject' => Project::all()->last()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $project = Project::find($project)->first();

        return view('show', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $project = Project::where('id', $project->id)->first();
        return view('edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        
        $project->update($request->all());
        return redirect()->route('admin.index')->with('success', 'Votre projet a bien été modifié');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    public static function getVimeoThumb($url) {
        $data = file_get_contents("http://vimeo.com/api/v2/video/$url.json");
        $data = json_decode($data);
        return $data[0]->thumbnail_large;
    }

    public static function getVimeoDesc($url) {
        $data = file_get_contents("http://vimeo.com/api/v2/video/$url.json");
        $data = json_decode($data);
        return $data[0]->user_name;
    }
}
