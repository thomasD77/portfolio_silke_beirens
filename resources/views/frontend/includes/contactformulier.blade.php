<div class="row">
    <div class="col-12 col-lg-8 offset-lg-2">
        <h2 class="text-center mt-lg-5">Get In Touch With Us</h2>
        <p class="text-center mb-lg-4">Quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
            <br> voluptas sit aspernatur aut </p>

        @include('admin.includes.form_error')
        <form class="row mb-0" name="contactformulier" action="{{action('App\Http\Controllers\ContactController@store')}}" method="post">
            @csrf
            <div  class="row">
                <div class="col-12 col-lg-4">
                    <input id="input1" name="name" type="text" class="form-control my-1 styleinput" placeholder="Enter your name" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="col-12 col-lg-4">
                    <input id="input2" name="email" type="text" class="form-control my-1" placeholder="Your Email" aria-label="email" aria-describedby="basic-addon1">
                </div>
                <div class="col-12 col-lg-4">
                    <input id="input3" name="subject" type="text" class="form-control my-1" placeholder="Subject" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <textarea id="input4" name="message" class="form-control textfield" rows="10" cols="50" placeholder="Your message here" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 offset-lg-4 d-flex justify-content-center mb-5">
                    <button type="submit" class="button rounded">Send to Us</button>
                </div>
            </div>
        </form>
    </div>
</div>


