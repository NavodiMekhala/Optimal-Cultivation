<?php

namespace App\Http\Controllers;

use domain\Facades\CategoryFacade;
use domain\Facades\ClimateFacade;
use domain\Facades\CultivationFacade;
use domain\Facades\HomeFacade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * index Portfolios
     *
     * @return void
     */
    public function index(Request $request)
    {
        // dd($request->all());
        HomeFacade::import($request->all());
        $response['categories'] = CategoryFacade::all();
        return redirect()->route('home.view')->with($response);
    }

    public function view()
    {
        $response['categories'] = CategoryFacade::all();
        return view('pages.view')->with($response);
    }

    public function getItem(Request $request)
    {
        $response['items'] = CultivationFacade::getItemsByCategory($request);
        return view('pages.single')->with($response);
    }

    public function getItemDetails(Request $request)
    {
        $response['item'] = CultivationFacade::getItemByCategory($request);
        return view('pages.singleView')->with($response);
    }

    public function getClimate(Request $request)
    {
        $response['climate'] = ClimateFacade::getClimate($request);
        return view('pages.singleClimate')->with($response);
    }
}
