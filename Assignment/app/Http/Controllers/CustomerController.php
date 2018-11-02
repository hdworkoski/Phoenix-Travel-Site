<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    //view all customers
    public function all() {
        $customerNew = Customer::where('AuthCustomer', 0)
            ->orderBy('Customer_id', 'asc')
            ->get();

        $customerReg = Customer::where('AuthCustomer', 1)
            ->orderBy('Customer_id', 'asc')
            ->get();

        $e = '0';

        return view('customers')->with('e', $e)->with('customerNew', $customerNew)
            ->with('customerReg', $customerReg);
    }

    //approve a customer
    public function approve($id) {
        $c = Customer::find($id);
        $c->AuthCustomer = 1;
        $c->save();

        $customerNew = Customer::where('AuthCustomer', 0)
            ->orderBy('Customer_id', 'asc')
            ->get();

        $customerReg = Customer::where('AuthCustomer', 1)
            ->orderBy('Customer_id', 'asc')
            ->get();

        return view('customers')->with('customerNew', $customerNew)
            ->with('customerReg', $customerReg)
            ->with('error', 0);
    }

    //add new customer
    public function add(Request $request) {
        return view('customers.add');
    }

    //save new customer
    public function commit(Request $request){
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

        $customerNew = Customer::where('AuthCustomer', 0)
            ->orderBy('Customer_id', 'asc')
            ->get();

        $customerReg = Customer::where('AuthCustomer', 1)
            ->orderBy('Customer_id', 'asc')
            ->get();

        return view('customers')->with('customerNew', $customerNew)
            ->with('customerReg', $customerReg)
            ->with('error', 0);
    }

    //update a customer
    public function displayEditForm($id) {
        $customer = Customer::find($id);
        return view('customers.edit')->with('customer', $customer);
    }

    //save edited customer
    public function updateCustomer(Request $request) {
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

        $customerNew = Customer::where('AuthCustomer', 0)
            ->orderBy('Customer_id', 'asc')
            ->get();

        $customerReg = Customer::where('AuthCustomer', 1)
            ->orderBy('Customer_id', 'asc')
            ->get();

        return view('customers')->with('customerNew', $customerNew)
            ->with('customerReg', $customerReg)
            ->with('e', 0);
    }

    //delete a customer
    public function delete($id) {
        try {
            Customer::findOrFail($id)->delete();
        }
        catch(QueryException $qe){
            $customerNew = Customer::where('AuthCustomer', 0)
                ->orderBy('Customer_id', 'asc')
                ->get();

            $customerReg = Customer::where('AuthCustomer', 1)
                ->orderBy('Customer_id', 'asc')
                ->get();

            return view('customers')->with('customerNew', $customerNew)
                ->with('customerReg', $customerReg)
                ->with('e', 1);
        }

        $customerNew = Customer::where('AuthCustomer', 0)
            ->orderBy('Customer_id', 'asc')
            ->get();

        $customerReg = Customer::where('AuthCustomer', 1)
            ->orderBy('Customer_id', 'asc')
            ->get();

        return view('customers')->with('customerNew', $customerNew)
            ->with('customerReg', $customerReg)
            ->with('e', 0);
    }
}
