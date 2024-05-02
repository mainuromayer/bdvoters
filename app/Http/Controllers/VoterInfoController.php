<?php

namespace App\Http\Controllers;

use App\Models\VoterInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mockery\Exception;

class VoterInfoController extends Controller
{
    public function addvoterInfo(){
        return view('voterinfo.voterinfo');
    }


//    public function createUser(Request $request){
//        try {
//            UserInfo::create([
//                'name' => $request->input('name'),
//                'fathers_or_husband' => $request->input('fathers_or_husband'),
//                'birth_date' => date('Y-m-d', strtotime($request->input('birth_date'))),
//                'division' => $request->input('division'),
//                'district' => $request->input('district'),
//                'union' => $request->input('union'),
//                'election_area' => $request->input('election_area')
//            ]);
//
//            return redirect('/user')->with('status', 'User Created');
//        }catch (Exception $exception){
//            return response()->json([
//                'status' => 'failed',
//                'message' => $exception->getMessage()
//            ]);
//        }
//    }
//    public function updateUser(Request $request, int $id){
//        try {
//            UserInfo::findOrFail($id)->update([
//                'name' => $request->input('name'),
//                'fathers_or_husband' => $request->input('fathers_or_husband'),
//                'birth_date' => date('Y-m-d', strtotime($request->input('birth_date'))),
//                'division' => $request->input('division'),
//                'district' => $request->input('district'),
//                'union' => $request->input('union'),
//                'election_area' => $request->input('election_area')
//            ]);
//
//            return redirect('/user')->with('status', 'User Updated');
//        }catch (Exception $exception){
//            return response()->json([
//                'status' => 'failed',
//                'message' => $exception->getMessage()
//            ]);
//        }
//    }
}
