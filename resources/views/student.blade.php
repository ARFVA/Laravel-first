<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Grade</th>
                <th>Address</th>
                <th>Birthday</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['email'] }}</td>
                <td>{{ $student -> classroom ['name'] }}</td>
                <td>{{ $student['adress'] }}</td>
                <td>{{ $student['birthday'] }}</td>
                <td>{{ $student['score'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>