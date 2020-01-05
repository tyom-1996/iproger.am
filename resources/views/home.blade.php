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

                <div class="find-service">
                    <div class="general-search">
{{--                        <input type="text">--}}
                        <input id='general-search-input' size='100'/>

                        <svg class="general-search-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve"><g><path d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3 s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4 C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3 s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                        <div class="search-button">
                            <button>Search</button>
                        </div>
                    </div>
                    <div class="example-search-link">
                        Example: PHP or Java
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

            window.next_letter = function() {

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
