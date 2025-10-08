<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Teacher List</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subjects as $subject)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $subject['name'] }}</td>
                <td>{{ $subject['description'] }}</td>
                <td>
                    <ul>
                        @foreach($subject->teachers as $teacher)
                            <li>{{ $teacher['name'] }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>