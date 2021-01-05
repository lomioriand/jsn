<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <meta http-equiv="X-UA-Compatible" content="is-edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

        <link rel="icon" href="https://scontent.fsof3-1.fna.fbcdn.net/v/t1.15752-9/128175183_806778433234412_790589090988554979_n.png?_nc_cat=105&ccb=2&_nc_sid=ae9488&_nc_ohc=MelnoqPbadQAX-V1hBB&_nc_ht=scontent.fsof3-1.fna&oh=ba474a1636aae48d6a33b9b811728ace&oe=5FE82B17">
        <title>
        JSN | User ID: {{ $id }}
        </title>
        
    </head>

    <body>
      <div class="row">
        <div class="col-2">
                    <!-- Vertical navbar -->
            <div class="vertical-nav bg-white" id="sidebar">
              <div class="py-4 px-3 mb-4 bg-light">
                <div class="media d-flex align-items-center">
                  <div class="media-body">
                    <h4 class="m-0">
                      {{\App\User::findOrFail($id)->name}}
                    </h4>
                  </div>
                </div>
              </div>

              <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

              <ul class="nav flex-column bg-white mb-0">
                <li class="nav-item">
                  
                   
                  <a href="/home/{{ $id }}" class="nav-link text-dark font-italic @if(str_contains(url()->current(), 'home/')) bg-light @endif ">
                            Home
                        </a>
                </li>
                <li class="nav-item">
                  <a href="/bills/{{ $id }}" class="nav-link text-dark font-italic @if(str_contains(url()->current(), 'bills/')) bg-light @endif ">
                            Bills
                        </a>
                </li>
                <li class="nav-item">
                  <a href="/accounts/{{ $id }}" class="nav-link text-dark font-italic @if(str_contains(url()->current(), 'accounts/')) bg-light @endif ">
                            Account
                        </a>
                </li>
              </ul>

              <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Secondary</p>

              <ul class="nav flex-column bg-white mb-0">
                <li class="nav-item">
                  <a href="/references/{{ $id }}" class="nav-link text-dark font-italic @if(str_contains(url()->current(), 'references/')) bg-light @endif ">
                            References
                        </a>
                </li>
                <li class="nav-item">
                  <a href="/contacts/{{ $id }}" class="nav-link text-dark font-italic @if(str_contains(url()->current(), 'contacts/')) bg-light @endif ">
                            Contacts
                        </a>
                </li>
                
              </ul>
            </div>
            <!-- End vertical navbar -->

        </div> <!-- end col-2-->

        <div class="col-10">
          {{-- CONTENT <> --}}
          <div class="row justify-content-end mx-5 my-2">
            <a href="/profile/{{ $id }}" class="mx-2">Profile</a>
            <a href="/promotions/{{ $id }}" class="mx-2">Promotions</a>
            <a href="/logout" class="mx-2">Logout</a>
          </div>

          @yield('content')

        </div>
      </div> <!-- end row-->

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>



</html>
