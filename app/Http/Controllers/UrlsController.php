<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\url;
use App\Services\UrlService;
use App\Http\Requests\urlFormRequest;

class UrlsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('pages.home');
    }
    /**
     * @param Request $request
     * @return mixed
     */
    public function store(urlFormRequest $request)
    {
        $rowCreate = UrlService::getRowForUrlOrCreateNewUrl($request->get('url'));
        return view('pages.result', [
            'shortened' => $rowCreate->shortened,
        ]);
    }
    /**
     * @param $shortened
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function show($shortened)
    {
        $url = url::where('shortened', $shortened)->first();
        if(!$url){
            return redirect('/');
        }else
            return redirect($url->url);
    }

}
