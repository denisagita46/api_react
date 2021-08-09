<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Str;

class ProfilController extends Controller
{

	public function all()
    {
		return Profile::all();
    }
	
	public function show($id)
    {
		$page = Profile::where('slug', $id)->get();
		return Profile::find($page);
    }
	
	public function create_profile(request $request)
	{
	    $profile = new Profile;
		$profile->tanggal_join 	= $request->tanggal_join;
		$profile->jenis_kelamin = $request->jenis_kelamin;
		$profile->usia 			= $request->usia;
		$profile->email 		= $request->email;
		$profile->phone 		= $request->phone;
		$profile->hobby 		= $request->hobby;
		$profile->Alamat 		= $request->Alamat;
		$profile->slug 			= Str::random(20);
		$profile->save();
		
		return "data berhasil create database";
	
	}
}
