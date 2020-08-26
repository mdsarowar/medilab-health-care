<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ControllerNew extends Controller
{

//========== symptom============
    public function sympt(){
        return view('symptoms.sympt');
    }
    public function childrensympt(){
        return view('symptoms.children');
    }
    public function headsympt(){
        return view('symptoms.head');
    }
    public function eyesympt(){
        return view('symptoms.eye');
    }
    public function toothsympt(){
        return view('symptoms.tooth');
    }
    public function nosesympt(){
        return view('symptoms.ear_nose');
    }
    public function skinsympt(){
        return view('symptoms.skin');
    }
    public function chestsympt(){
        return view('symptoms.chest');
    }
    public function handsympt(){
        return view('symptoms.hand_lags');
    }
    

    //==========  end symptom============

    //========== calculator============

    public function calculator(){
         return view('calculator'); 
    }

    public function ibwcalculator(Request $request){
        $request->validate([
            'gender' => 'required',
            'feet' => 'required',
            'inches' => 'required',
            
        ]);
       $gen=$request->gender;
       $feet=$request->feet;
       $inches=$request->inches;
       $newinc=$feet*12;
       $inches=$inches + $newinc;
       $ibw=$inches*2.54;

       if($gen=='Male'){
          $nibw=$ibw-100;
          return view('calculator')->with('sar',$nibw);
        // return redirect()->back()->with('name','ami');
        
       }
       elseif($gen=='Female'){
        $nibw=$ibw-105;
        return view('calculator')->with('sar',$nibw);
       }
       

    }
    public function bmicalculator(Request $req){
  
        $gend=$req->gender;
        $fee=$req->ft;
        $inc=$req->inc;
        $weig=$req->wt;
        $newinc=$fee*12;
        $totalinc=$inc+$newinc;
        $into=$totalinc*0.0254;
        $bmi=$weig/($into*$into);
        $bmi=number_format($bmi,2);
        return view('calculator')->with('sarr',$bmi);
    }
     //========== calculator============

    public function subproblems(Request $request){
       $data1=array();
       $data1['name']=$request->name;
       $data1['email']=$request->email;
       $data1['phone']=$request->phone; 
       $data1['details']=$request->message; 
       $prob=DB::table('problems')->insert($data1);
       return redirect()->back();

    }



    public function sampledata(){
       $result=DB::table('samples')->get();
         return view('sampledata',compact('result')); 
    }


    public function samsubmit(Request $req){
        $data=array();
       $data['name']=$req->name;
       $data['email']=$req->email;
       $data['phone']=$req->phone;
       $data['age']=$req->age;
       $data['address']=$req->address;
       $data['house']=$req->house;
       $data['test']=$req->type;
       $data['details']=$req->message;
       
       $file=$req->file('file');

    
       if($file){
           $filename=str_random(5);
           $ext=strtolower($file->getClientOriginalExtension());
           $filefull=$filename.'.'.$ext;
           $uplodpath='public/assets/upimage/';
           $fileurl=$uplodpath.$filefull;
           $inputfile=$file->move($uplodpath,$filefull);
           $data['file']=$fileurl;

           dd($data);

        //    DB::table('samples')->insert($data);  
        //    return redirect()->back();   


       }else{
        DB::table('samples')->insert($data);  
        return redirect()->back();   
       }
        
    }

    
    //========== doctor============

    public function doctorpage(){
        return view('doctors.doctor');

    }
    public function doctorlist(Request $request){
        $arr=array();
        $arr['name']=$request->name;
        $arr['email']=$request->email;
        $arr['phone']=$request->phone;
        $arr['details']=$request->detail;
        $arr['department']=$request->depar;
        $list=DB::table('doctors')->insert($arr);
        return redirect()->back();

    }
    public function showdoctor(Request $re){
        $depa=$re->department;
        $name=$re->doctor;
        $res=DB::table('doctors')->where('department',$depa)->where('name',$name)->get();
        return view('doctors.showdoctor',compact('res'));
        
    }
    public function showdoctorli( $d){
        // $depa=$re->department;
        // $name=$re->doctor;
        $res=DB::table('doctors')->where('department',$d)->get();
        return view('doctors.showdoctor',compact('res'));
        
        
    }
 //========== doctor=========================
   
    }