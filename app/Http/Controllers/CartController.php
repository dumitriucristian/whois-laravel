<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    private $domainPrice;

    public function __construct()
    {
        $this->domainPrice = 10;
    }

    public function index(Request $request)
    {

        $this->addNewItem($request);
        $domains = $this->getCartItems($request);

        $totalCart = $this->getTotalCart($domains);
        return view('pages.cart',
            array(
                'domains'=>$domains,
                'totalCart' => $totalCart
            )
        );
    }

    private function addNewItem($request)
    {

        $domain = $request->session()->get('domain');
        $domains = $this->getCartItems($request);

        if(empty($domains))
        {
            $request->session()->put('domains','domain');
            return   $request->session()->push('domains.domain', $domain);
         }

        if(in_array($domain, $domains) === false){
          return   $request->session()->push('domains.domain', $domain);
        }
    }


    private function getCartItems($request)
    {

       return  $request->session()->get('domains.domain');
    }

    private function getTotalCart($domains)
    {

      // dd( is_array($domains));
        if(is_array($domains) === false){
            return $this->domainPrice;
        }
       return count($domains) * $this->domainPrice;
    }

    public function removeDomain(Request $request, $domain)
    {
        $request->session()->pull("domains.domain.$domain");

        $domains = $request->session()->get('domains.domain');
        $totalCart = $this->getTotalCart($domains);


       // dd($domains);
        return view('pages.cart',
            array(
                'domains'=>$domains,
                'totalCart' => $totalCart
            )
        );
    }


    public function registerOrder(Reqeust $request)
    {

    }


}
