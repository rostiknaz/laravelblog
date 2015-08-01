<?
namespace App\Http\Controllers;

use DB;
use App\Post;
use App\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function getIndex()
    {

        return view('home')
            ->with('posts', Post::paginate(10))
            ->with('title', 'Blog | Home')
            ->with('description','This is the Home Page Blog')
            ->with('category', Category::all());
    }

    public function getView($id)
    {
        return view('view')
        ->with('title', 'Blog | Post')
        ->with('post', Post::find($id))
        ->with('category', Category::all());
    }

    public function getViewCat($category_id)
    {
       // $posts = DB::table('posts')
       //     ->where('category_id', '=', $category_id)
        //    ->get();

        return view('category')
        ->with('title', 'Blog | Category')
        ->with('catdescription',Category::select('description')->where('id', $category_id)->first())
        ->with('posts', Post::where('category_id', '=', $category_id)->paginate(10))
        ->with('category', Category::all());
    }
}