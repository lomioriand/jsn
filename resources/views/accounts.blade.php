@extends('layouts.dash')

@section('content')

<div class="card" style="width: 48rem;">
    <div class="row">
        <div class="container mx-2 my-1">


            <div class="form-group row">
                  
              <label for="staticEmail" class="col-sm-2 col-form-label">Card Number</label>
              
              <div class="col-sm-10">
                
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ \App\Account::whereHas('id', function($q) use($id) {
                  $q->where('user_id', 'like', '%' . $id . '%');
              })->get('card_number')[0]->card_number }} ">
              
              </div>
            
            </div>  


            <div class="form-group row">

                <label for="staticEmail" class="col-sm-2 col-form-label">CVC</label>
                
                <div class="col-sm-10">
                  
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ \App\Account::whereHas('id', function($q) use($id) {
                    $q->where('user_id', 'like', '%' . $id . '%');
                })->get('cvc')[0]->cvc }}">
                
                </div>
              
              </div>       
              
   
              
              
              <div class="form-group row">
                
                <label for="staticEmail" class="col-sm-2 col-form-label">Valid Through</label>
                
                <div class="col-sm-10">
                  
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ \App\Account::whereHas('id', function($q) use($id) {
                    $q->where('user_id', 'like', '%' . $id . '%');
                })->get('valid')[0]->valid }} ">
                
                </div>
              
              </div>     


              <div class="form-group row">
                
                <label for="staticEmail" class="col-sm-2 col-form-label">Money</label>
                
                <div class="col-sm-10">
                  
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ 
                    \App\Account::whereHas('id', function($q) use($id) { $q->where('user_id', 'like', '%' . $id . '%'); })->get('amount')[0]->amount
                     }} {{ \App\Account::whereHas('id', function($q) use($id) { $q->where('user_id', 'like', '%' . $id . '%'); })->get('currency')[0]->currency }}">
                  
                  
                  
                  <a class="btn btn-warning" data-toggle="modal" data-target="#depositWindow">Deposit <span class="sr-only">(current)</span></a>
                            
                            <div class="modal fade" id="depositWindow">

                                <div class="modal-dialog">

                                    <div class="modal-content">

                                        {{-- header --}}
                                        <div class="modal-header">
                                            <h3 class="modal-title">Deposit Into Account</h3>
                                            <button type="button" class="close btn btn-warning" data-dismiss="modal">x</button><br/>
                                        </div>

                                        <form action="/deposit/{{ $id }}" role="form" method="POST">
                                            {{  csrf_field() }}

                                            {{-- body --}}
                                            <div class="modal-body">

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="amount" placeholder="0.00 BGN">
                                                    </div>

                                                
                                            </div>


                                            {{-- button --}}
                                            <div class="modal-footer">
                                                <button class="btn btn-primary btn-block">Deposit</button>
                                            </div>
                                            
                                        </form>

                                    </div>

                                </div>

                            </div>
                </div>
              
              </div>     
        </div>
    </div>
  </div>
@endsection