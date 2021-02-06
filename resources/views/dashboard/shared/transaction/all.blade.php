@extends('layouts.master')
@section('content')
    <div class="box-body">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <p><i class="fa fa-plus-circle"> All transactions</i></p>
        @if($transactions->isEmpty())
            <h1 style="text-align: center;color: blue;">{{$no_result}}</h1>

        @else
            <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">List of transactions</h6>
                    </div>

                        <div class="box-body">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Transaction Date</th>
                                    <th>Reference No</th>
                                    <th>Bank</th>
                                    <th>Amount</th>
                                    <th>Transaction Description</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $t)
                                        <tr>
                                            <td>{{$t->created_at}}</td>
                                            <td>{{$t->transfert_reference}}</td>
                                            <td>{{$t->receiver_bank_name}}</td>
                                            <td>{{$t->transfert_amount}} $</td>
                                            <td>{{$t->transfert_description}} </td>
                                            <td>{{$t->status}}</td>
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
