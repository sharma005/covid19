<!DOCTYPE html>
<html>
<head>
	<title>Corona</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- ----------------------------    GOOGLE FONT- MULI----------------------------------------- -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

</head>
<body onload="fetch()">
    
    <nav class="navbar fixed-top navbar-expand-lg nav_style p-3 navbar-expand-lg navbar-dark mb-5">
        <a class="navbar-brand pl-3" href="#">WORLD WIDE COVID-19</a>
        
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto pr-5">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutid">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#symptomsid">Symptoms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#preventid">Prevention</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">India Statewise Status</a>
            </li>
            
            
          </ul>
          
        </div>
      </nav>
     

      <div class="main_header mt-5">
          <div class="row w-100 h-100">
              <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                    <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                        <img src="img/1.jpg" width="300" height="300" class="img-fluid">
                    </div>
              </div>
              
              <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 mt-5">
                    <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
                        <h1 >Let's Stay Safe & Fight Together Against Cor<span class="corona_rotate">  <img src="https://img.icons8.com/color/48/000000/coronavirus.png"/> </span>na Virus  </h1>
                    </div>
            </div>
          </div>
      </div>
      <br><br>
<!-- ----------------------------    CORONA LATEST UPDATE    ------------------------------  -->
      <hr>
    <section class="corona_update container-fluid">
        <div class="mb-3 mt-2">
            <h3 class="text-uppercase text-center">
                    COVID-19 updates
            </h3>
        </div>
        <div class="table-responsive" >
            <table class="table table-bordered text-center table-striped" id="tbval">
                
                    <tr>
                        <th>Country</th>
                        <th>Total Confirmed Cases</th>
                        <th>Total Recovered</th>
                        <th>Total Deaths</th>
                        <th>Update Time</th>
                    </tr>
                    
            </table>
        </div>

        

        
    </section>

    <!-- ----------------------------    about   --------------------------------  -->
    <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>About COVID-19 (Corona virus)</h1>
        </div>

        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-auto">
                <img src="img/aboutcorona.jpg" class="img-fluid">

            </div>
            
            <div class="col-lg-6 col-md-6 col-12 ml-auto">
                <h2> About COVID-19 (Corona Virus)</h2>
                <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
                <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
                <p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>
            </div>
        </div>
        
        

    </div>


<!-- --------------  Symptoms    ----------------------  -->

<div class="container-fluid  pt-5 pb-5" id="symptomsid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>Coronavirus Symptoms</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5" >
                <figure class="text-center">
                    <img src="img/cough.png" width="120" height="120" class="img-fluid">
                <figcaption>Cough</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="img/flu.png" width="120" height="120" class="img-fluid">
                <figcaption>Runny Nose</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="img/fever.png" width="120" height="120" class="img-fluid">
                <figcaption>High Fever</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="img/sick.png" width="120" height="120" class="img-fluid">
                <figcaption>Cold</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="img/difficulty-breathing.png" width="120" height="120" class="img-fluid">
                <figcaption>Difficulty in Breathing</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="img/sore-throat.png" width="120" height="120" class="img-fluid">
                <figcaption>Sore Throat</figcaption>
                </figure>
            </div>

        </div>
    </div>
</div>


<!-- -------------------     Prevention  --------------------  -->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid" >
    <div class="section_header text-center mb-5 mt-4">
        <h1>Steps to Prevent Corona Virus</h1>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="img/hand-wash.png" width="110" height="110" class="img-fluid">
                            
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="img/coronavirus.png" width="110" height="110" class="img-fluid">
                            
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Before putting on a mask, clean hands with alcohol-based hand rub or soap and water.
                            Cover mouth and nose with mask and make sure there are no gaps between your face and the mask.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="img/quarantine.png" width="90" height="90" class="img-fluid">
                            
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>People who have been exposed to the new coronavirus and who are at risk for coming down with COVID-19
                             might practice self-quarantine. Health experts recommend that self-quarantine lasts 14 days.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="img/stay-at-home.png" width="90" height="90" class="img-fluid">
                            
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Stay at home to prevent the growth of this virus. It transmitts from one person to another.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="img/television.png" width="90" height="90" class="img-fluid">
                            
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Only trust on NEWS not on any type of messages on whatsapp. Confirm the whatsapp NEWS before forwarding 
                            to others. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="img/diarrhea.png" width="90" height="90" class="img-fluid">
                            
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Maintain at least 1 metre (3 feet) distance between yourself and anyone who is coughing or sneezing.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</div>

<div class="footer">
    <p> COPYRIGHTS &copy; ABHISHEK SHARMA <span class="foot_top"> <a href="#">  TOP </a></span> </p>
</div>

<script>
function fetch()
{
    $.get("https://api.covid19api.com/summary ",

            function(data){ 
                // console.log(data['Countries'].length);

                var tbval = document.getElementById('tbval');
                for(var i = 1; i < (data['Countries'].length); i++ )
                {

                    var x = tbval.insertRow();

                    x.insertCell(0);

                    tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                    // tbval.rows[i].cells[0].style.background = 'red';
                    // tbval.rows[i].cells[0].style.color = '#f1f1f1';

                    x.insertCell(1);

                    tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                    // tbval.rows[i].cells[1].style.background = 'green';

                    x.insertCell(2);

                    tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                    // tbval.rows[i].cells[2].style.background = 'cyan';

                    x.insertCell(3);

                    tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                    // tbval.rows[i].cells[3].style.background = 'red';


                    x.insertCell(4);

                    tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['Date'];
                    // tbval.rows[i].cells[4].style.background = 'yellow';

                    // x.insertCell(5);

                    // tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                    // // tbval.rows[i].cells[5].style.background = 'black';

                    //  x.insertCell(6);

                    // tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                    // // tbval.rows[i].cells[6].style.background = 'black';






                }

            }

        )
}

</script>
    
</body>


</html>