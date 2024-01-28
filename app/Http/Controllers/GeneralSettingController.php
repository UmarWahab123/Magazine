<?php

namespace App\Http\Controllers;
use App\Models\generalsetting;

use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{

    public function template1 ($type){
          switch ($type) {
            case "template1":
                $view = 'templates.index';
                break;

            case "template2":
                $view = 'templates.content-and-intro';
                break;

            case "template3":
                $view = 'templates.ben-fogle';
                break;

            case "template4":
                $view = 'templates.more-time';
                break;

            case "template5":
                $view = 'templates.heading-north';
                break;

            case "template6":
                $view = 'templates.tempo-maidenhead';
                break;
            // default:
            //     // Handle the default case, e.g., show an error or redirect to a 404 page
            //     break;
        }
     
        return view($view);
    }

    public function generalsetting()
    {
   $data = generalsetting::first();
   return view('general',['data'=>$data]);
    }
    public function UpdateSetting(Request $request)
    {

        $data = $request->all();
        // dd($data);
     
            if ($request->hasFile('logo')) {
                $logo = 'general_setting' . '.' . time() . '.' . $request->file('logo')->getClientOriginalExtension();
                $request->file('logo')->move(public_path('img'), $logo);
                $data['logo'] = $logo;
            }
             if ($request->hasFile('favicon')) {
                $favicon = 'general_setting' . '.' . time() . '.' . $request->file('favicon')->getClientOriginalExtension();
                $request->file('favicon')->move(public_path('img'), $favicon);
                $data['favicon'] = $favicon;
            }

          $general_setting = generalsetting::first();;
            if ($general_setting) {
                $is_updated = $general_setting->update($data);
                return back()->with(['success' => 'General Setting has been updated!']);
            } else {
                $is_created = $general_setting::create($data);
                return back()->with(['success' => 'General Setting has been added!']);
            }

    }
}
