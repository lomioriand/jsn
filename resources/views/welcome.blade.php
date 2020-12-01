<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <meta http-equiv="X-UA-Compatible" content="is-edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
        
        <link rel="icon" href="https://scontent.fsof3-1.fna.fbcdn.net/v/t1.15752-9/128175183_806778433234412_790589090988554979_n.png?_nc_cat=105&ccb=2&_nc_sid=ae9488&_nc_ohc=MelnoqPbadQAX-V1hBB&_nc_ht=scontent.fsof3-1.fna&oh=ba474a1636aae48d6a33b9b811728ace&oe=5FE82B17">
        <title>Welcome, to JSN!</title>
        
    </head>
    
    <body>
        <div class="row">
                <div class="col-sm-6 my-2">


                    <img class="mx-2 my-2" width="70px" height="70px"src="https://scontent.fsof3-1.fna.fbcdn.net/v/t1.15752-9/128175183_806778433234412_790589090988554979_n.png?_nc_cat=105&ccb=2&_nc_sid=ae9488&_nc_ohc=MelnoqPbadQAX-V1hBB&_nc_ht=scontent.fsof3-1.fna&oh=ba474a1636aae48d6a33b9b811728ace&oe=5FE82B17" style="position:relative;top:-10px">
                    <p class="navbar-brand text-center ">J S N   -   International Online Banking System</p>

                    
                </div>

                <div class="col-sm-6 my-3">
                    
                    <ul class="nav justify-content-end mx-5">

                        @if($message = Session::get('error'))
                        <div class="aler alert-danger alert-block">
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        

                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        

                        <li class="nav-item active mx-2">
                            <a class="btn btn-outline-primary" data-toggle="modal" data-target="#loginWindow">Login <span class="sr-only">(current)</span></a>
                            
                            <div class="modal fade" id="loginWindow">

                                <div class="modal-dialog">

                                    <div class="modal-content">

                                        {{-- header --}}
                                        <div class="modal-header">
                                            <h3 class="modal-title">Login</h3>
                                            <button type="button" class="close btn btn-danger" data-dismiss="modal">x</button><br/>
                                        </div>

                                        <form action="/" role="form" method="POST">
                                            {{  csrf_field() }}

                                            {{-- body --}}
                                            <div class="modal-body">

                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                                    </div>

                                                
                                            </div>


                                            {{-- button --}}
                                            <div class="modal-footer">
                                                <button class="btn btn-primary btn-block">Log In</button>
                                            </div>
                                            
                                        </form>

                                    </div>

                                </div>

                            </div>
                        </li>
            
                        <li class="nav-item active">
                            <a class="btn btn-outline-primary" href="/register">Register<span class="sr-only">(current)</span></a>
                        </li>
            
                    </ul>
                </div>

        </div>

        <div class="container ">

            <div class="row">

                <div class="col-sm-6 align">
                    <h1>Welcome!</h1> <br/> <br/>
                    <h3>Banking made easy</h3><br/>
                    <h5>
                        Spend, save and manage your money, all in one place. Open a full bank account from your browser, for free.
                    </h5>

                    


                    <br/>
                    <div class="row">

                        <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                                Manage your bills & Spend
                            </button>
                        </p>
                            <div class="collapse" id="collapseExample3">
                                 <div class="card card-body">
                                    Pay Direct Debits through JSN and we’ll tell you if they’re higher for the upcoming month. So no nasty surprises.
                                    Get instant notifications the second you pay. Set budgets for things like groceries and going out, and get warnings if you’re spending too fast (if you want them).
                                </div>
                            </div>
        
                    </div>
                    
        
                    <div class="row">
        
                        <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                                Put money in your hands
                            </button>
                        </p>
                          <div class="collapse" id="collapseExample1">
                            <div class="card card-body">
                                Full financial visibility, with your other bank accounts and credit cards all in one place. Get interest on your money, personalised budgeting and much more.
                            </div>
                          </div>
        
                    </div>
        
        
                    <div class="row">
        
                        <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                                Saving money is easy
                            </button>
                        </p>
                          <div class="collapse" id="collapseExample2">
                            <div class="card card-body">
                                Earn up to 0.50% (AER/Gross fixed) interest on your savings.That’s on a 12-month Fixed Pot with a £500 minimum deposit to open. (Fixed means the money will be locked away for 12 months while you earn interest on it.)
                            </div>
                          </div>
        
                    </div>
        
        
                    <div class="row">
        
                        <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                                Tavel anywhere
                            </button>
                        </p>
                          <div class="collapse" id="collapseExample4">
                            <div class="card card-body">
                                Use JSN anywhere in the world that accepts Mastercard or Visa. We don’t charge any fees for spending abroad, and we don’t mark up the exchange rate – unlike most other banks.
                            </div>
                          </div>
        
                    </div>
        
                </div>
                <div class="col-sm-6">
                    <img class="mx-2 my-2" src="https://www.paydollar.com.cn/en/images/creditcard-img1-china.jpg" 
                        style="position:relative;top:-10px">
                </div>

            </div>
        </div>

        <div class="container ">

            
           
        </div>

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>



</html>