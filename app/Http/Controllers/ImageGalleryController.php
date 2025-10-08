<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesGalleryRequest;
use App\Models\Cms;
use App\Models\CmsMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleryContent = Cms::where('page','image-gallery')
                            ->where('section', 'hero')->with('cmsMeta')->get();
        return view('screens.web.gallery',compact('galleryContent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $galleryImages = Cms::where('page', 'image-gallery')
                        ->where('section','hero')
                        ->whereHas('cmsMeta', function($qeury){
                            $qeury->where('meta_key','hero_section_gallery_image');
                        })->with(['cmsMeta' => function($query){
                            $query->where('meta_key','hero_section_gallery_image');
                        }])->first()->cmsMeta ?? collect();
        return view('screens.admin.image-gallery',compact('galleryImages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImagesGalleryRequest $request)
    {
        $validated = $request->validated();

        $cms = Cms::firstOrCreate(
            ['page' => 'image-gallery'],
            ['section' => 'hero']
        );

        if($request->hasFile('banner_image') && $request->hasFile('image_gallery')){

            $banner_image = $request->file('banner_image');
            $name = time().'_'.$banner_image->getClientOriginalName().'.'.$banner_image->getClientOriginalExtension();
            $path = $banner_image->storeAs('uploads/gallery_images', $name, 'public');

            $now = now();

            $cmsMeta = CmsMeta::insert([
                [
                    'cms_id' => $cms->id,
                    'meta_key' => 'hero_section_banner_text',
                    'meta_value' => $request->banner_text,
                    'created_at' => $now,
                    'updated_at' => $now
                ],
                [
                    'cms_id' => $cms->id,
                    'meta_key' => 'hero_section_banner_image',
                    'meta_value' => $path,
                    'created_at' => $now,
                    'updated_at' => $now
                ],
            ]);

            foreach ($request->file('image_gallery') as  $image) {
                $name = time().'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
                $path = $image->storeAs('uploads/gallery_images', $name, 'public');

                $cmsMeta = CmsMeta::create(
                    [
                        'cms_id' => $cms->id,
                        'meta_key' => 'hero_section_gallery_image',
                        'meta_value' => $path
                    ]
                );
            }

            if($cmsMeta){
                return redirect()->route('image.gallery')->with([
                    'msg' => 'Image Gallery Content Uploaded Successfully.',
                    'type' => 'success'
                ]);
            }
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(cmsMeta $cmsMeta)
    {
        dd($cmsMeta);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cmsMeta $cmsMeta)
    {
        dd($cmsMeta);
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
