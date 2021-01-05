@extends('layouts.dash')

@section('content')
    <div class="row">
      <div class="container">

            <form>

              <div class="form-group row">
                
                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                
                <div class="col-sm-10">
                  
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ \App\User::find($id)->name }}">
                
                </div>
              
              </div>

              <div class="form-group row">
                
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                
                <div class="col-sm-10">
                  
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ \App\User::find($id)->email }}">
                
                </div>
              
              </div>


              <div class="form-group row">
                
                <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
                
                <div class="col-sm-10">
                  
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ \App\User::find($id)->phone }}">
                
                </div>
              
              </div>     


              <div class="form-group row">
                
                <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
                
                <div class="col-sm-10">
                  
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ \App\User::find($id)->address }} ">
                
                </div>
              
              </div>    

              
            
            </form>
      </div>
    </div>
@endsection









