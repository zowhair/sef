<style>
    .row {
        /*margin: 15px;*/
    }
</style>
<div class="container">
    <div class="row">
        @foreach($data as $galleryData)
        <div class="col-md-4 p-0">
                <img src="{{$galleryData->url}}" alt="" class="img-fluid" style="width: 250px;height: 200px;">
        </div>
        @endforeach
    </div>
</div>


