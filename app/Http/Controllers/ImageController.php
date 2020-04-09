<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('upload')){
            $validator = Validator::make($request->all(), [
                'upload' => 'bail|required|file|image|max:3000'
            ]);
            if($validator->fails()){
                return ['error' => ['message' => 'tes']];
            }else{
                $url = $request->upload->store('blog-uploads', 'public');
                return ['url' => asset('storage/') .'/'. $url];
            }
        }else{
            return ['error' => ['message' => 'Error']];
        }
    }
}
