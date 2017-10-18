<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TransactionDetail;


class RoomController extends Controller{
    function BookingTransaction(Request $req){
    DB::beginTransaction(); 
    try{ 
        $this->validate($req,[
            'customer_id' => 'required',
            'room_id' => 'required',
        ]);
    
        $transaction = new TransactionDetail;
        $transaction->Customer_id = $req->input('Customer_id');
        $transaction->Room_id = $req->input('Room_id');
        $transaction->TransactionDate = $req->input('TransactionDate');
        $transaction->price = "";
        $transaction->CheckInDate= "";
        $transaction->CheckOutDate= "";
        $transaction->save();

        return response()->json(['message' => 'Succesfully Create Transaction Details'], 200);
    }
    catch(\Exception $e){
        DB::rollback();
        return response()->json(['message' => 'Failed to create Transaction Details, exception:' + $e], 404); 
    }
}
}
