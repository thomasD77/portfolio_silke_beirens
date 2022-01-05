<div class="row">
    <div class="col-12 col-lg-8 offset-lg-2">
        <h2 class="text-center mt-lg-5">Heb je een vraag?</h2>
        <p class="text-center mb-lg-4">Dan kun je het formulier hieronder invullen. Ik contacteer je zo snel mogelijk.</p>

        @include('admin.includes.form_error')
        <form class="row mb-0" name="contactformulier" action="{{action('App\Http\Controllers\ContactController@store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-4">
                    <input id="input1" name="name" type="text" class="form-control my-1 styleinput shadow" placeholder="Uw naam hier" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="col-12 col-lg-4">
                    <input id="input2" name="email" type="text" class="form-control my-1 shadow" placeholder="Uw e-mail hier" aria-label="email" aria-describedby="basic-addon1">
                </div>
                <div class="col-12 col-lg-4">
                    <input id="input3" name="subject" type="text" class="form-control my-1 shadow" placeholder="Onderwerp" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <textarea id="input4" name="message" class="form-control textfield shadow" rows="10" cols="50" placeholder="Uw bericht hier" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="form-group form-check ml-3">
                <input type="checkbox" class="form-check-input" name="GDPR">
                <label class="form-check-label" for="exampleCheck1">Ik ga akkoord met GDPR</label>
            </div>
            <div class="g-recaptcha" id="g-recaptcha" data-sitekey="6LeMQE4cAAAAAPEBoXmD3fPN-MZX4FFC9wFSfQvq"></div>
            <div class="row">
                <div class="col-12 col-lg-4 offset-lg-4 d-flex justify-content-center mb-5">
                    <button type="submit" class="button rounded">verstuur</button>
                </div>
            </div>
        </form>
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </div>
</div>


