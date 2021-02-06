@extends('layouts.master')
@section('content')

    <div>
        <div>
            <div class="modal-content">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('operation.store','test')}}" method="post">
                    {{method_field('post')}}
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Account number</label>
                            <input type="number" class="form-control" name="account_no" required>
                        </div> 
                        <div class="form-group">
                            <label>Operation Type</label>
                            <select name="type" class="form-control">
                            <option value="deposit">Deposit</option>
                            <option value="withdraw">Withdraw</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Amount($)</label>
                            <input type="number" class="form-control" name="amount" required>
                        </div>                       
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Proceed Operation</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

  
@endsection


