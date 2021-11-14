<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body > div > div > div > div > div > div.col-lg-10 > div > div > div > h6 > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div:nth-child(2){
            display: none;
        }

    </style>
</head>
<body style="background-color: lightblue;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-brand"><a href="#" class="navbar-brand">Mini-CRM</a></div>

            <ul class="navbar-nav">
                <div class="li nav-item"><form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="nav-link" href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }} </a>
                </form></div>
                <div class="li nav-item"><a href="" class="nav-link bg-success">( {{ Auth::user()->name}} <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                  </svg>)</a></div>
            </ul>
        </div>
    </nav>

    
</body>
    <div class="container mt-5">
       <div class="card bg-dark text-white">
           <div class="card-body">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action active" aria-current="true">
                              Managenent
                            </a>
                            <a href="{{ route('company_view') }}" class="list-group-item list-group-item-action">Create compony</a>
                            <a href="{{ route('view_company') }}" class="list-group-item list-group-item-action">View company</a>
                            
                            <a href="{{ route('create_employee') }}" class="list-group-item list-group-item-action">Create employee</a>
                            <a href="{{ route('view_employee') }}" class="list-group-item list-group-item-action">View employee</a>
                          </div>    
                    </div>
        
                    <div class="col-lg-10">
                        @section('content')
                            
                        @show
                    </div>
                </div>
                
    
            </div>
           </div>
       </div>
        
    </div>
    
</html>