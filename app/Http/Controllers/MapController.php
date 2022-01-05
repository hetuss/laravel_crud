<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;

class MapController extends Controller
{
    public function mapview()
    {
        $mapss=Map::get();
        return view(contact_us,compact('mapss'));
    }
}
