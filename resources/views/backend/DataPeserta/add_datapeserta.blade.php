@extends('admin.admin_master')
@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      	  

      <!-- Main content -->
      <section class="content">

       <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Data Peserta</h4>
     
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                  <form method="post" action="{{ route('datapeserta.store') }}">
                    @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <h5>Nama Peserta<span class="text-danger">*</span></h5>
                              <div class="controls">
                                  <input type="text" name="nama_peserta" class="form-control" required data-validation-required-message="This field is required"> </div>
                              <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                          </div> 
                        </div>
                          <!-- end colomd6 -->
                          <div class="col-md-6">
                            <div class="form-group">
                                <h5>Alamat<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="alamat" class="form-control" required data-validation-required-message="This field is required"> </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            </div> 
                          </div>
                          <!-- end colomd6 -->
                          <div class="col-md-6">
                            <div class="form-group">
                                <h5>Berat Badan<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="berat_badan" class="form-control" required data-validation-required-message="This field is required"> </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            </div> 
                          </div>
                          <!-- end colomd6 -->
                          <div class="col-md-6">
                            <div class="form-group">
                                <h5>Tinggi Badan<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="tinggi_badan" class="form-control" required data-validation-required-message="This field is required"> </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            </div> 
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <h5>Usia<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="usia" class="form-control" required data-validation-required-message="This field is required"> </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            </div> 
                          </div>
                      </div>
                      <!--END row select-->

                    </div>
                    <!-- end row -->
                        
                      <!-- end row -->
                      <div class="text-xs-right">
                          <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                      </div>
                  </form>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->

@endsection

<script src="{{asset('backend/js/pages/form-validation.js') }}"></script>