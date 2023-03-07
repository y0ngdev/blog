@props(['post'])

<section class="hero-carousel">
    <div class="container-xl">
        <div class="post-carousel-lg">
            <!-- post -->
            <div class="post featured-post-xl">
                <div class="details clearfix">
                    <a href="/categories/{{$post->category->slug}}" class="category-badge lg">{{$post->category->name}}</a>
                    <h4 class="post-title"><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h4>
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"> <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                </div>
                <a href="/posts/{{$post->slug}}">
                    <div class="thumb rounded">
                        <div class="inner data-bg-image" data-bg-image="images/posts/featured-xl-1.jpg"></div>
                    </div>
                </a>
            </div>
            <!-- post -->
            <div class="post featured-post-xl">
                <div class="details clearfix">
                    <a href="category.html" class="category-badge lg">Culture</a>
                    <h4 class="post-title"><a href="blog-single.html">Important Thing You Need To Know About Swim</a>
                    </h4>
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                </div>
                <a href="blog-single.html">
                    <div class="thumb rounded">
                        <div class="inner data-bg-image" data-bg-image="images/posts/featured-xl-2.jpg"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- section main content -->
