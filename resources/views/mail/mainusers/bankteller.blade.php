@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => 'Good morning!',
        'level' => 'h1'
    ])

    @include('beautymail::templates.ark.contentStart')

    <p style="margin-top: 14px;">
        You have been added to the application {{$data['app_name']}}
        by the administrator {{$data['current_lastname']}} {{$data['current_firstname']}}.
        Please click on this link to be connected and change your credentials after login
           Email:        {{$data['login_email']}}
           Password:     {{$data['login_password']}}

        <tr>
            <td>
                @include('beautymail::templates.minty.button', ['text' => 'Connexion',
                     'link' => "http://banksystem.test/showLogin"])
            </td>
        </tr>

    </p>

    <hr>

    <div class="container" style="margin-top: 14px; color: blue">

        <p>
            <i class="fa fa-phone" aria-hidden="true"></i> + 221 76 804 26 81<br>
            <i class="fab fa-whatsapp"></i> + 221 76 804 26 81 <br>
            <i class="fas fa-envelope-square"></i>banksystem@gmail.com
        </p>
    </div>
    <div class="container">
        <h3 style="color: blue">   &copy; 2021 BANK SYSTEM MANAGEMENT. All rights reserved</h3>
    </div>


    @include('beautymail::templates.ark.contentEnd')


@stop
