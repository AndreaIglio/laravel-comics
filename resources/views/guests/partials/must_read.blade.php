<div class="must-read-title flex">
    <h2>Must Reads</h2>
</div>
<div class="must-read flex">

    @foreach($articles as $article)
    <div class="articles-card flex column">
        <img src="{{asset($article->cover)}}" alt="">
        <h6 class="articles-sub_title">{{$article->sub_title}}</h6>
        <h4 class="articles-title">{{$article->title}}</h4>
        <p class="articles-body">{{$article->body}}</p>

    </div>

    @endforeach

</div>