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
                      <th>Pertanyaan</th>
                      <th>Beri Jawaban</th>
                      <th>Lihat Jawaban</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pertanyaan as $key => $bertanya)  
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $bertanya->pertanyaan }}</td>
                      <td><a href="/jawaban"  class="btn btn-primary">Jawab</a></td>
                      <td><a href="/jawaban/{{ $key+1 }}"  class="btn btn-primary">Lihat Jawaban</a></td>
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

     <a href="/pertanyaan/create"class="btn btn-primary">
       Buat Pertanyaan Baru
    </a>


 </div>
@endsection

