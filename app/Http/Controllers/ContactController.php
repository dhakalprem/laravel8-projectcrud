<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::orderBy('id','desc')->paginate(10);
        return view('contacts.index',compact('data'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
      
        $request->validate([
         'name' => 'required',
         'email' => 'required|email',
         'phone' => 'required'
        ]);

        Contact::create($request->except('_token'));
        return redirect('contacts')->with('success','Create Successfully');
    }

    public function show($id)
    {
       $data =  Contact::find($id);
       return view('contacts.show',compact(['data']));
    }

    public function edit($id)
    {
       $data = Contact::find($id);
       return view('contacts.edit',compact('data'));
    }

    public function update($id,Request $request)
    {
        $request->validate([
         'name' => 'required',
         'email' => 'required|email',
         'phone' => 'required'
        ]);

        Contact::where('id',$id)->update($request->except('_token'));
        return redirect('contacts')->with('success','Create Successfully');
        
    }

    public function destroy($id)
    {
        Contact::where('id',$id)->delete();
        return redirect()->back()->with('success','Delete Successfully');
    }
}
