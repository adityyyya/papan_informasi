@extends('admin.layouts.main')

@section('title')
    Daftar Struktur Organisasi
@endsection

@section('content')
<div class="container mt-5">
    <h2>Daftar Struktur Organisasi</h2>

    @if ($strukturOrganisasis->isEmpty())
        <p>Belum ada data struktur organisasi.</p>
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
                @foreach ($strukturOrganisasis as $index => $organisasi)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- Menampilkan nomor urut mulai dari 1 -->
                        <td><img src="{{ asset('storage/' . $organisasi->photo) }}" alt="Photo" width="100"></td>
                        <td>
                            <a href="{{ route('strukturorganisasi.edit', $organisasi->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('strukturorganisasi.destroy', $organisasi->id) }}" method="POST" style="display:inline;">
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
