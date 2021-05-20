<?php

namespace App\Http\Controllers;
use App\Models\Punonjes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests\StorePunonjesRequest;
use Brian2694\Toastr\Facades\Toastr;
class AdminController extends Controller
{
    
    public function create()
    {
        return view('create');
    }

    public function store(StorePunonjesRequest $request)
    {   
        $punonjes = new Punonjes;
        $punonjes->emer = $request->input('emer');
        $punonjes->mbiemer = $request->input('mbiemer');
        $punonjes->pozicioni = $request->input('pozicioni');
        $punonjes->paga_ore = $request->input('paga_ore');
        $punonjes->data_rregjister = $request->input('data_rregjister');
        $day = Session::get('day');
        if($day==1)
        { 
            $punonjes->save();
        }
        else{
            Toastr::error('Punonjesi nuk mund te shtohet ne kete date! :(','Error');
            return redirect()->route('home');
        }
        Toastr::success('Punonjesi u shtua me sukses! :)','Success');
        return redirect()->route('home');
    }

    
    function getDate(Request $request){
        
        $day=$request['day'];
        Session::put('day', $day);

        return $day;
    }

    public function show($id)
    {   
        $punonjes= Punonjes::find($id);
        $day = Session::get('day');

        return view('show',['punonjes'=>$punonjes,'day'=>$day]);
    }
    
    public function destroy($id)
    { 
        $punonjes = Punonjes::findOrFail($id);
        $day = Session::get('day');
 
        if($day==30||$day==31)
        {
           $punonjes->delete();
        }
            else
            {
                $punonjesit = Punonjes::paginate(5);
                Toastr::error('Punonjesi nuk mund te fshihet ne kete date! :(','Error');
                return view('home', compact('punonjesit'));
            }
            $punonjesit = Punonjes::paginate(5);
            Toastr::success('Punonjesi u fshi me sukses! :)','Success');
            return view('home', compact('punonjesit'));
    }
}
