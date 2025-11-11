@extends('layout.app-layout')

@section('content')
    <h1>Kelola Data Kantin</h1>

    <table class="table table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Posisi</th>
                <th>Nama Pemilik</th>
                <th>Jualan</th>
            </tr>
        </thead>
        <tbody>
            <!-- Contoh data dummy -->
            <tr>
                <td>1</td>
                <td>Depan Kelas 10</td>
                <td>Bu Siti</td>
                <td>Gorengan, Es Teh</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Samping Lapangan</td>
                <td>Pak Budi</td>
                <td>Mie Ayam, Jus</td>
            </tr>
        </tbody>
    </table>
@endsection