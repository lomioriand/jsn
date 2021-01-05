@extends('layouts.dash')

@section('content')
<table class="table">
    <thead>
        <tr>
                
        <h3>Deposits History</h3>
        </tr>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Account Number</th>
        <th scope="col">Currency</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          
    @foreach ($deposits as $deposit)
        <th scope="row">{{ $deposit->id }}</th>
        <td>{{ \App\Account::whereHas('id', function($q) use($id) { $q->where('user_id', 'like', '%' . $id . '%');})->get('card_number')[0]->card_number }}</td>
        <td>BGN</td>
        <td>{{ $deposit->amount }}</td>
        <td>{{ $deposit->date }}</td>
      </tr>
    @endforeach

    </tbody>
  </table>


  <br><br><br>

  <table class="table">
    <thead>
        <tr>
                
        <h3>Transactions History</h3>
        </tr>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Type</th>
        <th scope="col">Date</th>
        <th scope="col">Account</th>
        <th scope="col">Beneficiary</th>
        <th scope="col">Amount</th>
        <th scope="col">Currency</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          
    @foreach ($transactions as $transaction)
        <th scope="row">{{ $transaction->id }}</th>
        <td>{{ $transaction->type }}</td>
        <td>{{ $transaction->date }}</td>
        <td>{{ \App\Account::whereHas('id', function($q) use($id) { $q->where('user_id', 'like', '%' . $id . '%');})->get('card_number')[0]->card_number }}</td>
        <td>{{ $transaction->bene }}</td>
        <td>{{ $transaction->amount }}</td>
        <td>BGN</td>
      </tr>
    @endforeach

    </tbody>
  </table>
@endsection