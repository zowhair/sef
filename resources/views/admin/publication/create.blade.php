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
                            <h4 class="mb-3">Add E-Publications</h4>
                        </div>
                        <a href="/publication/" class="btn btn-primary add-list"><i
                                class="fas fa-angle-left"> </i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4"> -->
                    <form action="{{url('/publication')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label><span class="text-danger">*</span>
                                    <input class="form-control" placeholder="Title" name="title" required
                                           type="text" id="title">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Date</label><span class="text-danger">*</span>
                                    <input class="form-control" placeholder="Date" name="date" required
                                           type="date" id="date">
                                </div>
                            </div>
                            
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="title">Decription</label><span class="text-danger">*</span>
                                        <textarea class="form-control" placeholder="Decription about Research studies"  rows="3" name="decription" required
                                               type="text" id="class_adm_in" ></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="select">Select the page</label><span class="text-danger">*</span>
                                    <select class="form-select" aria-label="Default select example" name="page_name">
                                        @foreach($data as $row)
                                        <option value="{{$row->id}}">{{$row->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">Image <br> </label>
                                    <input class="form-control" name="img"  onchange="fileValide()"
                                           type="file" id="file">
                                           <span style="font-size:12px" id="msg">Image size should be less then 2MB</span>
                                   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">File </label>
                                    
                                    <input class="form-control" name="file"  onchange="fileValide()"
                                           type="file" id="file2">
                                           <span style="font-size:12px" id="msg2">File size should be less then 2MB</span>
                                   
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
                        var inpFiles2 = document.getElementById('file2');
                        var msg = document.getElementById('msg');
                        var msg2 = document.getElementById('msg2');
                        var fileSize=inpFiles.files[0].size;
                            
                            if(fileSize>=2000000){
                                inpFiles.value="";
                                inpFiles.style.border = "2px solid red";
                                msg.style.color = "red";
                            }
                            else{
                                inpFiles.style.border = "#ADD8E6";
                                msg.style.color = "black";
                            }
                        var fileSize2=inpFiles2.files[0].size;
                            
                            if(fileSize2>=2000000){
                                inpFiles2.value="";
                                inpFiles2.style.border = "2px solid red";
                                msg2.style.color = "red";
                            }
                            else{
                                inpFiles2.style.border = "#ADD8E6";
                                msg2.style.color = "black";
                            }
                    }
                </script>
            </div>
        </div>
        <!-- Page end  -->

    </div>
    </div>

@endsection
