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
                            <h4 class="mb-3">Update News Updates</h4>
                        </div>
                        <a href="/news-update/" class="btn btn-primary add-list"><i
                                class="fas fa-angle-left"> </i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4"> -->
                    <form action="{{url('/news-update/update')}}" method="POST" enctype="multipart/form-data">

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
                                    <label for="title">Content</label>
                                        <input class="form-control" placeholder="content text" name="content" value="{{$data->content}}"
                                               type="text" id="class_adm_in">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">Image</label>
                                    <input class="form-control" name="file" value="{{$data->img_url}}" 
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
