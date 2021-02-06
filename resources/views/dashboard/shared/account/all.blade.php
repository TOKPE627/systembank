@extends('layouts.master')
@section('content')
    <div class="box-body">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <p><i class="fa fa-plus-circle"> Account Details</i></p>
        @if($accounts->isEmpty())
            <h1 style="text-align: center;color: blue;">{{$no_result}}</h1>

        @else
            <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">View accounts</h6>
                    </div>

                        <div class="box-body">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    
                                    <th>Name</th>
                                    <th>Account No</th>
                                    <th>Balance</th>
                                    <th>Account Type</th>
                                    <th>Account Status</th>
                                    <!-- <th>View Statement</th>-->
                        
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($accounts as $a)
                                        <tr>
                                            <td>{{$a->user->lastname}} {{$a->user->firstname}}</td>
                                            <td>
                                               <a href="{{url('account_details/'.$a->account_no)}}">{{$a->account_no}}</a>
                                            </td>
                                            <td>{{$a->balance}} $</td>
                                            <td>{{$a->accounttype->title}}</td>
                                            <td>{{$a->status}}</td>
                                            <!--<td>
                                               <a href="{{url('transactions/'.$a->account_no)}}">Statement
                                                </a>    
                                            </td>-->
                                       
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                </div>
        @endif

        </div>
    </div>
@endsection
