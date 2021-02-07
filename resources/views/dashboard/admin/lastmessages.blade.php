<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        @if($last_messages->count() > 0)
            <span class="badge badge-danger badge-counter">{{$last_messages->count()}}</span>
        @endif
    </a>
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">
            Message Center
        </h6>

        <a class="dropdown-item d-flex align-items-center" href="#">
                    @foreach($last_messages as $message)

                            <a href="{{url('message',$message->id)}}" style="margin-left: 4%;" class="text-truncate">
                                {{$message->message}}
                            </a>

                            <div class="small text-gray-500" style="margin-left: 4%;">{{$message->name}}</div>

                    @endforeach


            </a>
    </div>
</li>


<div class="topbar-divider d-none d-sm-block"></div>
