<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\EnterpriseAccount;
use App\BalanceMessage;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $enterprises = EnterpriseAccount::latest()->paginate(5);
        return view('enterprise.enterprise', compact('enterprises'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
//        return view('AddEnterprise');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'EnterpriseName' => 'required|string|unique:EnterpriseAccount',
            'EnterpriseContactnumber' => 'required',
            'EnterpriseEmail' => 'required|email',
            'EnterpriseAddress' => 'required',
        ]);


        EnterpriseAccount::create($request->all());
        return redirect()->route('enterprise.index')
            ->with('success', 'Enterprise created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EnterpriseAccount $enterprise)
    {

        return view('enterprise.editEnterprise', compact('enterprise', $enterprise))->with('status', 'Edit Enterprise');

    }

    public function reserve($id)
    {
        $enterprise = EnterpriseAccount::find($id);
//        return "hello";

        return view('enterprise.reserve-msg', compact('enterprise', $enterprise))->with('status', 'Reserve Enterprise');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
//            'EnterpriseName' => 'required|string|unique:EnterpriseAccount',
            'EnterpriseContactnumber' => 'required',
            'EnterpriseEmail' => 'required|email',
            'EnterpriseAddress' => 'required',
        ]);

        EnterpriseAccount::find($id)->update($request->all());

        return redirect()->route('enterprise.index')
            ->with('success', 'Article updated successfully');
    }

    public function updateBalance(Request $request)
    {

        $userId=Auth::user()->id;
        echo $userId;

        if(BalanceMessage::where('userId',$userId)->count()>0) {

            $balance=BalanceMessage::where('userId',$userId);

            $dialog=$balance->increment('DialogBalance' ,4);
            $mobitel=$balance->increment('MobitelBalance' ,$request->input('mobitel'));
            $airtel=$balance->increment('AirtelBalance' ,$request->input('airtel'));
            $etisalat=$balance->increment('EtisalatBalance' ,$request->input('etisalat'));

            $balance->update(['DialogBalance'=>$dialog,'MobitelBalance'=>$mobitel,'AirtelBalance'=>$airtel,'EtisalatBalance'=>$etisalat]);

        }else{

            BalanceMessage::create([
                'userId'=> $userId,
                'DialogBalance' => $request->input('dialog'),
                'MobitelBalance' => $request->input('mobitel'),
                'AirtelBalance' => $request->input('airtel'),
                'EtisalatBalance' => $request->input('etisalat'),
            ]);
        }

        return redirect()->route('enterprise.index')
            ->with('success', 'Message Reserved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
