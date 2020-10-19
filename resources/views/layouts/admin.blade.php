@extends('layouts.master')
@push('style')
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
@endpush
@section('title', 'datatable')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>No Tlp</th>
          <th>Email</th>
          <th>Pesan</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          @forelse ($message as $item => $value)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$value->name}}</td>
          <td>{{$value->phone}}</td>
          <td>{{$value->email}}</td>
          <td>{{$value->text}}</td>
          <td>{{$value->tanggal_dibuat}}</td>
          <td>
            <form action="pro-admin/{{$value->id}}" method="POST">
              @csrf
              @method('DELETE')
            <input type="submit" class="btn float-right btn-danger btn-xs" onclick="return confirm('yakin mau di hapus nih?')" value="Hapus">
          </form>
          </td>
        </tr>
        @empty
        <p>Tidak ada pesan</p>         
        @endforelse
      </tbody>
        </tfoot>
      </table> 
     
    </div>
    <!-- /.card-body -->
  </div>
    
@endsection
@push('script')
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
    $(function () {
        $("#example1").DataTable();
    });
    </script>
@endpush