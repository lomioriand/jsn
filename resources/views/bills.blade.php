@extends('layouts.dash')

@section('content')
    <div class="row">
        <div class="">
            <table class="table table-dark">
                <th colspan="9"><h2><center>Bill Management</center></h2></th>
            @foreach ($bills as $bill)
            <tr>
                <td><b>Beneficiery:</b></td>
                <td>{{ $bill->name }}</td>

                <td><b>Type:</b></td>
                <td>{{ $bill->type }}</td>

                <td><b>Status:</b></td>
                <td>{{ $bill->status }}</td>

                <td><b>Amount:</b></td>
                <td>{{ $bill->amount }} BGN</td>

                <td><a class="btn btn-warning @if($bill->status=="Paid")invisible @endif" href="pay/{{ $bill->id }}">Pay</a></td>

            </tr>
            @endforeach
            <tr>
                <form action="add/{{ $id }}" method="POST">
                    @csrf
                    <td><b>Beneficiery:</b></td>
                    <td><input type="text" name="billName" id=""></td>

                    <td><b>Type:</b></td>
                    <td><input type="text" name="billType" id=""></td>

                    <td><b>Status:</b></td>
                    <td><input type="text" name="billStatus" id="" disabled value="Awaits Payment"></td>

                    <td><b>Amount:</b></td>
                    <td><input type="text" name="billAmount" id=""></td>

                    <td><button class="btn btn-warning" type="submit">Add</button></td>
                </form>
            </tr>

            </table>
        </div>
    </div>
    <div class="row">
        @csrf
        @if($message = Session::get('error'))
        <div class="aler alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
@endsection