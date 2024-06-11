@extends('layouts.app')

@section('content')
<main>

   <table class="table">

      <thead>

        <tr>
          <th scope="col">Company</th>
          <th scope="col">Departure Station</th>
          <th scope="col">Arrival Station</th>
          <th scope="col">Departure Day</th>
          <th scope="col">Departure Time</th>
          <th scope="col">Arrival Day</th>
          <th scope="col">Arrival Time</th>
          <th scope="col">Train Code</th>
          <th scope="col">Cars Number</th>
          <th scope="col">Seats Number</th>
          <th scope="col">In Time</th>
          <th scope="col">Deleted</th>
        </tr>

      </thead>

      <tbody>
         @foreach ($trainsObj as $train)         
         <tr>
           <th scope="row">{{ $train->company }}</th>
           <td>{{ $train->departure_station }}</td>
           <td>{{ $train->arrive_station }}</td>
           <td>{{ $train->departure_day }}</td>
           <td>{{ $train->departure_time }}</td>
           <td>{{ $train->arrive_day }}</td>
           <td>{{ $train->arrive_time }}</td>
           <td>{{ $train->train_code }}</td>
           <td>{{ $train->cars_number }}</td>
           <td>{{ $train->seats_number }}</td>
           <td>{{ $train->is_in_time === 1 ? 'Y' : 'N' }}</td>
           <td>{{ $train->is_deleted === 1 ? 'Y' : 'N' }}</td>
         </tr>
         @endforeach

      </tbody>

    </table>

</main>
@endsection
