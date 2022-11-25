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
                    <a href="/scholarships/" class="btn btn-primary add-list"><i class="fas fa-angle-left"> </i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <!-- <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4"> -->
                <form action="{{url('/partner-institutions/update')}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    {{-- <input type="hidden" value="{{$id}}" name="id">--}}
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Institution Name</label>
                                 <input type="text" name="institution_name" value="{{$data->institution_name}}">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-6 form-group">
                                    <label>Select image:</label>
                                    <input type="file" name="image" class="form-control" value="{{$data->image_path}}"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-6 form-group">
                                    <label>Date:</label>
                                    <input type="date" name="date" class="form-control" value="{{$data->date}}"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-6 form-group">
                                    <label>category:</label>
                                    <input type="text" name="category" class="form-control" value="{{$data->category}}"/>
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