<?php

    include 'MaduraiCovid19.php';
    
?> 

<!DOCTYPE html>

<html lang="en">
    
    <head>
        
    <title>Madurai COVID19</title>
           
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">      
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link rel="stylesheet" type="text/css" href="MaduraiCovid19.css">

    <style>
            
        @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Merriweather:ital@1&display=swap');  
            
            .jumbotron{

                text-align: center;
                background-color:aqua;
                color: black;
				margin-bottom:30px;
				                         
            }
            
            .progress{
                 
                margin-top: 55px;
                margin-bottom: 25px;
               }
            
           
            #recoverd{
                
                margin-left:20px;
            }
           
            #curve_chart{
                 width:1400px;
                 height:650px;
                
            }
              @media screen and (max-width:700px){
                    body{
                        
                        padding:0px;
                        margin:0px;
                    }
                div.progress{
                   height:20px;
                   width:160%;
                   margin-left:-130px;
                   
                   }
                   .row{
                       margin-left:40px;
                   }
                   #deceased{
                       margin-left:50px;
                   }
                   #recoverd{
                       margin-left:30px;
                   }
                   #active{
                       
                       margin:10px;
                   }
                   #death{
                       margin-left:40px;
                   }
                   .nav-item{
                     margin:0px 5px 6px 4px;
                      
                   }
                   body{
                       
                       position:relative;
                   }
                  #curve_chart{
                   
                    width:448px;
                    height:600px;
                    margin-right:0px;
                    margin-left:2px;
                    
                 }
                                    
                }
                @media (orientation:landscape) and (max-width:750px){
   
                   .container{
                      
                           width:150%;
                    }
                 .row{
                            width:150%;  
                            margin-left:230px;
                     
                    }
                    
                    .jumbotron{
                        
                                text-align:center;
                                 width:160%;
                                
                    }
                    .navber{
                        
                        width:160%;
                    }
                    .progress{
                        
                        margin-left:350px;
                        width:100%;
                       
                    }
                    .card,.footer,#Events{
                        
                        width:150%;
                        margin-left:100px;
                    }
                    body{
                        position:relative;
                        width:150%;
                        }
                    #curve_chart{
                        margin-left:200px;
                        width:150%;
                    }
                }
              
           


        </style>

    </head>
    
<body data-spy="scroll" data-target="#navbar-example" data-offset="80">

<?php
        
