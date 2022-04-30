<?php

namespace App\Service;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class OrderService
{
    public function index()
    {
        return true;
    }

    public static function create($msg)
    {
        if ($msg == 's') {
            return true;
        } else {
            return false;
        }
    }

    public function create2(Request $request)
    {
        if ($request->name == 'Sally') {
            return ['created' => 3];
        }
    }

    public function create3(Request $request)
    {
        $result = [];
        $result['msg'] = '404';
        $result['data'] = "";
        $result['code'] = "";

        try{
            $res = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            $result['code'] = 200;
            $result['msg'] = 'success';
            $result['data'] = $res;
        }catch(Exception $e){
            $result['msg'] = 'fail';
            $result['code'] = 404;
        }
        
        
        return ($result);
    }
}
