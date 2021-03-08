<?php

namespace App\Http\Controllers;
use Illuminate\Support\Response;
use Illuminate\Http\Request;
use App\Application;
use DB;
use PDF;
class PagesController extends Controller
{
    public function form(){
    return view('form');
                          }
    public function mainhomepage()
    {
    return view('mainhomepage');
    }
    public function dcsoform(){
        return view('/dcsoform');
                              }
    public function mainhome(){
        return view('/mainhome/mainhome');
    }

     public function footer(){
        return view('/footer');
}
  
    public function test(){
        return view('/login/test');  
    }   
    // public function Formstatus()
    // {
    //     return view('Formstatus');
    // }

    
    public function submitsucess()
    {
        return view('submitsucess');
    }
    public function rejectform()
    {
        return view('reject');
    }
   

    public function appform()
    {
        $persons= Application::all(); 
        return view('applicantsform')->with ('persons', $persons);                     
     }

public function show($id)
     {
      $vars=Application::find($id);
      return view ('retrieve') ->with ('vars',$vars );
     }
    //  public function dcsoview //q
     public function retrievesubmit(request $request,$id)
     {
        $vars=Application::find($id);
        if ($request->has('issue'))
        {
            $vars->status_forwarder='issue';
            $vars->pending_status='Signature Required';
            $vars->save();
            return redirect('/submitsucess')->with('success', 'Issued successful!!');
        }
      
        else if($request->has('reject'))
        {
            $vars->status_forwarder='reject';
            $vars->save();
        return redirect('/reject')->with('vars',$vars);
        }

        else if ($request->has('sign'))
        {
            $vars->pending_status='signed';
            $vars->save();
        return redirect('/submitsucess')->with('success', 'You have Signed successful!!');

        }

        


     }

     public function formsubmit(request $request,$id)
     {
        $vars=Application::find($id);
        if ($request->has('submit'))
        {
            $vars->csc_status='submit';
            $vars->save();
            return redirect('/submitsucess')->with('success', 'Submit successful!!');
        }
        
    }
    // cscviewpage//////////////////////////////////////////////////////////////////////--->
    public function cscview()
    {
        return view('cscview');
    }
      // cscviewpage//////////////////////////////////////////////////////////////////////--->



    //  CSC status/////
         public function cscstatus()
     
         
     {
        $persons = DB::select('select * from applications where csc_status = ?', ['submit']);
        return view('applicantsform') ->with ('persons', $persons);
     }
        //  CSC status///////  CSC status///////  CSC status///////  CSC status///////  CSC status/////


    //  DCSO status/////
        public function forwarderview()
     
      {
         $dcso = DB::select('select * from applications where status_forwarder = ?', ['issue']);
         return view('forwarderview') ->with ('dcso', $dcso);
         
         
         {
            $dcso = DB::select('select * from applications where status_forwarder = ?', ['reject']);
            return view('forwarderview') ->with ('dcso', $dcso);
         }
      }
          //  DCSO status//////////////////////////////////////////////////////////////////////
          

          public function pendingstatus()
     
          {
             $pending = DB::select('select * from applications where pending_status = ?', ['Signature Required']);
             return view('pendingstatus') ->with ('pending', $pending);
          }
    



            //  download files////////////////////////////////////////////////////////////////////////////
     public function download1($house_tax_file)
    {
        return response()->download(public_path().'/storage/documents/'. $house_tax_file);
    }
    public function download2($surrender_file)
    {
        return response()->download(public_path().'/storage/mydoc/'. $surrender_file );
    }

    public function download3($support_document_file)
    {
        return response()->download(public_path().'/storage/mydoc2/'. $support_document_file );
    }
        //  download files//////////////////////////////////////////////////////////////////////////////////

    
    public function act($id)
    {
        $person = Application::find($id);
        $pdf = PDF::loadView('acknowledge',compact('person'));
        //  return $pdf->download('testing.pdf');
        return $pdf->stream();
    }
    public function Rationissue($id)
    {$vars=Application::find($id);
        return view ('Rationissue') ->with ('vars',$vars );
    }

    // public function search(Request $request)
    // {
    //     $query = $request->get('query');
    //     // dd($query);
    //     $results = Application::where('Address_State','LIKE','%'.$query.'%' );
    //     // return($search);
    //     return view('search', compact('results'));
       
       public function Formstatus()
       {
       $Formstatus=Application::all();
       return view('Formstatus',['Formstatus'=>$Formstatus]);
       }
        public function search ()
        {
            $search_text = $_GET['search'];
            $registration =Application::where('registration','LIKE', '%'.$search_text.'%')->get();
            // dd($Address_State);
            return view ('search',
            ['registration'=>$registration]);
        }
      
        
} 
