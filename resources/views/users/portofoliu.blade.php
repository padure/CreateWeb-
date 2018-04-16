<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portofoliu</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
        @foreach($portofolii as $portofoliu)
        @if($portofoliu->lg == 'RO')
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{ $portofoliu->id }}">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/{{ $portofoliu->thumbnail }}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>{{ $portofoliu->client }}</h4>
              <p class="text-muted">{{ $portofoliu->categorie}}</p>
            </div>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </section>

<!-- Portfolio Modals -->

    <!-- Modal 1 -->
    @foreach($portofolii as $portofoliu)
    <div class="portfolio-modal modal fade" id="portfolioModal{{$portofoliu->id}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">{{ $portofoliu->name }}</h2>
                  <p class="item-intro text-muted">{{ $portofoliu->subtitle }}</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/{{ $portofoliu->url }}" alt="">
                  <p>{{ $portofoliu->description }}</p>
                  <ul class="list-inline">
                    <li>Data: {{ $portofoliu->date }}</li>
                    <li>Client: {{ $portofoliu->client }}</li>
                    <li>Categorie: {{ $portofoliu->categorie }}</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Închideți Proiectul</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
   