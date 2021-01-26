@extends('layouts.master')
@section('content')
    <div class="box-body">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <p><i class="fa fa-plus-circle"> Customer Account Details</i></p>
                 <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View all informations about the customer account</h6>
                </div>

                <div class="box-body">
                  
                    <table class="table table-striped">
                                <thead class="thead-dark">
                                   
                                </thead>
                                <tbody>
                                   <tr>
                                     <td>Name</td>
                                     <td>{{$account->user->lastname}} {{$account->user->firstname}}</td>
                                   </tr>
                                 
                                   <tr>
                                     <td>Email Id</td>
                                     <td>{{$account->user->email}}</td>
                                   </tr>
                                   <tr>
                                     <td>Phone Number</td>
                                     <td>{{$account->user->phone_no}}</td>
                                   </tr>
                                   <tr>
                                     <td>Address</td>
                                     <td>{{$account->user->address}}</td>
                                   </tr>
                                   <tr>
                                     <td>City,State</td>
                                     <td>{{$account->user->city_name}} {{$account->user->state}}</td>
                                   </tr>
                                   <tr>
                                     <td>Zip code</td>
                                     <td>{{$account->user->zip_code}}</td>
                                   </tr>
                                   <tr>
                                     <td>Account number</td>
                                     <td>{{$account->account_no}}</td>
                                   </tr>
                                   <tr>
                                     <td>Account balance</td>
                                     <td>{{$account->balance}} $</td>
                                   </tr>
                                   <tr>
                                     <td>Account PIN_CODE</td>
                                     <td>{{$account->user->code}}</td>
                                   </tr>
                                </tbody>
                            </table>
            </div>
        </div>
    </div>
@endsection
