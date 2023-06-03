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

{{--                    {{$posts->links()}}--}}
                </div>
            <x-sidebar/>
            </div>
        </div>
    </section>
    @else
        <h5 class="text-lg-center">No Post. Check back later</h5>
    @endif
</x-layout>
