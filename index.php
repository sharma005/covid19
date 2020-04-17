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
<body >
    
    <nav class="navbar fixed-top navbar-expand-lg nav_style p-3 navbar-expand-lg navbar-dark mb-5">
        <a class="navbar-brand pl-5" href="#">COVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" ></span>
        </button>
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto pr-5">
            <li class="nav-item active">
              <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
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
                <a class="nav-link" href="#tbval">India Status</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="world.php">All Countries Status</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contactid">Contact</a>
            </li>
            
          </ul>
          
        </div>
      </nav>
     

      <div class="main_header mt-5">
          <div class="row w-100 h-100">
              <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                    <div class="leftside1 w-100 h-100 d-flex justify-content-center align-items-center">
                        <img src="img/11.png" width="500" height="500" class="img-fluid">
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



<!-- ----------------------------    CORONA LATEST UPDATE    ------------------------------  -->
      
    <section class="corona_update container-fluid">
        <div class="mb-3 mt-2">
            <h3 class="text-uppercase text-center">
                    COVID-19 India Live Update
            </h3>
	    <p class="text-center " style="font-weight:bold;" >To get a batter experience in mobile, please visit in desktop mode. </p>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered text-center table-striped" id="tbval">
                
                    <tr class="text-capitalize">
                        <th>state</th>
                        <th>confirmed</th>
                        <th>active</th>
                        <th>recovered</th>
                        <th>deaths</th>
                        <th>lastupdatedtime</th>
                        
                    </tr>
                    <?php

                        $data = file_get_contents('https://api.covid19india.org/data.json');
                        $coronalive = json_decode($data, true);

                        // echo "<pre>";
                        // print_r($coronalive);
                        // echo "</pre>";

                        // echo $coronalive['statewise'][1]['state'];

                        $totalStates =  count($coronalive['statewise']);

                        $i = 1;
                        while ($i < $totalStates) {
                            
                            ?>
                            <tr>
                                
                                <td>  <?php  echo $coronalive['statewise'][$i]['state']    ?>  </td>
                                <td>  <?php  echo $coronalive['statewise'][$i]['confirmed']    ?>  </td>
                                <td>  <?php  echo $coronalive['statewise'][$i]['active']    ?>  </td>
                                <td>  <?php  echo $coronalive['statewise'][$i]['recovered']    ?>  </td>
                                <td>  <?php  echo $coronalive['statewise'][$i]['deaths']    ?>  </td>
                                <td>  <?php  echo $coronalive['statewise'][$i]['lastupdatedtime']    ?>  </td>

                            </tr>

                            <?php

                            $i++;
                        }

                    ?>
                    
            </table>
        </div>

        

        
    </section>
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

<!-- --------------------    CONTACT     ------------------  -->
<div class="container-fluid  pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb-5 mt-4">
        <p>If you have any Symptom of COVID-19 then contact us AS SOON AS POSSIBLE</p>
        
        <h1>Contact us ASAP</h1>
        <p>Hellpline number for M.P 104</p>
    </div>
    <din class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <form>
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full name" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Address" required>
                      </div>
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="9131xxxxxx"  required>
                    </div>
                    <div class="form-group" >
                      <label >Fever</label>
                      <select class="form-control" id="exampleFormControlSelect1" required>
                        <option>Low Fever</option>
                        <option>High Fever</option>
                        <option>Very High Fever</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label >Difficulty in Breathing</label>
                        <select class="form-control" id="exampleFormControlSelect1" required>
                          <option>Minor Difficulty</option>
                          <option>High Difficulty</option>
                          <option>Severe Difficulty</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label >Cough & Cold</label>
                        <select class="form-control" id="exampleFormControlSelect1" required>
                          <option>Low</option>
                          <option>High </option>
                          <!-- <option>Severe Difficulty</option> -->
                        </select>
                      </div>
                      <div class="form-group">
                        <label >Sore Throat</label>
                        <select class="form-control" id="exampleFormControlSelect1"required>
                          <option>YES</option>
                          <option>NO </option>
                        </select>
                      </div>
                    

                      
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Enter some extra details</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="button" class="btn btn-outline-primary">Submit</button>
                  </form>
            </div>
        </div>
    </din>
</div>

<div class="footer">
    <p> COPYRIGHTS &copy; ABHISHEK SHARMA <span class="foot_top"> <a href="#">  TOP </a></span> </p>
</div>
    
</body>


</html>
