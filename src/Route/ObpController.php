<?php

namespace Obp\Obpdemo\Route;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ObpController extends Controller
{
    public function getTimezone($timezone)
    {
        return Carbon::now($timezone)->toDateTimeString();
    }

}
