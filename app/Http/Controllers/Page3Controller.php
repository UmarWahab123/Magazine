<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Page3;
use App\Models\Page5;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class Page3Controller extends Controller
{

    public function index($id,$edition_temp_id){
        $page3 = Page3::where('editionId', $id)->where('edition_temp_title', $edition_temp_id)->first();
         if(!$page3){
          $page3 = Page3::where('page_no', 'default')->first();  
        }
        return view('pages.page3.create',[
            'id' => $id,
            'title' => $edition_temp_id,
            'page3' => $page3,
        ]);
    }
    public function store(Request $request){
        if ($request->section1 != null) {
             $validator = Validator::make($request->all(), [
        'editordata' => 'required',
        // Add other validation rules for your fields here
    ]);
            $data = $request->all();
      
            if ($request->hasFile('background_img')) {
                $backgroundImg = 'page3' . '.' . time() . '.' . $request->file('background_img')->getClientOriginalExtension();
                $request->file('background_img')->move(public_path('pages_images'), $backgroundImg);
                $data['background_img'] = $backgroundImg;
            }
            unset($data['section1']);
            $data['type'] = 'template3';
            $effected_row = Page3::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page3::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if ($request->section2 != null) {
            $data = $request->all();
            if ($request->hasFile('image')) {
                $backgroundImg0 = 'page33' . '.' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('pages_images'), $backgroundImg0);
                $data['image'] = $backgroundImg0;
            }
            unset($data['section2']);
            $data['type'] = 'template3';

            $effected_row = Page3::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page3::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if ($request->section3 != null) {
            $data = $request->all();
            if ($request->hasFile('icon_img')) {
                $backgroundImg9 = 'page33f' . '.' . time() . '.' . $request->file('icon_img')->getClientOriginalExtension();
                $request->file('icon_img')->move(public_path('pages_images'), $backgroundImg9);
                $data['icon_img'] = $backgroundImg9;
            }
            if ($request->hasFile('front_image')) {
                $backgroundImg1 = 'pages3' . '.' . time() . '.' . $request->file('front_image')->getClientOriginalExtension();
                $request->file('front_image')->move(public_path('pages_images'), $backgroundImg1);
                $data['front_image'] = $backgroundImg1;
            }
            unset($data['section3']);
            $data['type'] = 'template3';

            $effected_row = Page3::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page3::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if ($request->section4 != null) {
            $data = $request->all();
            if ($request->hasFile('bg_img')) {
                $backgroundImg2 = 'page33t' . '.' . time() . '.' . $request->file('bg_img')->getClientOriginalExtension();
                $request->file('bg_img')->move(public_path('pages_images'), $backgroundImg2);
                $data['bg_img'] = $backgroundImg2;
            }
            if ($request->hasFile('icon2_img')) {
                $backgroundImg3 = 'pagess3' . '.' . time() . '.' . $request->file('icon2_img')->getClientOriginalExtension();
                $request->file('icon2_img')->move(public_path('pages_images'), $backgroundImg3);
                $data['icon2_img'] = $backgroundImg3;
            }
            unset($data['section4']);
            $data['type'] = 'template3';

            $effected_row = Page3::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page3::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if ($request->section5 != null) {
            $data = $request->all();
            if ($request->hasFile('icon3_img')) {
                $backgroundImg4 = 'page33n' . '.' . time() . '.' . $request->file('icon3_img')->getClientOriginalExtension();
                $request->file('icon3_img')->move(public_path('pages_images'), $backgroundImg4);
                $data['icon3_img'] = $backgroundImg4;
            }
            if ($request->hasFile('images2')) {
                $backgroundImg5 = 'pagese3' . '.' . time() . '.' . $request->file('images2')->getClientOriginalExtension();
                $request->file('images2')->move(public_path('pages_images'), $backgroundImg5);
                $data['images2'] = $backgroundImg5;
            }
            if ($request->hasFile('images3')) {
                $backgroundImg6 = 'page33p' . '.' . time() . '.' . $request->file('images3')->getClientOriginalExtension();
                $request->file('images3')->move(public_path('pages_images'), $backgroundImg6);
                $data['images3'] = $backgroundImg6;
            }
            if ($request->hasFile('icon4_img')) {
                $backgroundImg7 = 'pagesf3' . '.' . time() . '.' . $request->file('icon4_img')->getClientOriginalExtension();
                $request->file('icon4_img')->move(public_path('pages_images'), $backgroundImg7);
                $data['icon4_img'] = $backgroundImg7;
            }
            unset($data['section5']);
            $data['type'] = 'template3';

            $effected_row = Page3::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page3::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if ($request->section6 != null) {
            $data = $request->all();
            if ($request->hasFile('image4')) {
                $backgroundImg8 = 'pagee3c' . '.' . time() . '.' . $request->file('image4')->getClientOriginalExtension();
                $request->file('image4')->move(public_path('pages_images'), $backgroundImg8);
                $data['image4'] = $backgroundImg8;
            }
            if ($request->hasFile('image5')) {
                $backgroundImg = 'pagesn3' . '.' . time() . '.' . $request->file('image5')->getClientOriginalExtension();
                $request->file('image5')->move(public_path('pages_images'), $backgroundImg);
                $data['image5'] = $backgroundImg;
            }
            unset($data['section6']);
            $data['type'] = 'template3';

            $effected_row = Page3::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page3::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }

    }

}
