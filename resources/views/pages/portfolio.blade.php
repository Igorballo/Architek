@extends('layout/default')
      
@section('content')

            @include('partials/header-p', ['pagename' => 'Nos Projets'] )


            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Nos Projets</p>
                        <h2>Découvrez Nos Projets</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">Tout</li>
                                <li data-filter=".first">Finaliser</li>
                                <li data-filter=".second">En cour</li>
                                <li data-filter=".third">A venir</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                @foreach ($projets as $projet )

                    @switch($projet->statut)
                        @case('complete')
                            
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                                <div class="portfolio-warp">
                                    <div class="portfolio-img" style="width: 290px;">
                                        <img src="/storage/image/projets/{{ $projet->photo }}" alt="Projet">
                                        <div class="portfolio-overlay">
                                            <p>
                                                {{ $projet->description }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="portfolio-text">
                                        <h3>{{ $projet->nom_projet }}</h3>
                                        <a class="btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">+</a>
                                    </div>
                                </div>
                            </div>
                            @break
                        @case('running')
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.2s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img" style="width: 290px;" >
                                    <img src="/storage/image/projets/{{ $projet->photo }}" alt="Projet">
                                    <div class="portfolio-overlay">
                                        <p>
                                            {{ $projet->description }}
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>{{ $projet->nom_projet }}</h3>
                                    <a class="btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                            @break
                        @case('upcoming')    
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.3s">
                            <div class="portfolio-warp" >
                                <div class="portfolio-img" style="width: 290px;">
                                    <img src="/storage/image/projets/{{ $projet->photo }}" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>
                                            {{ $projet->description }}
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>{{ $projet->nom_projet }}</h3>
                                    <a class="btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                    @endswitch
                        <!-- @if( $projet->statut == 'complete')
                            
                        @end 
                        
                        @endif -->
                @endforeach
                    </div>
                        
                        <!-- <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.2s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/portfolio-2.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>Project Name</h3>
                                    <a class="btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.3s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/portfolio-3.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>Project Name</h3>
                                    <a class="btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.4s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/portfolio-4.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>Project Name</h3>
                                    <a class="btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/portfolio-5.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>Project Name</h3>
                                    <a class="btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.6s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/portfolio-6.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>Project Name</h3>
                                    <a class="btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div> -->
                    
                    <div class="row">
                        <div class="col-12 load-more">
                            <a class="btn" href="#">Voir Plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio End -->
@stop
            
 


