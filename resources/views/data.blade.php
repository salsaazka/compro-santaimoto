@extends('layouts.dashboard')
@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Form Data</h6>
        </div>
        <div class="card-body px-3 pt-0 pb-2">
          @if(Session::get('status'))
          <div class="alert alert-success text-white">
            {{session('status')}}
          </div>
          @endif
          <table id="example" class="display" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Doc</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($datas as $data )
              <tr>
                <td></td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#data-{{$data->id}}">
                    File
                  </button>
                </td>
                <td>
                  <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-data-{{$data->id}}">
                    Delete
                  </button>
                </td>
              </tr>
              <div class="modal fade" id="data-{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Document</h5>
                      <button type="button" class="btn-close" style="background: black" st data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      @php
                      // Ambil ekstensi file
                      $fileExtension = pathinfo($data->doc, PATHINFO_EXTENSION);
                      @endphp

                      @if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif']))
                      <!-- Jika file adalah gambar -->
                      <img src="{{ asset('form-data/'.$data->doc) }}" alt="Preview" style="max-width: 100%; height: auto;">
                      @elseif($fileExtension === 'pdf')
                      <!-- Jika file adalah PDF -->
                      <iframe src="{{ asset('form-data/'.$data->doc) }}" frameborder="0" width="100%" height="500px"></iframe>
                      @else
                      <!-- Jika file tidak dikenal -->
                      <p>File tidak dapat ditampilkan. <a href="{{ asset('form-data/'.$data->doc) }}" target="_blank">Unduh file</a>.</p>
                      @endif
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="delete-data-{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Confirmation!</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure to delete this data?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">No</button>
                      <form action="{{route('form.destroy', $data->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Yes, Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
@section('js')
<script>
  $(document).ready(function() {
    $('#example').DataTable({
      columnDefs: [{
        targets: 0, // Kolom pertama (No)
        render: function(data, type, row, meta) {
          return meta.row + 1; // Menambahkan nomor urut
        }
      , }, ]
    , });
  });

</script>
@endsection