echo "<script>
     
     window.onload=(function(){
     
                var TodayActiveCase = $TodayActive;
                
                if(TodayActiveCase < 0){
                        
                       
                        document.getElementById(\"Today_Actives\").style.display='none';
                        document.getElementById(\"Today_Actives2\").stlyle.display='block';
                 }
                 else{
                 
                   
                    document.getElementById(\"Today_Actives\").style.display='block';
                        document.getElementById(\"Today_Actives2\").style.display=\"none\";
                
                }
              
});
    
                    
 	  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
        
        
      function drawChart() {
      
            var data = google.visualization.arrayToDataTable([
              ['MONTH', 'CASES', 'RECOVERD','ACTIVE','DEATH'],
              ['MARCH', 6, 0,5,1],
              ['APRIL', 82, 42,40,2],
              ['MAY', 269,164,102,3] ,
              ['JUNE',2557,817,1708,32],
              ['TODAY',$Totalcases,$Recoverdcases,$Activecases,$Deathcases]

            ]);

        var options = {
              curveType: 'function',
              legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
   
                }
                                         
   </script>";
    
 ?>
    
<nav class="navbar navbar-light navbar-toggleable  fixed-top bg-faded" id="navbar">
			
        <ul class="nav navbar-nav">
                <div class="flex-container">  
                    <li class="nav-item">
                        <a class="nav-link" href="#jumbotron">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cases">Cases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#curve_chart">Graph</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#table">Table</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#symptoms">Symptoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Events">Events</a>
                    </li>    
              </div>
        </ul>
                  
</nav>

	<div class="jumbotron" id="jumbotron">
		<div class="container">
                          
              <h1 class="display-3" style="font-family: 'Merriweather', serif;">
                  <strong>MADURAI COVID-19 Tracker</strong></h1>

              <p class="lead" style=" text-align: right; margin-right:80px;font-family: 'Balsamiq Sans', cursive;font-size: 15px;"><small class="text-muted">Stay home ! Stay safe ! Maintain social distancing.</small></p>
        </div>
	</div>
      
       

		<div class="container container1" id="cases">
	
		<div class="row">	
			
			<div class="col-sm-3">
                <?php
                	echo "<h4 id=\"TotalCases\" style=\"float:left\">".$madurai[1]."</h4>"."<h6>".$TodayConfirmed.'<i class="fa fa-arrow-up" aria-hidden="true"></i>'."</h6>";
                  ?>
                <p class="clear"><strong class="text-muted" style="margin-left:62px;">Total Cases</strong></p>
                
				
			</div>
			
			<div class="col-sm-3">
               
                <?php
                echo "<h4 id=\"active\" style=\"float:left\">".$madurai[0]."</h4>"."<h6 id=\"Today_Actives\">".$TodayActive.'<i class="fa fa-arrow-up" aria-hidden="true"></i>'."</h6>"."<h6 id=\"Today_Actives2\">".$TodayActive1.'<i class="fa fa-arrow-down" aria-hidden="true"></i>'."</h6>";
                ?>
                <p class="clear"><strong class="text-muted" style="margin-left:53px;clear:both;">Active Cases</strong></p>
                
               

			</div>
			
			<div class="col-sm-3">
                <?php
					 echo "<h4 id=\"recoverd\" style=\"float:left\">".$Recoverdcases."</h4>"."<h6>".$TodayRecoverd.'<i class="fa fa-arrow-up" aria-hidden="true"></i>'."</h6>";
                ?>
				
                <P  class="clear"><strong class="text-muted" style="margin-left:63px;clear:both;">Recoverd</strong></P>
			</div>
			
			<div class="col-sm-3">
               
                <?php
                    echo "<h4 id=\"deceased\" style=\"float:left\">".$madurai[2]."</h4>"."<h6>".$TodayDeath.'<i class="fa fa-arrow-up" aria-hidden="true"></i>'."</h6>";
				?>
                <p class="clear" id="death"><strong class="text-muted" style="margin-left:20px;clear:both;">Deceased</strong></p>
					
			</div>
	   </div>
	</div>   
	
    
<?php

echo '<div class="container">
<div class="progress">
 


		<div class="progress-bar bg-warning" aria-valuemin="0" aria-valuemax="100" style="width:'.$ActivePercent1.';" aria-valuenow="'.$ActivePercent1.'">'.'Active : '.$ActivePercent.'%</div>
            
		<div class="progress-bar bg-success" role="progressbar" style="width:'.$RecoveryPercent1.';" aria-valuenow="'.$RecoveryPercent1.'"aria-valuemin="0" aria-valuemax="100">'.'Recoverd : '.$RecoveryPercent .'%</div>
            
		<div class="progress-bar bg-info" role="progressbar" style="width:'.$deathPercent1.';" aria-valuenow="'.$deathPercent1.'" aria-vlauemax="100">'.'D : '.$deathPercent.'%</div>

	</div> 
</div>';  
    ?>
    
    <center>
            <h3 style="color:#504396;">GRAPHICAL DATA</h3>
     </center>
     <div id="curve_chart"></div>
    
                                                  
       
 
    <center><h5 style="color:#2399db">DAILY CASES<small class="text-muted">(Till june)</small></h5></center>
               
 <?php
    
         echo '<div class="container" id="table">
            <div id="accordion" role="tablist" aria-multiselectable="true">     
                <div class="card" >
					<div class="card-header" role="tab" id="headingOne">
					  <h5 class="mb-0">
						<a data-toggle="collapse" data-parent="#accordion"  href="#juneTable" aria-expanded="True" aria-controls="collapseOne">
						 <p><i class="fa fa-arrow-down fa-xs" aria-hidden="True" id="down-arrow-1"></i> JUNE Month cases</p>
						</a>
					  </h5>
					</div>

			<div class="collapse show" role="tabpanel" aria-labelledby="headingTwo" id="juneTable" >
			  <div class="card-block">
				<table class="table table-striped bg-info" >
				  <thead> 
						<tr>
						  <th scope="col">DATE</th>
						  <th scope="col">NEW</th>
						  <th scope="col">RECOVERD</th>
						  <th scope="col">DEATH</th>
						</tr>
				  </thead>
				  <tbody>
						<tr>
							  <th scope="row">1</th>
							  <td>0</td>
							  <td>1</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">2</th>
							  <td>1</td>
							  <td>9</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">3</th>
							  <td>6</td>
							  <td>3</td>
							  <td>0</td>
						</tr>
                        <tr>
							  <th scope="row">4</th>
							  <td>7</td>
							  <td>16</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">5</th>
							  <td>9</td>
							  <td>3</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">6</th>
							  <td>6</td>
							  <td>33</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">7</th>
							  <td>14</td>
							  <td>6</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">8</th>
							  <td>5</td>
							  <td>5</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">9</th>
							  <td>16</td>
							  <td>1</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">10</th>
							  <td>10</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">11</th>
							  <td>20</td>
							  <td>13</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">12</th>
							  <td>31</td>
							  <td>11</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">13</th>
							  <td>15</td>
							  <td>6</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">14</th>
							  <td>17</td>
							  <td>6</td>
							  <td>1</td>
						</tr>
                      <tr>
							  <th scope="row">15</th>
							  <td>16</td>
							  <td>14</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">16</th>
							  <td>22</td>
							  <td>10</td>
							  <td>1</td>
						</tr>
                      <tr>
							  <th scope="row">17</th>
							  <td>29</td>
							  <td>22</td>
							  <td>1</td>
						</tr>
                      <tr>
							  <th scope="row">18</th>
							  <td>2</td>
							  <td>7</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">19</th>
							  <td>55</td>
							  <td>15</td>
							  <td>1</td>
						</tr>
                      <tr>
							  <th scope="row">20</th>
							  <td>86</td>
							  <td>22</td>
							  <td>1</td>
						</tr>
                      <tr>
							  <th scope="row">21</th>
							  <td>69</td>
							  <td>14</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">22</th>
							  <td>144</td>
							  <td>8</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">23</th>
							  <td>139</td>
							  <td>16</td>
							  <td>1</td>
						</tr>
						                       <tr>
							  <th scope="row">24</th>
							  <td>85</td>
							  <td>18</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">25</th>
							  <td>206</td>
							  <td>25</td>
							  <td>2</td>
						</tr>
						 <tr>
							  <th scope="row">26</th>
							  <td>198</td>
							  <td>72</td>
							  <td>2</td>
						</tr>
						 <tr>
							  <th scope="row">27</th>
							  <td>226</td>
							  <td>28</td>
							  <td>7</td>
						</tr>
						 <tr>
							  <th scope="row">28</th>
							  <td>292</td>
							  <td>43</td>
							  <td>5</td>
						</tr>
						 <tr>
							  <th scope="row">29</th>
							  <td>307</td>
							  <td>18</td>
							  <td>4</td>
						</tr>
						 <tr>
							  <th scope="row">30</th>
							  <td>255</td>
							  <td>208</td>
							  <td>3</td>
						</tr>
                      
						
				
			  </tbody>
			  </table>
		     </div>
		</div>
	</div>          
  
		
        <div class="card" >
				<div class="card-header" role="tab" id="headingOne">
					<h5 class="mb-0">
						<a data-toggle="collapse" data-parent="#accordion" href="#table1" aria-expanded="True" aria-controls="collapseOne">
						 <p><i class="fa fa-arrow-down" aria-hidden="True" ></i> May Month cases</p>
						</a>
					  </h5>
					</div>

			<div class="collapse" role="tabpanel" aria-labelledby="headingTwo" id="table1" >
			  <div class="card-block">
				<table class="table table-striped bg-info" >
				  <thead> 
						<tr>
						  <th scope="col">DATE</th>
						  <th scope="col">NEW</th>
						  <th scope="col">RECOVERD</th>
						  <th scope="col">DEATH</th>
						</tr>
				  </thead>
				  <tbody>
						<tr>
							  <th scope="row">1</th>
							  <td>3</td>
							  <td>2</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">2</th>
							  <td>1</td>
							  <td>0</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">3</th>
							  <td>2</td>
							  <td>1</td>
							  <td>0</td>
						</tr>
                        <tr>
							  <th scope="row">4</th>
							  <td>1</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">5</th>
							  <td>0</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">6</th>
							  <td>20</td>
							  <td>4</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">7</th>
							  <td>0</td>
							  <td>6</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">8</th>
							  <td>2</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">9</th>
							  <td>0</td>
							  <td>16</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">10</th>
							  <td>4</td>
							  <td>3</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">11</th>
							  <td>4</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">12</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">13</th>
							  <td>2</td>
							  <td>10</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">14</th>
							  <td>9</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">15</th>
							  <td>11</td>
							  <td>3</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">16</th>
							  <td>4</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">17</th>
							  <td>13</td>
							  <td>18</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">18</th>
							  <td>3</td>
							  <td>1</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">19</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">20</th>
							  <td>9</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">21</th>
							  <td>19</td>
							  <td>1</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">22</th>
							  <td>33</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">23</th>
							  <td>2</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
						                       <tr>
							  <th scope="row">24</th>
							  <td>6</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">25</th>
							  <td>0</td>
							  <td>3</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">26</th>
							  <td>2</td>
							  <td>4</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">27</th>
							  <td>8</td>
							  <td>18</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">28</th>
							  <td>8</td>
							  <td>12</td>
							  <td>5</td>
						</tr>
						 <tr>
							  <th scope="row">29</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">30</th>
							  <td>10</td>
							  <td>5</td>
							  <td>0</td>
						</tr>
                       <tr>
							  <th scope="row">31</th>
							  <td>9</td>
							  <td>0</td>
							  <td>1</td>
						</tr>
						
				
			  </tbody>
			  </table>
		     </div>
		</div>
	</div> 
	<div class="card">
				<div class="card-header" role="tab" id="headingOne">
					<h5 class="mb-0">
						<a data-toggle="collapse" data-parent="#accordion" href="#table2" aria-expanded="true" aria-controls="collapseOne">
							<p><i class="fa fa-arrow-down" aria-hidden="true"></i>April Month cases</p>
                        </a>
					</h5>
				</div>

		<div id="table2"  class="collapse" role="tabpanel" aria-labelledby="headingTwo" >
			<div class="card-block">
				<table class="table table-striped bg-info" >
				<thead> 
						<tr>
						  <th scope="col">DATE</th>
						  <th scope="col">NEW</th>
						  <th scope="col">RECOVERED</th>
						  <th scope="col">DEATH</th>
						</tr>
				</thead>
				<tbody>
						<tr>
							  <th scope="row">1</th>
							  <td>9</td>
							  <td>0</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">2</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">3</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">4</th>
							  <td>2</td>
							  <td>0</td>
							  <td>0 </td>
						</tr>
			             <tr>
							  <th scope="row">5</th>
							  <td>2</td>
							  <td>0</d>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">6</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">7</th>
							  <td>5</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">8</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">9</th>
							  <td>1</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">10</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">11</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">12</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">13</th>
							  <td>14</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">14</th>
							  <td>2</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">15</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">16</th>
							  <td>3</td>
							  <td>7</td>
							  <td>0</td>
						</tr>
                        <tr>
							  <th scope="row">17</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">18</th>
							  <td>0</td>
							  <td>8</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">19</th>
							  <td>2</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">20</th>
							  <td>0</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">21</th>
							  <td>0</td>
							  <td>8</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">22</th>
							  <td>4</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">23</th>
							  <td>2</td>
							  <td>1</td>
							  <td>0</td>
						</tr>
                       <tr>
							  <th scope="row">24</th>
							  <td>4</td>
							  <td>0</td>
							  <td>1</td>
						</tr>
						 <tr>
							  <th scope="row">25</th>
							  <td>4</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">26</th>
							  <td>15</td>
							  <td>8</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">27</th>
							  <td>4</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">28</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">29</th>
							  <td>0</td>
							  <td>4</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">30</th>
							  <td>5</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						
                            
                      
						
					
				</tbody>
				</table>
			</div>
		</div> 
	</div>
         

                       <div class="card">
                            <div class="card-header" role="tab" id="headingone">
                                <h5>
                            <a data-toggle="collapse" data-parent="#accordion" href="#table3" aria-expanded="true" aria-controls="collapseOne">
						    <p><i class="fa fa-arrow-down" aria-hidden="true"></i>March month cases</p>
						    </a>
                                </h5>                            
                            </div> 
                            <div id="table3"  class="collapse" role="tabpanel" aria-labelledby="headingTwo" >
			                      <div class="card-block">
				         <table class="table table-striped bg-info" >
                                          
                         <thead>
                         <tr>
                             <th scope="col">DATE</th>
                             <td  scope="col">NEW </td>
                             <td scope="col">RECOVERD</td>
                             <td scope="col">DEATH</td>
                                                 
                         </tr>    
                        </thead>  
                        <tbody>
                         <tr>
                             <th scope="row">23</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						<tr>
                             <th scope="row">24</th>
							  <td>1</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">25</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">26</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">27</th>
							  <td>2</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">28</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">29</th>
							  <td>1</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">30</th>
							  <td>0</td>
							  <td>0</td>
							  <td>1</td>
						</tr>
                       <tr>
							  <th scope="row">31</th>
							  <td>2</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                        </tbody>                           
						</table>
                                                

                                
                                
                </div>          
                   
            </div>
                                   
        </div>
	</div>';
     ?>
         
      
		
		
<div class="card-deck" id="symptoms">
	<div class="card card2" >
		<img class="card-img-top" src="temperature.jpg" alt="Card image cap">
			<div class="card-block">
      <h5 class="card-title">Symptoms</h4>
    <p class="card-text">Most symptoms:</p>
	<ul>
	<li>Fever</li>
	<li>Dry cough</li>
	<li>Tiredness</li> 
	</ul>
	<p >Serious symptoms:</p>
	<ul>
	<li>Difficulty breathing or shortness of breath</li>
	<li>Chest pain or pressure</li>
	<li>Dry cough</li>
	<li>Loss of smell and taste</li>
    </ul>
	</div>
  </div>

  <div class="card card2">
    <img class="card-img-top" src="prevention.jpg" alt="Card image cap">
    <div class="card-block">
      <h5 class="card-title">Prevention</h5>
      <p class="card-text">Do follow these steps</p>
	  <ul>
	  <li>STAY home</li>
	  <li>KEEP a safe distance</li>
	  <li>WASH hands often</li>
	  <li>COVER while coughing</li>
	  <li>SICK? Call the helpline</li>
	  </ul>
	  <strong class="text-muted">
		MADURAI HELP-LINE: </strong>
	<small class="text-muted">
	  <P>TOLL FREE NO : 1077</p>
	  <p>TELEPHONE-NO: 0452-2546160</p>
		<P>PHONE-NO: 95971 76061</P>
    </small>
	</div>
  </div>
</div>

<div id="Events">
    
    <h3 style="margin-bottom:8px;">Events</h3>
        <ul>
            <li>The first Covid-19 positive case was recorded on March - 23</li>
            <li>Madurai recorded its first death on March 30 after a 54-year-old man who tested madurai's first positive case died . </li>
            <li>Madurai district recorded the second casualty due to COVID-19 on April 24 after a 70-year-old woman succumbed to virus infection. </li>
            <li>Madurai  District have been identified as Red Zone. </li>
            <li>The ministry of health and family welfare department has approved the COVID-19 testing lab at the Madurai Rajaji Medical College.</li>
            <li>More than 25,000 people reached Madurai from Chennai.</li>
            <li>June Month case >  March + April + May cases.</li>
                
        </ul><?php

    include 'MaduraiCovid19.php';
    
?> 

<!DOCTYPE html>

<html lang="en">
    
    <head>
        
    <title>Madurai COVID19</title>
           
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">      
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link rel="stylesheet" type="text/css" href="MaduraiCovid19.css">

    <style>
            
        @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Merriweather:ital@1&display=swap');  
            
            .jumbotron{

                text-align: center;
                background-color:aqua;
                color: black;
				margin-bottom:30px;
				                         
            }
            
            .progress{
                 
                margin-top: 55px;
                margin-bottom: 25px;
               }
            
           
            #recoverd{
                
                margin-left:15px;
            }
           
            #curve_chart{
                 width:1400px;
                 height:650px;
                
            }
              @media screen and (max-width:700px){
                    body{
                        
                        padding:0px;
                        margin:0px;
                    }
                div.progress{
                   height:20px;
                   width:160%;
                   margin-left:-130px;
                   
                   }
                   .row{
                       margin-left:40px;
                   }
                   #deceased{
                       margin-left:50px;
                   }
                   #recoverd{
                       margin-left:30px;
                   }
                   #active{
                       
                       margin:10px;
                   }
                   #death{
                       margin-left:40px;
                   }
                   .nav-item{
                     margin:0px 5px 6px 4px;
                      
                   }
                   body{
                       
                       position:relative;
                   }
                  #curve_chart{
                   
                    width:448px;
                    height:600px;
                    margin-right:0px;
                    margin-left:2px;
                    
                 }
                                    
                }
                @media (orientation:landscape) and (max-width:750px){
   
                   .container{
                      
                           width:150%;
                    }
                 .row{
                            width:150%;  
                            margin-left:230px;
                     
                    }
                    
                    .jumbotron{
                        
                                text-align:center;
                                 width:160%;
                                
                    }
                    .navber{
                        
                        width:160%;
                    }
                    .progress{
                        
                        margin-left:350px;
                        width:100%;
                       
                    }
                    .card,.footer,#Events{
                        
                        width:150%;
                        margin-left:100px;
                    }
                    body{
                        position:relative;
                        width:150%;
                        }
                    #curve_chart{
                        margin-left:200px;
                        width:150%;
                    }
                }
              
           


        </style>

    </head>
    
