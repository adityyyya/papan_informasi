@extends('admin.layouts.main')

@section('title')
    Daftar Foto Pelaporan
@endsection

@section('content')
<div class="container mt-5">
    <h2>Daftar Foto Pelaporan</h2>

    @if ($laporans->isEmpty())
        <p>Belum ada data foto pelaporan.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Photo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporans as $index => $pelaporan)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- Menampilkan nomor urut mulai dari 1 -->
                        <td><img src="{{ asset('storage/' . $pelaporan->photo) }}" alt="Photo" width="100"></td>
                        <td>
                            <a href="{{ route('pelaporan.edit', $pelaporan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pelaporan.destroy', $pelaporan->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
