@extends('layouts.master')
@section('content')

    <div>
        <div class="box-header flex justify-center">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block text-blue-700 mt-2 mb-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
        <div>
            <div class="modal-content">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('tac.store','test')}}" method="post">
                    {{method_field('post')}}
                    {{csrf_field()}}
                    <div class="modal-body">
                        <input type="hidden" class="form-control"  name="receiver_bank_name" value="{{ $attributes['receiver_bank_name'] }}">
                        <input type="hidden" class="form-control"  name="receiver_name" value="{{ $attributes['receiver_name'] }}">
                        <input type="hidden" class="form-control"  name="receiver_account_no" value="{{ $attributes['receiver_account_no'] }}">
                        <input type="hidden" class="form-control"  name="sender_account_no" value="{{ $attributes['sender_account_no'] }}">
                        <input type="hidden" class="form-control"  name="transfert_amount" value="{{ $attributes['transfert_amount'] }}">
                        <input type="hidden" class="form-control"  name="transfert_option" value="{{ $attributes['transfert_option'] }}">
                        <input type="hidden" class="form-control"  name="transfert_description" value="{{ $attributes['transfert_description'] }}">

                        <div class="form-group">
                            <label for="">Transaction Authaurisation Code</label>
                            <input type="number" class="form-control" name="tac" value="{{$tac}}" disable>
                        </div>                       
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Validate  TAC</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

  
@endsection


