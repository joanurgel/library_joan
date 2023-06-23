<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingFormRequest;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {

       
        return view('admin.setting');

    }
}
