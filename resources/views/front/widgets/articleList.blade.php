@if(count($articles)>0)
@foreach($articles as $article)
    <div class="post-preview">
        <a href="{{route('single', [$article->getCategory->slug,$article->slug])}}">
            <h2 class="post-title">
                {{$article->title}}
            </h2>
            <img src="/{{$article->image}}" width="800px" height="400px"/>
            <h3 class="post-subtitle">
                {!! substr($article->content,0,103) !!} ...
            </h3>
        </a>
        <p class="post-meta">Kategori:<a href="#">{{$article->getCategory->name}}</a>
            <span class="float-right">{{$article->created_at->diffForHumans()}}</span>
        </p>
        @if(!$loop->last)
            <hr>
        @endif
    </div>
@endforeach
{{$articles->links()}}
@else
    <div class="alert alert-danger">
        <h1>Bu Kategoriye Ait Yazı Bulunamadı!</h1>
    </div>
@endif

