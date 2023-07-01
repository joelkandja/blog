@extends('layouts.master')

@section('content')

    <main id="main">

        <section class="single-post-content">
            <div class="container">
              <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">
      
                  <!-- ======= Single Post Content ======= -->
                  <div class="single-post">
                    <div class="post-meta"><span class="date">{{ $post->category->libelle }}</span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at->format('d-M-Y')}}</span></div>
                    <h1 class="mb-5">{{ $post->title }}</h1>
                    
                    {{-- <p>{{ $post->content }}</p> --}}
                  </div><!-- End Single Post Content -->
                  <figure class="my-4">
                    <img src="{{ asset("assets/img/post-landscape-1.jpg") }}" alt="image" class="img-fluid">
                    <figcaption>{{ $post->content }} </figcaption>
                  </figure>
      
                  <!-- ======= Comments ======= -->
                  <div class="comments">
                    <h5 class="comment-title py-4">Nombre de commentaire</h5>
                    <div class="comment d-flex mb-4">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm rounded-circle">
                          <img class="avatar-img" src="assets/img/person-5.jpg" alt="" class="img-fluid">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-2 ms-sm-3">
                        <div class="comment-meta d-flex align-items-baseline">
                          <h6 class="me-2">Client</h6>
                          <span class="text-muted">2d</span>
                        </div>
                        <div class="comment-body">
                        Commentaire
                        </div>
      
                        <div class="comment-replies bg-light p-3 mt-3 rounded">
                          <h6 class="comment-replies-title mb-4 text-muted text-uppercase">Nombre de reponse</h6>
      
                          <div class="reply d-flex mb-4">
                            <div class="flex-shrink-0">
                              <div class="avatar avatar-sm rounded-circle">
                                <img class="avatar-img" src="assets/img/person-4.jpg" alt="" class="img-fluid">
                              </div>
                            </div>
                            <div class="flex-grow-1 ms-2 ms-sm-3">
                              <div class="reply-meta d-flex align-items-baseline">
                                <h6 class="mb-0 me-2">Client</h6>
                                <span class="text-muted">2d</span>
                              </div>
                              <div class="reply-body">
                                Commentaire
                              </div>
                            </div>
                          </div>
                          <div class="reply d-flex">
                            <div class="flex-shrink-0">
                              <div class="avatar avatar-sm rounded-circle">
                                <img class="avatar-img" src="assets/img/person-3.jpg" alt="" class="img-fluid">
                              </div>
                            </div>
                            <div class="flex-grow-1 ms-2 ms-sm-3">
                              <div class="reply-meta d-flex align-items-baseline">
                                <h6 class="mb-0 me-2">Client</h6>
                                <span class="text-muted">1d</span>
                              </div>
                              <div class="reply-body">
                               Commentaire
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="comment d-flex">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm rounded-circle">
                          <img class="avatar-img" src="assets/img/person-2.jpg" alt="" class="img-fluid">
                        </div>
                      </div>
                      <div class="flex-shrink-1 ms-2 ms-sm-3">
                        <div class="comment-meta d-flex">
                          <h6 class="me-2">Client</h6>
                          <span class="text-muted">4d</span>
                        </div>
                        <div class="comment-body">
                         Commentaire
                        </div>
                      </div>
                    </div>
                  </div><!-- End Comments -->
      
                  <!-- ======= Comments Form ======= -->
                  <div class="row justify-content-center mt-5">
      
                    <div class="col-lg-12">
                      <h5 class="comment-title">Laissez un commentaire</h5>
                      <div class="row">
                        <div class="col-lg-6 mb-3">
                          <label for="comment-name">Nom</label>
                          <input type="text" class="form-control" id="comment-name" placeholder="Entrez votre nom">
                        </div>
                        <div class="col-lg-6 mb-3">
                          <label for="comment-email">Email</label>
                          <input type="text" class="form-control" id="comment-email" placeholder="Entrez votre email">
                        </div>
                        <div class="col-12 mb-3">
                          <label for="comment-message">Message</label>
      
                          <textarea class="form-control" id="comment-message" placeholder="Ecrire votre message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-12">
                          <input type="submit" class="btn btn-primary" value="Poster commentaire">
                        </div>
                      </div>
                    </div>
                  </div><!-- End Comments Form -->
      
                </div>
                
                {{-- @include('components.sidebar-detail-post') --}}
              </div>
            </div>
          </section>
    </main>

@endsection