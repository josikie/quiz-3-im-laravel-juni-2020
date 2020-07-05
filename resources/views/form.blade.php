@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3 col-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Buat Pertanyaan Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Masukkan Pertanyaanmu">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </div>
@endsection