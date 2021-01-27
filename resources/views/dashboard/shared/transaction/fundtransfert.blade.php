@extends('layouts.master')
@section('content')

    <div>
        <div>
            <div class="modal-content">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('transaction.store','test')}}" method="post">
                    {{method_field('post')}}
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for=""><b>Receiver Bank name</b></label><br>
                            <input type="text" class="form-control" placeholder="Receiver Bank name" name="receiver_bank_name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Receiver's name</label>
                            <input type="text" class="form-control" name="receiver_name">
                        </div>
                        <div class="form-group">
                            <label for="name">Receiver Account number</label>
                            <input type="text" placeholder="Receiver Account number" class="form-control" name="receiver_account_no"  required="">
                        </div>

                        <div class="form-group">
                            <label for="name">Sender Account number</label>
                            <input type="text" placeholder="Sender Account number" class="form-control" name="sender_account_no"  required="">
                        </div>


                        <div class="form-group">
                            <label for="">Amount to transfert</label>
                            <input type="number" class="form-control" name="transfert_amount" required>
                        </div>

                        <div class="form-group">
                            <label>Fund trunsfert options</label>
                            <select name="transfert_option" class="form-control">
                              <option value="local">Local</option>
                              <option value="internationational">International</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Transfert Description</label>
                            <textarea rows="5" placeholder="Description of the transfert" class="form-control" name="transfert_description"  required=""></textarea>
                        </div>
                       
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default">Erase</button>
                            <button type="submit" class="btn btn-primary"
                            >Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

  
@endsection


