@extends('layouts.master')
@section('content')
    <div class="box-body">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <p><i class="fa fa-plus-circle"> Account {{$account_no}} Operations Deposit/Withdraw</i></p>
   
        @if($operations->isEmpty())
            <h1 style="text-align: center;color: blue;">{{$no_result}}</h1>

        @else
            <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List of Operations Deposit/Withdraw summary by the customer</h6>
                    </div>

                        <div class="box-body">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Operation Date</th>
                                    <th>Operation type</th>
                                    <th>Operation Amount</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($operations as $o)
                                        <tr>
                                            <td>{{$o->created_at}}</td>
                                            <td>{{$o->type}}</td>
                                            <td>{{$o->amount}}</td>
                                            <td>{{$o->status}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
           @endif
           <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Available balance: {{ $account->balance }} $</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
