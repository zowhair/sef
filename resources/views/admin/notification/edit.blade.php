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
                            <h4 class="mb-3">Update Notification</h4>
                        </div>
                        <a href="/notifications/" class="btn btn-primary add-list"><i
                                class="fas fa-angle-left"> </i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4"> -->
                    <form action="{{url('/notifications/update')}}" method="POST" enctype="multipart/form-data">
                    
                        @csrf
                        <input type="hidden" value="{{$id}}" name="id">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" placeholder="Title" name="title" value="{{$data->title}}"
                                           type="text" id="title">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Date</label>
                                    <input class="form-control" placeholder="Date" name="date" value="{{$data->date}}"
                                           type="date" id="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Department</label>
                                        <input class="form-control" placeholder="department name" name="department" value="{{$data->department}}"
                                               type="text" id="class_adm_in">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Category</label>
                                        <input class="form-control" placeholder="categories" name="category" value="{{$data->category}}"
                                               type="text" id="class_adm_in">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">File</label>
                                    <input class="form-control" name="file" value="{{$data->file_url}}"
                                           type="file" id="file">
                                   
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
