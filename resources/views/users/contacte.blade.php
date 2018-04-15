<!-- Contact -->
<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contactează-ne</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            @include('errors.errors')
            {{  Form::open(array('url' => '/send', 'name' => 'sentMessage', 'id' => 'contactForm' )) }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      {!! Form::text('nume', null, ['class' => 'form-control', 'type'=>'text', 'id' => 'name', 'placeholder' => 'Numele Tău *', 'data-validation-required-message' => 'Please enter your name.']) !!}
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                      {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email Tău *', 'data-validation-required-message' => 'Please enter your email address.']) !!}
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                      {!! Form::text('telefon', null, ['class' => 'form-control', 'type'=>'tel', 'id' => 'phone', 'placeholder' => 'Telefonul Tău *', 'data-validation-required-message' => 'Please enter your phone number.']) !!}
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    {!! Form::textarea('mesaj', null, ['class' => 'form-control', 'id' => 'message', 'placeholder' => 'Mesajul Tău *', 'data-validation-required-message' => 'Please enter a message.']) !!}
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                    {!! Form::submit('Comandă Acum', ['class' => 'btn btn-primary btn-xl text-uppercase']) !!}
                </div>
              </div>
            </form>
            {{  Form::close()   }}
          </div>
        </div>
      </div>
    </section>
