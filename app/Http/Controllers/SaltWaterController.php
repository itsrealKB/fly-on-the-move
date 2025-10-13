<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaltWaterRequest;
use App\Models\Cms;
use App\Models\CmsMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SaltWaterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saltWaterContent = Cms::where([
                    ['page','saltwater'],
                    ['section', 'hero']
                ])
                ->with('cmsMeta')
                ->first();
        return view('screens.web.salt-water',compact('saltWaterContent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('screens.admin.saltwater');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaltWaterRequest $request)
    {
        if (Storage::disk('public')->exists('uploads/saltwater_videos')) {
            Storage::disk('public')->deleteDirectory('uploads/saltwater_videos');
        }

        $cms = Cms::firstOrCreate(
            ['page' => 'saltwater'],
            ['section' => 'hero']
        );

        $cms->cmsMeta()->delete();

        if($request->hasFile('banner_image')){

            $banner_image = $request->file('banner_image');
            $name = Str::uuid().'_banner_image.'.$banner_image->getClientOriginalExtension();
            $path = $banner_image->storeAs('uploads/saltwater_videos', $name, 'public');

            $cmsMeta = CmsMeta::insert([
                [
                    'cms_id' => $cms->id,
                    'meta_key' => 'hero_section_banner_text',
                    'meta_value' => $request->banner_text,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'cms_id' => $cms->id,
                    'meta_key' => 'hero_section_banner_image',
                    'meta_value' => $path,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]);

        }

        $videoData = [];

        // If User Uploading Video Files
        if($request->hasFile('video_file')){
            foreach ($request->file('video_file') as $key =>  $video) {
                $videoName = Str::uuid().'_gallery_video.'.$video->getClientOriginalExtension();
                $videoPath = $video->storeAs('uploads/saltwater_videos', $videoName, 'public');
                $thumbnail = $request->file('video_thumbnail')[$key];
                $thumbnailName = Str::uuid().'_video_thumbnail.'.$thumbnail->getClientOriginalExtension();
                $thumbnailPath = $thumbnail->storeAs('uploads/saltwater_videos', $thumbnailName, 'public');

                $videoData[] = [
                    'video' => $videoPath,
                    'thumbnail' => $thumbnailPath,
                    'type' => 1
                ];

            }
        }

        // If User Providing Online Video Links
        if($request->video_link && count($request->video_link) > 0){

            foreach ($request->video_link as  $link) {

                $videoData[] = [
                    'video' => $link,
                    'type' => 0
                ];
            }
        }

        $cmsMeta = $cms->cmsMeta()->create([
            'meta_key' => 'hero_section_saltwater_videos',
            'meta_value' => json_encode($videoData),
        ]);

        if($cmsMeta){
            return redirect()->route('video.saltwater')->with([
                'msg' => 'Salt Water Content Uploaded Successfully.',
                'type' => 'success'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
