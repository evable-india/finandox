<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('component.home');
    }

    public function aboutus()
    {
        return view('component.about_us');
    }

    public function services()
    {
        return view('component.services');
    }

    public function secondservice(){
        return view('component.second_service');
    }

   
    public function portofolio()
    {
        return view('component.portofolio');
    }

    public function secondportfolio()
    {
        return view('component.second_portofolio');
    }

    public function portofoliodetails()
    {
        return view('component.portofolio_details');
    }

    public function bloggrid()
    {
        return view('component.blog_grid');
    }
    public function blogstandard()
    {
        return view('component.blog_standard');
    }

    public function blogdetails()
    {
        return view('component.blog_details');
    }

    public function careers()
    {
        return view('component.careers');
    }

    public function team(){
        return view('component.team');
    }

    public function teamdetails()
    {
        return view('component.team_details');
    }

    public function shop(){
        return view('component.shop');
    }

    public function products(){
        return view('component.products');
    }

    public function shopingcart(){
        return view('component.shoping_cart');
    }

    public function checkout(){
        return view('component.checkout');
    }

    public function faq(){
        return view('component.faq');
    }

    public function errorpage(){
        return view('component.error_page');
    }

    public function contact(){
        return view('component.contact');
    }

    public function price(){
        return view('component.price');
    }
    public function review(){
        return view('component.review');
    }
    public function tearms(){
        return view('component.tearms');
    }
    public function insurance(){
        return view('component.insurance');
    }
    public function travel(){
        return view('component.travel');
    }
    public function utility_bill_payment(){
        return view('component.utility-bill-payment');
    }
    public function payment_getway(){
        return view('component.payment-getway');
    }
    
}

