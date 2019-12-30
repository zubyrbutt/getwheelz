<footer id="footer" class="clearfix">
    <!-- footer-top -->
    <section class="footer-top clearfix">
        <div class="container">
            <div class="row">
                <!-- footer-widget -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Quik Links</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">All Cities</a></li>
                            <li><a href="#">Help & Support</a></li>
                            <li><a href="#">Advertise With Us</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>How to sell fast</h3>
                        <ul>
                            <li><a href="#">How to sell fast</a></li>
                            <li><a href="#">Membership</a></li>
                            <li><a href="#">Banner Advertising</a></li>
                            <li><a href="#">Promote your ad</a></li>
                            <li><a href="#">Trade Delivers</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget social-widget">
                        <h3>Follow us on</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i>youtube</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget news-letter">
                        <h3>Newsletter</h3>
                        <p>Trade is Worldest leading classifieds platform that brings!</p>
                        <!-- form -->
                        <form action="#">
                            <input type="email" class="form-control" placeholder="Your email id">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form><!-- form -->			
                    </div>
                </div><!-- footer-widget -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- footer-top -->
</footer><!-- footer -->



<!--/Preset Style Chooser--> 
<div class="style-chooser">
    <div class="style-chooser-inner">
        <a href="#" class="toggler"><i class="fa fa-life-ring fa-spin"></i></a>
        <h4>Presets</h4>
        <ul class="preset-list clearfix">
            <li class="preset1 active" data-preset="1"><a href="#" data-color="preset1"></a></li>
            <li class="preset2" data-preset="2"><a href="#" data-color="preset2"></a></li>
            <li class="preset3" data-preset="3"><a href="#" data-color="preset3"></a></li>        
            <li class="preset4" data-preset="4"><a href="#" data-color="preset4"></a></li>
        </ul>
    </div>
</div>
<!--/End:Preset Style Chooser-->

<!-- JS -->
<script src="https://js.pusher.com/5.0/pusher.min.js"></script>

<script src="{{ asset('theme/js/jquery.min.js') }}"></script>
<script src="{{ asset('theme/js/popper.min.js') }}"></script>
<script src="{{ asset('theme/js/modernizr.min.js') }}"></script>
<script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('theme/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('theme/js/scrollup.min.js') }}"></script>
<script src="{{ asset('theme/js/price-range.js') }}"></script> 
<script src="{{ asset('theme/js/jquery.countdown.js') }}"></script>    
<script src="{{ asset('theme/js/switcher.js') }}"></script>
<script src="{{ asset('theme/js/custom.js') }}"></script>

<script src="https://js.stripe.com/v3/"></script>
<script src="{{ asset('js/finance.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>


{{-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73239902-1', 'auto');
  ga('send', 'pageview');

</script> --}}

@include('sweetalert::alert')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    var receiver_id = '';
    var my_id = "{{ Auth::id() }}";
    $(document).ready(function () {
        // ajax setup form csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('9c6166a2db27f95f45c8', {
            cluster: 'ap2',
            forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            // alert(JSON.stringify(data));
            if (my_id == data.from) {
                $('#' + data.to).click();
            } else if (my_id == data.to) {
                if (receiver_id == data.from) {
                    // if receiver is selected, reload the selected user ...
                    $('#' + data.from).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());

                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });

        $('.user').click(function () {
            $('.user').removeClass('active');
            $(this).addClass('active');
            $(this).find('.pending').remove();

            receiver_id = $(this).attr('id');

            $.ajax({
                type: "get",
                url: "/message/" + receiver_id, // need to create this route
                data: "",
                cache: false,
                success: function (data) {
                    $('#messages').html(data);
                    scrollToBottomFunc();
                }
            });
        });

        $(document).on('keyup', '.input-text input', function (e) {
            var message = $(this).val();

            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                $(this).val(''); // while pressed enter text box will be empty

                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: "message", // need to create this post route
                    data: datastr,
                    cache: false,
                    success: function (data) {

                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                        scrollToBottomFunc();
                    }
                })
            }
        });
    });

    // make a function to scroll down auto
    function scrollToBottomFunc() {
        $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 50);
    }
</script>
