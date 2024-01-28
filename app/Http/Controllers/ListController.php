<?php

namespace App\Http\Controllers;

use App\Models\EditionList;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Page1;
use App\Models\Page2;
use App\Models\Page3;
use App\Models\Page4;
use App\Models\Page5;
use App\Models\EditionTemplate;
use App\Models\Templates;
use DB;
class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = [];

        // $data['page'] = optional(Page::select('type', 'page_title')->first())->toArray();
        // $data['page1'] = optional(Page1::select('type', 'page_title')->first())->toArray();
        // $data['page2'] = optional(Page2::select('type', 'title')->first())->toArray();
        // $data['page3'] = optional(Page3::select('type', 'title')->first())->toArray();
        // $data['page4'] = optional(Page4::select('type', 'title')->first())->toArray();
        // $data['page5'] = optional(Page5::select('type', 'page_title')->first())->toArray();
        $total_templates =DB::table('all_templates')->get();
        return view('list', [
            'editionlists' => EditionList::all(),
            'total_templates' =>$total_templates,
        ]);
    }
    public function view_temlates ()
    {
        $total_templates =DB::table('all_templates')->get();
        // dd($total_templates);
        return view('templates_list',compact('total_templates'));
    }
      public function updateTemplate(Request $request)
    {
      $id = $request->input('id');
    $templateName = $request->input('template_name');
    $affectedRows = DB::table('all_templates')
        ->where('id', $id)
        ->update(['template_name' => $templateName]);
    
    if ($affectedRows > 0) {
        return back()->with(['success' => 'Template has been updated successfully!']);
    } else {
        // Handle the case where the update didn't affect any rows
        return back()->with(['error' => 'Template update failed.']);
    }

    }
    public function change_default_edition($id){

        $old_default = EditionList::where('default',1)->first();
        $old_default->default = 0;
        $old_default->save();
        $data['results'] = EditionList::where('id',$id)->update(['default'=>1]);
        return back()->with(['success' => 'Edition default has been changed Successfully!']);

     }
    public function add_template_to_edition(Request $request)
    {
        $id = $request->id;
        $data = $request->all();
    
        if ($request->hasFile('banner_image')) {
            $banner_image = 'edition_pages' . '.' . time() . '.' . $request->file('banner_image')->getClientOriginalExtension();
            $request->file('banner_image')->move(public_path('pages_images'), $banner_image);
            $data['banner_image'] = $banner_image;
    
        //     // Remove the old image file if it exists
        //  if ($id) {
        //     $template = EditionTemplate::find($id);
        //     if ($template && file_exists(public_path('pages_images/' . @$template->banner_image))) {
        //         unlink(public_path('pages_images/' . @$template->banner_image));
        //     }
        //   }

        }
    
        if ($id) {
            $template = EditionTemplate::find($id);
            if ($template) {
                // dd($data);
                $template->update($data);
                return back()->with(['success' => 'Template has been updated successfully!']);
            } else {
                return back()->with(['error' => 'Template not found for update.']);
            }
        } else {
            $is_created = EditionTemplate::create($data);
            return back()->with(['success' => 'Template has been added successfully!']);
        }
    }

    public function getTemplateById($id)
    {
        $template = EditionTemplate::where('id',$id)->first();
        // dd($template);
        if ($template) {
            return response()->json($template);
        } else {
            return response()->json(['error' => 'Template not found'], 404);
        }
    }
    public function deletePage(Request $request)
    {
        $id = $request->input('id');
        $editionTemplate = EditionTemplate::find($id);
        // dd( $editionTemplate);
       if ($editionTemplate) {
            $affected_rows = $editionTemplate->delete();
            return back()->with(['success' => 'Template has been deleted successfully!']);
       }else{
         return back()->with(['error' => 'Template not found!']);  
       }
     
    }
  public function deleteList(Request $request)
    {
        dd("ok");
        $id = $request->input('id');
        $edition = EditionList::find($id);
        // dd( $editionTemplate);
       if ($edition) {
            $affected_rows = $edition->delete();
            return back()->with(['success' => 'Template has been deleted successfully!']);
       }else{
         return back()->with(['error' => 'Template not found!']);  
       }
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addlist');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => ['required'],
            'edition_image' => ['required'],
            'edition_title' => ['required'],
            'status' => ['required'],
        ]);
        $edition_image = $request->edition_image;
        $edition_imagee = 'edition_img' . time() . '.' . $edition_image->getClientOriginalExtension();
        $edition_image->move(public_path('uploads'), $edition_imagee);

        $data = [
            'edition_image' => $edition_imagee,
            'edition_title' => $request->edition_title,
            'status' => $request->status,
        ];
        $is_created =  EditionList::create($data);
        return redirect()->route('list.index')->with(['success' => 'Edition added successfully!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditionList $editionlist)
    {
        return view('editlist',[
      'editionlist'  =>   $editionlist,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EditionList $editionlist)
    {
        $request->validate([
            'status' => ['required'],
            'edition_title' => ['required'],
        ]);
        // $old_edition_image = public_path('upload') . '/' . $request->edition_image;
        // if (file_exists($old_edition_image)) {
        //     unlink($old_edition_image);
        // };
        $edition_image = $request->edition_image;
        if($edition_image){
            $edition_imagee = 'edition_img' . time() . '.' . $edition_image->getClientOriginalExtension();
            $edition_image->move(public_path('uploads'), $edition_imagee);
            $data = [
                'edition_image' => $edition_imagee,
                'edition_title' => $request->edition_title,
                'status' => $request->status,
            ];
        }else{
              $data = [
                'edition_title' => $request->edition_title,
                'status' => $request->status,
            ];
        }

        $is_updated =  $editionlist->update($data);
         return redirect()->route('list.index')->with(['success' => 'Edition updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
