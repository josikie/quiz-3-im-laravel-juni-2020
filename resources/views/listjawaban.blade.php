@extends('adminlte.master')

@section('content')
 <div class="ml-3 mt-3  m-t-5">
     <h1></h1>
     <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Jawaban</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($jawaban as $key => $jawab)  
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $jawab->jawaban }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>

     <a href="/pertanyaan"class="btn btn-primary">
            Kembali
    </a>


 </div>
@endsection

