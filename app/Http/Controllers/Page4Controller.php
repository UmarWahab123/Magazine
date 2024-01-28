<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Page1;
use App\Models\Page4;
use Illuminate\Http\Request;

class Page4Controller extends Controller
{
    public function index($id,$edition_temp_id){
        $page4 = Page4::where('editionId', $id)->where('edition_temp_title', $edition_temp_id)->first();
          if(!$page4){
          $page4 = Page4::where('page_no', 'default')->first();  
        }
        return view('pages.page4.create',[
            'id' => $id,
            'title' => $edition_temp_id,
            'page4' => $page4,
        ]);
    }
    public function store(Request $request){
        if($request->section1 != null) {
            $data = $request->all();
            if ($request->hasFile('bg_img')) {
                $backgroundImg = 'page3i' . '.' . time() . '.' . $request->file('bg_img')->getClientOriginalExtension();
                $request->file('bg_img')->move(public_path('pages_images'), $backgroundImg);
                $data['bg_img'] = $backgroundImg;
            }
            unset($data['section1']);
            $data['type'] = 'template3';

            $effected_row = Page4::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page4::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if($request->section2 != null) {
            $data = $request->all();
            if ($request->hasFile('image')) {
                $backgroundImg = 'page3d' . '.' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('pages_images'), $backgroundImg);
                $data['image'] = $backgroundImg;
            }
            unset($data['section2']);
            $data['type'] = 'template3';

            $effected_row = Page4::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page4::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if($request->section3 != null) {
            $data = $request->all();
            if ($request->hasFile('image2')) {
                $backgroundImg = 'page3m' . '.' . time() . '.' . $request->file('image2')->getClientOriginalExtension();
                $request->file('image2')->move(public_path('pages_images'), $backgroundImg);
                $data['image2'] = $backgroundImg;
            }
            unset($data['section3']);
            $data['type'] = 'template3';

            $effected_row = Page4::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page4::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if($request->section4 != null) {
            $data = $request->all();
            if ($request->hasFile('icon_img')) {
                $backgroundImg = 'page3y' . '.' . time() . '.' . $request->file('icon_img')->getClientOriginalExtension();
                $request->file('icon_img')->move(public_path('pages_images'), $backgroundImg);
                $data['icon_img'] = $backgroundImg;
            }
            unset($data['section4']);
            $data['type'] = 'template3';

            $effected_row = Page4::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page4::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if($request->section5 != null) {
            $data = $request->all();
            if ($request->hasFile('image3')) {
                $backgroundImg = 'page4' . '.' . time() . '.' . $request->file('image3')->getClientOriginalExtension();
                $request->file('image3')->move(public_path('pages_images'), $backgroundImg);
                $data['image3'] = $backgroundImg;
            }
            if ($request->hasFile('image4')) {
                $backgroundImg = 'pages4' . '.' . time() . '.' . $request->file('image4')->getClientOriginalExtension();
                $request->file('image4')->move(public_path('pages_images'), $backgroundImg);
                $data['image4'] = $backgroundImg;
            }
            if ($request->hasFile('icon2_img')) {
                $backgroundImg = 'pagese5' . '.' . time() . '.' . $request->file('icon2_img')->getClientOriginalExtension();
                $request->file('icon2_img')->move(public_path('pages_images'), $backgroundImg);
                $data['icon2_img'] = $backgroundImg;
            }
            if ($request->hasFile('image5')) {
                $backgroundImg = 'page3z' . '.' . time() . '.' . $request->file('image5')->getClientOriginalExtension();
                $request->file('imagesf5')->move(public_path('pages_images'), $backgroundImg);
                $data['image5'] = $backgroundImg;
            }
            unset($data['section5']);
            $data['type'] = 'template3';

            $effected_row = Page4::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page4::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if($request->section6 != null) {
            $data = $request->all();
            if ($request->hasFile('image6')) {
                $backgroundImg = 'page4f' . '.' . time() . '.' . $request->file('image6')->getClientOriginalExtension();
                $request->file('image6')->move(public_path('pages_images'), $backgroundImg);
                $data['image6'] = $backgroundImg;
            }
            if ($request->hasFile('icon3_img')) {
                $backgroundImg = 'page4s' . '.' . time() . '.' . $request->file('icon3_img')->getClientOriginalExtension();
                $request->file('icon3_img')->move(public_path('pages_images'), $backgroundImg);
                $data['icon3_img'] = $backgroundImg;
            }
            if ($request->hasFile('image7')) {
                $backgroundImg = 'page4c' . '.' . time() . '.' . $request->file('image7')->getClientOriginalExtension();
                $request->file('image7')->move(public_path('pages_images'), $backgroundImg);
                $data['image7'] = $backgroundImg;
            }
            unset($data['section6']);
            $data['type'] = 'template3';

            $effected_row = Page4::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page4::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if($request->section7 != null) {
            $data = $request->all();
            if ($request->hasFile('image8')) {
                $backgroundImg = 'page4t' . '.' . time() . '.' . $request->file('image8')->getClientOriginalExtension();
                $request->file('image8')->move(public_path('pages_images'), $backgroundImg);
                $data['image8'] = $backgroundImg;
            }
            if ($request->hasFile('card_img')) {
                $backgroundImg = 'page4n' . '.' . time() . '.' . $request->file('card_img')->getClientOriginalExtension();
                $request->file('card_img')->move(public_path('pages_images'), $backgroundImg);
                $data['card_img'] = $backgroundImg;
            }
            unset($data['section7']);
            $data['type'] = 'template3';

            $effected_row = Page4::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page4::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if($request->section8 != null) {
            $data = $request->all();
            if ($request->hasFile('icon4_img')) {
                $backgroundImg = 'page3' . '.' . time() . '.' . $request->file('icon4_img')->getClientOriginalExtension();
                $request->file('icon4_img')->move(public_path('pages_images'), $backgroundImg);
                $data['icon4_img'] = $backgroundImg;
            }
            unset($data['section8']);
            $data['type'] = 'template3';

            $effected_row = Page4::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page4::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
    }
}
