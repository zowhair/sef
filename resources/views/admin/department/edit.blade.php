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
                            <h4 class="mb-3">Update Department  </h4>
                            <p> {{$data->page_title}} </p>
                        </div>
                        <a href="/department/" class="btn btn-primary add-list"><i
                                class="fas fa-angle-left"> </i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4"> -->
                    <form action="{{url('/department/update')}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="{{$id}}" name="id">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" placeholder="Page Title" name="page_title" value="{{$data->page_title}}"
                                           type="text" id="title">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Sub Title</label>
                                    <input class="form-control" placeholder="Sub Title" name="sub_title" value="{{$data->sub_title}}"
                                           type="text" id="date">
                                </div>
                            </div>
                            
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="title">Decription</label>
                                        <textarea class="form-control" placeholder="content of decription"  rows="4" name="decription" 
                                               type="text" id="class_adm_in" >{{$data->decription}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="select">Select the page</label>
                                    <select class="form-select" aria-label="Default select example" name="page_name">
                                        <option  value="{{$data->page_name}}">{{$data->page_name}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">Image <br>
                                    </label>
                                    
                                    <input class="form-control" name="file" value="{{$data->bannar_img}}" onchange="fileValide()"
                                           type="file" id="file">
                                           <span style="font-size:12px" id="msg">File size should be less then 2MB</span>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="submit_user_button">
                                    Save
                                </button>
                            </div>
                        </div>
                </form>
                <!-- </div> -->
                <script>
                    function fileValide(){
                        var inpFiles = document.getElementById('file');
                        var msg = document.getElementById('msg');
                        var fileSize=inpFiles.files[0].size;
                            console.log(inpFiles.files[0].size);
                            if(fileSize>=2000000){
                                inpFiles.value="";
                                inpFiles.style.border = "2px solid red";
                                msg.style.color = "red";
                            }
                            else{
                                inpFiles.style.border = "#ADD8E6";
                                msg.style.color = "black";
                            }
                    }
                    
                    
                </script>
            </div>
        </div>
        <!-- Page end  -->

    </div>
    </div>

@endsection
