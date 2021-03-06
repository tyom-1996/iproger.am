

<footer style="background: url({{asset('images/footer.jpg')}});background-size: cover;background-attachment: fixed">
    <div class="footer-bg">
        <div class="footer-wrap">

            <ul class="footer-ul">
                <h3 class="footer-ul-li"> ABOUT </h3>
                <li class="footer-ul-li">
                    <a href="#">Our mission</a>
                </li>
                <li class="footer-ul-li">
                    <a href="#">How we work</a>
                </li>
                <li class="footer-ul-li">
                    <a href="#">Privacy policy</a>
                </li>
                <li class="footer-ul-li">
                    <a href="#">Terms of use</a>
                </li>
            </ul>

            <ul class="footer-ul">
                <h3 class="footer-ul-li"> CANDIDATES </h3>
                <li class="footer-ul-li">
                    <a href="#">Create online CV</a>
                </li>
                <li class="footer-ul-li">
                    <a href="#">View all jobs</a>
                </li>
                <li class="footer-ul-li">
                    <a href="#">View all companies</a>
                </li>

            </ul>

            <ul class="footer-ul">
                <h3 class="footer-ul-li"> EMPLOYERS </h3>
                <li class="footer-ul-li">
                    <a href="#">Register as employer</a>
                </li>
                <li class="footer-ul-li">
                    <a href="#">View job packages</a>
                </li>
                <li class="footer-ul-li">
                    <a href="#">View all companies</a>
                </li>

            </ul>

            <div class="subscription-section">
                <h3 >RECEIVE JOB ALERTS RIGHT ON YOUR MAILBOX</h3>
                <p>Provide your email address and subscribe</p>
                <form action="" method="post">
                    <input id="subscribtion-input" type="email" placeholder="">
                    <button><i class="fa fa-paper-plane"></i></button>
                </form>
            </div>

        </div>
    </div>
</footer>
<div class="copyright">
    <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2020 iproger.am. All rights reserved. </p>
</div>

<script>
    var subscribtion = document.getElementById('subscribtion-input');
    var type_this2  = "Enter your email";
    var _delete2    = false;
    var index2      = 0;
    var time2       = 0;
    var j          = 1;

    function subscribtion_form() {

        if (index2 == type_this2.length) {
            j       = -1;
            time2    = 50;
            _delete2 = true;
        } else if(index2 == 0) {
            j    = +1
            time2 = 100;
        } else {
            _delete2 = false;
        }

        subscribtion.placeholder = type_this2.substr(0, index2) + "|";
        index2 = index2 + j;

        if (_delete2) {
            setTimeout("subscribtion_form()", 400);
        } else{
            setTimeout("subscribtion_form()", time2);
        }
    }

    subscribtion_form();
</script>
