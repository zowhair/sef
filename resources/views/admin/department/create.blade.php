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
                            <h4 class="mb-3">Add Department Pages</h4>
                        </div>
                        <a href="/department/" class="btn btn-primary add-list"><i
                                class="fas fa-angle-left"> </i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4"> -->
                    <form action="{{url('/department')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" placeholder="Page Title" name="page_title" required
                                           type="text" id="title">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Sub Title</label>
                                    <input class="form-control" placeholder="Sub Title" name="sub_title" 
                                           type="text" id="date">
                                </div>
                            </div>
                            
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="title">Decription</label>
                                        <textarea class="form-control" placeholder="content of decription"  rows="4" name="decription" required
                                               type="text" id="class_adm_in" ></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="select">Select the page</label>
                                    <select class="form-select" aria-label="Default select example" name="page_name">
                                        <option value="Communication and Research">Communication and Research</option>
                                        <option value="Finance and Audit">Finance and Audit</option>
                                        <option value="General Administration">General Administration</option>
                                        <option value="Human Resource">Human Resource</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Planning And Programs">Planning And Programs</option>
                                        <option value="Training and Assessment">Training and Assessment</option>
                                        <option value="Monitoring and Evaluation Cell">Monitoring and Evaluation Cell</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">Image <br>
                                    </label>
                                    
                                    <input class="form-control" name="file" required onchange="fileValide()"
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
