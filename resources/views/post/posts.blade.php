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
                    {{$posts->links()}}
                </div>
            <x-sidebar/>
            </div>
        </div>
    </section>
    @else
        <h5 class="text-lg-center">No Post. Check back later</h5>
    @endif
</x-layout>
