<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Wing;
use App\Models\Client;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Work;
use App\Models\WorkFile;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class DashboardController extends Controller
{
    public function dashboard(){
        $data = Company::where('name', 'Thinking Scrap')->first();
        return view('dashboard', compact('data'));
    }

    public function dashboardPost(Request $request, $id){
        $data = [
            'meta_description' => $request->meta_description,
            'who_we_are' => $request->who_we_are,
            'what_we_do' => $request->what_we_do,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email
        ];

        Company::where('id', $id)->update($data);
        return redirect('/dashboard')->with('success', 'Updated!');
    }

    public function welcomePage(){
        $wingsData = Wing::get();
        $clientsData = Client::get();
        $companyData = Company::where('name', 'Thinking Scrap')->first();
        $employeeData = Employee::get();
        return view('welcome', compact('wingsData', 'clientsData', 'companyData', 'employeeData'));
    }
    public function messagesIndex(){
        $data = Contact::orderBy('created_at', 'DESC')->get();
        return view('messages', compact('data'));
    }

    public function contactStore(Request $request){
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $details = [
            'senderName' => $request->name,
            'senderMessage' => $request->message,
            'senderEmail' => $request->email,
            'senderSubject' => $request->subject
        ];

        // Mail::to("govindaroy.ofc94@gmail.com")->send(new ContactMail($details));
        $contact->save();
    }

    public function wingsIndex(){
        $data = Wing::orderBy('created_at', 'DESC')->get();
        return view('wings', compact('data'));
    }

    public function wingsAddNew(){
        return view('wings_add_new');
    }

    public function wingsAddNewPost(Request $request){
        $wing = new Wing;
        $wing->name = $request->name;
        $wing->description = $request->description;
        $wing->save();

        return redirect('/wings')->with('success', 'A Wing has been added!');
    }

    public function wingsEditIndex( $id){
        $data = Wing::where('id', $id)->first();
        return view('wings_edit', compact('data'));
    }

    public function wingsEditPost(Request $request, $id){
        $data = [
            'name' => $request->name,
            'description' => $request->description
        ];

        Wing::where('id', $id)->update($data);
        return redirect('/wings')->with('info', 'Wing has been updated!');
    }

    public function wingsDelete($id){
        Wing::where('id', $id)->delete();

        return redirect('/wings')->with('danger', 'Wing has been deleted!');
    }

    public function clientsIndex(){
        $data = Client::get();
        return view('clients', compact('data'));
    }

    public function clientsAddNew(){
        return view('clients_add_new');
    }

    public function clientsAddNewPost(Request $request){
        $validatedData = $request->validate([
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);
    
        $name = $request->name;
        $imageName = time().'.'.$request->logo->extension();  
    
        $request->logo->move(public_path('client_images'), $imageName);
    
        $client = new Client;
        $client->name = $name;
        $client->path = $imageName;
        $client->save();

        return redirect('/clients')->with('success', 'Client has been added!');
    }

    public function clientsEditIndex($id){
        $data = Client::find($id);
        return view('clients_edit', compact('data'));
    }

    public function clientsEditPost(Request $request, $id){
        $validatedData = $request->validate([
            'logo' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $data = Client::find($id);
        $imageName = $data['path'];

        if($request->logo != NULL){
            if (file_exists('client_images/'.$imageName)) {
                @unlink('client_images/'.$imageName);
            }
    
            $name = $request->name;
            $imageName = time().'.'.$request->logo->extension();  
        
            $request->logo->move(public_path('client_images'), $imageName);
        }
        
        $newData = [
            'name' => $request->name,
            'path' => $imageName
        ];

        Client::where('id', $id)->update($newData);

        return redirect('/clients')->with('info', 'Client has been updated!');
    }

    public function clientsDelete($id){
        $data = Client::find($id);
        $imageName = $data['path'];

        if (file_exists('client_images/'.$imageName)) {
            @unlink('client_images/'.$imageName);
        }

        Client::where('id', $id)->delete();
        return redirect('/clients')->with('danger', 'Client has been deleted!');
    }

    public function employeesIndex(){
        $data = Employee::get();
        return view('employees', compact('data'));
    }

    public function employeesAddNew(){
        return view('employees_add_new');
    }

    public function employeesAddNewPost(Request $request){
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $photoName = time().'.'.$request->photo->extension();  
    
        $request->photo->move(public_path('employee_images'), $photoName);

        $employee = new Employee;
        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->department = $request->department;
        $employee->statement = $request->statement;
        $employee->photo = $photoName;
        $employee->save();

        return redirect('/employees')->with('success', 'Employee has been added!');
    }

    public function employeesEditIndex($id){
        $data = Employee::find($id);
        return view('employees_edit', compact('data'));
    }

    public function employeesEditPost(Request $request, $id){
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $data = Employee::find($id);
        $photoName = $data['photo'];

        if($request->photo != NULL){
            if (file_exists('employee_images/'.$photoName)) {
                @unlink('employee_images/'.$photoName);
            }
    
            $name = $request->name;
            $photoName = time().'.'.$request->photo->extension();  
        
            $request->photo->move(public_path('employee_images'), $photoName);
        }
        
        $newData = [
            'name' => $request->name,
            'designation' => $request->designation,
            'department' => $request->department,
            'statement' => $request->statement,
            'photo' => $photoName
        ];

        Employee::where('id', $id)->update($newData);

        return redirect('/employees')->with('info', 'Employee has been updated!');
    }

    public function employeesDelete($id){
        $data = Employee::find($id);
        $photoName = $data['photo'];

        if (file_exists('employee_images/'.$photoName)) {
            @unlink('employee_images/'.$photoName);
        }

        Employee::where('id', $id)->delete();
        return redirect('/employees')->with('danger', 'Employee has been deleted!');
    }

    public function worksIndex(){
        $data = Work::get();
        return view('works', compact('data'));
    }

    public function worksAddNew(){
        $clients = Client::orderBy('name', 'ASC')->get();
        return view('works_add_new', compact('clients'));
    }

    public function worksAddNewPost(Request $request){
        $validated = $request->validate([
            'client_id' => 'required|unique:works',
            'files' => 'required',
        ]);

        $work = new Work;
        $work->client_id = $request->client_id;
        $work->summary = $request->summary;


        $images = $request->file('files');
        if ($request->hasFile('files')){
            foreach ($images as $item) {
                $workFile = new WorkFile;
                $workFile->client_id = $request->client_id;

                $fileName = time() . '.' . $item->extension();
                $item->move(public_path('work_images'), $fileName);

                $workFile->file = $fileName;
                $workFile->save();
            }
        }

        $work->files_id = $workFile->id;
        $work->save();

        return redirect('/works')->with('success', 'Work has been added!');
    }
}
