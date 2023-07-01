@extends('layouts.master')

@section('content')
    <main id="main">
        @include('components.sliderHome')


        <!-- ======= Post Grid Section ======= -->
        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="post-entry-1 lg">
                            <a href="{{ route('detailPost', $post) }}"><img src="assets/img/post-landscape-1.jpg"
                                    alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{ $post->category->libelle }}</span> <span
                                    class="mx-1">&bullet;</span> <span>{{ $post->created_at->format('d-M-Y') }}</span>
                            </div>
                            <h2><a href="{{ route('detailPost', $post) }}">{{ $post->title }}</a></h2>
                            <p class="mb-4 d-block">{{ $post->content }}</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Auteur</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            @forelse($posts as $post)
                                <div class="col-lg-4 border-start custom-border">
                                    <div class="post-entry-1">
                                        <a href="{{ route('detailPost', $post) }}"><img
                                                src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">{{ $post->category->libelle }}</span>
                                            <span class="mx-1">&bullet;</span>
                                            <span>{{ $post->created_at->format('d-M-Y') }}</span>
                                        </div>
                                        <h2><a href="{{ route('detailPost', $post) }}">{{ $post->title }}</a></h2>
                                    </div>

                                </div>
                            @empty
                                <p>Pas de post</p>
                            @endforelse
                            <div class="d-flex justify-content-center">
                                {{-- {!! $posts->links() !!} --}}
                            </div>

                        </div>
                    </div>


                </div> <!-- End .row -->
            </div>
        </section> <!-- End Post Grid Section -->

        <!-- ======= Culture Category Section ======= -->
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>{{ $categorie->libelle }}</h2>
                    <div><a href="category.html" class="more">Voir Tout {{ $categorie->libelle }}</a></div>
                </div>

                <div class="row">
                        <div class="col-md-9">

                            <div class="d-lg-flex post-entry-2">
                                <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                    <img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
                                </a>
                                <div>
                                    <div class="post-meta"><span class="date">{{ $post->category->libelle }}</span> <span
                                            class="mx-1">&bullet;</span>
                                        <span>{{ $post->created_at->format('d-M-Y') }}</span>
                                    </div>
                                    <h3><a href="single-post.html">{{ $post->title }}</a></h3>
                                    <p>
                                        {{ $post->content }}
                                    </p>
                                    <div class="d-flex align-items-center author">
                                        <div class="photo"><img src="assets/img/person-2.jpg" alt=""
                                                class="img-fluid">
                                        </div>
                                        <div class="name">
                                            <h3 class="m-0 p-0">Auteur</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="col-md-3">
                        @forelse($categorie->posts as $post)
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">{{ $post->category->libelle }}</span> <span
                                        class="mx-1">&bullet;</span>
                                    <span>{{ $post->created_at->format('d-M-Y') }}</span>
                                </div>
                                <h2 class="mb-2"><a href="single-post.html">{{ $post->title }}</a></h2>
                                <span class="author mb-3 d-block">Auteur</span>
                            </div>
                        @empty
                            <p>Pas de post pour cette categorie</p>
                        @endforelse



                    </div>
                </div>
            </div>
        </section><!-- End Culture Category Section -->




    </main>
@endsection
