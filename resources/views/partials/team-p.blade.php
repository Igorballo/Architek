<!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Notre Equipe</p>
                        <h2>Découvrez nos ingénieurs</h2>
                    </div>
                    <div class="row">

                        @foreach( $allcollaborateurs as $collaborateur)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item" >
                                <div class="team-img">
                                    <img src="storage/image/collaborateurs/{{ $collaborateur->photo_collaborateur}}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>{{ $collaborateur->nom}}</h2>
                                    <p>{{ $collaborateur->competence}}</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" target="_blank" href="https://{{ $collaborateur->lien_twitter}}"><i class="fab fa-twitter"></i></a>
                                    <a class="social-li" target="_blank" href="https://{{ $collaborateur->lien_linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <!-- Team End -->