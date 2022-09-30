<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\About;
use App\Models\Brand;
use App\Models\Corpost;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Corporate;
use App\Models\Mentalite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        $all_categories = Category::where('status','0')->get();
        
        $all_about = About::where('name','about')->get();
        $all_kurumsal = Corporate::where('meta_title','kurumsal')->get();
        $all_basili = Corporate::where('meta_title','Basılı')->get();
        $all_creative = Corporate::where('meta_title','kreatif')->get();
        $all_media = Corporate::where('meta_title','medya')->get();
        $all_production = Corporate::where('meta_title','prodüksiyon')->get();
        $all_organization = Corporate::where('meta_title','organizasyon')->get();
        $all_urun = Corporate::where('meta_title','ürün')->get();
        $all_corporates = Corporate::where('status','0')->get();
        
        $all_services = Service::where('name','service')->get();
        
        $all_mentalites = Mentalite::where('name','mentalite')->get();
        
        $all_brands = Brand::find('image');
    
        $latest_posts = Post::where('status','0')->orderBy('created_at','DESC')->get()->take(10);
        $latest_corposts = Corpost::where('status','0')->orderBy('created_at','DESC')->get()->take(10);
        return view('frontend.index', compact('all_categories','latest_posts','latest_corposts', 'setting', 'all_corporates', 'all_kurumsal', 'all_basili', 'all_creative', 'all_media', 'all_production', 'all_organization', 'all_urun', 'all_about', 'all_brands', 'all_mentalites', 'all_services' ));
    }

    public function viewCategoryPost(string $category_slug)
    {
        $category = Category::where('slug',$category_slug)->where('status','0')->first();
        if($category)
        {
            $post = Post::where('category_id',$category->id)->where('status','0')->paginate(5);
            return view('frontend.post.index', compact('post','category'));
        }
        else
        {
            return redirect('/');
        }

    }

    public function viewPost(string $category_slug, string $post_slug)
    {
        $category = Category::where('slug',$category_slug)->where('status','0')->first();
        if($category)
        {
            $post = Post::where('category_id',$category->id)->where('slug', $post_slug)->where('status','0')->first();
            $latest_posts = Post::where('category_id',$category->id)->where('status','0')->orderBy('created_at','DESC')->get();
            return view('frontend.post.view', compact('post','latest_posts'));
        }
        else
        {
            return redirect('/');
        }
 
    }
    
    public function viewCorporatePost(string $corporate_slug)
    {
        $corporate = Corporate::where('slug',$corporate_slug)->where('status','0')->first();
        if($corporate)
        {
            $corpost = Corpost::where('corporate_id',$corporate->id)->where('status','0')->paginate(5);
            return view('frontend.corpost.index', compact('corpost','corporate'));
        }
        else
        {
            return redirect('/');
        }
 
    }
    
    public function viewCorpost(string $corporate_slug, string $corpost_slug)
    {
        $corporate = Corporate::where('slug',$corporate_slug)->where('status','0')->first();
        if($corporate)
        {
            $corpost = Corpost::where('corporate_id',$corporate->id)->where('slug', $corpost_slug)->where('status','0')->first();
            $latest_posts = Corpost::where('corporate_id',$corporate->id)->where('status','0')->orderBy('created_at','DESC')->get();
            return view('frontend.corpost.view', compact('corpost','latest_corposts'));
        }
        else
        {
            return redirect('/');
        }
    }
    
    public function ViewReference()
    {
        $all_brands = Brand::all();
        return view('frontend.reference.index', compact('all_brands'));
    }
    
    public function ViewMentalite()
    {
        $all_mentalites = Mentalite::all();
        return view('frontend.mentalite.index', compact('all_mentalites'));
    }
    
    public function ViewCareer()
    {
        return view('frontend.career.index');
    }
    
    public function ViewService()
    {
        $all_services = Service::all();
        return view('frontend.service.index', compact('all_services'));
    }
    
    public function ViewContact()
    {
        return view('frontend.contact.index');
    }
       
}
