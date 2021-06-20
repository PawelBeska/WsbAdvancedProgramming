<div class="row">
    <div class="col-md-4">
        <div class="single-blog-item">
            <div class="blog-thumnail">
                <a href=""><img height="200px" width="300px" src="{{URL::asset($data->poster)}}" alt="blog-img"></a>
            </div>
            <div class="blog-content">
                <h4><a href="#">{{$data->title}}</a></h4>
                <p>
                    {!! $data->description !!}
                </p>
            </div>
            <span class="blog-date">{{date('d.m.Y - H:i:s',strtotime($data->created_at))}} - {{$data->author->email}}</span>
        </div>
    </div>
</div>
