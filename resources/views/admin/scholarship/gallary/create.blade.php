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
                            <h4 class="mb-3">Add Images</h4>
                        </div>
                        <a href="/galleries/" class="btn btn-primary add-list"><i
                                class="fas fa-angle-left"> </i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4"> -->
                    <form action="{{url('/galleries')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">Image <br>

                                    </label>

                                    <input class="form-control" name="img" required onchange="fileValide()"
                                           type="file" id="file">

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

                    <script>
                        function fileValide(){
                            var inpFiles = document.getElementById('file');
                            var inpFiles2 = document.getElementById('file2');
                            var msg = document.getElementById('msg');
                            var msg2 = document.getElementById('msg2');
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
                            var fileSize2=inpFiles2.files[0].size;

                            if(fileSize2>=5000000){
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
