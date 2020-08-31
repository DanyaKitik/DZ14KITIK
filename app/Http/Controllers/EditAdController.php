<?php


namespace App\Http\Controllers;


use App\Ad;

class EditAdController
{
    public function find($id = null)
    {
        $ad = Ad::find($id);
        return view('edit-ad',['ad' => $ad]);
    }
    public function save($id = null){
        $ad = Ad::find($id);
        $ad->title = request()->get('title');
        $ad->description = request()->get('description');
        $ad->save();
        return redirect('/');

    }
}
