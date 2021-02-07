@extends('layouts.master')
@section('content')

    <div class="box-body">
        <div class="modal-body">
            <div class="form-group">
                <label for="" style="color: blue">Visitor</label>
                <input class="form-control" type="text" value="{{$message->name}}" disabled>
            </div>

            <div class="form-group">
                <label for="name" style="color: blue">E-mail</label>
                <input type="text"  class="form-control" value="{{$message->email}}" disabled>
            </div>
            <div class="form-group">
                <label for="name" style="color: blue">Message</label>
                <p>
                    {{$message->message}}
                </p>
            </div>
        </div>

        <form action="{{route('contactus.update','test')}}" method="post">
            {{method_field('patch')}}
            {{csrf_field()}}
            <div class="modal-body">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="id" value="{{$message->id}}">

                <div class="form-group">
                    <label for="name" style="color: blue">Response</label>
                    <textarea class="form-control" name="response" rows="3" placeholder="Your response" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit the response</button>
            </div>
        </form>



@endsection

