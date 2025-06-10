<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    public function aboutUs()
    {
        $data = Page :: where('slug', 'about-us')->first();
    
        return view('front.pages.about-us',compact('data'));
    }

    public function contactUs()
    {     $data = Page :: where('slug', 'contact-us')->first();
        return view('front.pages.contact-us',compact('data'));
    }
   
    public function storeContact(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'firstname' => 'required|string|max:100',
            'lastname'  => 'required|string|max:100',
            'email'     => 'required|email|max:255',
            'phone'     => 'nullable|string|max:20',
            'message'  => 'nullable|string',
        ]);
    
        // Insert data using query builder
        DB::table('contacts')->insert([
            'firstname' => $validated['firstname'],
            'lastname'  => $validated['lastname'],
            'email'     => $validated['email'],
            'phone'     => $validated['phone'] ?? null,
            'message'  => $validated['message'] ?? null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
    


    public function termsAndConditions()
    {
        return view('front.pages.terms-conditions');
    }

    public function privacyPolicy()
    {
        $data = Page :: where('slug', 'privacy-policy')->first();
        return view('front.pages.privacy-policy',compact('data'));
    }

    public function faq()
    {
        $faqs = DB::table('faq')->get();
    
        return view('front.pages.faq',compact('faqs'));
    }
}

