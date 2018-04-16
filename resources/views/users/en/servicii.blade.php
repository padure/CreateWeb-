 <!-- Services -->
 <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
        @foreach ($servicii as $serviciu)
        @if ($serviciu->lg == 'EN')
          <div class="col-md-4">
          <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa {{$serviciu->icons}} fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">{{  $serviciu->title }}</h4>
            <p class="text-muted">{{ $serviciu->description }}</p>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </section>
