<?php

namespace App\Http\Controllers;

use App\Staff;
use App\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //middleware
    public function __construct() {
        $this->middleware('App\Http\Middleware\ManagerMiddleware');
    }

    //view staff
    public function staff() {
        $staff = Staff::orderBy('Staff_id', 'asc')->get();

        return view('staff')->with('staff', $staff);
    }

    //add staff member
    public function add(){
        return view('staff.add');
    }

    //save new staff member
    public function save(Request $request) {
        $u = new User();
        $u->name = $request->Role;
        $u->email = $request->Email;
        $u->password = bcrypt($request->Password);
        $u->role = $request->Role;
        $u->save();
        $s = new Staff();
        $s->position = $request->Role;
        $s->First_Name = $request->First_Name;
        $s->Middle_Initial = $request->Middle_Initial;
        $s->Last_Name = $request->Last_Name;
        $s->Street_No = $request->Street_No;
        $s->Street_Name = $request->Street_Name;
        $s->Suburb = $request->Suburb;
        $s->Postcode = $request->Postcode;
        $s->Email = $request->Email;
        $s->Phone = $request->Phone;
        $s->save();

        return redirect('/staff');
    }

    //display edit page
    public function displayEditForm($id, $email) {
        $u = User::where('email', '=', $email)->get();
        $s = Staff::find($id);

        return view('staff.edit')->with('u', $u)->with('s', $s);
    }

    //save edited staff member
    public function update(Request $request) {
        $u = User::where('email', '=', $request->Email)->first();
        $u->name = $request->Role;
        $u->password = bcrypt($request->Password);
        $u->role = $request->Role;
        $u->save();
        $s = Staff::find($request->Staff_id);
        $s->position = $request->Role;
        $s->First_Name = $request->First_Name;
        $s->Middle_Initial = $request->Middle_Initial;
        $s->Last_Name = $request->Last_Name;
        $s->Street_No = $request->Street_No;
        $s->Street_Name = $request->Street_Name;
        $s->Suburb = $request->Suburb;
        $s->Postcode = $request->Postcode;
        $s->Phone = $request->Phone;
        $s->save();

        return redirect('/staff');
    }

    //delete a staff member
    public function delete($id) {
        $s = Staff::find($id);
        $u = User::where('email', '=', $s->Email)->first();
        $s->delete();
        $u->delete();

        return redirect('/staff');
    }
}
