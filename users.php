
<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:login.php');

    include("config.php");
    include("function.php");
}

  include("config.php");
  $resu = mysqli_query($mysqli, "SELECT * FROM area_non_compliance_status");  
          while($res = mysqli_fetch_array($resu)){

                



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php include 'links.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
    



  <!--Column Chart-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      window.onload = function (){
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
     
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Sticker Execution Status', 'Expenses', 'Profit'],
          ['Alam Corporation Ltd.', 167, 146, '87%'],
          ['Agrani Trading Savar', 967, 110,'11%'],
          ['Azahar Trading Ltd.', 564, 149, '26%'],
          ['The Jamal & Co (Dhanmondi)', 2195, 127, '6%'],
          ['M/S A.M.I Co.', 422, 143, '34%'],
          ['Agrani Trading Tangail', 787, 159, '20%'],
          ['Dhaka Region', 7613, 1121, '15%'],
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: Day 1 - Day - 5',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
        chart.render();
      }
    }
    </script>
    <!--End 0f Column Chart-->
  
  </head>
  <body>
    


    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Dashboard</a>
              <div class="bottom-border pb-3" style="white-space: nowrap;">
                <img src="images/logosign.png" width="50" class="rounded-circle mr-3">
                <a href="#" class="text-white">Dhaka Legends</a>
              </div>
              <ul class="navbar-nav flex-column mt-4">
                
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Charts</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3" style="white-space: nowrap;"></i>By Area Non-Compliance Status</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3" style="white-space: nowrap;"></i>TSA Market Tracker</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3" style="white-space: nowrap;"></i>Call Center Agent Report</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3" style="white-space: nowrap;"></i>Sticker Execution Status</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3" style="white-space: nowrap;"></i>OMR</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3" style="white-space: nowrap;"></i>FF Malpractice</a></li>
              </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <!---
                <div class="col-md-5">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control search-input" placeholder="Search...">
                      <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                    </div>
                  </form>
                </div>-->
                <div class="col-md-3">
                  
                   
                    <li class="nav-item ml-md-auto">  <a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                  
                </div>
              </div>
            </div>
             end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- modal -->
    <div class="modal fade" id="sign-out">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Want to leave?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Press logout to leave
          </div>
          <div class="modal-footer">
            <!--
            <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>-->
            
            <a href="logout.php" class="btn btn-danger">Logout</a>
            <!--
            <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>-->
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->

    <?php echo $_SESSION['username'] ?>
    



    <section>
        <div class="container-fluid chart-wrap vertical">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                            <h3 class="text-muted text-center mb-50">Sticker Execution Status</h3>
                            <div id="columnchart_material"></div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    

    <!-- tables -->
    


    <section>
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                <h3>By Area Non-Compliance Status</h3>
                  <table class="table-striped bg-light text-center display compact nowrap" style="width:100%">
                    <thead>
                      <tr>
                        <th colspan="8">
                          By Area Non-Compliance Status: Stick Price Report
                        </th>
                      </tr>
                      <tr>
                        <th rowspan="5">
                          Timeline: <?php echo $res['Starting_Date']; ?> - <?php echo $res['Ending_Date']; ?> <br>
                          [ <?php echo $res['Outlets'];?> Outlets]
                        </th>
                        <tr>
                          <th colspan="7">
                            Non-Compliance vs Preferred Pricing
                          </th>
                          <tr>
                            <tr>
                              <th title="Field #2">B&amp;H SF</th>
                              <th title="Field #3">JPGL FF</th>
                              <th title="Field #4">Star FF</th>
                              <th title="Field #5">Pilot</th>
                              <th title="Field #6">Royals Gold</th>
                              <th title="Field #11">Derby FF</th>
                              <th title="Field #12">Hollywood</th>
                            </tr>
                          
                          <tr>
                            <th>1 stick @ BDT 13</th>
                            <th>1 stick @ BDT 10</th>
                            <th>1 stick @ BDT 7</th>
                            <th>1 stick @ BDT 5</th>
                            <th>1 stick @ BDT 4</th>
                            <th>1 stick @ BDT 4</th>
                            <th>1 stick @ BDT 4</th>
                          </tr>
                          </tr>
                        </tr>
                      </tr>



                    </thead>
                    <tbody>
                      <tr>
                        <td>Dhaka Central</td>
                        <td align="center"><?php echo $res['t1r1c1'];?></td>
                        <td align="center"><?php echo $res['t1r1c2'];?></td>
                        <td align="center"><?php echo $res['t1r1c3'];?></td>
                        <td align="center"><?php echo $res['t1r1c4'];?></td>
                        <td align="center"><?php echo $res['t1r1c5'];?></td>
                        <td align="center"><?php echo $res['t1r1c6'];?></td>
                        <td align="center"><?php echo $res['t1r1c7'];?></td>
                      </tr>
                      <tr>
                        <td>Dhaka East</td>
                        <td align="center"><?php echo $res['t1r2c1'];?></td>
                        <td align="center"><?php echo $res['t1r2c2'];?></td>
                        <td align="center"><?php echo $res['t1r2c3'];?></td>
                        <td align="center"><?php echo $res['t1r2c4'];?></td>
                        <td align="center"><?php echo $res['t1r2c5'];?></td>
                        <td align="center"><?php echo $res['t1r2c6'];?></td>
                        <td align="center"><?php echo $res['t1r2c7'];?></td>
                      </tr>
                      <tr>
                        <td>Dhaka South</td>
                        <td align="center"><?php echo $res['t1r3c1'];?></td>
                        <td align="center"><?php echo $res['t1r3c2'];?></td>
                        <td align="center"><?php echo $res['t1r3c3'];?></td>
                        <td align="center"><?php echo $res['t1r3c4'];?></td>
                        <td align="center"><?php echo $res['t1r3c5'];?></td>
                        <td align="center"><?php echo $res['t1r3c6'];?></td>
                        <td align="center"><?php echo $res['t1r3c7'];?></td>
                      </tr>
                      <tr>
                        <td>Dhaka North</td>
                        <td align="center"><?php echo $res['t1r4c1'];?></td>
                        <td align="center"><?php echo $res['t1r4c2'];?></td>
                        <td align="center"><?php echo $res['t1r4c3'];?></td>
                        <td align="center"><?php echo $res['t1r4c4'];?></td>
                        <td align="center"><?php echo $res['t1r4c5'];?></td>
                        <td align="center"><?php echo $res['t1r4c6'];?></td>
                        <td align="center"><?php echo $res['t1r4c7'];?></td>
                      </tr>
                      <tr>
                        <td>Dhaka West</td>
                        <td align="center"><?php echo $res['t1r5c1'];?></td>
                        <td align="center"><?php echo $res['t1r5c2'];?></td>
                        <td align="center"><?php echo $res['t1r5c3'];?></td>
                        <td align="center"><?php echo $res['t1r5c4'];?></td>
                        <td align="center"><?php echo $res['t1r5c5'];?></td>
                        <td align="center"><?php echo $res['t1r5c6'];?></td>
                        <td align="center"><?php echo $res['t1r5c7'];?></td>
                      </tr>
                      <tr>
                        <td>Dhaka Region</td>
                        <td align="center"><?php echo $res['t1r6c1'];?></td>
                        <td align="center"><?php echo $res['t1r6c2'];?></td>
                        <td align="center"><?php echo $res['t1r6c3'];?></td>
                        <td align="center"><?php echo $res['t1r6c4'];?></td>
                        <td align="center"><?php echo $res['t1r6c5'];?></td>
                        <td align="center"><?php echo $res['t1r6c6'];?></td>
                        <td align="center"><?php echo $res['t1r6c7'];}?></td>
                      </tr>
                    </tbody>



                  </table>
                  <!--END OF OMR TABLE-->

                  <!--TSA TABLE-->
                  <br>
                  <br>

                  <h3>TSA Market Tracker</h3>
                  <table class="table-striped bg-light text-center display compact nowrap" style="width:100%">
                    <thead>
                      <tr>
                        <th colspan="10">
                          By Area Non-Compliance Status: TSA Market Tracker
                        </th>
                      </tr>
                      <tr>
                        <th rowspan="2">
                          Date: 13th May'20 
                        </th>
                        <th rowspan="2">
                          Total TSA Number
                        </th>
                        <th rowspan="2">
                          Number of Calls Made
                        </th>
                        <th rowspan="2">
                          Compliance %
                        </th>
                        <th rowspan="2">
                          Non-Compliance %
                        </th>
                        
                        <th colspan="5">
                              By Segment Non-compliance Status
                          <tr>
                            <th>P</th>
                            <th>AP</th>
                            <th>VFM</th>
                            <th>LOW+</th>
                            <th>LOW</th>
                          </tr>  
                        </th>

                     </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Dhaka Central</td>
                        <td align="center">34</td>
                        <td align="center">21</td>
                        <td align="center">38%</td>
                        <td align="center">74%</td>
                        <td align="center">19%</td>
                        <td align="center">16%</td>
                        <td align="center">38%</td>
                        <td align="center">74%</td>
                        <td align="center">19%</td>
                      </tr>
                      <tr>
                        <td>Dhaka East</td>
                        <td align="center">55</td>
                        <td align="center">44</td>
                        <td align="center">58%</td>
                        <td align="center">72%</td>
                        <td align="center">46%</td>
                        <td align="center">35%</td>
                        <td align="center">58%</td>
                        <td align="center">72%</td>
                        <td align="center">46%</td>
                      </tr>
                      <tr>
                        <td>Dhaka South</td>
                        <td align="center">32</td>
                        <td align="center">36</td>
                        <td align="center">27%</td>
                        <td align="center">37%</td>
                        <td align="center">16%</td>
                        <td align="center">15%</td>
                        <td align="center">27%</td>
                        <td align="center">37%</td>
                        <td align="center">16%</td>
                      </tr>
                      <tr>
                        <td>Dhaka North</td>
                        <td align="center">37</td>
                        <td align="center">34</td>
                        <td align="center">37%</td>
                        <td align="center">59%</td>
                        <td align="center">52%</td>
                        <td align="center">28%</td>
                        <td align="center">37%</td>
                        <td align="center">59%</td>
                        <td align="center">52%</td>
                      </tr>
                      <tr>
                        <td>Dhaka West</td>
                        <td align="center">35</td>
                        <td align="center">32</td>
                        <td align="center">45%</td>
                        <td align="center">75%</td>
                        <td align="center">15%</td>
                        <td align="center">16%</td>
                        <td align="center">45%</td>
                        <td align="center">75%</td>
                        <td align="center">15%</td>
                      </tr>
                      <tr>
                        <td>Dhaka Region</td>
                        <td align="center">36</td>
                        <td align="center">39</td>
                        <td align="center">40%</td>
                        <td align="center">64%</td>
                        <td align="center">25%</td>
                        <td align="center">21%</td>
                        <td align="center">40%</td>
                        <td align="center">64%</td>
                        <td align="center">25%</td>
                      </tr>
                    </tbody>
                    
                  </table>
                
                  <!--END OF TSA TABLE-->

                <br>
                <br>
                <h3>Type of Malpractice</h3>
                <table class="table-striped bg-light text-center display compact nowrap" style="width:100%">
                  <thead>
                    <th colspan="5">Type of MalPractice</th>
                    <tr>
                      <th title="Field #1">House</th>
                      <th title="Field #2">Memo missmatch</th>
                      <th title="Field #3">Extra Money</th>
                      <th title="Field #4">OHS Missmatch</th>
                      <th title="Field #5">No Service</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td>AgraniTradingCorporationLtd.Central</td>
                      <td>32%</td>
                      <td>43%</td>
                      <td>11%</td>
                      <td>34%</td>
                    </tr>
                    <tr>
                      <td>SPS(Sutrapur)</td>
                      <td>12%</td>
                      <td>11%</td>
                      <td>37%</td>
                      <td>34%</td>
                    </tr>
                    <tr>
                      <td>AlamCorporationLtd.</td>
                      <td>12%</td>
                      <td>37%</td>
                      <td>32%</td>
                      <td>34%</td>
                    </tr>
                    <tr>
                      <td>AgraniTradingSavar</td>
                      <td>12%</td>
                      <td>32%</td>
                      <td>12%</td>
                      <td>34%</td>
                    </tr>
                    <tr>
                      <td>AzaharTradingLtd. </td>
                      <td>3%</td>
                      <td>37%</td>
                      <td>32%</td>
                      <td>34%</td>
                    </tr>
                    <tr>
                      <td>TheJamal&amp;Co(Dhanmondi)</td>
                      <td>12%</td>
                      <td>11%</td>
                      <td>37%</td>
                      <td>34%</td>
                    </tr>
                    <tr>
                      <td>M/SA.M.ICo.</td>
                      <td>12%</td>
                      <td>11%</td>
                      <td>37%</td>
                      <td>34%</td>
                    </tr>
                    <tr>
                      <td>AgraniTradingTangail</td>
                      <td>12%</td>
                      <td>37%</td>
                      <td>32%</td>
                      <td>34%</td>
                    </tr>
                    <tr>
                      <td>DhakaRegion</td>
                      <td>12%</td>
                      <td>32%</td>
                      <td>12%</td>
                      <td>34%</td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of tables -->
   
    
    

   
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.14.3/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.14.3/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
  </body>
</html>






