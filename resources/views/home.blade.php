<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="{{asset('css/header.css')}}" rel="stylesheet">
        <link href="{{asset('css/footer.css')}}" rel="stylesheet">
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>

        @include('includes.header')

        <section class="section-1">
            <div class="section-1-bg">
                <div class="section-1-wrap">
                    <h1 class="section-1-title">
                        iProger – Career search starts here
                    </h1>

                    <span class="section-1-subtitle">
                    Search for jobs, find your match and apply with one click.
                    <br>
                    Explore all our options now.
                </span>

                    <form action="/" method="GET" class="find-service">

                        <div class="search-options">
                            <label for="opt1" class="search-options-label">
                                <input checked type="radio" name="options" id="opt1" value="jobs" class="hidden search-options-input"/>
                                <span class="search-options-label2"></span>Jobs
                            </label>

                            <label for="opt2" class="search-options-label">
                                <input type="radio" name="options" id="opt2" value="companies" class="hidden search-options-input"/>
                                <span class="search-options-label2"></span>Companies
                            </label>

                            {{--                        <label for="opt3" class="search-options-label">--}}
                            {{--                            <input type="radio" name="options" id="opt3" value="resume" class="hidden search-options-input"/>--}}
                            {{--                            <span class="search-options-label2"></span>Resume--}}
                            {{--                        </label>--}}
                        </div>



                        <div class="general-search">
                            <input id='general-search-input' size='100' name="search">

                            <svg class="general-search-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve"><g>
                                    <path d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3 s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4 C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3 s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>

                            <div class="search-button">
                                <button>Search</button>
                            </div>
                        </div>

                        <div class="example-search-link">
                            Example: PHP or Java
                        </div>
                    </form>
                </div>
            </div>

        </section>


        <section class="section-3">
            <h2 class="section-3-wrap-title section-title">
                HOW TO START
            </h2>
            <div class="section-3-wrap">
                <div class="section-3-left" style="background: url({{asset('images/left.jpg')}});background-size:cover ">
                    <div class="sect3-bg">
                        <h3 class="section-3-left-title">Looking to hire?</h3>
                        <div class="section-3-left-content">
                            <p>
                                Find the right candidates in seconds<br>
                                using advanced search features.<br>
                                You may search by job title, education, skills<br>
                                or keywords
                            </p>
                        </div>
                        <div class="section-3-left-content-footer">
                            <a href="#" class="sect3-left-search-candidates-btn">Search Candidates</a>
                            <a href="#" class="sect3-left-post-job-btn">Post a Job</a>
                        </div>
                    </div>
                </div>

                <div class="section-3-right" style="background: url({{asset('images/right.jpg')}});background-size:cover ">
                    <div class="sect3-bg">
                        <h3 class="section-3-right-title">Looking for a job?</h3>
                        <div class="section-3-right-content">
                            <p>
                                Upload your resume to Showcase  your skills<br>
                                and let employers contact you
                            </p>
                        </div>
                        <div class="sect3-right-content-footer">
                            <a href="#" class="sect3-right-create-resume">Create resume</a>
                            <a href="#" class="sec3-right-resume-writing-tips">Resume Writing Tips</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>



        <section class="section-2">
            <div class="section-2-wrap">

                <h2 class="section-2-wrap-title section-title">
                    FEATURED JOBS
                </h2>

                <div class="jobs-list">

                    @for($i=0; $i<8; $i++ )

                        <div class="jobs-item">

                            <div class="job-item-header">

                                <div class="job-item-header-right">
                                    <a href="#" class="job-item-header-title">Front-End WEB Developer</a>
                                    <p class="job-item-header-company">Lite-Group CJSC</p>
                                </div>
                                <a href="#" class="jobs-item-img" style="background-image: url('https://images.staff.am/upload/e/1/1/e/e11edd3e.jpg');"></a>

                            </div>

                            <div class="job-item-ded-loc">
                                <p> <i class="fa fa-map-marker"></i> Yerevan </p>
                                <p> <i class="fa fa-calendar"></i> 30 January 2020 </p>
                            </div>

                            <div class="job-item-content">
                                <p>
                                    Objective of the Program:
                                    Strengthening ties between young professionals and the National Assembly of the Republic of Armenia National Assembly of
                                </p>
                            </div>

                            <div class="job-item-footer">
                                <button class="follow-btn">
                                    <i class="fa fa-heart-o"></i> Follow
                                </button>
                                <button class="view-more-btn"> View more </button>
                            </div>

                        </div>
                    @endfor

                    <div class="see-all-jobs">
                        <a href="#">
                            See all Jobs
                            <img src="https://job.am/Content/img/icon-down.svg" alt="Down" width="15">
                        </a>
                    </div>

                </div>
            </div>
        </section>





        <section class="section-5">
            <div class="section-5-wrap">

                <h2 class="section-5-wrap-title section-title">
                    How it works
                </h2>

                <div class="section-5-content">
                    <div class="section-5-content-item">
                         <div class="section-5-img-wrap" >
                             <svg viewBox="0 0 145 130" xmlns="http://www.w3.org/2000/svg"><circle cx="72.5" cy="65" fill="#1d4354" r="64.5"></circle><path d="M72.7 129.5c25.3-.1 47.1-14.7 57.7-35.9l-115.5.3c10.6 21.1 32.5 35.6 57.8 35.6z" fill="#33637a"></path><path d="M92.5 110.9H38.3c-.5 0-1-.4-1-1V20.3c0-.5.4-1 1-1h68.4c.5 0 1 .4 1 1v89.6c0 .5-.4 1-1 1H92.5z" fill="#fff"></path><g fill="#b2b2b2"><path d="M52.1 29.6v3.6c0 .6-.1 1-.5 1.3-.3.3-.7.4-1.2.4-.6 0-1-.2-1.4-.5-.3-.3-.5-.8-.5-1.4h1.3c0 .5.2.7.6.7.3 0 .5-.2.5-.6v-3.6h1.2zM57 29.9c.4.2.7.6 1 1s.3.9.3 1.4c0 .5-.1 1-.4 1.4s-.6.7-1 1-.8.3-1.3.3-.9-.1-1.3-.3-.7-.6-1-1c-.2-.4-.4-.9-.4-1.4 0-.5.1-1 .4-1.4.2-.4.6-.7 1-1s.9-.3 1.3-.3c.5 0 1 .1 1.4.3zm-2.4 1.3c-.2.3-.4.6-.4 1.1 0 .5.1.8.4 1.1.2.3.6.4 1 .4s.7-.1 1-.4c.2-.3.4-.6.4-1.1 0-.5-.1-.8-.4-1.1-.2-.3-.6-.4-1-.4s-.7.1-1 .4zM63.1 32.7c.2.2.3.5.3.8 0 .5-.2.8-.5 1.1s-.7.4-1.3.4h-2.4v-5.3h2.4c.5 0 1 .1 1.2.3.3.2.4.6.4 1 0 .3-.1.6-.3.8-.2.2-.4.3-.7.4.5.1.7.2.9.5zm-2.7-.9h.8c.4 0 .7-.2.7-.6 0-.4-.2-.6-.7-.6h-.8v1.2zm1.7 1.5c0-.2-.1-.3-.2-.4s-.3-.2-.5-.2h-.9v1.2h.9c.4 0 .7-.2.7-.6zM67.2 33.1v1.8h-1.3v-5.3H68c.6 0 1.1.2 1.4.5s.5.7.5 1.3c0 .3-.1.6-.2.9-.1.3-.4.5-.7.6s-.6.2-1 .2h-.8zm1.4-1.7c0-.5-.3-.7-.8-.7h-.6V32h.6c.5 0 .8-.2.8-.6zM74.5 29.9c.4.2.7.6 1 1s.3.9.3 1.4c0 .5-.1 1-.4 1.4s-.6.7-1 1-.7.3-1.2.3-.9-.1-1.3-.3-.7-.6-1-1c-.2-.4-.4-.9-.4-1.4 0-.5.1-1 .4-1.4.2-.4.6-.7 1-1s.9-.3 1.3-.3c.5 0 .9.1 1.3.3zm-2.3 1.3c-.2.3-.4.6-.4 1.1 0 .5.1.8.4 1.1.2.3.6.4 1 .4s.7-.1 1-.4c.2-.3.4-.6.4-1.1 0-.5-.1-.8-.4-1.1-.2-.3-.6-.4-1-.4s-.8.1-1 .4zM80.3 34.2c-.1.2-.3.4-.6.6s-.6.2-1 .2c-.6 0-1.1-.1-1.5-.4s-.6-.7-.6-1.2H78c0 .2.1.4.2.5.1.1.3.2.5.2s.3 0 .4-.1c.1-.1.1-.2.1-.4 0-.1 0-.2-.1-.3-.1-.1-.2-.2-.3-.2-.1-.1-.3-.1-.5-.2-.3-.1-.6-.2-.8-.3s-.4-.3-.5-.5c-.2-.2-.2-.5-.2-.8 0-.3.1-.6.2-.8.2-.2.4-.4.7-.5.3-.1.6-.2 1-.2.6 0 1.1.1 1.4.4s.5.7.6 1.1h-1.4c0-.2-.1-.3-.2-.4s-.2-.2-.4-.2c-.1 0-.3 0-.4.1s-.3.1-.3.2 0 .2.1.3c.1.1.2.2.3.2s.3.1.5.2c.3.1.6.2.8.3.2.1.4.3.6.5.2.2.2.5.2.8 0 .4 0 .7-.2.9zM85.2 29.6v1h-1.4v4.2h-1.3v-4.2h-1.4v-1h4.1z"></path></g><g fill="#c4c4c4"><path d="M95.8 59H56.3c-.6 0-1-.4-1-1s.4-1 1-1h39.5c.6 0 1 .4 1 1s-.5 1-1 1z"></path><circle cx="49.6" cy="58" r="1.2"></circle><path d="M95.5 82H56.3c-.6 0-1-.4-1-1s.4-1 1-1h39.2c.6 0 1 .4 1 1s-.4 1-1 1z"></path><circle cx="49.6" cy="81" r="1.2"></circle><g><path d="M95.2 74.4H56.3c-.6 0-1-.4-1-1s.4-1 1-1h38.9c.6 0 1 .4 1 1s-.4 1-1 1z"></path><circle cx="49.6" cy="73.4" r="1.2"></circle></g><g><path d="M95.2 66.7H56.3c-.6 0-1-.4-1-1s.4-1 1-1h38.9c.6 0 1 .4 1 1s-.4 1-1 1z"></path><circle cx="49.6" cy="65.7" r="1.2"></circle></g></g><path d="M48.4 91.8h30.1v9.1H48.4z" fill="#6fda44"></path><path d="M48.4 43.5h23.4v4.6H48.4z" fill="#e0e0e0"></path></svg>
                         </div>
                         <p class="section-5-content-desc">
                             Register your personal or company profile in seconds
                         </p>
                    </div>

                    <div class="section-5-content-item">
                         <div class="section-5-img-wrap">
                             <svg viewBox="0 0 145 130" xmlns="http://www.w3.org/2000/svg"><circle cx="72.5" cy="65" fill="#1d4354" r="64.5"></circle><path d="M72.7 129.5c25.3-.1 47.1-14.7 57.7-35.9l-115.5.3c10.6 21.1 32.5 35.6 57.8 35.6z" fill="#33637a"></path><path d="M122.3 101.2H22.5c-.6 0-1-.5-1-1V40.8h101.8v59.4c0 .6-.4 1-1 1z" fill="#fff"></path><path d="M123.3 40.8v-8.5c0-.6-.5-1-1-1H22.5c-.6 0-1 .5-1 1v8.5h101.8z" fill="#6fda44"></path><circle cx="30" cy="36.2" fill="#f3746b" r="1.4"></circle><circle cx="37.5" cy="36.2" fill="#ffcc0d" r="1.4"></circle><circle cx="45.1" cy="36.2" fill="#34ba08" r="1.4"></circle><path d="M56.7 47h31.5v48.1H56.7z" fill="#f2f2f2"></path><path d="M62.6 82.5H83v6.2H62.6zM82.6 63.6c0 5.5-4.5 10-10 10s-10-4.5-10-10 4.5-10 10-10 10 4.5 10 10" fill="#6fda44"></path><path d="M76 62.7c0 1.8-1.5 3.3-3.3 3.3-1.8 0-3.3-1.5-3.3-3.3 0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3" fill="#34ba08"></path><path d="M72.3 67.3h1-1z" fill="none"></path><path d="M75.6 66.3c-.7.6-1.5.9-2.5 1h-1c-.9-.1-1.8-.5-2.5-1-2 .9-3.5 2.7-3.9 4.9 1.8 1.6 4.1 2.6 6.7 2.6 2.7 0 5.2-1.1 7-2.8-.4-2.2-1.9-3.9-3.8-4.7z" fill="#34ba08"></path><g><path d="M116.7 63.6c0 5.5-4.5 10-10 10s-10-4.5-10-10 4.5-10 10-10 10 4.5 10 10" fill="#e0e0e0"></path><path d="M110.1 62.7c0 1.8-1.5 3.3-3.3 3.3-1.8 0-3.3-1.5-3.3-3.3 0-1.8 1.5-3.3 3.3-3.3 1.9 0 3.3 1.5 3.3 3.3" fill="#b2b2b2"></path><path d="M106.4 67.3h1-1z" fill="none"></path><path d="M109.8 66.3c-.7.6-1.5.9-2.5 1h-1c-.9-.1-1.8-.5-2.5-1-2 .9-3.5 2.7-3.9 4.9 1.8 1.6 4.1 2.6 6.7 2.6 2.7 0 5.2-1.1 7-2.8-.5-2.2-1.9-3.9-3.8-4.7z" fill="#b2b2b2"></path></g><g><path d="M49.2 63.6c0 5.5-4.5 10-10 10s-10-4.5-10-10 4.5-10 10-10 10 4.5 10 10" fill="#e0e0e0"></path><path d="M42.6 62.7c0 1.8-1.5 3.3-3.3 3.3-1.8 0-3.3-1.5-3.3-3.3 0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3" fill="#b2b2b2"></path><path d="M38.9 67.3h1-1z" fill="none"></path><path d="M42.2 66.3c-.7.6-1.5.9-2.5 1h-1c-.9-.1-1.8-.5-2.5-1-2 .9-3.5 2.7-3.9 4.9 1.8 1.6 4.1 2.6 6.7 2.6 2.7 0 5.2-1.1 7-2.8-.4-2.2-1.9-3.9-3.8-4.7z" fill="#b2b2b2"></path></g><path d="M91.7 96.4L87.2 92l3.8-2.4c.1-.1 0-.3-.1-.3l-13.3-4.8c-.1 0-.2.1-.2.2L82.2 98c0 .1.2.2.3.1l2.4-3.8 4.4 4.4c.1.1.3.1.4 0l1.9-1.9c.2-.1.2-.3.1-.4z" fill="#33637a"></path></svg>
                         </div>
                         <p class="section-5-content-desc">
                             Start searching for jobs and talent
                         </p>
                    </div>

                    <div class="section-5-content-item">

                    <div class="section-5-img-wrap">
                        <img src="{{asset('images/search.png')}}">
                        <svg viewBox="0 0 145 130" xmlns="http://www.w3.org/2000/svg"><circle cx="72.5" cy="65" fill="#1d4354" r="64.5"></circle><path d="M72.7 129.5c25.3-.1 47.1-14.7 57.7-35.9l-115.5.3c10.6 21.1 32.5 35.6 57.8 35.6z" fill="#33637a"></path></svg>
                    </div>

                         <p class="section-5-content-desc">
                             Take advantage of our tools and resources for effective search
                         </p>
                    </div>

                </div>


            </div>
        </section>





        {{--    section 4--}}


    <section class="section-4">
        <div class="section-4-wrap">

            <h2 class="section-4-wrap-title section-title">
                FEATURED COMPANIES
            </h2>

            <div class="company-list">

                @for($i=0; $i<6; $i++ )

                    <div class="company-item">

                        <div class="company-item-header">

                            <div class="company-item-header-right">
                                <a href="#" class="company-item-header-title">Front-End WEB Developer</a>
                                <p class="company-item-header-company" style="font-size: 15px;margin-top: 10px;margin-bottom: 5px;color: #690;padding-left: 15px;">
                                    <span>
                                        <i class="fa fa-hourglass-half"></i>
                                        4 active jobs
                                    </span>
                                </p>
                            </div>
                            <a href="#" class="company-item-img" style="background-image: url('https://images.staff.am/upload/e/1/1/e/e11edd3e.jpg');"></a>

                        </div>



                        <div class="company-item-content">
                            <p>
                                Objective of the Program:
                                Strengthening ties between young professionals and the National Assembly of the Republic of Armenia National Assembly of
                            </p>
                        </div>

                        <div class="company-item-footer">
                            <button> VIEW ALL </button>
                        </div>

                    </div>
                @endfor

                <div class="see-all-company">
                    <a href="#">
                        See all Company
                        <img src="https://job.am/Content/img/icon-down.svg" alt="Down" width="15">
                    </a>
                </div>

            </div>
        </div>
    </section>

    @include('includes.footer')


    </body>


    <script>
        var search_input = document.getElementById('general-search-input');
        var type_this  = "Keyword, job title";
        var _delete    = false;
        var index      = 0;
        var time       = 0;
        var i          = 1;

        function next_letter() {

            if (index == type_this.length) {
                i       = -1;
                time    = 50;
                _delete = true;
            } else if(index == 0) {
                i    = +1
                time = 100;
            } else {
                _delete = false;
            }

            search_input.placeholder = type_this.substr(0, index) + "|";

            index = index + i;

            if (_delete) {
                setTimeout("next_letter()", 400);
            } else{
                setTimeout("next_letter()", time);
            }
        }

        next_letter();
    </script>

</html>
