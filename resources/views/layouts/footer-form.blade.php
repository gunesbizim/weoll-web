<div class="spacer-80"></div>
<div class="container footer-contact">
    <div class="row">
        <h2>Bizimle İletişime Geçin</h2>
        <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST"
            class="d-flex flex-column form-footer border-r-5" id="request-demo">
            <input type="hidden" name="action" value="request-demo" />
            <input type="hidden" name="lead_source" value="Weoll Website">
            <input type="hidden" name="Web_Form_Type__c" value="Demo Form">
            <input type="hidden" name="download_type" value="">
            <input type=hidden name='captcha_settings'
                value='{"keyname":"google","fallback":"true","orgId":"00D20000000BeWX","ts":""}'>
            <input type=hidden name="oid" value="00D20000000BeWX">
            <div class="row d-flex">
                <div class="form-group col-md-6 col-xs-12 d-flex flex-column">
                    <label for="first_name">Ad</label>
                    <input id="first_name" type="text" name="first_name">
                </div>
                <div class="form-group col-md-6 col-xs-12 d-flex flex-column">
                    <label for="last_name">Soyad</label>
                    <input type="text" name="last_name" id="last_name">
                </div>
            </div>
            <div class="row d-flex">
                <div class="form-group col-md-6 col-xs-12 d-flex flex-column">
                    <label for="company">Firma Adı</label>
                    <input type="text" name="company" id="company">
                </div>
                <div class="form-group col-md-6 col-xs-12 d-flex flex-column">
                    <label for="title">Ünvan</label>
                    <input type="text" name="title" id="title">
                </div>
            </div>

            <div class="row d-flex">
                <div class="form-group col-md-6 col-xs-12 d-flex flex-column">
                    <label for="email">E-Posta</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-group col-md-6 col-xs-12 d-flex flex-column">
                    <label for="phone">Telefon</label>
                    <input type="phone" name="phone" id="phone">
                </div>
            </div>
            <div class="row d-flex ">
                <div class="form-group col-md-12 col-xs-12 d-flex flex-column flex-h-end">
                    <label for="message"></label>
                    <textarea name="description" id="" cols="30" rows="10" id="description"></textarea>
                    @if (env('APP_ENV') == 'production')
                        <div class="g-recaptcha" data-sitekey="6Lfx-vAUAAAAAKgm7KorlGPMXPl9FU6BwuVT3qWP"
                            data-callback="recaptchaCallback"></div><br>
                    @endif
                    <button type="submit" value="Gönder" class="form-submit">Gönder</button>
                </div>

            </div>

            <div class="row d-flex flex-v-center">
                <div class="contact-info phone col-md-2 text-right">
                    +90 (212) 211 50 01
                </div>
                <div class="contact-info email col-md-2 text-right">
                    info@weoll.com
                </div>
            </div>

        </form>
    </div>
</div>


<div class="spacer-80"></div>

@section('custom-script')
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function timestamp() {
            var response = document.getElementById("g-recaptcha-response");
            if (response == null || response.value.trim() == "") {
                var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);
                elems["ts"] = JSON.stringify(new Date().getTime());
                document.getElementsByName("captcha_settings").forEach(function(t, e) {
                    t.value = JSON.stringify(elems);
                })
                // document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems);
            }
        }
        setInterval(timestamp, 500);

        function recaptchaCallback() {
            $('.footer-contact form').attr('data-validate', 'true');
        }
    </script>
@endsection
