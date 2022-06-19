@extends('pesanans.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pesanans.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>User</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pesanans as $pesanan)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pesanan->user }}</td>
                <td>{{ $pesanan->nama_barang }}</td>
                <td>{{ $pesanan->harga }}</td>
                <td>{{ $pesanan->jumlah }}</td>
                <td>{{ $pesanan->keterangan }}</td>
                <td>{{ date_format($pesanan->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('projects.destroy', $pesanan->id) }}" method="POST">

                        <a href="{{ route('projects.show', $pesanan->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('projects.edit', $pesanan->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pesanans->links() !!}

@endsection