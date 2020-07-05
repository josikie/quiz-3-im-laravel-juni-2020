@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3 col-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Jawaban Pertanyaan</h3>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/jawaban/{pertanyaan_id}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_pertanyaan">Nomor Pertanyaan</label>
                    <input type="number" class="form-control" id="id_pertanyaan" name="id_pertanyaan" placeholder="Masukkan Nomor Pertanyaan">
                    <label for="jawaban">Jawaban</label>
                    <input type="text" class="form-control" id="jawaban" name="jawaban" placeholder="Masukkan Jawabanmu untuk pertanyaan">
                         
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </div>
@endsection