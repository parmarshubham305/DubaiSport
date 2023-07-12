<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CMSPageController extends Controller
{
    public function aboutUs() {
        return view('frontend.about_us');
    }

    public function terms() {
        return view('frontend.terms');
    }

    public function policy() {
        return view('frontend.policy');
    }

    public function faq() {
        return view('frontend.faq');
    }

    public function carrer() {
        return view('frontend.carrer');
    }

    public function deliveryPolicy() {
        return view('frontend.delivery_policy');
    }
}
