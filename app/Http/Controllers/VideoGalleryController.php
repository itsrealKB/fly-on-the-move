<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideosGalleryRequest;
use App\Models\Cms;
use App\Models\CmsMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleryContent = Cms::where('page','video-gallery')
                            ->where('section', 'hero')->with('cmsMeta')->first();
        return view('screens.web.all-gallery-video', compact('galleryContent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('screens.admin.video-gallery');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VideosGalleryRequest $request)
    {

        if (Storage::disk('public')->exists('uploads/gallery_videos')) {
            Storage::disk('public')->deleteDirectory('uploads/gallery_videos');
        }

        $cms = Cms::firstOrCreate(
            ['page' => 'video-gallery'],
            ['section' => 'hero']
        );

        $cms->cmsMeta()->delete();

        if($request->hasFile('banner_image')){

            $banner_image = $request->file('banner_image');
            $name = Str::uuid().'_banner_image.'.$banner_image->getClientOriginalExtension();
            $path = $banner_image->storeAs('uploads/gallery_videos', $name, 'public');

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

            $videoContent = $request->hasFile('video_file') ? $request->file('video_file') : $request->video_link;
            $videoData = [];
            foreach ($videoContent as $key =>  $video) {
                $type = 0;
                if($request->hasFile('video_file')){

                    $videoName = Str::uuid().'_gallery_video.'.$video->getClientOriginalExtension();
                    $videoPath = $video->storeAs('uploads/gallery_videos', $videoName, 'public');
                    $type = 1;
                }
                else{
                    $videoPath = $videoContent[$key];
                }

                $thumbnail = $request->file('video_thumbnail')[$key];
                $thumbnailName = Str::uuid().'_video_thumbnail.'.$thumbnail->getClientOriginalExtension();
                $thumbnailPath = $thumbnail->storeAs('uploads/gallery_videos', $thumbnailName, 'public');

                $videoData[] = [
                    'video' => $videoPath,
                    'thumbnail' => $thumbnailPath,
                    'type' => $type
                ];

            }

            $cms->cmsMeta()->create([
                'meta_key' => 'hero_section_gallery_video',
                'meta_value' => json_encode($videoData),
            ]);

            if($cmsMeta){
                return redirect()->route('video.gallery.post')->with([
                    'msg' => 'Image Gallery Content Uploaded Successfully.',
                    'type' => 'success'
                ]);
            }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(CmsMeta $cmsMeta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CmsMeta $cmsMeta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CmsMeta $cmsMeta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CmsMeta $cmsMeta)
    {
        //
    }
}
