<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function index(){
        return view('Admin.home');
    }

    public function bookregister(Request $req){
        
        $data=new Book();
          
        $data->bookname=$req->bookname;
        $data->bookcode=$req->bookcode;
        $data->aurthor=$req->aurthor;
        $data->publisher=$req->publisher;
        $data->save();

        return redirect('home')->with('success','data saved successfully');


    }
    public function list(){
            

        $data=Book::all();
        return view('admin.home',['books'=>$data]);
    }


    
    public function search(Request $request){
                if($request->isMethod('POST')){
                    $bookname=$request->get('query');
                    $books=Book::where('bookname','LIKE','%'.$bookname.'%')->orWhere('bookcode','LIKE','%'.$bookname.'%')->get();
                   
                }
                return view('Admin.home',compact('books'));
    }


   public function edit($id){
        
    // return $id;
    $books=Book::where('id',$id)->get();
    return view('Admin.bookupdate',['books'=>$books]);
   }

   public function update(Request $request){
          
       $id=$request->id;
       $bookname=$request->bookname;
       $bookcode=$request->bookcode;
       $aurthor=$request->aurthor;
       $publisher=$request->publisher;

       $isUpdateSuccess=Book::where('id',$id)->update(['bookname'=>$bookname,'bookcode'=>$bookcode,'aurthor'=>$aurthor,'publisher'=>$publisher]);
          
        if($isUpdateSuccess){
            return redirect('home')->with('successupdate','update successfully');
        }

   }
   public function delete(request $request){

    $data=Book::find($request->id);
    $data->delete();
    return redirect("home");
   }
}
