@extends('template.base')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto mt-5">
                    <div class="card card-default">
                        <div class="card-header bg-warning">
                            Ganti Password
                        </div>
                        <div class="card-body">
                            <form action="{{url('setting')}}"  method="post">
                            @csrf
                            INDRA BRAHMANA PUTRA
                                <div class="form-group">
                                    <label for="" class="control-label">Current Password</label>
                                    <input type="password" name="current" class="form-control">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="" class="control-label">Confirm New Password</label>
                                    <input type="password" name="new" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">New Password</label>
                                    <input type="password" name="confirm" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-warning"><i class="fa fa-save"></i>Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection