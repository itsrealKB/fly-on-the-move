<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImagesGalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "banner_image" => 'required|mimes:jpg,bmp,png,jpeg,gif,webp',
            "banner_text" => 'required',
            "image_gallery" => 'required|array',
            // 'image_gallery.*' => 'mimes:jpg,bmp,png,jpeg,gif,webp',
        ];
    }

    public function messages()
    {
        return [
            'banner_image.required' => 'Please Provide Your Banner Image',
            'banner_image.mimes' => 'Please Provide A Valid Image',
            'banner_text.required' => 'Please Provide Your Banner Text',
            'image_gallery.required' => 'Please Provide Atleast One Image',
            'image_gallery.array' => 'Please Upload Valid Image Files',
            // 'image_gallery.*.mimes' => 'Gallery Images Must Be JPG, PNG, JPEG, BMP, GIF, or WEBP.',
        ];
    }
}
