<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Job</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guardians as $guardian)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $guardian['name'] }}</td>
                <td>{{ $guardian['job'] }}</td>
                <td>{{ $guardian['phone'] }}</td>
                <td>{{ $guardian['email'] }}</td>
                <td>{{ $guardian['address'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>