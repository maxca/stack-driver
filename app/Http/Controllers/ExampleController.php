<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExampleController extends Controller
{
    public function index()
    {
        Log::info(['name' => 'samark','stack' => 'drive' , 'test' => true,'time' => time()]);
        echo "<a href='https://console.cloud.google.com/logs/viewer?authuser=1&project=online-ordering-egg&folder&organizationId&minLogLevel=0&expandAll=false&timestamp=2018-12-19T07:31:16.986000000Z&customFacets=&limitCustomFacetWidth=true&interval=CUSTOM&resource=global&scrollTimestamp=2018-12-19T07:30:55.628295000Z&logName=projects%2Fonline-ordering-egg%2Flogs%2Fstack-driver-log&dateRangeUnbound=both&dateRangeStart=2018-12-19T07:30:25.842Z' target='_blank'>Log Link</a>";

        dump('send log ok');
    }
}
