<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Whois\Whois;
class HomepageController extends Controller
{
    public function index()
    {
        return view('pages.homepage');
    }

    public function checkDomain(Request $request)
    {
        $validator = $request->validate([
            'domain' => 'required',
            'tld'   => 'required'
        ]);

        if($validator === false){
            return back()->withErrors(array("errors" => "Invalid requets, please complete all fields"));
        }

        $domain = $request->domain.'.'.$request->tld;

        $whois = new Whois;
        $whoisResponse = $whois->whoislookup($domain);
        $contain = preg_match('/(name\sserver|nameserver)/mi',$whoisResponse);

        if ($contain == false){

            $request->session()->put('domain',$domain);
            return redirect()->action('CartController@index');

        }



        return back()->withErrors(array("errors"=>"This domain is taken"));


    }

}
