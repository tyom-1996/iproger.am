<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="{{asset('css/header.css')}}" rel="stylesheet">
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        @include('includes.header')

        <section class="section-1">
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

                        <label for="opt3" class="search-options-label">
                            <input type="radio" name="options" id="opt3" value="resume" class="hidden search-options-input"/>
                            <span class="search-options-label2"></span>Resume
                        </label>
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
        </section>




        <section class="section-2">
            <div class="section-2-wrap">

                <h2 class="section-2-wrap-title">
                    FEATURED JOBS
                </h2>
                
                <div class="jobs-list">

                    @for($i=0; $i<8; $i++ )

                        <div class="jobs-item">

                            <div class="job-item-header">
                                <a href="#" class="jobs-item-img" style="background-image: url('https://images.staff.am/upload/e/1/1/e/e11edd3e.jpg');"></a>
                                <div class="job-item-header-right">

                                    <a href="#" class="job-item-header-title">Front-End WEB Developer</a>
                                    <p class="job-item-header-company">Lite-Group CJSC</p>
                                </div>
                            </div>

                            <div class="job-item-ded-loc">
                                <p class="job_location">
                                    <i class="fa fa-map-marker"></i> Yerevan
                                </p>
                                <p>
                                    <i class="fa fa-calendar"></i> 30 January 2020
                                </p>
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
                        <a href="#">See all Jobs</a>
                        <img src="https://job.am/Content/img/icon-down.svg" alt="Down" width="15">
                    </div>

                </div>
            </div>
        </section>



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

    </body>

</html>
