<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $contacts = Contact::orderBy('id', 'DESC')->get(['id','name', 'email', 'phone', 'subject', 'created_at']);
            return datatables()->of($contacts)
            ->addColumn('actions', function ($row) {
                $html = '<div class="btn-group" role="group">';
                $html .= '<a href="'.route('admin.contacts.show', $row->id ).'" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></a>';
                $html .= '</div>';
                return $html;
            })
            ->editColumn('created_at', '{{ showDate($created_at)}} ')
            ->rawColumns(["actions"])
            ->toJson();
        }

        return view('admin.contact.index');
    }

    public function show( $id)
    {
        $contact =  Contact::findOrFail($id);

        return view('admin.contact.show', compact('contact'));
    }
}
