<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $contents = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contents', 'categories'));
    }

    public function confirm(Request $request)
    {
        $contact = $request -> only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'category_id', 'content']);
        return view('confirm', ['contact' => $contact]);

    }

    public function store(Request $request){
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'category_id', 'content']);
        Contact::create($contact);
        return view('thanks');
    }

    

    
}
