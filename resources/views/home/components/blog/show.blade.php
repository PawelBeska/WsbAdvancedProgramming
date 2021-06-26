
    <div class="col-md-12 mb-5">
        <div class="single-blog-item">
            <div class="blog-thumnail">
                <a href=""><img height="400px" width="700px" src="{{URL::asset($data->poster)}}" alt="blog-img"></a>
            </div>
            <div class="blog-content mt-5">
                <h4><a href="#">{{$data->title}}</a></h4>
                <p>
                    {!! $data->description !!}
                </p>
            </div>
            <span class="blog-date">{{date('d.m.Y - H:i:s',strtotime($data->created_at))}} - {{$data->author->email}}</span>
        </div>
    </div>

