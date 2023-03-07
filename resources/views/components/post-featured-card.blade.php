@props(['post'])

<section class="hero-carousel">
    <div class="container-xl">
        <div class="post-carousel-lg">
            <!-- post -->
            <div class="post featured-post-xl">
                <div class="details clearfix">
                    <a href="/categories/{{$post[0]->category->slug}}"
                       class="category-badge lg">{{$post[0]->category->name}}</a>
                    <h4 class="post-title"><a href="/posts/{{$post[0]->slug}}">{{$post[0]->title}}</a></h4>
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a
                                href="/authors/{{$post[0]->author->username}}">{{$post[0]->author->name}}</a></li>
                        <li class="list-inline-item">{{($post[0]->created_at->diffForHumans())}}</li>
                    </ul>
                </div>
                <a href="/posts/{{$post[0]->slug}}">
                    <div class="thumb rounded">
                        {{--TODO--}}
                        <div class="inner data-bg-image" data-bg-image="images/posts/featured-xl-1.jpg"></div>
                    </div>
                </a>
            </div>
         </div>
    </div>
</section>

<!-- section main content -->
