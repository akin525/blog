<?php


namespace App\Http\Controllers;


use App\Charts\SampleChart;
use App\Models\bill;
use App\Models\charges;
use App\Models\deposit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
public function dashboard()
{
    $today = Carbon::now()->format('Y-m-d');
    $customer['deposit']=deposit::where('username', Auth::user()->username)->sum('amount');
    $customer['bill']=bill::where('username', Auth::user()->username)->sum('amount');
    $customer['charge']=charges::where('username', Auth::user()->username)->sum('amount');
    $customer['allbill']=bill::all();
    $customer['week']=bill::where([['created_at', 'like', '%'. Carbon::now()->subDays(7)->format('y-m-d'). '%']])->sum('amount');
    $chart = new SampleChart;
    $chart->labels(['Wallet Balance', 'Total Deposit', 'Total Bill', 'Total Charges']);
    $chart->dataset('My dataset', 'line', [Auth::user()->wallet, $customer['deposit'], $customer['bill'], $customer['charge']])
        ->options([
            'color' => '#ff0000',
        ]);
//    Alert::toast('Welcome back'.Auth::user()->name, 'success');
    return view('dashboard', compact('customer', 'chart'));

}
public function index()
{
    $user=User::where('username', Auth::user()->username)->first();

    return view('profile', compact('user'));
}
public function update(Request $request)
{

    $validator = Validator::make($request->all(), [
        'name' => 'required|max:200',
        'number' => 'required|max:200',
        'email' => 'required'
    ]);

    if ($validator->fails()) {
        return back()
            ->withErrors($validator)
            ->withInput();
    }

    $user=User::where('username', Auth::user()->username)->first();

    $user->name=$request->name;
    $user->email=$request->email;
    $user->number=$request->number;
    $user->save();
    $mg='Profile updated successfully';
    Alert::success('Success', $mg);
    return back();
}
}