<body data-spy="scroll" data-target="#navbar-example" data-offset="80">

<?php
        
echo "<script>
     
     window.onload=(function(){
     
                var TodayActiveCase = $TodayActive;
                
                if(TodayActiveCase < 0){
                        
                       
                        document.getElementById(\"Today_Actives\").style.display='none';
                        document.getElementById(\"Today_Actives2\").stlyle.display='block';
                 }
                 else{
                 
                   
                    document.getElementById(\"Today_Actives\").style.display='block';
                        document.getElementById(\"Today_Actives2\").style.display=\"none\";
                
                }
              
});
    
                    
 	  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
        
        
      function drawChart() {
      
            var data = google.visualization.arrayToDataTable([
              ['MONTH', 'CASES', 'RECOVERD','ACTIVE','DEATH'],
              ['MARCH', 6, 0,5,1],
              ['APRIL', 82, 42,40,2],
              ['MAY', 269,164,102,3] ,
              ['JUNE',2557,817,1708,32],
              ['TODAY',$Totalcases,$Recoverdcases,$Activecases,$Deathcases]

            ]);

        var options = {
              curveType: 'function',
              legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
   
                }
                                         
   </script>";
    
 ?>
    
<nav class="navbar navbar-light navbar-toggleable fixed-top bg-faded" id="navbar">
			
        <ul class="nav navbar-nav">
                <div class="flex-container">  
                    <li class="nav-item">
                        <a class="nav-link" href="#jumbotron">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cases">Cases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#curve_chart">Graph</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#table">Table</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#symptoms">Symptoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Events">Events</a>
                    </li>    
              </div>
        </ul>
                  
</nav>

	<div class="jumbotron" id="jumbotron">
		<div class="container">
                          
              <h1 class="display-3" style="font-family: 'Merriweather', serif;">
                  <strong>MADURAI COVID-19 Tracker</strong></h1>

              <p class="lead" style=" text-align: right; margin-right:80px;font-family: 'Balsamiq Sans', cursive;font-size: 15px;"><small class="text-muted">Stay home ! Stay safe ! Maintain social distancing.</small></p>
        </div>
	</div>
      
       

		<div class="container container1" id="cases">
	
		<div class="row">	
			
			<div class="col-sm-3">
                <?php
                	echo "<h4 id=\"TotalCases\" style=\"float:left\">".$madurai[1]."</h4>"."<h6>".$TodayConfirmed.'<i class="fa fa-arrow-up" aria-hidden="true"></i>'."</h6>";
                  ?>
                <p class="clear"><strong class="text-muted" style="margin-left:62px;">Total Cases</strong></p>
                
				
			</div>
			
			<div class="col-sm-3">
               
                <?php
                echo "<h4 id=\"active\" style=\"float:left\">".$madurai[0]."</h4>"."<h6 id=\"Today_Actives\">".$TodayActive.'<i class="fa fa-arrow-up" aria-hidden="true"></i>'."</h6>"."<h6 id=\"Today_Actives2\">".$TodayActive1.'<i class="fa fa-arrow-down" aria-hidden="true"></i>'."</h6>";
                ?>
                <p class="clear"><strong class="text-muted" style="margin-left:53px;clear:both;">Active Cases</strong></p>
                
               

			</div>
			
			<div class="col-sm-3">
                <?php
					 echo "<h4 id=\"recoverd\" style=\"float:left\">".$Recoverdcases."</h4>"."<h6>".$TodayRecoverd.'<i class="fa fa-arrow-up" aria-hidden="true"></i>'."</h6>";
                ?>
				
                <P  class="clear"><strong class="text-muted" style="margin-left:63px;clear:both;">Recoverd</strong></P>
			</div>
			
			<div class="col-sm-3">
               
                <?php
                    echo "<h4 id=\"deceased\" style=\"float:left\">".$madurai[2]."</h4>"."<h6>".$TodayDeath.'<i class="fa fa-arrow-up" aria-hidden="true"></i>'."</h6>";
				?>
                <p class="clear" id="death"><strong class="text-muted" style="margin-left:20px;clear:both;">Deceased</strong></p>
					
			</div>
	   </div>
	</div>   
	
    
<?php

echo '<div class="container">
<div class="progress">
 


		<div class="progress-bar bg-warning" aria-valuemin="0" aria-valuemax="100" style="width:'.$ActivePercent1.';" aria-valuenow="'.$ActivePercent1.'">'.'Active : '.$ActivePercent.'%</div>
            
		<div class="progress-bar bg-success" role="progressbar" style="width:'.$RecoveryPercent1.';" aria-valuenow="'.$RecoveryPercent1.'"aria-valuemin="0" aria-valuemax="100">'.'Recoverd : '.$RecoveryPercent .'%</div>
            
		<div class="progress-bar bg-info" role="progressbar" style="width:'.$deathPercent1.';" aria-valuenow="'.$deathPercent1.'" aria-vlauemax="100">'.'D : '.$deathPercent.'%</div>

	</div> 
</div>';  
    ?>
    
    <center>
            <h3 style="color:#504396;">GRAPHICAL DATA</h3>
     </center>
     <div id="curve_chart"></div>
    
                                                  
       
 
    <center><h5 style="color:#2399db">DAILY CASES<small class="text-muted">(Till june)</small></h5></center>
               
 <?php
    
         echo '<div class="container" id="table">
            <div id="accordion" role="tablist" aria-multiselectable="true">     
                <div class="card" >
					<div class="card-header" role="tab" id="headingOne">
					  <h5 class="mb-0">
						<a data-toggle="collapse" data-parent="#accordion"  href="#juneTable" aria-expanded="True" aria-controls="collapseOne">
						 <p><i class="fa fa-arrow-down fa-xs" aria-hidden="True" id="down-arrow-1"></i> JUNE Month cases</p>
						</a>
					  </h5>
					</div>

			<div class="collapse show" role="tabpanel" aria-labelledby="headingTwo" id="juneTable" >
			  <div class="card-block">
				<table class="table table-striped bg-info" >
				  <thead> 
						<tr>
						  <th scope="col">DATE</th>
						  <th scope="col">NEW</th>
						  <th scope="col">RECOVERD</th>
						  <th scope="col">DEATH</th>
						</tr>
				  </thead>
				  <tbody>
						<tr>
							  <th scope="row">1</th>
							  <td>0</td>
							  <td>1</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">2</th>
							  <td>1</td>
							  <td>9</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">3</th>
							  <td>6</td>
							  <td>3</td>
							  <td>0</td>
						</tr>
                        <tr>
							  <th scope="row">4</th>
							  <td>7</td>
							  <td>16</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">5</th>
							  <td>9</td>
							  <td>3</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">6</th>
							  <td>6</td>
							  <td>33</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">7</th>
							  <td>14</td>
							  <td>6</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">8</th>
							  <td>5</td>
							  <td>5</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">9</th>
							  <td>16</td>
							  <td>1</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">10</th>
							  <td>10</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">11</th>
							  <td>20</td>
							  <td>13</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">12</th>
							  <td>31</td>
							  <td>11</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">13</th>
							  <td>15</td>
							  <td>6</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">14</th>
							  <td>17</td>
							  <td>6</td>
							  <td>1</td>
						</tr>
                      <tr>
							  <th scope="row">15</th>
							  <td>16</td>
							  <td>14</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">16</th>
							  <td>22</td>
							  <td>10</td>
							  <td>1</td>
						</tr>
                      <tr>
							  <th scope="row">17</th>
							  <td>29</td>
							  <td>22</td>
							  <td>1</td>
						</tr>
                      <tr>
							  <th scope="row">18</th>
							  <td>2</td>
							  <td>7</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">19</th>
							  <td>55</td>
							  <td>15</td>
							  <td>1</td>
						</tr>
                      <tr>
							  <th scope="row">20</th>
							  <td>86</td>
							  <td>22</td>
							  <td>1</td>
						</tr>
                      <tr>
							  <th scope="row">21</th>
							  <td>69</td>
							  <td>14</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">22</th>
							  <td>144</td>
							  <td>8</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">23</th>
							  <td>139</td>
							  <td>16</td>
							  <td>1</td>
						</tr>
						                       <tr>
							  <th scope="row">24</th>
							  <td>85</td>
							  <td>18</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">25</th>
							  <td>206</td>
							  <td>25</td>
							  <td>2</td>
						</tr>
						 <tr>
							  <th scope="row">26</th>
							  <td>198</td>
							  <td>72</td>
							  <td>2</td>
						</tr>
						 <tr>
							  <th scope="row">27</th>
							  <td>226</td>
							  <td>28</td>
							  <td>7</td>
						</tr>
						 <tr>
							  <th scope="row">28</th>
							  <td>292</td>
							  <td>43</td>
							  <td>5</td>
						</tr>
						 <tr>
							  <th scope="row">29</th>
							  <td>307</td>
							  <td>18</td>
							  <td>4</td>
						</tr>
						 <tr>
							  <th scope="row">30</th>
							  <td>255</td>
							  <td>208</td>
							  <td>3</td>
						</tr>
                      
						
				
			  </tbody>
			  </table>
		     </div>
		</div>
	</div>          
  
		
        <div class="card" >
				<div class="card-header" role="tab" id="headingOne">
					<h5 class="mb-0">
						<a data-toggle="collapse" data-parent="#accordion" href="#table1" aria-expanded="True" aria-controls="collapseOne">
						 <p><i class="fa fa-arrow-down" aria-hidden="True" ></i> May Month cases</p>
						</a>
					  </h5>
					</div>

			<div class="collapse" role="tabpanel" aria-labelledby="headingTwo" id="table1" >
			  <div class="card-block">
				<table class="table table-striped bg-info" >
				  <thead> 
						<tr>
						  <th scope="col">DATE</th>
						  <th scope="col">NEW</th>
						  <th scope="col">RECOVERD</th>
						  <th scope="col">DEATH</th>
						</tr>
				  </thead>
				  <tbody>
						<tr>
							  <th scope="row">1</th>
							  <td>3</td>
							  <td>2</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">2</th>
							  <td>1</td>
							  <td>0</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">3</th>
							  <td>2</td>
							  <td>1</td>
							  <td>0</td>
						</tr>
                        <tr>
							  <th scope="row">4</th>
							  <td>1</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">5</th>
							  <td>0</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">6</th>
							  <td>20</td>
							  <td>4</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">7</th>
							  <td>0</td>
							  <td>6</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">8</th>
							  <td>2</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">9</th>
							  <td>0</td>
							  <td>16</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">10</th>
							  <td>4</td>
							  <td>3</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">11</th>
							  <td>4</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">12</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">13</th>
							  <td>2</td>
							  <td>10</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">14</th>
							  <td>9</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">15</th>
							  <td>11</td>
							  <td>3</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">16</th>
							  <td>4</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">17</th>
							  <td>13</td>
							  <td>18</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">18</th>
							  <td>3</td>
							  <td>1</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">19</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">20</th>
							  <td>9</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">21</th>
							  <td>19</td>
							  <td>1</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">22</th>
							  <td>33</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">23</th>
							  <td>2</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
						                       <tr>
							  <th scope="row">24</th>
							  <td>6</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">25</th>
							  <td>0</td>
							  <td>3</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">26</th>
							  <td>2</td>
							  <td>4</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">27</th>
							  <td>8</td>
							  <td>18</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">28</th>
							  <td>8</td>
							  <td>12</td>
							  <td>5</td>
						</tr>
						 <tr>
							  <th scope="row">29</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">30</th>
							  <td>10</td>
							  <td>5</td>
							  <td>0</td>
						</tr>
                       <tr>
							  <th scope="row">31</th>
							  <td>9</td>
							  <td>0</td>
							  <td>1</td>
						</tr>
						
				
			  </tbody>
			  </table>
		     </div>
		</div>
	</div> 
	<div class="card">
				<div class="card-header" role="tab" id="headingOne">
					<h5 class="mb-0">
						<a data-toggle="collapse" data-parent="#accordion" href="#table2" aria-expanded="true" aria-controls="collapseOne">
							<p><i class="fa fa-arrow-down" aria-hidden="true"></i>April Month cases</p>
                        </a>
					</h5>
				</div>

		<div id="table2"  class="collapse" role="tabpanel" aria-labelledby="headingTwo" >
			<div class="card-block">
				<table class="table table-striped bg-info" >
				<thead> 
						<tr>
						  <th scope="col">DATE</th>
						  <th scope="col">NEW</th>
						  <th scope="col">RECOVERED</th>
						  <th scope="col">DEATH</th>
						</tr>
				</thead>
				<tbody>
						<tr>
							  <th scope="row">1</th>
							  <td>9</td>
							  <td>0</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">2</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
							</tr>
						<tr>
							  <th scope="row">3</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">4</th>
							  <td>2</td>
							  <td>0</td>
							  <td>0 </td>
						</tr>
			             <tr>
							  <th scope="row">5</th>
							  <td>2</td>
							  <td>0</d>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">6</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">7</th>
							  <td>5</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">8</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">9</th>
							  <td>1</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">10</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">11</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">12</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">13</th>
							  <td>14</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">14</th>
							  <td>2</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">15</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
				        <tr>
							  <th scope="row">16</th>
							  <td>3</td>
							  <td>7</td>
							  <td>0</td>
						</tr>
                        <tr>
							  <th scope="row">17</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">18</th>
							  <td>0</td>
							  <td>8</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">19</th>
							  <td>2</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">20</th>
							  <td>0</td>
							  <td>2</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">21</th>
							  <td>0</td>
							  <td>8</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">22</th>
							  <td>4</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                      <tr>
							  <th scope="row">23</th>
							  <td>2</td>
							  <td>1</td>
							  <td>0</td>
						</tr>
                       <tr>
							  <th scope="row">24</th>
							  <td>4</td>
							  <td>0</td>
							  <td>1</td>
						</tr>
						 <tr>
							  <th scope="row">25</th>
							  <td>4</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">26</th>
							  <td>15</td>
							  <td>8</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">27</th>
							  <td>4</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">28</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">29</th>
							  <td>0</td>
							  <td>4</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">30</th>
							  <td>5</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						
                            
                      
						
					
				</tbody>
				</table>
			</div>
		</div> 
	</div>
         

                       <div class="card">
                            <div class="card-header" role="tab" id="headingone">
                                <h5>
                            <a data-toggle="collapse" data-parent="#accordion" href="#table3" aria-expanded="true" aria-controls="collapseOne">
						    <p><i class="fa fa-arrow-down" aria-hidden="true"></i>March month cases</p>
						    </a>
                                </h5>                            
                            </div> 
                            <div id="table3"  class="collapse" role="tabpanel" aria-labelledby="headingTwo" >
			                      <div class="card-block">
				         <table class="table table-striped bg-info" >
                                          
                         <thead>
                         <tr>
                             <th scope="col">DATE</th>
                             <td  scope="col">NEW </td>
                             <td scope="col">RECOVERD</td>
                             <td scope="col">DEATH</td>
                                                 
                         </tr>    
                        </thead>  
                        <tbody>
                         <tr>
                             <th scope="row">23</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						<tr>
                             <th scope="row">24</th>
							  <td>1</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">25</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">26</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">27</th>
							  <td>2</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">28</th>
							  <td>0</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">29</th>
							  <td>1</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
						 <tr>
							  <th scope="row">30</th>
							  <td>0</td>
							  <td>0</td>
							  <td>1</td>
						</tr>
                       <tr>
							  <th scope="row">31</th>
							  <td>2</td>
							  <td>0</td>
							  <td>0</td>
						</tr>
                        </tbody>                           
						</table>
                                                

                                
                                
                </div>          
                   
            </div>
                                   
        </div>
	</div>';
     ?>
         
      
		
		
<div class="card-deck" id="symptoms">
	<div class="card card2" >
		<img class="card-img-top" src="temperature.jpg" alt="Card image cap">
			<div class="card-block">
      <h5 class="card-title">Symptoms</h4>
    <p class="card-text">Most symptoms:</p>
	<ul>
	<li>Fever</li>
	<li>Dry cough</li>
	<li>Tiredness</li> 
	</ul>
	<p >Serious symptoms:</p>
	<ul>
	<li>Difficulty breathing or shortness of breath</li>
	<li>Chest pain or pressure</li>
	<li>Dry cough</li>
	<li>Loss of smell and taste</li>
    </ul>
	</div>
  </div>

  <div class="card card2">
    <img class="card-img-top" src="prevention.jpg" alt="Card image cap">
    <div class="card-block">
      <h5 class="card-title">Prevention</h5>
      <p class="card-text">Do follow these steps</p>
	  <ul>
	  <li>STAY home</li>
	  <li>KEEP a safe distance</li>
	  <li>WASH hands often</li>
	  <li>COVER while coughing</li>
	  <li>SICK? Call the helpline</li>
	  </ul>
	  <strong class="text-muted">
		MADURAI HELP-LINE: </strong>
	<small class="text-muted">
	  <P>TOLL FREE NO : 1077</p>
	  <p>TELEPHONE-NO: 0452-2546160</p>
		<P>PHONE-NO: 95971 76061</P>
    </small>
	</div>
  </div>
</div>

<div id="Events">
    
    <h3 style="margin-bottom:8px;">Events</h3>
        <ul>
            <li>The first Covid-19 positive case was recorded on March - 23</li>
            <li>Madurai recorded its first death on March 30 after a 54-year-old man who tested madurai's first positive case died . </li>
            <li>Madurai district recorded the second casualty due to COVID-19 on April 24 after a 70-year-old woman succumbed to virus infection. </li>
            <li>Madurai  District have been identified as Red Zone. </li>
            <li>The ministry of health and family welfare department has approved the COVID-19 testing lab at the Madurai Rajaji Medical College.</li>
            <li>More than 25,000 people reached Madurai from Chennai.</li>
            <li>June Month case >  March + April + May cases.</li>
                
        </ul>
	
</div>
<div class="footer">
	<h5>"If you have any symptoms do volunteer yourself"</h5>
    <p><small class="text-muted">stay home ! Stay safe </small></p>
    <small class="text-muted" style="margin-top:25px;">Resource : stopcorona.tn.gov.in</small>
	</div>


    
 
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   
  </body>
</html>
	
</div>
<div class="footer">
	<h5>"If you have any symptoms do volunteer yourself"</h5>
    <p><small class="text-muted">stay home ! Stay safe </small></p>
    <small class="text-muted" style="margin-top:25px;">Resource : stopcorona.tn.gov.in</small>
	</div>


    
 
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   
  </body>
</html>