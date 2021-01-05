<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <meta http-equiv="X-UA-Compatible" content="is-edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
        
        <link rel="icon" href="https://scontent.fsof3-1.fna.fbcdn.net/v/t1.15752-9/128175183_806778433234412_790589090988554979_n.png?_nc_cat=105&ccb=2&_nc_sid=ae9488&_nc_ohc=MelnoqPbadQAX-V1hBB&_nc_ht=scontent.fsof3-1.fna&oh=ba474a1636aae48d6a33b9b811728ace&oe=5FE82B17">
        <title>Register to JSN</title>
        
    </head>
    <body>
        <div class="row">
            <div class="col-sm-11 my-2">

                <img class="mx-2 my-2" width="70px" height="70px"src="https://scontent.fsof3-1.fna.fbcdn.net/v/t1.15752-9/128175183_806778433234412_790589090988554979_n.png?_nc_cat=105&ccb=2&_nc_sid=ae9488&_nc_ohc=MelnoqPbadQAX-V1hBB&_nc_ht=scontent.fsof3-1.fna&oh=ba474a1636aae48d6a33b9b811728ace&oe=5FE82B17" style="position:relative;top:-10px">
                <p class="navbar-brand text-center ">J S N   -   International Online Banking System</p>

                    
            </div>

            <div class="col-sm-1 my-2">
                <a href="/" class="btn btn-outline-primary">Back</a>
            </div>
            
        </div>
        
        
        <div class="row">
        
            <div class="col-sm-5 my-2"></div>
        
            <div class="col-sm-7">        
        
                <div class="container">
        
                    <h3>Registration</h3> 

                    <div class="row">
        
                        <form action="/register" role="form" method="POST">
                            @csrf
                            <input type="name" class="form-control my-1" name="name" placeholder="Name">       

                            <input type="email" class="form-control my-1" name="email" placeholder="Email">       
        
                            <input type="password" class="form-control my-1" name="password" placeholder="Password">
        
                            <input type="text" class="form-control my-1" name="address" placeholder="Address">

                            <input type="text" class="form-control my-1" name="phone" placeholder="Phone">
        
                            <input type="text" class="form-control my-1" name="card_number" placeholder="Card Number (12)">
        
                            <input type="text" class="form-control my-1" name="cvc" placeholder="CVC">

                            <input type="text" class="form-control my-1" name="valid" placeholder="Valid Through">

                            <input type="text" class="form-control my-1" name="currency" value="BGN" disabled>

                            <input type="text" class="form-control my-1" name="amount" placeholder="Initial Deposit">

                            <input type="submit" value="Register" class="btn btn-success">
        
                        </form>
        
                    </div>
        
                </div>
        
            </div>
        
        </div>

        <div class="row center">
            <div class="col-sm-5 my-2"></div>
            <div class="my-3">
                @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                 @endif
                        
            </div>
        </div>

   

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        
    
    </body>



</html>