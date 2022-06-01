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
    public function partner_service(){
        return view('component.partner_service');
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
        return view('component.online_payments');
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
    public function utility_bill_payment(){
        return view('component.utility-bill-payment');
    }
    public function payment_getway(){
        return view('component.payment-getway');
    }

    public function digital_payment(){
        return view('component.digital_payment');
    }

    public function banking_service(){
        return view('component.banking_service');
    }

    public function send_money(){
        return view('component.send_money');
    }

    public function receive_money(){
        return view('component.receive_money');
    }

    public function events(){
        return view('component.events');
    }

    public function promotions(){
        return view('component.promotions');
    }

    public function transition(){
        return view('component.transition');
    }

    public function social_media(){
        return view('component.social_media');
    }

    public function customer_care()
    {
        return view('component.customer_care');
    }

    public function live_chat()
    {
        return view('component.live_chat');
    }

    public function notification(){
        return view('component.notification');
    }
    public function privacy_policy(){
        return view('component.privacy_policy');
    }

    public function branchless_banking(){
        return view('component.branchless_banking');
    }

    public function digital_service(){
        return view('component.digital_service');
    }

    public function partner_program(){
        return view('component.partner_program');
    }






}

