<?php
use Illuminate\Support\Facades\Storage;

if (!function_exists('uploadImage ')) {
    function uploadImage($image, $path)
    {
        
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imageName, 'public');
        }
          return $imageName;
    
}}
if (!function_exists('deleteImage ')) {
    function deleteImage($image, $path)
    {
         $imagePath =$path.$image; 
          if(Storage::disk('public')->exists($imagePath)){
            Storage::disk('public')->delete($imagePath);
          }
    }
}


