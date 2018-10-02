<?php

namespace App\Http\Controllers; //tells the code it belongs to the folder alone unless it gets explicit permission
use App\Post;

class PagesController extends Controller {


     public function getAbout(){
          $first="Fidel";
          $last="Omolo";

          $name=$first ." ". $last;
          $email="fidelomolo7@gmail.com";


        return view('Pages/about')->with("fullname",$name)->withEmail($email)->with("about","active");
    }

    public function getContact(){
        $contact=[];
        $contact['email']="fidelomolo13@gmail.com";
        $contact['mobile']="0721253468";

        return view('Pages/contact')->withContacts($contact)->with("contact","active");
    }

    public function getIndex(){

        $posts=Post::orderBy('created_at','asc')->limit(4)->get();


        return view('Pages/welcome')->withPosts($posts);

     }

}
