<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideosGalleryRequest extends FormRequest
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
            // 'banner_image' => 'required|mimes:jpg,bmp,png,jpeg,gif,webp',
            'banner_image' => 'required',
            'banner_text' => 'required',
            'video_thumbnail.*' => 'required',
            // 'video_thumbnail.*' => 'mimes:jpg,bmp,png,jpeg,gif,webp',
            'video_link.*' => 'nullable|required_without:video_file.*',
            // 'video_file.*' => 'nullable|mimes:mp4,avi,mov,wmv,flv,webm,mpeg|required_without:video_link.*',
            'video_file.*' => 'nullable|required_without:video_link.*',
        ];
    }

    public function messages()
    {
        return [
            'banner_image.required' => 'Please Upload Banner Image',
            // 'banner_image.mimes' => 'Banner Image Must Be JPG, PNG, JPEG, BMP, GIF, or WEBP.',
            'banner_text.required' => 'Please Provide Banner Text',
            'video_thumbnail.*.required' => 'Please Upload Video Thumbnail Image',
            // 'video_thumbnail.*.array' => 'Please Upload Video Thumbnail Image',
            // 'video_thumbnail.*.mimes' => 'Video Thumbnail Image Must Be JPG, PNG, JPEG, BMP, GIF, or WEBP.',
            'video_link.*.required_without' => 'Please Upload A Video Or A Video Link',
            // 'video_file.*.mimes' => 'Only MP4, AVI, MOV, WMV, FLV, WEBM, MPEG formats are allowed.',
            'video_file.*.required_without' => 'Please Upload A Video Or A Video Link.',
        ];
    }
}
