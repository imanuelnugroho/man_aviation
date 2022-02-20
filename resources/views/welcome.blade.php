<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Man Aviation</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{   URL::asset('/css/bootstrap.min.css')  }}" />
        <link type="text/css" rel="stylesheet" href="{{   URL::asset('/css/style.css')  }}" />

        <link type="text/css" rel="stylesheet" href="{{   URL::asset('/slickgrid/slick.grid.css')  }}" />
        <link type="text/css" rel="stylesheet" href="{{   URL::asset('/slickgrid/controls/slick.pager.css')  }}" />
        <link type="text/css" rel="stylesheet" href="{{   URL::asset('/slickgrid/smoothness/jquery-ui.css')  }}" />
        <link type="text/css" rel="stylesheet" href="{{   URL::asset('/slickgrid/examples.css')  }}" />
        <link type="text/css" rel="stylesheet" href="{{   URL::asset('/slickgrid/controls/slick.columnpicker.css')  }}" />
        <link type="text/css" rel="stylesheet" href="{{   URL::asset('/css/select2.css')  }}" />
        <style>.select2-container{top:-3px;left:-6px;} .select2-container .select2-selection--single{height:26px;}</style>
        
        <!-- Javascript -->
        <script src="{{   URL::asset('/slickgrid/lib/firebugx.js')  }}"></script>
        <script src="{{   URL::asset('/slickgrid/lib/jquery-1.12.4.min.js')  }}"></script>
        <script src="{{   URL::asset('/slickgrid/lib/jquery-ui.min.js')  }}"></script>
        <script src="{{   URL::asset('/slickgrid/lib/jquery.event.drag-2.3.0.js')  }}"></script>

        <script src="{{   URL::asset('/slickgrid/slick.core.js')  }}"></script>
        <script src="{{   URL::asset('/slickgrid/slick.formatters.js')  }}"></script>
        <script src="{{   URL::asset('/slickgrid/slick.editors.js')  }}"></script>
        <script src="{{   URL::asset('/slickgrid/plugins/slick.rowselectionmodel.js')  }}"></script>
        <script src="{{   URL::asset('/slickgrid/slick.grid.js')  }}"></script>
        <script src="{{   URL::asset('/slickgrid/lib/select2.js')  }}"></script>
        <script src="{{   URL::asset('/slickgrid/slick.dataview.js')  }}"></script>
        <script src="{{   URL::asset('/slickgrid/controls/slick.pager.js')  }}"></script>
        <script src="{{   URL::asset('/slickgrid/controls/slick.columnpicker.js')  }}"></script>
        <script src="{{   URL::asset('/js/select2custom.js')  }}"></script>
        <script src="{{   URL::asset('/js/selectcelleditor.js')  }}"></script>
        <script src="{{   URL::asset('/js/main.js')  }}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="section">
            <div class="booking-cta">
                <div class="booking-section">
                    <img id="logo" title="Man Aviation" alt="Man Aviation" width="90px" height="90px" src="{{   URL::asset('/images/logo.png')  }}" />
                </div>
                <div class="booking-section">
                    <h1 class="h1-adjust">
                        <span class="man">MAN</span>&nbsp;<span class="aviation">AVIATION</span>&nbsp;<span style="color:blue;">817326-T</span>
                    </h1>
                    <p class="p-adjust">&nbsp;owned by SAMAREKA SDN BHD</p>
                </div>
                <div class="booking-section right">
                    <ul class="list-inline list-adjust">
                        <li><a href="https://man-aviation.com/">Flights & Cargo</a></li>|
                        <li><a href="#">MyTrip</a></li>
                    </ul>
                    <div class="h1-title">
                        <span class="fly">Fly for Everyone</span>&nbsp;&nbsp;<span class="bon">Bon Voyage</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container cta-adjust">
                    <div class="row">
                        <div class="col-md-12 col-adjust" style="background-color: white;">
                            <div class="col-md-4 col-adjust">
                                <div class="link">
                                    <a href="#schedule">
                                        <img id="link1" title="Link to Schedule" alt="Link to Schedule" 
                                        width="100%" height="280px" src="{{   URL::asset('/images/click-schedule.png')  }}" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-adjust">
                                <div class="commercials">
                                    <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vTVQC0IJGjyXRKVHhlzsk_woL-M6lPtvvLmW0ZBcXTd9CSDI97oe9Fp6pI0Tw3fSs-S_TnH7QmVi0GL/embed?start=true&loop=true&delayms=3000&rm=minimal" 
                                        frameborder="0" width="100%" height="100%"
                                        allowfullscreen="false" mozallowfullscreen="false" webkitallowfullscreen="false">
                                        Loading…
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-4 col-adjust">
                                <div class="link">
                                    <a href="#inquiry">
                                        <img id="link2" title="Link to Inquiry" alt="Link to Inquiry" 
                                        width="100%" height="280px" src="{{   URL::asset('/images/click-inquiry.png')  }}" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-adjust">
                            <div id="schedule" class="banner">
                                <div class="sectiontitle">
                                    Flight/Cargo Info
                                    <p>
                                        <span>
                                            <a target="_blank" href="https://docs.google.com/spreadsheets/d/e/2PACX-1vQqV0fUMLd8BTTCGPDTSfIM3zRIpbFxLXKdQBliICtX0I8PN7ZmHqnE_D7xBBqUDjNI01wrg41QYSUa/pubhtml">
                                                (open form below in new window)
                                            </a>
                                        </span>
                                    </p>
                                </div>
                                <div class="flightschedule">
                                    <iframe width="100%" height="100%" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQqV0fUMLd8BTTCGPDTSfIM3zRIpbFxLXKdQBliICtX0I8PN7ZmHqnE_D7xBBqUDjNI01wrg41QYSUa/pubhtml?widget=true&amp;headers=false&amp;chrome=false">
                                        Loading…
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-adjust">
                            <div id="inquiry" class="banner">
                                <div class="sectiontitle">
                                    Book now!
                                    <p>
                                        <span>
                                            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScDJmHMT4gywk-pBJsq-WYXBb_CjaQqbqOkyEz5uwg8R5EX9Q/viewform">
                                                (open form below in new window)
                                            </a>
                                        </span>
                                    </p>
                                </div>
                                <div class="submissionform">
                                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScDJmHMT4gywk-pBJsq-WYXBb_CjaQqbqOkyEz5uwg8R5EX9Q/viewform?embedded=true" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">
                                        Loading…
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-adjust" style="background-color: white;">
                            <div class="footer">Copyright © by SAMAREKA SDN BHD. All Rights reserved.</div>
                        </div>
                    </div>
                    <div class="row" style="display:none;">
                        <div class="col-md-12 col-adjust">
                            <div class="booking-form">
                                <form>
                                    <div class="form-group">
                                        <div class="form-checkbox">
                                            <label for="one-way">
                                                <input type="radio" id="one-way" name="flight-type" checked>
                                                <span></span>One way
                                            </label>
                                            <label for="roundtrip">
                                                <input type="radio" id="roundtrip" name="flight-type">
                                                <span></span>Roundtrip
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">From</span>
                                                <!-- <input class="form-control" type="text" placeholder="City or airport"> -->
                                                <select class="form-control">
                                                    <option>Kuala Lumpur (KUL)</option>
                                                    <option>Jakarta (CGK)</option>
                                                    <option>Surabaya (SUB)</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">To</span>
                                                <!-- <input class="form-control" type="text" placeholder="City or airport"> -->
                                                <select class="form-control">
                                                    <option>Jakarta (CGK)</option>
                                                    <option>Kuala Lumpur (KUL)</option>
                                                    <option>Surabaya (SUB)</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Departure Date</span>
                                                <input class="form-control" type="date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Return Date</span>
                                                <input class="form-control" type="date" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span class="form-label">No. of Passengers</span>
                                                <select class="form-control" onchange="setPassenger(this.value)">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="">> 10 (Special offer - we will contact you by email directly)</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div style="width:100%;">
                                                    <div class="grid-header" style="width:100%">
                                                        <label>
                                                            Please fill all passengers data (Max. of 10 Passengers)
                                                        </label>
                                                    </div>
                                                    <div id="myGrid" style="width:100%;height:150px;"></div>
                                                    <div id="pager" style="width:100%;height:20px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span class="form-label">Email</span>
                                                <input class="form-control" type="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-btn">
                                        <button class="submit-btn">Coming Soon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    
</html>
