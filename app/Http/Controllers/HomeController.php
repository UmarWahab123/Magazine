<?php

namespace App\Http\Controllers;

use App\Models\EditionList;
use App\Models\EditionTemplate;
use App\Models\generalsetting;
use App\Models\Page;
use App\Models\Page1;
use App\Models\Page5;
use App\Models\Page2;
use App\Models\Page3;
use App\Models\Page4;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function dashboard()
    {
        $data = generalsetting::first(); // Retrieve the first record
        $totalEditionList = EditionList::get()->count();
         $totalPagesCount = EditionTemplate::where('status','Active')->get()->count();
    //   dd($totalEditionList,$totalPagesCount);
        return view('index', compact('data','totalEditionList','totalPagesCount'));
    }

    public function welcome()
    {
        $defaul_edition = EditionList::where('default', 1)->where('status','Active')->first();
        $edition_template = EditionTemplate::where('edition_id', $defaul_edition->id)
            ->where('status', 'Active')
            ->orderBy('created_at')
            ->first();
        $page = null;
        if ($edition_template) {
            $page = Page1::where('edition_temp_title', $edition_template->id)
                ->orderBy('created_at')
                ->first();
                $view = 'welcome';
            if (!$page) {
                $page = Page::where('edition_temp_title', $edition_template->id)
                    ->orderBy('created_at')
                    ->first();
                $view = 'tempo-maidenhead';

            }

            if (!$page) {
                $page = Page2::where('edition_temp_title', $edition_template->id)
                    ->orderBy('created_at')
                    ->first();
                    $view = 'content-and-intro';

            }

            if (!$page) {
                $page = Page3::where('edition_temp_title', $edition_template->id)
                    ->orderBy('created_at')
                    ->first();
                    $view = 'ben-fogle';

            }

            if (!$page) {
                $page = Page4::where('edition_temp_title', $edition_template->id)
                    ->orderBy('created_at')
                    ->first();
                $view = 'more-time';

            }

            if (!$page) {
                $page = Page5::where('edition_temp_title', $edition_template->id)
                    ->orderBy('created_at')
                    ->first();
                    $view = 'heading-north';

            }
            // dd($all_pages);
            return view($view, compact('page'));
    }

   }
    public function exploreform($id)
    {
     $edition_templates = EditionTemplate::where('edition_id', $id)
    ->where('status', 'Active')->get()->sortBy('created_at');
    // dd($edition_templates);
        // $all_pages = collect();

        // // Fetch records from each table and merge them into the collection
        // $page1_page1 = Page1::whereIn('edition_temp_title', $edition_templates)->get();
        // $page1_page = Page::whereIn('edition_temp_title', $edition_templates)->get();
        // $page1_page2 = Page2::whereIn('edition_temp_title', $edition_templates)->get();
        // $page1_page3 = Page3::whereIn('edition_temp_title', $edition_templates)->get();
        // $page1_page5 = Page5::whereIn('edition_temp_title', $edition_templates)->get();
        // $page1_page4 = Page4::whereIn('edition_temp_title', $edition_templates)->get();

        // // Merge records into the $all_pages collection
        // $all_pages = $all_pages
        //     ->concat($page1_page1)
        //     ->concat($page1_page)
        //     ->concat($page1_page2)
        //     ->concat($page1_page3)
        //     ->concat($page1_page5)
        //     ->concat($page1_page4);

        // // Sort the merged records by created_at in ascending order
        // $all_pages = $all_pages->sortBy('created_at');
        
        return view('explore',compact('edition_templates'));
    }
    public function pagest_detail($temp_id)
    {
  
        $edition_template = EditionTemplate::where('id', $temp_id)->first();
        $template = $edition_template->pages_id;
        // dd($template);
      $edition_id = $edition_template->edition_id;
    //   dd($edition_id);
        $edition_templates_count = EditionTemplate::where('edition_id', $edition_id)
            ->where('status', 'Active')
            ->pluck('id')
            ->toArray();
            // dd($edition_templates_count);
        $totalIndexCount = count($edition_templates_count);
        $currentPageId = $temp_id; // Assuming you have the current page's ID
        
        // Find the current page index
        $currentPageIndex = array_search($currentPageId, $edition_templates_count);
        // dd($currentPageIndex);
        // Ensure it's not false to avoid issues
        if ($currentPageIndex !== false) {
            // Increment by 1 to get the 1-based index
            $currentPageIndex += 1;
        } else {
            // Handle the case where the current page is not found
            $currentPageIndex = 0; // You can set it to 0 or handle it differently
        }
    //  dd($edition_template->id);
// Now $currentPageIndex contains the current page's index

        switch ($template) {
            case "template1":
                $page = Page1::where('edition_temp_title', $edition_template->id)
                    ->first();
            //   dd($page);
                $view = 'welcome';
                break;

            case "template2":
                $page = Page2::where('edition_temp_title', $edition_template->id)
                    ->first();
                $view = 'content-and-intro';
                break;

            case "template3":
                $page = Page3::where('edition_temp_title', $edition_template->id)
                    ->first();
                $view = 'ben-fogle';
                break;

            case "template4":
                $page = Page4::where('edition_temp_title', $edition_template->id)
                    ->first();
                $view = 'more-time';
                break;

            case "template5":
                $page = Page5::where('edition_temp_title', $edition_template->id)
                    ->first();
                $view = 'heading-north';
                break;

            case "template6":
                $page = Page::where('edition_temp_title', $edition_template->id)
                    ->first();
                $view = 'tempo-maidenhead';
                break;
            // default:
            //     // Handle the default case, e.g., show an error or redirect to a 404 page
            //     break;
        }
     
        return view($view, compact('page','currentPageIndex','totalIndexCount'));
    }

    // public function content($edition_id, $page_id, $type)
    // {
    //     // dump($edition_id, $page_id, $type);
    //     // Get the collection of all pages
    //     $edition_templates = EditionTemplate::where('edition_id', $edition_id)
    //         ->where('status', 'Active')
    //         ->pluck('id')
    //         ->toArray();

    //     $all_pages = collect();

    //     // Fetch records from each table and merge them into the collection
    //     $page1_page1 = Page1::whereIn('edition_temp_title', $edition_templates)->get();
    //     $page1_page = Page::whereIn('edition_temp_title', $edition_templates)->get();
    //     $page1_page2 = Page2::whereIn('edition_temp_title', $edition_templates)->get();
    //     $page1_page3 = Page3::whereIn('edition_temp_title', $edition_templates)->get();
    //     $page1_page5 = Page5::whereIn('edition_temp_title', $edition_templates)->get();
    //     $page1_page4 = Page4::whereIn('edition_temp_title', $edition_templates)->get();

    //     // Merge records into the $all_pages collection
    //     $all_pages = $all_pages
    //         ->concat($page1_page1)
    //         ->concat($page1_page)
    //         ->concat($page1_page2)
    //         ->concat($page1_page3)
    //         ->concat($page1_page5)
    //         ->concat($page1_page4);

    //     // Sort the merged records by created_at in ascending order
    //     $all_pages = $all_pages->sortBy('created_at');
    //     // dump($all_pages);
    //     // Find the index of the current page in the sorted collection
    //     $currentIndex = $all_pages->search(function ($item) use ($page_id) {
    //         return $item->id == $page_id;
    //     });
    //     // dump($currentIndex);
    //     if ($currentIndex === false) {
    //         // Handle the case where the current page is not found
    //         abort(404); // You can return an error page or perform other actions as needed.
    //     }

    //     // Determine the index of the next or previous page
    //     $nextIndex = $type === 'next' ? $currentIndex + 1 : $currentIndex - 1;
    //     // dump($nextIndex);

    //     if ($nextIndex >= 0 && $nextIndex < $all_pages->count()) {
    //         // Get the next or previous page
    //         $nextPage = $all_pages->values()->get($nextIndex);
    //         // dd($nextPage);
    //     $edition_template = EditionTemplate::where('id', $nextPage->edition_temp_title)->first();
    //     $template = $edition_template->pages_id;

    //     switch ($template) {
    //         case "template1":
    //             $page = Page1::where('edition_temp_title', $edition_template->id)
    //                 ->first();
    //             $view = 'welcome';
    //             break;

    //         case "template2":
    //             $page = Page2::where('edition_temp_title', $edition_template->id)
    //                 ->first();
    //             $view = 'content-and-intro';
    //             break;

    //         case "template3":
    //             $page = Page3::where('edition_temp_title', $edition_template->id)
    //                 ->first();
    //             $view = 'ben-fogle';
    //             break;

    //         case "template4":
    //             $page = Page4::where('edition_temp_title', $edition_template->id)
    //                 ->first();
    //             $view = 'more-time';
    //             break;

    //         case "template5":
    //             $page = Page5::where('edition_temp_title', $edition_template->id)
    //                 ->first();
    //             $view = 'heading-north';
    //             break;

    //         case "template6":
    //             $page = Page::where('edition_temp_title', $edition_template->id)
    //                 ->first();
    //             $view = 'tempo-maidenhead';
    //             break;
    //         // default:
    //         //     // Handle the default case, e.g., show an error or redirect to a 404 page
    //         //     break;
    //     }
    //     return view($view, compact('page'));

    //     } else {
    //         // Handle the case where there is no next or previous page
    //         // You can return an error message or perform other actions as needed.
    //         return redirect()->back()->with('error', 'No more pages available.');
    //     }
    // }
       public function content($edition_id, $page_id, $type)
    {
        // dd($edition_id, $page_id, $type);
        // Get the collection of all pages
        $edition_templates = EditionTemplate::where('edition_id', $edition_id)
            ->where('status', 'Active')
            ->pluck('id')
            ->toArray();
       $totalIndexCount = count($edition_templates);
    
       $currentIdIndex = array_search($page_id, $edition_templates);
            if ($currentIdIndex !== false && $type == "next") {
                $totalTemplates = count($edition_templates);
            
                // Calculate the next and previous indices
                $nextIndex = ($currentIdIndex + 1) % $totalTemplates;
                 $currentPageIndex = ($currentIdIndex + 1) % $totalTemplates + 1;
                // $previousIndex = ($currentIdIndex - 1 + $totalTemplates) % $totalTemplates;

                    $next_page_is = $edition_templates[$nextIndex];
            
                // Now $nextId contains the next ID, and $previousId contains the previous ID.
                // You can use these IDs as needed.
            } else {
               $totalTemplates = count($edition_templates);
                // Calculate the next and previous indices
                // $nextIndex = ($currentIdIndex + 1) % $totalTemplates;
                $previousIndex = ($currentIdIndex - 1 + $totalTemplates) % $totalTemplates;
                // dump($previousIndex);
                $currentPageIndex = ($currentIdIndex - 1 + $totalTemplates) % $totalTemplates + 1;
                // dd($currentPageIndex);
                $next_page_is = $edition_templates[$previousIndex];
                
            }
            

        $all_pages = collect();

        // Fetch records from each table and merge them into the collection
        $page1_page1 = Page1::whereIn('edition_temp_title', $edition_templates)->get();
        $page1_page = Page::whereIn('edition_temp_title', $edition_templates)->get();
        $page1_page2 = Page2::whereIn('edition_temp_title', $edition_templates)->get();
        $page1_page3 = Page3::whereIn('edition_temp_title', $edition_templates)->get();
        $page1_page5 = Page5::whereIn('edition_temp_title', $edition_templates)->get();
        $page1_page4 = Page4::whereIn('edition_temp_title', $edition_templates)->get();

        // Merge records into the $all_pages collection
        $all_pages = $all_pages
            ->concat($page1_page1)
            ->concat($page1_page)
            ->concat($page1_page2)
            ->concat($page1_page3)
            ->concat($page1_page5)
            ->concat($page1_page4);
        
        $page = $all_pages->first(function ($page) use ($next_page_is) {
            return $page->edition_temp_title == $next_page_is;
        });
    //   if($page){
        // Sort the merged records by created_at in ascending order
  
        // Find the index of the current page in the sorted collection
       $edition_template = EditionTemplate::where('id', $page->edition_temp_title)->first();
       $template = $edition_template->pages_id;
        switch ($template) {
            case "template1":
                $view = 'welcome';
                break;

            case "template2":
                $view = 'content-and-intro';
                break;

            case "template3":
                $view = 'ben-fogle';
                break;

            case "template4":
                $view = 'more-time';
                break;

            case "template5":
                $view = 'heading-north';
                break;

            case "template6":
                $view = 'tempo-maidenhead';
                break;
            // default:
            //     // Handle the default case, e.g., show an error or redirect to a 404 page
            //     break;
        }
        return view($view, compact('page','totalIndexCount', 'currentPageIndex'));
    
        // } else {
        //     // Handle the case where there is no next or previous page
        //     // You can return an error message or perform other actions as needed.
        //     return redirect()->back()->with('error', 'No more pages available.');
        // }
    }

    public function edition()
    {
        // dd("test");
        $defaul_edition = EditionList::where('default', 1)->where('status','Active')->first();
        $edition_template = EditionTemplate::where('edition_id', $defaul_edition->id)
            ->where('status', 'Active')
            ->orderBy('created_at')
            ->first();
        $page = null;
        if ($edition_template) {
            $page = Page1::where('edition_temp_title', $edition_template->id)
                ->orderBy('created_at')
                ->first();
            if (!$page) {
                $page = Page::where('edition_temp_title', $edition_template->id)
                    ->orderBy('created_at')
                    ->first();

            }

            if (!$page) {
                $page = Page2::where('edition_temp_title', $edition_template->id)
                    ->orderBy('created_at')
                    ->first();

            }

            if (!$page) {
                $page = Page3::where('edition_temp_title', $edition_template->id)
                    ->orderBy('created_at')
                    ->first();

            }

            if (!$page) {
                $page = Page4::where('edition_temp_title', $edition_template->id)
                    ->orderBy('created_at')
                    ->first();
            }

            if (!$page) {
                $page = Page5::where('edition_temp_title', $edition_template->id)
                    ->orderBy('created_at')
                    ->first();

            }
            $editionsLists = EditionList::with('pages')->where('status','Active')->get();
            // dd($editionsLists);
            return view('edition', [
                'editionsLists' =>$editionsLists,
                'page' => $page
            ]);
        }

    }
    public function page()
    {
        return view('edition');
    }
    public function fogle()
    {
        return view('ben-fogle');
    }
    public function time()
    {
        return view('more-time');
    }
    public function maidenhead()
    {
        $page6 = Page::first();
        return view('tempo-maidenhead', compact('page6'));
    }
    public function heading()
    {
        $page5 = Page5::first();
        return view('heading-north', compact('page5'));
    }
}
