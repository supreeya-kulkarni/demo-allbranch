<?php

namespace App\Http\Controllers;
use App\Mail\markdownmail;
use Mail;
use Illuminate\Http\Request;

class sendmail extends Controller
{
	public function index()
	{
		$myEmail = 'supriyakulkarni2014@gmail.com';

		$details = [
				'title' => 'Mail demo from softtrin', 'url' => 'https://laravel.com/docs/7.x/controllers#introduction'
		];

		Mail::to($myEmail)->send(new markdownmail($details));

		dd("Mail send Successfully");
	}    
}
