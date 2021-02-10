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
            return view('index',[
                'projects' => Project::orderBy('id', 'DESC')->get(),
                'bestproject' => Project::where('bestcontent', 1)->latest()->first()
            ]);
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

    public static function getVimeoAuthor($url) {
        $data = file_get_contents("http://vimeo.com/api/v2/video/$url.json");
        $data = json_decode($data);
        return $data[0]->user_name;
    }

    public static function getVimeoAuthorUrl($url) {
        $data = file_get_contents("http://vimeo.com/api/v2/video/$url.json");
        $data = json_decode($data);
        return $data[0]->user_url;
    }

    public static function getVimeoDuration($url) {
        $data = file_get_contents("http://vimeo.com/api/v2/video/$url.json");
        $data = json_decode($data);
        $duration = $data[0]->duration;
        return gmdate("i:s", $duration);
    }

    public function createSlug($title, $id = 0)
    {
        // Normalize the title
        $slug = str_slug($title);

        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);

        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }

        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Can not create a unique slug');
    }

    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Post::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }
    
}
