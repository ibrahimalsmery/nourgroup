<?php

namespace App\Http\Controllers;

use App\Models\BusnissDevelopmentRequest;
use App\Models\ElearningRequest;
use App\Models\Order;
use App\Models\ResearchForClientRequest;
use App\Models\ResearchForCompanyRequest;
use App\Models\StaffingForClientRequest;
use App\Models\StaffingForCompanyRequest;
use App\Models\TraningRequest;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    function index()
    {

        return view('private.orders.index', Order::getNumbers());
    }

    function research_client()
    {
        $research_clients_orders = ResearchForClientRequest::search(request('search'))->paginate(10);
        return view('private.orders.research-client', compact('research_clients_orders'));
    }
    function research_company()
    {
        $research_company_orders = ResearchForCompanyRequest::search(request('search'))->paginate(10);
        return view('private.orders.research-company', compact('research_company_orders'));
    }

    function traning()
    {
        $traning_orders = TraningRequest::search(request('search'))->paginate(10);
        return view('private.orders.traning', compact('traning_orders'));
    }
    function bs_dev()
    {
        $bs_orders = BusnissDevelopmentRequest::search(request('search'))->paginate(10);
        return view('private.orders.bs-dev', compact('bs_orders'));
    }

    function elearning()
    {
        $elearning_orders = ElearningRequest::search(request('search'))->paginate(10);
        return view('private.orders.elearning', compact('elearning_orders'));
    }

    function staffing_client()
    {
        $staffing_clients_orders = StaffingForClientRequest::search(request('search'))->paginate(10);
        return view('private.orders.staffing-client', compact('staffing_clients_orders'));
    }
    function staffing_company()
    {
        $staffing_company_orders = StaffingForCompanyRequest::search(request('search'))->paginate(10);
        return view('private.orders.staffing-company', compact('staffing_company_orders'));
    }
}
