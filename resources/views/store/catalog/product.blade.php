@extends('layouts.store')

@section('content')

      @include('shared.top-nav-bar')

        <!-- page content -->
        <div class="right_col mt-3" role="main">

            <div class="row">

                  <div class="col-md-12 x_panel">
                      <div class="col-md-6">
                        <div class="x_content">
                          <br />
                          <form class="form-horizontal form-label-left">

                            <div class="form-group mb-3" style="margin-bottom:20px;">
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <h3>Create Category</h3>
                              </div>
                            </div>

                              <div class="form-group mb-3" style="margin-bottom:20px;">
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" placeholder="Enter Category Name">
                                </div>
                              </div>

                            <div class="form-group" style="margin-bottom:20px;">
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup"
                                data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Enter Description" rows="4"
                                data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                data-parsley-validation-threshold="10"></textarea>
                              </div>
                            </div>

                            <div class="form-group" style="margin-bottom:20px;">
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                            </div>

                          </form>
                        </div>
                      </div>
                  </div>

                <div class="col-sm-6">
                </div>

            </div>

          </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
@endsection
