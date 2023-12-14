<?php
// use Illuminate\Support\Facades\Storage;

// if (!function_exists('uploadImage ')) {
//     function uploadImage($image, $path,$old_image=null)
//     {
        
//         if ($image) {
//             $imageName = time() . '.' . $image->getClientOriginalExtension();
//             $image->storeAs($path, $imageName, 'public');
//             deleteImage($old_image,$path);
//         }else{
//           $imageName=$old_image;
//         }
//           return $imageName;
    
// }}
// if (!function_exists('deleteImage ')) {
//     function deleteImage($image, $path)
//     {
//          $imagePath =$path.$image; 
//           if(Storage::disk('public')->exists($imagePath)){
//             Storage::disk('public')->delete($imagePath);
//           }
//     }
// }




use Illuminate\Support\Facades\File;

if (!function_exists('uploadImage ')) {
    function uploadImage($image, $path,$old_image=null)
    {

      if($old_image){
        deleteImage($old_image,$path);
      }
     if (!File::exists($path)) {
        File::makeDirectory($path, 0755, true);
    }
   
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    File::put($path  . $imageName, file_get_contents($image));
   return $imageName;
    }
}
if (!function_exists('deleteImage ')) {
    function deleteImage($image, $path)
    {
        $path=public_path($path.$image);
        if(File::exists($path) && !File::isDirectory($path)){
            File::delete($path);
        }
    }
}