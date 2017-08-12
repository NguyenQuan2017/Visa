<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VisaCard;
use App\Models\Service;
use Validator;
use Carbon;
use DB;

class DashboardController extends Controller
{
    public function dashboard(){

    	$visacards=DB::table('visacards')->join('services','services.card_id','=','visacards.id')->select('*','visacards.id as card_id')->get();

    	return view('admin/dashboard',compact('visacards'));
    }

    public function getCard(){

    	return view('admin/modal/add');
    }
    public function postCard(Request $request){

    	$rules=[
    	'name'=>'required',
    	'id_card'=>'required|unique:visacards,id_card',
    	'valid_date'=>'required',
    	'code'=>'required',
    	'service'=>'required',
        'status'=>'required'
    	];
    	$messages=[
    		'name.required'=>'Vui lòng nhập họ tên',
    		'id_card.required'=>'Vui lòng nhập id card',
    		'id_card.unique'=>"Id card đã tồn tại",
            'valid_date.required'=>'Vui lòng nhập Valid Date',
    		'code.required'=>'Vui lòng nhập mã code',
    		'service.required'=>'Vui lòng chọn service',
            'status.required'=>'Vui lòng chọn trạng thái'
    	];
    	$validator=Validator::make($request->all(),$rules,$messages);
    	if($validator->passes()){

    		$visa_card=new VisaCard;
    		$visa_card->name=$request->name;
    		$visa_card->id_card=$request->id_card;
    		$visa_card->valid_date=$request->valid_date;
    		$visa_card->code=$request->code;
            
           
            $visa_card->save();
             $card_id=$visa_card->id;

            if($request->exists('service')){
            foreach(($request->service) as $service){
                $services=new Service;
                $services->card_id=$card_id;  
                $services->name_service=$service;
                $services->status=$request->status;
                $services->save();
                 }
            }

            return redirect()->route('dashboard')->with('messages','Thêm Thành Công');
    	}
    	else{
    		return redirect()->back()->withErrors($validator);
    	}

    }

    public function getEditCard($id){

        $visa_card=VisaCard::find($id);
         $service=VisaCard::find($id)->services;
         // dd($service);  
         // foreach($service as $item){
         //    $services=$item->id;
         //    dd($services);
         // }   

        return view('admin/modal/edit',compact('visa_card','service'));

    }

    public function postEditCard(Request $request){
        
    
     $rules=[
        'name'=>'required',
        'id_card'=>'required',
        'valid_date'=>'required',
        'code'=>'required',
        'service'=>'required',
        'status'=>'required'
        ];
        $messages=[
            'name.required'=>'Vui lòng nhập họ tên',
            'id_card.required'=>'Vui lòng nhập id card',
            'valid_date.required'=>'Vui lòng nhập Valid Date',
            'code.required'=>'Vui lòng nhập mã code',
            'service.required'=>'Vui lòng chọn service',
            'status.required'=>'Vui lòng chọn trạng thái'
        ];
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->passes()){
            $visa_card=VisaCard::where('id',$request->id_visa_card)->first(); 
            $visa_card->name=$request->name;
            $visa_card->id_card=$request->id_card;
            $visa_card->valid_date=$request->valid_date;
            $visa_card->code=$request->code;
            
            $visa_card->save();
             $card_id=$visa_card->id;

            if($request->exists('service')){
            foreach(($request->service) as $service){
                $services=Service::where('id',$request->id_service)->first();
                $services->card_id=$card_id;  
                $services->name_service=$service;
                $services->status=$request->status;
                $services->save();
                 }
            }

            return redirect()->route('dashboard')->with('messages','Cập Nhật Thành Công');
        }
        else{
            return redirect()->back()->withErrors($validator);
        }
    }
    public function delete($id){
      
        $services=VisaCard::find($id)->services;
        foreach($services as $value){
            
        }     
        $value->delete($id);  
        return redirect()->route('dashboard');
    
    }
}
