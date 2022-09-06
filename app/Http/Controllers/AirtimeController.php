<?php


namespace App\Http\Controllers;


use App\Models\bill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AirtimeController extends Controller
{
public function index()
{
    return view('airtime');
}
public function mcdbuy(Request $request)
{
    $validator = Validator::make($request->all(), [
        'network' => 'required|max:200',
        'number' => ['required',  'min:11', 'max:11'],
        'amount'=>['required', 'min:100', 'max:1000'],
    ]);

    if ($validator->fails()) {
        return back()
            ->withErrors($validator)
            ->withInput();
    }
    $ref=$request->refid;
    if ($request->amount < 100) {
        $mg = "Minimum amount is 100. Kindly increase amount and try again";
        Alert::toast($mg, 'error');
        return back();
    }

    if (Auth::user()->wallet < 1) {
        $mg = "Insufficient balance. Kindly topup and try again";
        Alert::toast($mg, 'error');
        return back() ;
    }

    if (Auth::user()->wallet < $request->amount) {
        $mg = "Insufficient balance. Kindly topup and try again";
        Alert::toast($mg, 'error');
        return back()->withErrors($mg);
    }

    $bo = bill::where('ref', $ref)->first();

    if ($bo) {
        $mg = "Suspected duplicate transaction";
        Alert::toast($mg, 'warning');
        return back()->withErrors($mg);
    }

    $user=User::where('username', Auth::user()->username)->first();
    $remain=$user->wallet - $request->amount;
    $user->wallet=$remain;
    $user->save();


    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => env('MCD_URL_test') . 'pay',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('service' => 'airtime','coded' => $request->network,'phone' => $request->number,'amount' => $request->amount),
        CURLOPT_HTTPHEADER => array(
            'Authorization: '.env('MCD_KEY')
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;



}
public function easyaccessdbuy(Request $request)
{
    $validator = Validator::make($request->all(), [
        'network' => 'required|max:200',
        'number' => ['required',  'min:11', 'max:11'],
        'amount'=>['required', 'min:100', 'max:1000'],
    ]);

    if ($validator->fails()) {
        return back()
            ->withErrors($validator)
            ->withInput();
    }
    $ref=$request->refid;
    if ($request->amount < 100) {
        $mg = "Minimum amount is 100. Kindly increase amount and try again";
        Alert::toast($mg, 'error');
        return back();
    }

    if (Auth::user()->wallet < 1) {
        $mg = "Insufficient balance. Kindly topup and try again";
        Alert::toast($mg, 'error');
        return back() ;
    }

    if (Auth::user()->wallet < $request->amount) {
        $mg = "Insufficient balance. Kindly topup and try again";
        Alert::toast($mg, 'error');
        return back()->withErrors($mg);
    }

    $bo = bill::where('ref', $ref)->first();

    if ($bo) {
        $mg = "Suspected duplicate transaction";
        Alert::toast($mg, 'warning');
        return back()->withErrors($mg);
    }

    $user=User::where('username', Auth::user()->username)->first();
    $remain=$user->wallet - $request->amount;
    $user->wallet=$remain;
    $user->save();


    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => env('easyaccess_url') . 'airtime.php',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('network' => '01','amount' => '100','mobileno' => '07025019204','airtime_type' => '001','client_reference' => '0987764proto'),
        CURLOPT_HTTPHEADER => array(
            "AuthorizationToken: ".env('easyaccess_key')
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;



}
}
