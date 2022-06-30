<!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Nos Services</p>
                        <h2>Découvrez Nos Services</h2>
                    </div>
                    <div class="row">
                        @foreach($allservices as $service)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="storage/image/service_photo/{{ $service->service_photo }}" alt="Image">
                                    <div class="service-overlay">
                                        <p> {{ $service->description }} </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>{{ $service->titre }}</h3>
                                    <a class="btn" href="storage/image/service_photo/{{ $service->service_photo }}" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>              
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- Service End -->