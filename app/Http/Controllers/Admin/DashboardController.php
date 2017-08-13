<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VisaCard;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Validator;
use Carbon;
use DB;

class DashboardController extends Controller
{
    public function dashboard(){

    	$visacards=VisaCard::all();

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
      
        return view('admin/modal/edit',compact('visa_card'));

    }

    public function postEditCard(Request $request){
        
    
     $rules=[
        'name'=>'required',
        'id_card'=>'required',
        'valid_date'=>'required',
        'code'=>'required',
       
        ];
        $messages=[
            'name.required'=>'Vui lòng nhập họ tên',
            'id_card.required'=>'Vui lòng nhập id card',
            'valid_date.required'=>'Vui lòng nhập Valid Date',
            'code.required'=>'Vui lòng nhập mã code',
          
        ];
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->passes()){
            $visa_card=VisaCard::where('id',$request->id_visa_card)->first(); 
            $visa_card->name=$request->name;
            $visa_card->id_card=$request->id_card;
            $visa_card->valid_date=$request->valid_date;
            $visa_card->code=$request->code;
            
            $visa_card->save();
           

            return redirect()->route('dashboard')->with('messages','Cập Nhật Thành Công');

        }
        else{
            return redirect()->back()->withErrors($validator);
        }
    }
    public function delete($id){
      
        $services=VisaCard::find($id);
        $services->delete($id);  
        return redirect()->route('dashboard');
    
    }
    public function getListService(){

        $services=Service::with('card')->get();
        return view('admin/service/list',compact('services'));
    }

    public function getEditService($id){
        $service=Service::find($id);

        return view('admin/service/edit',compact('service'));
    }
    public function postEditService(Request $request){

        $rules=[

        'service'=>'required',
        'status'=>'required'
        ];

        $messages=[
        'service.required'=>"Vui lòng chọn service",
        'status.required'=>"Vui lòng chọn status"
        ];

        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->passes()){
            $services=Service::where('id',$request->service_id)->first();
            $services->name_service=$request->service;
            $services->status=$request->status;
            $services->save();
            return redirect()->route('service-list')->with('messages','Cập Nhật Thành Công');
        }
        else{
            return redirect()->back()->withErrors($validator);
        }
    }

    public function deleteService($id){

        $service=Service::find($id);
        $service->delete($id);
        return redirect()->route('service-list')->with('messages','Xoá Thành Công');
    }

    public function login(){

        return view('admin/login/login');
    }
    public function postLogin(Request $request){

        $rules=[
        'email'=>"required|email",
        'password'=>'required'
        ];

        $messages=[
        'email.required'=>'Vui lòng nhập email',
        'email.email'=>'Email không đúng định dạng',
        'password.required'=>'Vui lòng nhập password'
        ];

        $validator=Validator::make($request->all(),$rules,$messages);

        if($validator->passes()){

            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

                return redirect()->route('dashboard');
            }
            else{
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }

        }
        else{
            return redirect()->back()->withErrors($validator);
            }
    }

     public function logout(){

        Auth::logout();
        return redirect()->route('login');
    }
}
