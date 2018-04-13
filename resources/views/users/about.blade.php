<!-- About -->
<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Despre</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
            @foreach($despre as $des)
              @if ($des->language == 'RO')
              <li class="{{ $des->class }}">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/{{ $des->image }}" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>{{ $des->date }}</h4>
                    <h4 class="subheading">{{ $des->title }}</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">{{ $des->description }}</p>
                  </div>
                </div>
              </li>
              @endif
            @endforeach
              
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Faceți parte
                    <br>din povestea
                    <br>noastră!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
