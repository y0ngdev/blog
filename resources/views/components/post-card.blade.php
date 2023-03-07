@props(['$post'])<!-- post -->
<div class="post post-classic rounded bordered">
    <div class="thumb top-rounded">
        <a href="/categories/{{$post->category->slug}}"
           class="category-badge lg position-absolute">{{$post->category->name}}</a>
        <span class="post-format">
								<i class="icon-picture"></i>
							</span>
        <a href="/posts/{{$post->slug}}">
            <div class="inner">
                <img src="build/assets/images/posts/post-lg-1.jpg" alt="post-title"/>
            </div>
        </a>
    </div>
    <div class="details">
        <ul class="meta list-inline mb-0">
            <li class="list-inline-item"><a href="/authors/{{$post->author->username}}"><img
                        src="build/assets/images/other/author-sm.png" class="author"
                        alt="author"/>{{$post->author->name}}</a></li>
            <li class="list-inline-item">{{($post->created_at->diffForHumans())}}</li>
            <li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
        </ul>
        <h5 class="post-title mb-3 mt-3"><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h5>
        <p class="excerpt mb-0">{{$post->excerpt}}</p>
    </div>
    <div class="post-bottom clearfix d-flex align-items-center">
        <div class="social-share me-auto"></div>
        <div class="float-end d-none d-md-block">
            <a href="/posts/{{$post->slug}}" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
        </div>
        <div class="more-button d-block d-md-none float-end">
            <a href="/posts/{{$post->slug}}"><span class="icon-options"></span></a>
        </div>
    </div>
</div>
