<?php

namespace Bissolli\Timezones;

use PumpMyLead\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function index($timezone = null)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        echo view('timezones::time', compact('current_time'));
    }

}
