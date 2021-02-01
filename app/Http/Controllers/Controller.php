<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class Controller extends BaseController
{
    public function index(Request $request){
        $select = $request->input('select');
        $limit = $request->input('limit');
        $where = $request->input('conditions');
        $order = $request->input('order');
        $current_page = $request->input('current_page');
        // dd($select);
        $user = User::selectRaw($select)
            // ->whereRaw(DB::raw($where))
            // ->orderByRaw($order)
            ->limit($limit)
            ->get();
            
        
        $response = [
            'limit' => $limit,
            'total_row' => $user->count(),
            'total_data' => $user->count(),
            'total_page' => $user->count()/$limit,
            'current_page' => $current_page,
            'data' => $user,
        ];
        return response()->json($response, 200);
    }
}
