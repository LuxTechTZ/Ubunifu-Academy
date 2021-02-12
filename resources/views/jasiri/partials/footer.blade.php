<footer>
    <div class="container margin_120_95">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="{{url('/')}}/img/logo.png" width="149" height="42" alt=""></p>
                <p>{{trans('titles.Do you want to be a teacher? Write to us and contact us by phone or email numbers')}}</p>
                <div class="follow_us">
                    <ul>
                        <li>{{trans('socials.Follow us')}}</li>
                        <li><a href="#0"><i class="ti-facebook"></i></a></li>
                        <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#0"><i class="ti-google"></i></a></li>
                        <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                        <li><a href="#0"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto">
                <h5>{{trans('titles.Useful links')}}</h5>
                <ul class="links">
                    <li><a href="#0">{{trans('titles.admission')}}</a></li>
                    <li><a href="#0">{{trans('titles.About')}}</a></li>
                    <li><a href="#0">{{trans('titles.login')}}</a></li>
                    <li><a href="#0">{{trans('titles.register')}}</a></li>
                    <li><a href="#0">{{trans('titles.News &amp; Events')}}</a></li>
                    <li><a href="#0">{{trans('titles.Contacts')}}</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>{{trans('titles.Contact with Us')}}</h5>
                <ul class="contacts">
                    <li><a href="tel://+255765204506"><i class="ti-mobile"></i> +255 765 204 506</a></li>
                    <li><a href="mailto:info@jasiri.com"><i class="ti-email"></i> info@jasiri.com</a></li>
                </ul>
                <div id="newsletter">
                <h6>{{trans('titles.Newsletter')}}</h6>
                <div id="message-newsletter"></div>
                <form method="post" action="" name="newsletter_form" id="newsletter_form">
                    <div class="form-group">
                        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                        <input type="submit" value="Submit" id="submit-newsletter">
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-md-8">
                <ul id="additional_links">
                    <li><a href="{{url('/')}}/terms">Terms and conditions</a></li>
                    <li><a href="{{url('/')}}/terms">Privacy</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div id="copy">© {{ config('app.name', Lang::get('titles.app')) }}{{ config('app.name', Lang::get('titles.app')) }}</div>
            </div>
        </div>
    </div>
</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179224387-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179224387-1');
</script>
