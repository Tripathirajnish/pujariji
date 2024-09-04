<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Kathavachak;
use App\Models\Astrologer;
use Validator;
use File;

class BlogAPIController extends Controller
{
    // Store
    public function store_blog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'added_by' => 'required',
            'blog_image' => 'required|image',
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $blog_id = 'PUBG' . rand(11, 99) . date('dmy') . last_id('blogs');

        // Handle profile image upload
        if ($request->hasFile('blog_image')) {
            $path = public_path('blog_image');
            $blog_image = $blog_id.'_blog.'.$request->file('blog_image')->getClientOriginalExtension();
            $imagePath = $request->file('blog_image')->move($path, $blog_image);
        }

        $blog = new Blog;
        $blog->blog_id = $blog_id;
        $blog->date = date('Y-m-d');
        $blog->added_by = $request->input('added_by');
        $blog->blog_image = $blog_image;
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->save();

        return $responseArray = [
            'status_code' => 200,
            'message' => 'Added Successfully',
            'response' => $blog_id
        ];
    }




    // Blog list
    public function getBlogList(Request $request){
        $validator = Validator::make($request->all(), [
            'added_by' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $verified = Blog::where('added_by', $request->added_by)->whereNull('deleted_at')->where('status','0')->latest()->select('blog_id','date','added_by','blog_image','title','description','status')->get();
        $pending = Blog::where('added_by', $request->added_by)->whereNull('deleted_at')->where('status','1')->latest()->select('blog_id','date','added_by','blog_image','title','description','status')->get();

        return $responseArray = [
            'status_code' => 200,
            'message' => 'Blog Found',
            'response' => [
                'verified' => $verified,
                'pending' => $pending
            ]
        ];
    }


    // Get Detailed Blog
    public function get_detailed_blog(Request $request){
        $validator = Validator::make($request->all(), [
            'added_by' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $blog = Blog::where('added_by', $request->added_by)->whereNull('deleted_at')->latest()->select('blog_id','date','added_by','blog_image','title','description','status')->first();

        return $responseArray = [
            'status_code' => 200,
            'message' => 'Blog Found',
            'response' => $blog
        ];
    }

    // Delete Blog
    public function delete_blog(Request $request){
        $validator = Validator::make($request->all(), [
            'added_by' => 'required',
            'blog_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $blog = Blog::where('added_by', $request->added_by)->whereNull('deleted_at')->where('blog_id',$request->blog_id)->first();

        if($blog){

            $directoryPath = public_path('blog_image/' . $blog->origional_blog_image);
                if (File::exists($directoryPath)) {
                    File::delete($directoryPath);
                }
            $delete = Blog::where('added_by', $request->added_by)->whereNull('deleted_at')->where('blog_id',$blog->blog_id)->delete();

            return $responseArray = [
                'status_code' => 200,
                'message' => 'Blog Deleted',
                'response' => $request->blog_id
            ];
        }
        return $responseArray = [
            'status_code' => 400,
            'message' => 'Blog Not Found',
            'response' => ''
        ];
    }





    // Blog list
    public function getJajmaanBlogList(Request $request){

        $blog = Blog::whereNull('deleted_at')->latest()->where('status','0')->select('blog_id','date','added_by','blog_image','title','description','status')->get();
        foreach ($blog as $key => $value) {
            if($verify = Kathavachak::where('kthavchk_id',$value->added_by)->where('deleted_at',NULL)->first()){
                if(!is_null($verify)){
                    $value->name = $verify->kthavchk_name.' '.$verify->kthavchk_surname;
                    $value->image = $verify->kthavchk_image;
                }
            }elseif($verify = Astrologer::where('astro_id',$value->added_by)->where('deleted_at',NULL)->first()){
                if(!is_null($verify)){
                    $value->name = $verify->astro_name.' '.$verify->astro_surname;
                    $value->image = $verify->astro_image;
                }
            }
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'Blog Found',
            'response' => $blog
        ];
    }


    // Get Detailed Blog
    public function get_jajmaan_detailed_blog(Request $request){
        $validator = Validator::make($request->all(), [
            'blog_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $blog = Blog::where('blog_id', $request->blog_id)->where('status','0')->whereNull('deleted_at')->latest()->select('blog_id','date','added_by','blog_image','title','description','status')->first();
        if($blog){
            $verify = Kathavachak::where('kthavchk_id',$blog->added_by)->where('deleted_at',NULL)->first();
            if(!is_null($verify)){
                $blog->name =$verify->kthavchk_name.' '.$verify->kthavchk_surname;
                $blog->image = $verify->kthavchk_image;
            }
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'Blog Found',
            'response' => $blog
        ];
    }


}
