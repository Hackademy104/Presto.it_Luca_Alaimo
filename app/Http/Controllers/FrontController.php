<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function welcome() {


    // $announcements = Announcement::take(6)->get()->sortByDesc('created_at');
 
        return view('welcome');
    }

    public function all_announcements() {



        $announcements = Announcement::where('is_accepted',true)->orderBy('created_at','DESC')->paginate(6);
     
            return view('all-announcements', compact('announcements'));
        }

        public function detail( Announcement $announcement){

        
            return view('announcement_detail', compact('announcement'));
        }

        public function categoryShow(Category $category){
          
            return view('categoryShow', compact('category'));
        }

        public function searchAnnouncements(Request $request){


            $announcements = Announcement::search($request->searched)->where('is_accepted',true)->paginate(10);
          
            return view('announcement.search',compact('announcements'));
        }

    
}
