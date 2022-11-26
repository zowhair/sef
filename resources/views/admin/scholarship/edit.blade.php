@extends('admin.layouts.user')
@section('dashtitle')
@endsection

@section('contents')
    <div class="content-page">
        <div class="container bg-white">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Update Scholarship</h4>
                        </div>
                        <a href="/scholarships/" class="btn btn-primary add-list"><i
                                class="fas fa-angle-left"> </i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4"> -->
                    <form action="{{url('/scholarships/update')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
{{--                        <input type="hidden" value="{{$id}}" name="id">--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Introduction</label>
                                    <input type="textarea" id="introduction" name="introduction" value="{{$data->introduction}}">
{{--                                    <textarea class="form-control" name="content"--}}
{{--                                              type="text" id="introduction" name="introduction" rows="4">{{$data->introduction}}</textarea>--}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="submit_user_button">
                                    Update
                                </button>
                            </div>
                        </div>
                </form>
                <!-- </div> -->
            </div>
        </div>
        <!-- Page end  -->

    </div>
    </div>

@endsection
