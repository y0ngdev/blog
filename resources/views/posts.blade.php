<x-layout>
    @if($posts->count())


    <x-post-featured-card :post="$posts"/>
    <section class="main-content">
        <div class="container-xl">
            <div class="row gy-4">
                <div class="col-lg-8">
                    @foreach($posts->skip(1) as $post)
                    <x-post-card :post="$post"/>
                    @endforeach
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4">

                    <!-- sidebar -->
                    <div class="sidebar">

                        <!-- widget popular posts -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Popular Posts</h3>
                                <img src="images/wave.svg" class="wave" alt="wave"/>
                            </div>
                            <div class="widget-content">
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <span class="number">1</span>
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <img src="images/posts/tabs-1.jpg" alt="post-title"/>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">3 Easy Ways To Make Your
                                                iPhone Faster</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <span class="number">2</span>
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <img src="images/posts/tabs-2.jpg" alt="post-title"/>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">An Incredibly Easy Method
                                                That Works For All</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <span class="number">3</span>
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <img src="images/posts/tabs-3.jpg" alt="post-title"/>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">10 Ways To Immediately
                                                Start Selling Furniture</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- widget categories -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Explore Topics</h3>
                                <img src="images/wave.svg" class="wave" alt="wave"/>
                            </div>
                            <div class="widget-content">
                                <ul class="list">
                                    <li><a href="#">Lifestyle</a><span>(5)</span></li>
                                    <li><a href="#">Inspiration</a><span>(2)</span></li>
                                    <li><a href="#">Fashion</a><span>(4)</span></li>
                                    <li><a href="#">Politic</a><span>(1)</span></li>
                                    <li><a href="#">Trending</a><span>(7)</span></li>
                                    <li><a href="#">Culture</a><span>(3)</span></li>
                                </ul>
                            </div>

                        </div>

                        <!-- widget newsletter -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Newsletter</h3>
                                <img src="images/wave.svg" class="wave" alt="wave"/>
                            </div>
                            <div class="widget-content">
                                <span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
                                <form>
                                    <div class="mb-2">
                                        <input class="form-control w-100 text-center" placeholder="Email address…"
                                               type="email">
                                    </div>
                                    <button class="btn btn-default btn-full" type="submit">Sign Up</button>
                                </form>
                                <span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a
                                        href="#">Privacy Policy</a></span>
                            </div>
                        </div>


                        <!-- widget tags -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Tag Clouds</h3>
                                <img src="images/wave.svg" class="wave" alt="wave"/>
                            </div>
                            <div class="widget-content">
                                <a href="#" class="tag">#Trending</a>
                                <a href="#" class="tag">#Video</a>
                                <a href="#" class="tag">#Featured</a>
                                <a href="#" class="tag">#Gallery</a>
                                <a href="#" class="tag">#Celebrities</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    @else
        <p>No Post</p>
    @endif
</x-layout>
