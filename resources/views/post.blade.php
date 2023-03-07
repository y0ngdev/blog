<x-layout>
    <!-- section main content -->
    <section class="main-content mt-3">
        <div class="container-xl">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
                </ol>
            </nav>

            <div class="row gy-4">

                <div class="col-lg-8">
                    <!-- post single -->
                    <div class="post post-single">
                        <!-- post header -->
                        <div class="post-header">
                            <h1 class="title mt-0 mb-3">{{$post->title}}</h1>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item"><a href="/author/{{$post->author->username}}"><img
                                            src="/build/assets/images/other/author-sm.png"
                                            class="author" alt="{{$post->author->name}}"/>{{$post->author->name}}
                                    </a></li>
                                <li class=" list-inline-item"><a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></li>
                                <li class="list-inline-item">{{($post->created_at->diffForHumans())}}</li>
                            </ul>
                        </div>
                        <!-- featured image -->
                        <div class="featured-image">
                            <img src="/build/assets/images/posts/featured-lg.jpg" alt="post-title"/>
                        </div>
                        <!-- post content -->
                        <div class="post-content clearfix">
                            <p>{{$post->body}}</p>

                            </div>
                        <!-- post bottom section -->
                        <div class="post-bottom"></div>

                    </div>

                    <div class="spacer" data-height="50"></div>

                    <div class="about-author padding-30 rounded">
                        <div class="thumb">
                            <img src="/build/assets/images/other/avatar-about.png" alt="Katen Doe"/>
                        </div>
                        <div class="details">
                            <h4 class="name"><a href="/author/{{$post->author->username}}">{{$post->author->name}}</a></h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae culpa dignissimos quidem neque porro consequuntur maxime voluptate, architecto, ipsam doloremque aspernatur temporibus enim ipsa itaque mollitia a, molestiae cumque expedita.</p>
                             </div>
                    </div>

                    <div class="spacer" data-height="50"></div>

                    <!-- section header -->
                    <div class="section-header">
                        <h3 class="section-title">Comments (3)</h3>
                        <img src="/build/assets/images/wave.svg" class="wave" alt="wave"/>
                    </div>
                    <!-- post comments -->
                    <div class="comments bordered padding-30 rounded">

                        <ul class="comments">
                            <!-- comment item -->
                            <li class="comment rounded">
                                <div class="thumb">
                                    <img src="/build/assets/images/other/comment-1.png" alt="John Doe"/>
                                </div>
                                <div class="details">
                                    <h4 class="name"><a href="#">John Doe</a></h4>
                                    <span class="date">Jan 08, 2021 14:41 pm</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae odio ut
                                        tortor fringilla cursus sed quis odio.</p>
                                    <a href="#" class="btn btn-default btn-sm">Reply</a>
                                </div>
                            </li>
                            <!-- comment item -->
                            <li class="comment child rounded">
                                <div class="thumb">
                                    <img src="/build/assets/images/other/comment-2.png" alt="John Doe"/>
                                </div>
                                <div class="details">
                                    <h4 class="name"><a href="#">Helen Doe</a></h4>
                                    <span class="date">Jan 08, 2021 14:41 pm</span>
                                    <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit
                                        amet adipiscing sem neque sed ipsum.</p>
                                    <a href="#" class="btn btn-default btn-sm">Reply</a>
                                </div>
                            </li>
                            <!-- comment item -->
                            <li class="comment rounded">
                                <div class="thumb">
                                    <img src="/build/assets/images/other/comment-3.png" alt="John Doe"/>
                                </div>
                                <div class="details">
                                    <h4 class="name"><a href="#">Anna Doe</a></h4>
                                    <span class="date">Jan 08, 2021 14:41 pm</span>
                                    <p>Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia.</p>
                                    <a href="#" class="btn btn-default btn-sm">Reply</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="spacer" data-height="50"></div>

                    <!-- section header -->
                    <div class="section-header">
                        <h3 class="section-title">Leave Comment</h3>
                        <img src="/build/assets/images/wave.svg" class="wave" alt="wave"/>
                    </div>
                    <!-- comment form -->
                    <div class="comment-form rounded bordered padding-30">

                        <form id="comment-form" class="comment-form" method="post">

                            <div class="messages"></div>

                            <div class="row">

                                <div class="column col-md-12">
                                    <!-- Comment textarea -->
                                    <div class="form-group">
                                        <textarea name="InputComment" id="InputComment" class="form-control" rows="4"
                                                  placeholder="Your comment here..." required="required"></textarea>
                                    </div>
                                </div>

                                <div class="column col-md-6">
                                    <!-- Email input -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                                               placeholder="Email address" required="required">
                                    </div>
                                </div>

                                <div class="column col-md-6">
                                    <!-- Name input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="InputWeb" id="InputWeb"
                                               placeholder="Website" required="required">
                                    </div>
                                </div>

                                <div class="column col-md-12">
                                    <!-- Email input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="InputName" name="InputName"
                                               placeholder="Your name" required="required">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">
                                Submit
                            </button><!-- Submit Button -->

                        </form>
                    </div>
                </div>

                <div class="col-lg-4">

                    <!-- sidebar -->
               <x-sidebar/>
                </div>

            </div>

        </div>
    </section>

</x-layout>
