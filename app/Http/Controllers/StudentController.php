<?php

namespace App\Http\Controllers;

use App\SinhVien;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getList()
    {
        $user = SinhVien::all();
        return $user;
    }

    public function getAdd(Request $request)
    {
        $params = $request->only('name', 'age', 'adress');
        $sinhVien = new SinhVien();
        $sinhVien->fill($params);
        $sinhVien->save();
        return response($sinhVien, 200);
    }
    public  function delete($id)
    {
        SinhVien::find($id)->delete();
        return "success";
    }
    public function update(Request $request ){
        SinhVien::find($request->id)->update(['age'=>$request->age,'name'=>$request->name,'adress'=>$request->adress]);
    }
}
