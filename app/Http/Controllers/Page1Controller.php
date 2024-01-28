<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Page1;
use App\Models\Page5;
use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index1()
    {
        return view('pages.page1.index', [
            'page1' => Page1::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create1($id,$edition_temp_id)
    {
        $pages = Page1::where('edition_id', $id)->where('edition_temp_title', $edition_temp_id)->first();
        if(!$pages){
          $pages = Page1::where('page_no', 'default')->first();  
        }
        return view('pages.page1.create', [
            'id' => $id,
            'title' => $edition_temp_id,
            'pages' => $pages,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show1(Request $request)
    {
        $request->validate([
            'pageTitle' => ['required'],
            'heading' => ['required'],
            'title' => ['required'],
            'buttonText' => ['required'],
            'status' => 'required|in:Active,Inactive',
        ]);
        $picture = $request->formFile;
        if ($picture) {
            $picData = 'page1' . '.' . time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('pages_images'), $picData);
            $data = [
                'edition_id' => $request->editionId,
                'page_title' =>  $request->pageTitle,
                'form_file' =>  $picData,
                'heading' =>  $request->heading,
                'title' =>  $request->title,
                'editor_data' =>  $request->editordata,
                'button_text' =>  $request->buttonText,
                'status' =>  $request->status,
                'edition_temp_title' => $request->edition_temp_title,
                'type' => 'template1',

            ];
            $effected_row = Page1::where('edition_id', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
            if ($effected_row) {
                $is_updated = $effected_row->update($data);
                return back()->with(['success' => 'Data has been updated!']);
            } else {
                $is_created = Page1::create($data);
                return back()->with(['success' => 'Data has been added!']);
            }
        }

        $data = [
            'edition_id' => $request->editionId,
            'page_title' =>  $request->pageTitle,
            'heading' =>  $request->heading,
            'title' =>  $request->title,
            'editor_data' =>  $request->editordata,
            'button_text' =>  $request->buttonText,
            'status' =>  $request->status,
            'edition_temp_title' => $request->edition_temp_title,
            'type' => 'template1',

        ];
        // dd($data);
        $effected_row = Page1::where('edition_id', $request->editionId)->where('edition_temp_title',$request->edition_temp_title)->first();
        if ($effected_row) {
            $is_updated = $effected_row->update($data);
            return back()->with(['success' => 'Data has been updated!']);
        } else {
            $is_created = Page1::create($data);
            return back()->with(['success' => 'Data has been added!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit1(Page1 $page)
    {
        return view('pages.page1.edit', [
            'page' => $page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update1(Request $request, Page1 $page)
    {

        $request->validate([
            'pageTitle' => ['required'],
            'heading' => ['required'],
            'title' => ['required'],
            'buttonText' => ['required'],
            'edition_id' => ['required'],
        ]);

        if ($request->formFile != '') {
            $oldPicturePath = public_path('uploads') . '/' . $page->form_file;
            $picture = $request->formFile;
            $picData = 'page1' . '.' . time() . '.' . $picture->getClientOriginalExtension();
            // dd(public_path('uploads'));
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
            'heading' =>  $request->heading,
            'title' =>  $request->title,
            'editor_data' =>  $request->editordata,
            'button_text' =>  $request->buttonText,
            'edition_id' =>  $request->edition_id,
        ];
        $is_updated =  $page->update($data);

        $is_updated ? $message = ['success' => 'Page 1 has been successfully updated!'] : $message = ['failure' => 'Page 1 has failed to update!'];
        return back()->with($message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
