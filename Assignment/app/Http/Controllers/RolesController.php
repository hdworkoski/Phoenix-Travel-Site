<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Staff;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolesController extends Controller
{
    //middleware
    public function __construct() {
        $this->middleware('auth');
    }

    //show dashboard
    public function index() {
        $count = Customer::where('AuthCustomer', 0)->count();

        return view('dashboard', [
            'count' => $count
        ]);
    }

    //view all customers
    public function all() {
        $customerNew = Customer::where('AuthCustomer', 0)
            ->orderBy('Customer_id', 'asc')
            ->get();

        $customerReg = Customer::where('AuthCustomer', 1)
            ->orderBy('Customer_id', 'asc')
            ->get();

        return view('customers', [
            'customerNew' => $customerNew,
            'customerReg' => $customerReg
        ]);
    }

    //add new customer
    public function add(Request $request) {
        if(Auth::user() != null && Auth::user()->role == 'manager')
            return view('customers.add');
        else
            return redirect('/customers');
    }

    //save new customer
    public function commit(Request $request){
        if(Auth::user() != null && Auth::user()->role == 'manager') {
            $c = new Customer;
            $c->First_Name = $request->First_Name;
            $c->Middle_Initial = $request->Middle_Initial;
            $c->Last_Name = $request->Last_Name;
            $c->Street_No = $request->Street_No;
            $c->Street_Name = $request->Street_Name;
            $c->Suburb = $request->Suburb;
            $c->Postcode = $request->Postcode;
            $c->Email = $request->Email;
            $c->oAuth = sha1($request->Password);
            $c->Phone = $request->Phone;
            $c->AuthCustomer = $request->AuthCustomer;
            $c->save();

            return redirect('/customers');
        }
        else {
            return redirect('/customers');
        }
    }

    //update a customer
    public function displayEditForm($id) {
        if(Auth::user() != null && Auth::user()->role == 'manager') {
            $customer = Customer::find($id);
            return view('customers.edit')->with('customer', $customer);
        }
        else {
            return redirect('/customers');
        }
    }

    //save edited customer
    public function updateCustomer(Request $request) {
        if(Auth::user() != null && Auth::user()->role == 'manager') {
            $c = Customer::find($request->Customer_id);
            $c->First_Name = $request->First_Name;
            $c->Middle_Initial = $request->Middle_Initial;
            $c->Last_Name = $request->Last_Name;
            $c->Street_No = $request->Street_No;
            $c->Street_Name = $request->Street_Name;
            $c->Suburb = $request->Suburb;
            $c->Postcode = $request->Postcode;
            $c->Email = $request->Email;
            $c->oAuth = sha1($request->Password);
            $c->Phone = $request->Phone;
            $c->AuthCustomer = $request->AuthCustomer;
            $c->save();

            return redirect('/customers');
        }
        else {
            return redirect('/customers');
        }
    }

    //delete a customer
    public function delete($id) {
        if(Auth::user() != null && Auth::user()->role == 'manager') {
            Customer::findOrFail($id)->delete();

            return redirect('/customers');
        }
        else {
            return redirect('/customers');
        }
    }

    //view staff page
    public function staff() {
        if(Auth::user()->role == 'manager')
            return view('staff');
        else
            return redirect('/dashboard');
    }

    //view bookings page
    public function bookings() {
        return view('bookings');
    }

    //view account page
    public function account() {
        $u = Auth::user();
        $s = Staff::where('Email', '=', $u->email)->first();

        return view('account')->with('u', $u)->with('s', $s);
    }

    //save edited account
    public function updateAccount(Request $request) {
        $u = User::find(Auth::user()->id);
        $u->name = $request->Role;
        $u->role = $request->Role;
        $u->password = bcrypt($request->password);
        $u->save();
        $s = Staff::where('Email', '=', $u->email)->first();
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

        return view('account')->with('u', $u)->with('s', $s);
    }
}
