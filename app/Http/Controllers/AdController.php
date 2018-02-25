<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Support\Facades\Input;

class AdController extends Controller
{

    public function index()
    {
        $active     = Ad::where('archive', '0')->where('active', '1')->orderBy('business', 'ASC')->get();
        $inactive = Ad::where('archive', '0')->where('active', '0')->orderBy('business', 'ASC')->get();
        return view('ads.index', compact('active', 'inactive'));
    }

    public function archived()
    {
        $ads    = Ad::where('archive', '1')->orderBy('business', 'ASC')->get();
        return view('ads.archive', compact('ads'));
    }

    public function create()
    {
        return view('ads.create');
    }

    public function store()
    {
        $ad = new Ad;

        $ad->business       = Input::get('business');
        $ad->headline       = Input::get('headline');
        $ad->copy           = Input::get('copy');
        $ad->link           = Input::get('link');
        $ad->cta                = Input::get('cta');
        $ad->image          = Input::get('image');
        $ad->logo           = Input::get('logo');
        $ad->homepage   = Input::get('homepage');
        $ad->inside         = Input::get('inside');
        $ad->scheduled  = Input::get('scheduled');


        $start                  = Input::get('start_time');
        $end                        = Input::get('end_time');
        $start_time         = strtotime($start);
        $end_time           = strtotime($end);

        $ad->start_time = $start_time;
        $ad->end_time   = $end_time;

        $ad->start  = date("D M d Y", $start_time);
        $ad->end        = date("D M d Y", $end_time);

        $ad->save();


        return redirect('/ads')->with('message', 'Success');
    }

    public function show($id)
    {
        $ad = Ad::find($id);
        $start = date("D M d Y", $ad->start_time);
        $end = date("D M d Y", $ad->end_time);
        return view('ads.show', compact('ad', 'start', 'end'));
    }

    public function edit($id)
    {
        $ad = Ad::find($id);
        $start = date("D M d Y", $ad->start_time);
        $end = date("D M d Y", $ad->end_time);
        return view('ads.edit', compact('ad', 'start', 'end'));
    }

    public function update($id)
    {
        $ad = Ad::find($id);

        $ad->business       = Input::get('business');
        $ad->headline       = Input::get('headline');
        $ad->copy           = Input::get('copy');
        $ad->link           = Input::get('link');
        $ad->cta                = Input::get('cta');
        $ad->image          = Input::get('image');
        $ad->logo           = Input::get('logo');
        $ad->homepage   = Input::get('homepage');
        $ad->inside         = Input::get('inside');
        $ad->scheduled  = Input::get('scheduled');


        $start                  = Input::get('start_time');
        $end                        = Input::get('end_time');
        $start_time         = strtotime($start);
        $end_time           = strtotime($end);

        $ad->start_time = $start_time;
        $ad->end_time       = $end_time;

        $ad->start  = date("D M d Y", $start_time);
        $ad->end        = date("D M d Y", $end_time);

        $ad->save();

        return redirect('/ads')->with('message', 'Success');
    }

    public function approve($id)
    {
        $ad = Ad::find($id);
        $ad->approved = 1;
        $ad->save();

        return redirect('ads/')->with('message', 'Success');
    }
    public function approval($id)
    {
        $ad = Ad::find($id);
        $ad->approved = 1;
        $ad->save();

        return redirect('ads/$id')->with('message', 'Success');
    }

    public function unapprove($id)
    {
        $ad = Ad::find($id);
        $ad->approved = 0;
        $ad->save();

        return redirect('ads/')->with('message', 'Success');
    }

    public function activate($id)
    {
        $ad = Ad::find($id);
        $ad->active = 1;
        $ad->save();

        return redirect('ads/')->with('message', 'Success');
    }

    public function deactivate($id)
    {
        $ad = Ad::find($id);
        $ad->active = 0;
        $ad->save();

        return redirect('ads/')->with('message', 'Success');
    }

    public function archive($id)
    {
        $ad = Ad::find($id);
        $ad->archive = 1;
        $ad->save();

        return redirect('ads/')->with('message', 'Success');
    }

    public function restore($id)
    {
        $ad = Ad::find($id);
        $ad->archive = 0;
        $ad->save();

        return redirect('ads/')->with('message', 'Success');
    }

    public function homeshow($id)
    {
        $ad = Ad::find($id);
        $ad->homepage = 1;
        $ad->save();

        return redirect('ads/')->with('message', 'Success');
    }

    public function homehide($id)
    {
        $ad = Ad::find($id);
        $ad->homepage = 0;
        $ad->save();

        return redirect('ads/')->with('message', 'Success');
    }

    public function insidehow($id)
    {
        $ad = Ad::find($id);
        $ad->inside = 1;
        $ad->save();

        return redirect('ads/')->with('message', 'Success');
    }

    public function insidehide($id)
    {
        $ad = Ad::find($id);
        $ad->inside = 0;
        $ad->save();

        return redirect('ads/')->with('message', 'Success');
    }

    public function scheduler()
    {
        $ads                    = Ad::where('archive', '0')->where('approved', '1')->where('scheduled', '1')->get();
        $time               = time();
        $activated      = 0;
        $deactivated    = 0;

        // return $ads;

        foreach ($ads as $ad) {
            if ($time >= $ad->start_time && $time <= $ad->end_time) {
                $ad->active = 1;
                $ad->save();
                $activated++;
            } else {
                $ad->active = 0;
                $ad->save();
                $deactivated++;
            }
        }

        return $activated . ' ads activated. ' . $deactivated . ' ads deactivated.';
    }


    public function delete($id)
    {

        return view('ads.index');
    }
}
