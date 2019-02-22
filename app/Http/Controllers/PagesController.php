<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Booking;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Mail;
use App\Blog;
use App\comment;

class PagesController extends Controller
{
    public function home()
    {
        $cars=Car::all();
        return view('website.pages.home',compact('cars'));
    }
    public function cars()
    {
        $cars=Car::all();
        return view('website.pages.cars',compact('cars'));
    }

    public function contactus()
    {
        return view('website.pages.contact');
    }

    public function about()
    {
        return view('website.pages.about');
    }

    public function service()
    {
        return view('website.pages.service');
    }
    public function bloghome()
    {
       
        $blogs=Blog::all();
        return view('website.pages.bloghome',compact('blogs'));
    }

    

    public function RentSpacificCar($id)
    {
        $cars=Car::find($id);
        return view('website.pages.specific',compact('cars'));
    }

    public function StoreSpacificCar(Request $request)
    {
        $car= Car::find($request->input('car_id'));

        $user=Auth::user();
        if($user){
        $book=new Booking;
        $book->pickup_location=$request->input('pickup_location');
        $book->pickup_date=$request->input('pickup_date');
        $book->dropout_date=$request->input('dropout_date');
        $book->full_name=$request->input('full_name');
        $book->email=$request->input('email');
        $book->phone_number=$request->input('phone_number');
        
        
        $book->car_id=$car->id;
        $book->user_id=$user->id;

       
        $book->save();
        return redirect('/');
        }
        return redirect('/login');
    }

    public function singleblog($id)
    {
        $comments=comment::where('blog_id',$id)->get();
        $blogs=Blog::find($id);
        return view('website.pages.singleblog',compact('blogs','comments'));
    }
    


   
    public function bookcar(Request $request)
    {
        $car= Car::find($request->input('car_id'));
        

        $user=Auth::user();
        if($user)
          {
            $book=new Booking;
            $book->pickup_location=$request->input('pickup_location');
            $book->pickup_date=$request->input('pickup_date');
            $book->dropout_date=$request->input('dropout_date');
            $book->full_name=$request->input('full_name');
            $book->email=$request->input('email');
            $book->phone_number=$request->input('phone_number');
            
            
            $book->car_id=$car->id;
            $book->user_id=$user->id;
    
           
            $book->save();
            return redirect('/');
                  }
                  return redirect('/login');
        
        
    }
    public function sendemail(Request $request)
    {
        $data=array(
         
         'email'=>$request->email,
         'subject'=>$request->subject,
         'msg'=>$request->msg,
        );
        Mail::send('mails.mail',$data,function($message)
        use($data)
        { 
           
            $message->from($data['email']);
            $message->to('fakemail@fake.com');
            $message->subject($data['subject']);
        });

        return redirect('/');
    }

   
    public function StoreComment(Request $request)
    {
        $post= Blog::find($request->input('post_id'));
        
        $user=Auth::user();
        $comment=new comment;
       
        $comment->comment=$request->input('comment');
        $comment->blog_id=$post->id;
        $comment->user_id=$user->id;
       
        $comment->save();
        return back();
          
    }
    public function userProfile()
    {
        $user=Auth::user();
        return view('website.profile.index',compact('user'));
    }

    
}
