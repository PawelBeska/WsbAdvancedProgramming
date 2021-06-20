<div class="row">

    @foreach($indexData->items() as $item)
        <div class="col-md-4">
            <div class="single-blog-item">
                <div class="blog-thumnail">
                    <a href="{{route('home.blog.show',['id'=>$item->id])}}"><img height="200px" width="300px" src="{{URL::asset($item->poster)}}" alt="blog-img"></a>
                </div>
                <div class="blog-content">
                    <h4><a href="{{route('home.blog.show',['id'=>$item->id])}}">{{$item->title}}</a></h4>
                    <a href="{{route('home.blog.show',['id'=>$item->id])}}" class="more-btn">Zobacz więcej</a>
                </div>
                <span class="blog-date">{{date('d.m.Y - H:i:s',strtotime($item->created_at))}}</span>
            </div>
        </div>
    @endforeach


</div>
<div class="row mt-5">
    {{$indexData}}
</div>

