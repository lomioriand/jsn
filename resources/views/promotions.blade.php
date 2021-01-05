<!DOCTYPE html>

<html lang="en">

    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v4.1.1">
  
      <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">
  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">


  
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
          <div class="row">
                        
            <main role="main">
            
              <!-- Main jumbotron for a primary marketing message or call to action -->
              <div class="jumbotron">
                <div class="container">
                  <h1 class="display-3">JSN - International Banking System</h1>
                  <p>This is what we offer to our clients.</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
                </div>
              </div>
            
              <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                  <div class="col-md-4">
                    <h2>For Kids and Students</h2>
                    <p>Every transaction made between family members is free, even abroad.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div>
                  <div class="col-md-4">
                    <h2>For pensioners</h2>
                    <p>You can save with us for your grandchilds, your kids or for your own financial calm with our deposit system. </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div>
                  <div class="col-md-4">
                    <h2>For foreign transactions</h2>
                    <p>We don't take fees when you transfer money to another member of our bank even if the person is across the globe.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div>
                </div>
            
                <hr>
            
              </div> <!-- /container -->
            
            </main>
            
            <footer class="container">
              <p>&copy; JSN International Banking System 2017-2020</p>
            </footer>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                  <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
          </div>



        </div>
      </div> <!-- end row-->

      
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>



</html>
