<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div style="display: flex; justify-content: center; padding: 20px; width: 100%;">
        <div style="width: 100%; max-width: 1200px; overflow-x: auto;">
            <table border="1" cellpadding="8" cellspacing="0" >
                <thead>
                    <tr style="background-color: #f3f4f6;">
                        <th style="width: 50px;">No</th>
                        <th style="width: 150px;">Nama</th>
                        <th style="width: 200px;">Email</th>
                        <th style="width: 150px;">Mata Pelajaran</th>
                        <th style="width: 130px;">Telepon</th>
                        <th style="width: 160px;">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                    <tr>
                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td style="word-break: break-all;">{{ $teacher->email }}</td>
                        <td>{{ $teacher->subject->name ?? '-' }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td style="word-wrap: break-word; white-space: normal; line-height: 1.5;">
                            {{ $teacher->address }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>