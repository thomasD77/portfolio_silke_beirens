<div class="row">
    <div class="col-12 col-lg-8 offset-lg-2">
        <h2 class="text-center mt-lg-5">Get In Touch With Us</h2>
        <p class="text-center mb-lg-4">Vul hierbeneden ons contactformulier in. <br> Na het behandelen van uw bericht nemen
        we contact met u op.</p>

        @php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
                $secretKey = "6LeMQE4cAAAAAGZDfvcmDyD7C_cw1Bzd8FfZ7N-T";
                $responseKey = $_POST['g-recaptcha-response'];
                $userIP = $_SERVER['REMOTE_ADDR'];

                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
                $response = file_get_contents($url);
            }
        @endphp
        @include('admin.includes.form_error')
        <form class="row mb-0" name="contactformulier" action="{{action('App\Http\Controllers\ContactController@store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-4">
                    <input id="input1" name="name" type="text" class="form-control my-1 styleinput shadow" placeholder="Enter your name" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="col-12 col-lg-4">
                    <input id="input2" name="email" type="text" class="form-control my-1 shadow" placeholder="Your Email" aria-label="email" aria-describedby="basic-addon1">
                </div>
                <div class="col-12 col-lg-4">
                    <input id="input3" name="subject" type="text" class="form-control my-1 shadow" placeholder="Subject" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <textarea id="input4" name="message" class="form-control textfield shadow" rows="10" cols="50" placeholder="Your message here" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="g-recaptcha" data-sitekey="6LeMQE4cAAAAAPEBoXmD3fPN-MZX4FFC9wFSfQvq"></div>
            <div class="row">
                <div class="col-12 col-lg-4 offset-lg-4 d-flex justify-content-center mb-5">
                    <button type="submit" class="button rounded">Send to Us</button>
                </div>
            </div>
        </form>
    </div>
</div>


