
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Reservations</div>
                <div class="card-body">
                <table>
                <thead>
                    <tr>
                    <th>Name/Contact</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Table Size</th>
                    <th>When booking was made</th>
                    </tr>
                </thead>
                @foreach($reservations as $reservation)
                <tbody>
                    <tr>
                    <td>{{ $reservation->name }}</td>
                    <td>{{ $reservation->date }}</td>
                    <td>{{ $reservation->time }}</td>
                    <td>{{ $reservation->table_size }}</td>
                    <td>{{ $reservation->created_at }}</td>
                    </tr>
                </tbody>
                @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>