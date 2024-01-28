<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Page1;
use App\Models\Page5;
use App\Models\Page2;
use App\Models\EditionTemplate;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PageController extends Controller

{
    public function index2($id,$edition_temp_id)
    {
       $page2 = Page2::where('editionId', $id)->where('edition_temp_title', $edition_temp_id)->first();
       if(!$page2){
        $page2 = Page2::where('page_no', 'default')->first();
       }
       return view('pages.page2.create',[
        'id' => $id,
        'title' => $edition_temp_id,
        'page2' => $page2,
    ]);
    }
    public function store(Request $request){
        if($request->section1 != null) {
            $data = $request->all();
            if ($request->hasFile('image')) {
                $backgroundImg = 'page3' . '.' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('pages_images'), $backgroundImg);
                $data['image'] = $backgroundImg;
            }
            unset($data['section1']);
            $data['type'] = 'template2';
            $effected_row = Page2::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page2::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if($request->section2 != null) {
            $data = $request->all();
            if ($request->hasFile('image1')) {
                $backgroundImg = 'page3' . '.' . time() . '.' . $request->file('image1')->getClientOriginalExtension();
                $request->file('image1')->move(public_path('pages_images'), $backgroundImg);
                $data['image1'] = $backgroundImg;
            }
            unset($data['section2']);
            $data['type'] = 'template2';
            $effected_row = Page2::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page2::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if($request->section3 != null) {
            $data = $request->all();
            unset($data['section3']);
            $data['type'] = 'template2';
            $effected_row = Page2::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page2::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
        if($request->section4 != null) {
            $data = $request->all();
            $data['type'] = 'template2';
            if ($request->hasFile('logo')) {
                $backgroundImg = 'page3' . '.' . time() . '.' . $request->file('logo')->getClientOriginalExtension();
                $request->file('logo')->move(public_path('pages_images'), $backgroundImg);
                $data['logo'] = $backgroundImg;
            }
            unset($data['section4']);
            $effected_row = Page2::where('editionId', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page2::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }
    }
    // page5
    public function index5()
    {
        return view('pages.page5.index', [
            'pages' => Page5::all(),
        ]);
    }
    public function create5($id,$edition_temp_id)
    {

        $page5 = Page5::where('edition_id', $id)->where('edition_temp_title', $edition_temp_id)->first();
        if(!$page5){
        $page5 = Page5::where('page_no', 'default')->first();
        }
        return view('pages.page5.create', [
            'id' => $id,
            'title' => $edition_temp_id,
            'page5' => $page5,
        ]);
    }

    public function store5(Request $request)
    {
        $data = $request->all();
          if ($request->hasFile('image_bg')) {
            $backgroundImg = 'page5' . '.' . time() . '.' . $request->file('image_bg')->getClientOriginalExtension();
            $request->file('image_bg')->move(public_path('pages_images'), $backgroundImg);
            $data['image_bg'] = $backgroundImg;
           }
           if($request->hasFile('icon')) {
            $backgroundImg = 'page5f' . '.' . time() . '.' . $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path('pages_images'), $backgroundImg);
            $data['icon'] = $backgroundImg;
           }
           if($request->hasFile('image1')) {
            $backgroundImg = 'page5s' . '.' . time() . '.' . $request->file('image1')->getClientOriginalExtension();
            $request->file('image1')->move(public_path('pages_images'), $backgroundImg);
            $data['image1'] = $backgroundImg;
           }
           if($request->hasFile('image2')) {
            $backgroundImg = 'page5t' . '.' . time() . '.' . $request->file('image2')->getClientOriginalExtension();
            $request->file('image2')->move(public_path('pages_images'), $backgroundImg);
            $data['image2'] = $backgroundImg;
           }
            $data['type'] = 'template2';
            $data['edition_id'] = $data['editionId'];
            unset($data['editionId']);
            $effected_row = Page5::where('edition_id', $data['edition_id'])->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page5::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit5(Page5 $page)
    {
        return view('pages.page5.edit', [
            'page' => $page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update5(Request $request, Page5 $page)
    {

        $request->validate([
            'page_title' => ['required'],
            'image_bg' => ['required', 'image', 'mimes:png,jpg,jpeg,webp'],
            'icon' => ['required', 'image', 'mimes:png,jpg,jpeg,webp'],
            'image_heading' => ['required'],
            'image_heading2' => ['required'],
            'title1' => ['required'],
            'text1' => ['required'],
            'video' => ['required'],
            'text2' => ['required'],
            'text3' => ['required'],
            'image1' => ['required', 'image', 'mimes:png,jpg,jpeg,webp'],
            'image2' => ['required', 'image', 'mimes:png,jpg,jpeg,webp'],
        ]);


        $old_image_bg = public_path('upload') . '/' . $request->image_bg;
        if (file_exists($old_image_bg)) {
            unlink($old_image_bg);
        }
        $old_icon = public_path('upload') . '/' . $request->icon;
        if (file_exists($old_icon)) {
            unlink($old_icon);
        }
        $old_image1 = public_path('upload') . '/' . $request->image1;
        if (file_exists($old_image1)) {
            unlink($old_image1);
        }
        $old_image2 = public_path('upload') . '/' . $request->image2;
        if (file_exists($old_image2)) {
            unlink($old_image2);
        };


        $pic_bg = $request->image_bg;
        $image_bg = 'image_bg' . time() . '.' . $pic_bg->getClientOriginalExtension();
        $pic_bg->move(public_path('upload'), $image_bg);

        $pic_icon = $request->icon;
        $icon = 'icon' . time() . '.' . $pic_icon->getClientOriginalExtension();
        $pic_icon->move(public_path('upload'), $icon);

        $pic_1 = $request->image1;
        $image1 = 'image1' . time() . '.' . $pic_1->getClientOriginalExtension();
        $pic_1->move(public_path('upload'), $image1);

        $pic_2 = $request->image2;
        $image2 = 'image2' . time() . '.' . $pic_2->getClientOriginalExtension();
        $pic_2->move(public_path('upload'), $image2);

        $video = parse_url($request->video);
        if (isset($video['query'])) {
            parse_str($video['query'], $queryParameters);
            if (isset($queryParameters['v'])) {
                $videoId = $queryParameters['v'];
                $embeddedUrl = "https://www.youtube.com/embed/{$videoId}";
            }
        } else {
            $embeddedUrl = $request->video;
        }


        $data = [
            'page_title' => $request->page_title,
            'image_bg' => $image_bg,
            'icon' => $icon,
            'image_heading' => $request->image_heading,
            'image_heading2' => $request->image_heading2,
            'title1' => $request->title1,
            'text1' => $request->text1,
            'video' => $embeddedUrl,
            'image1' => $image1,
            'image2' => $image2,
            'text2' => $request->text2,
            'text3' => $request->text3,
        ];


        $is_updated =  $page->update($data);
        return  $is_updated ? back()->with(['success' => 'Page updated successfully!']) : back()->with(['failure' => 'Page fail to update!']);
    }


    //page6
    public function pagelist($id)
    {
        $templates = EditionTemplate::where('edition_id', $id)->get();
        // dd($templates);
        return view('pageslist', [
            'templates' => $templates,
            'id' => $id,
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index6()
    {

        return view('pages.page6.index', [
            'page6' => Page::all(),
        ]);
    }


    public function create6($id,$edition_temp_id)
    {
        $page6 = Page::where('edition_id', $id)->where('edition_temp_title', $edition_temp_id)->first();
        if(!$page6){
        $page6 = Page::where('page_no', 'default')->first();
        }
        return view('pages.page6.create', [
            'id' => $id,
            'title' => $edition_temp_id,
            'page6' => $page6,
        ]);
    }


    public function show6(Request $request)
    {
        // dd($request->all());
        $video = parse_url($request->formFile1);
        if (isset($video['query'])) {
            parse_str($video['query'], $queryParameters);
            if (isset($queryParameters['v'])) {
                $videoId = $queryParameters['v'];
                $embeddedUrl = "https://www.youtube.com/embed/{$videoId}";
            }
        } else {
            $embeddedUrl = $request->formFile1;
        }

        $picture = $request->form_file;
        if ($picture) {
            $picData = 'page6' . '.' . time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('pages_images'), $picData);
            $data = [
                'page_title' =>  $request->pageTitle,
                'form_file' =>  $picData,
                'img_heading' =>  $request->imgHeading,
                'form_file1' =>  $embeddedUrl,
                'heading' =>  $request->heading,
                'title' =>  $request->title,
                'editor_data' =>  $request->editordata,
                'edition_id' => $request->editionId,
                'status' => $request->status,
                'edition_temp_title' => $request->edition_temp_title,
                'type' => 'template6',
            ];
            $effected_row = Page::where('edition_id', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }else{
            $data = [
                'page_title' =>  $request->pageTitle,
                'img_heading' =>  $request->imgHeading,
                'form_file1' =>  $embeddedUrl,
                'heading' =>  $request->heading,
                'title' =>  $request->title,
                'editor_data' =>  $request->editordata,
                'edition_id' => $request->editionId,
                'status' => $request->status,
                'edition_temp_title' => $request->edition_temp_title,
                'type' => 'template6',
            ];

            $effected_row = Page::where('edition_id', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }

    }


    public function edit6(Page $page)
    {
        return view('pages.page6.edit', [
            'page' => $page,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function update6(Request $request, Page $page)
    {
        $request->validate([
            'pageTitle' => ['required'],
            'formFile' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'imgHeading' => ['required'],
            'heading' => ['required'],
            'title' => ['required'],
            'formFile1' => ['required'],
        ]);

        $video = parse_url($request->formFile1);
        if (isset($video['query'])) {
            parse_str($video['query'], $queryParameters);
            if (isset($queryParameters['v'])) {
                $videoId = $queryParameters['v'];
                $embeddedUrl = "https://www.youtube.com/embed/{$videoId}";
            }
        } else {
            $embeddedUrl = $request->formFile1;
        }

        if ($request->formFile != '') {
            $oldPicturePath = public_path('uploads') . '/' . $page->form_file;
            $picture = $request->formFile;
            $picData = 'page2' . '.' . time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('uploads'), $picData);
            if (file_exists($oldPicturePath)) {
                unlink($oldPicturePath);
            }
        } else {
            $picture = $request->formFileold;
            $picData = $picture;
        }

        $data = [
            'page_title' =>  $request->pageTitle,
            'form_file' =>  $picData,
            'img_heading' =>  $request->imgHeading,
            'form_file1' =>  $embeddedUrl,
            'heading' =>  $request->heading,
            'title' =>  $request->title,
            'editor_data' =>  $request->editordata,
        ];
        $is_updated =  $page->update($data);
        $is_updated ? $message = ['success' => 'Page 6 has been successfully updated!'] : $message = ['failure' => 'Page 6 has failed to update!'];
        return back()->with($message);
    }
}
