<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Objects\Models\Auth\Settings;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    //
    public function __invoke($process = 'activate')
    {
        if(method_exists($this, $process))
            return $this->$process(request());
        die("$process is not valid on this website!");
    }

    public function activate(Request $request)
    {

    }

    public function suspend(Request $request)
    {

    }

    public function settings(Request $request)
    {
        if($request->method() != 'POST'){
            $status = 'The action performed was not a-o-k';
            return redirect('/home')->withStatus($status);
        }
        try{
            $dataInit = $request->only('name');
            $dataInit['user_id'] = $request->user()->id;

            $settings = Settings::firstOrCreate($dataInit);
            $settings->fill($request->all())->save();

            $status = ['status' => 'Yaa bueno!'];
        }
        catch(\Exception $e){
            $status = ['error' => 'No bueno!'];
        }
        return back()->with($status);
    }
}
