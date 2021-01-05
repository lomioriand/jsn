@extends('layouts.dash')

@section('content')
<div class="row">
  <div class="">
      <table class="table table-dark">

          <th colspan="9"><h2><center>Home</center></h2></th>


      <tr class="bg-warning">

          <td><b>Net Total:</b></td>
          <td>{{ \App\Account::find($id)->amount }}</td>
          <td>BGN</td>

      </tr>


      <tr><td></td></tr>


      <tr class="bg-info">

        <td><b>Interest Income:</b></td>

        <td>{{ (\App\Account::find($id)->amount*0.03) }}</td>

        <td>BGN</td>
      </tr>

      
      <tr><td></td></tr>


      <tr class="bg-danger"> 

        <td><b>Liabilities on utility bills</b></td>

        <td>
          @if (\App\Bill::selectRaw('SUM(amount) as total')->where('user_id', $id)->where('status', 'Awaits Payment')->first()->total>0)
              {{ \App\Bill::selectRaw('SUM(amount) as total')->where('user_id', $id)->where('status', 'Awaits Payment')->first()->total }}
          @else
              0.00
          @endif

        </td>

        <td>BGN</td>
      </tr>
      </table>
  </div>
</div>
@endsection