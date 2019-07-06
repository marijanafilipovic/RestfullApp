@extends('app.layouts')
@section('content')

    <div class="card">
        <div class="card-text">

           <h3>{{ $result->name }}</h3>
            {{--                <p>{{ $result->description  }}</p>
          {{--          @forelse($result as $key=>$value)
                   <p>{{ $value['price'] }}</p>
                          <p>{{ $value['discount'] }}</p>
                     @endforelse--}}
        </div>
    </div>
