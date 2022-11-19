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
                            <h4 class="mb-3">Add Newsletters</h4>
                        </div>
                        <a href="/newsletters/" class="btn btn-primary add-list"><i
                                class="fas fa-angle-left"> </i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4"> -->
                    <form action="{{url('/newsletters')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" placeholder="Title" name="title" required
                                           type="text" id="title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">File <br>
                                        <span style="font-size:12px" id="msg2">File size should be less then 5MB</span>
                                    </label>
                                    
                                    <input class="form-control" name="file" required onchange="fileValide()"
                                           type="file" id="file2">
                                   
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="title">Decription</label>
                                        <textarea class="form-control" placeholder="Decription about Research studies"  rows="3" name="decription" required
                                               type="text" id="class_adm_in" ></textarea>
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
                            
                            if(fileSize>=5000000){
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
