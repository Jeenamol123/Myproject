<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Edit Profile">
          <a class="nav-link" href="/show">
            <i class="fa fa-fw fa-edit  "></i>
            <span class="nav-link-text">Search</span>
          </a>
        </li>
       
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <form action="/insert" style="margin-top: 2%;">
                <table cellpadding="15px;">
                 <tr>
                     {{csrf_field()}}
                        <tr> 
                        <th>
                            Enter Name
                        </th>
                        <td>
                        <input type="text" name="name" id="name">
                        </td>
                        </tr>

                        <tr>
                        <th>
                            Enter Age
                        </th>
                        <td>
                         <input type="text" name="age" id="age">
                     </td>
                 </tr>

                 </tr> 
                 <td>
                     <input type="submit" name="submit" class="list-group-itemactive" value="ADD" onclick="document.getElementByid('myInput').value=''">

                 </td>

                </table>

           
        </div>
    </body>
</html>
