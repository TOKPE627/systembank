@extends('layouts.master')
@section('content')
    <div class="box-body">
        <!-- Begin Page Content -->
        
        <div class="container-fluid">
            <p>
            <button class="btn btn-primary mb-4"
                        data-toggle="modal"
                        data-target="#myModal"
                ><i class="fa fa-plus-circle"> Add Bank Teller  </i>
                </button>
          
            </p>
        @if($banktellers->isEmpty())
            <h1 style="text-align: center;color: blue;">{{$no_result}}</h1>

        @else
            <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">View Bank Tellers</h6>
                    </div>

                        <div class="box-body">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Register Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($banktellers as $c)
                                        <tr>
                                          
                                            <td>
                                              {{$c->lastname}} {{$c->firstname}}
                                            </td>
                                            <td>{{$c->email}}</td>
                                            <td>{{$c->phone_no}}</td>
                                            <td>{{$c->created_at}}</td>
                                            <td>{{$c->status}}</td>
                                            <td>
                                                <button class="btn btn-warning"
                                                        data-datebirth     = "{{$c->date_birth}}"
                                                        data-gender        = "{{$c->gender}}"
                                                        data-address       = "{{$c->address}}"
                                                        data-cityname      = "{{$c->city_name}}"
                                                        data-state         = "{{$c->state}}"
                                                        data-zipcode       = "{{$c->zip_code}}"
                                                        data-profession    = "{{$c->profession}}"
                                                        data-toggle="modal"
                                                        data-target="#detailsuser">
                                                    <i class="fa fa-info-circle" aria-hidden="true">
                                                        Details
                                                    </i>
                                                </button>
                                                /
                                                <div class="col-md-2">
                                                    <button class="btn btn-danger"
                                                            data-userid="{{$c->id}}"
                                                            data-toggle="modal"
                                                            data-target="#deleteuser"
                                                    ><i class="fas fa-trash"> Delete</i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
                <div class="modal fade" id="detailsuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Details of Customer</h4>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Date of birth</label>
                                        <input type="text"  class="form-control"  id="datebirth" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input type="text"  class="form-control"  id="gender" disabled>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text"  class="form-control"  id="address" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control"  id="cityname" disabled>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text"  class="form-control" id="state" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="text"  class="form-control" id="zipcode" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Profession</label>
                                        <input type="text"  class="form-control" id="profession" disabled>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="modal modal-danger fade" id="deleteuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title text-center" id="myModalLabel">Confirmation of Delete</h4>
                            </div>
                            <form action="{{route('customer.destroy','test')}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <p class="text-center">
                                        Are you to sure to delete this Bank Teller ?
                                    </p>
                                    <input type="hidden" name="user_id" id="user_id">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">No,Cancel</button>
                                    <button type="submit" class="btn btn-warning">Yes,Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        @endif
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">New Bank Teller</h4>
                    </div>
                    <form action="{{route('employee.store','test')}}" method="post">
                        {{method_field('post')}}
                        {{csrf_field()}}
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="name">E-mail Id</label>
                                <input type="text" placeholder="Enter E-mail Id of the Bank Teller" class="form-control" name="email"  required="">
                            </div>

                            <div class="modal-footer">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Add Bank Teller</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
