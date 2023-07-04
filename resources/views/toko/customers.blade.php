@extends('template/admin/index')

@section('content')
    <h1>Customers</h1>
    <a href="{{ route('pelanggan.tambah') }}" class="btn btn-primary mb-3">Tambah pelanggan</a>
    <table class="table">

        <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @php  $number = 1;    @endphp
            @foreach($customers as $customer)
            <tr>
                <td>{{ $number }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->no_hp }}</td>
                <td>
                <a href="{{ route('pelanggan.ubah', $customer) }}" class="btn btn-primary">Edit</a>
              <form action="{{ route('pelanggan.hapus', $customer) }}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
              </form>
                </td>
            </tr>
        </tbody>
        
        @php $number++ @endphp
        @endforeach
    </table>
@endsection