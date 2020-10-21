<?php

namespace App\Http\Controllers\SMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SMS\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ContactController extends Controller
{
    function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = $this->contact->get();
        return view('sms.contacts', compact('contacts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sms.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $contacts = Contact::create($request->all());
        return view('sms.contacts.edit', compact('contacts'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contacts = $this->contact->where('id','=',$id)->first();
        return view('sms.contacts.edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $contact = Contact::FindOrFail($id);
        $contact->update($request->all());

        return redirect()->back()->withFlashSuccess('Contact Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (Contact::destroy($id)) {
            return redirect()->back()->withFlashWarning('Contact Deleted');
        }
    }

    public function import(Request $request) 
    {
        if (isset($request['contacts'])) {
            $file = $request['contacts'];
       
            $file_type = $file->extension();
                    
            $file_name  = microtime(true).".".$file_type;
                    
            // $file_size = $file->getClientSize();
                   
            $file->move('/uploads/contacts',$file_name);

            $request['file'] = $file_name;
            $request['type'] = $file_type;
        }

        // return $path;

        Excel::import(new UsersImport, '/uploads/contacts/'.$request['file']);
        
        return redirect('/contacts/remove_space')->with('success', 'All good!');
        // $this->removeSpace();
        // $this->removeZero();
        // $this->deleteDead();

    }

    public function removeSpace()
    {
        $contacts = $this->contact->get();

        foreach ($contacts as $contact1) {

            $old_no = $contact1->phone;

            $new_no = preg_replace('/\s+/', '', $old_no);
            $new_no = preg_replace('/-/', '', $new_no);
            $new_no = preg_replace('/\)/', '', $new_no);
            $new_no = preg_replace('/\(/', '', $new_no);

            

            $contact = Contact::find($contact1->id);

            $contact->phone = $new_no;

            $contact->save();
        }

        return redirect('/contacts/remove_zero')->with('success', 'All good!');

    }

    public function removeZero()
    {
        $contacts = $this->contact->get();

        foreach ($contacts as $contact1) {

            $new_no = $contact1->phone;

            if (strpos($new_no, '0') == 0) {
                $new_no = preg_replace('/^0/', '+255', $new_no);
            }
            if(strpos($new_no, '255') == 0) {
                $new_no = preg_replace('/^255/', '+255', $new_no);
            }
            if(strpos($new_no, '6') == 0) {
                $new_no = preg_replace('/^6/', '+2556', $new_no);
            }
            if(strpos($new_no, '7') == 0) {
                $new_no = preg_replace('/^7/', '+2557', $new_no);
            }

            $contact = Contact::find($contact1->id);

            $contact->phone = $new_no;

            $contact->save();
        }

        return redirect('/contacts/delete_dead')->with('success', 'All good!');

    }

    public function deleteDead()
    {
        $contacts = $this->contact->get();

        foreach ($contacts as $contact1) {

            if (!strpos($contact1->phone, '255') == 1) {
                // $new_no = '+255'.$new_no;                
                $contact = Contact::find($contact1->id);
                $contact->delete();
            }   

            if (strpos($contact1->phone, ':::') == 13) {
                $contact = Contact::find($contact1->id);
                $contact->delete();
            }
        }

        return redirect('/contacts')->with('success', 'All good!');

    }

}
