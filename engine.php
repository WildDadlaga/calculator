<?php
ob_start();
?>  
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Tooni mashin</title>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link rel="icon" type="image/png" href="http://ardassets.com/wp-content/themes/assets/images/favicon.png" />
    <link href="http://ardassets.com/wp-content/themes/assets/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="http://ardassets.com/wp-content/themes/assets/css/swiper.min.css">
    <link href="http://ardassets.com/wp-content/themes/assets/dist/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="http://ardassets.com/wp-content/themes/assets/css/style.css" type="text/css" />
    <meta name='robots' content='noindex,follow' />
    <link rel="alternate" type="application/rss+xml" title="ardassets.com &raquo; Зээлийн тооцоолуур Comments Feed" href="http://ardassets.com/calculator/feed/" />
      <meta charset="utf-8">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <?php
        session_start();
        include "function.php";
        
        if(isset($_GET['logout'])){
            unset($_GET['logout']);
            session_destroy();                 
            header('Refresh: 2; URL= http://localhost/erdenebulag/calculator/login.php');
        }
            
    ?>
            <style type="text/css">
           
                table {
                                
                                background: url(.jpg) no-repeat;
                                background-position:left;

                            }
                

                body {
                                background-repeat: no-repeat;
                                background-position: center;

                                margin-right: 50px;
                                margin-left: 50px;
                                padding:20px;

                                
                                
                            } 
                .container-fluid{

                                padding:10px; 

                             }
                .col-md-4{
                                padding:0px;
                            }
                .table1{

                                width:100%;

                             }
                #main{
                        background-color: white;
                        box-shadow: 0px 0px 6px #888;
                       

                            
                }
                

            </style>
                        
    </head>
    <body>  

            <div class="row" id="main">
                <div class="col-md-4"  align="center" >
                      <img class="pic" src="ARD.jpg" align="left" height="75" width="200">
                </div>
                <div class="col-md-2"  align="center" >
                </div>
                <div class="col-md-6" >
                    <background-repeat>
                    <table   width="100%" rules="cols"  >
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav">
                              <tr>
                                <td align="center" >
                                  <a href="http://ardassets.com/about"><font color="#848484">Бидний тухай</font></a>
                                </td >  
                                <td align="center">
                                  <a href="http://ardassets.com/pension"><font color="#848484">Бүтээгдэхүүн</font></a>
                                </td>
                                <td align="center">
                                  <a href="http://ardassets.com/category/news"><font color="#848484">Мэдээлэл</font></a>
                                </td>
                                <td align="center">           
                                   <a href="http://ardassets.com/contact"><font color="#848484">Холбоо барих</font></a>
                                </td>
                                <td align="center">           
                                     <?php
                                if(!isset($_SESSION['userid'])){
                                   echo "<a href=\"../login.php\"><font color=\"#848484\">Нэвтрэх</font></a>
                                </td>
                                <td align=\"center\">";  
                            }
                            ?>
                                    <!-- Trigger the modal with a button -->
                                     <?php
                                if(!isset($_SESSION['userid']))

                                    echo "<button type=\"button\"  data-toggle=\"modal\" data-target=\"#myModal\">Нэвтрэх</button>

                    <!-- Modal -->
                    <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                      <div class=\"modal-dialog\">

                        <!-- Modal content-->
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                           
                          </div>
                          <div class=\"modal-body\">
                            <p>
                                 <form action=\"login.php\" method=\"POST\">
                                <span>Name:</span>
                                <input type=\"text\" name=\"username\"  class=\"form-control\">
                                <br>
                                <span>Password:</span>
                                <input type=\"text\" name=\"userpassword\" class=\"form-control\">
                                <br>
                                <input type=\"submit\" value=\"Нэвтрэх\" class=\"btn btn-lg\"  placeholder=\"Зээл төлөлтийн хугацаа (сараар)\"/>

                            </form>
                            </p>
                          </div>
                          <div class=\"modal-footer\">
                          </div>
                        </div>

                      </div>
                    </div>";
                    else echo "<font color=\"#585858\"  size=\"4\">".getUserName($_SESSION['userid'])."</font>";
                                
                            ?>


                    
                                </td>                                

                              </tr>
                              </ul>
                            </div>
                        </div>
                    </table>
                </div>
            </div>

            <br>
            <br>

            <div class="row">   
                    <div class="col-md-4">
                        <div class="subscribe">
                            <h1 class="title"><i class="fa fa-calculator"></i>Зээлийн <br>тооцоолуур</h1>
                            <form action="engine.php" method="GET">
                                <span>Зээлийн хэмжээ:</span>
                                <input type="number" name="loanamount"  class="form-control"  placeholder="Зээлийн хэмжээ" 
                                    value="<?php if($_GET{"loanamount"}!=0) echo $_GET{"loanamount"}; ?>">
                                <br>
                                <span>Зээлийн хүү (%):</span>
                                <input type="number" name="interestrate" class="form-control" placeholder="Жилийн хүү(%)" value="<?php if( $_GET{"interestrate"}!=0) echo $_GET{"interestrate"}; ?>"  />
                                <br>
                                <span>Хугацаа:</span>
                                <input type="number" name="length" class="form-control" placeholder="Сараар" value="<?php if($_GET{"length"}!=0) echo  $_GET{"length"}; ?>"/>
                                <br>
                                <span>Огноо:</span>
                                <br>
                                <?php

                                $curr_year = date("y")+2000;
                                $year = array (1=>$curr_year, $curr_year+1, $curr_year+2, $curr_year+3, $curr_year+4);
                                $select = "<select name=\"year\">\n";
                                if(isset($_GET{"year"})) $curr_year= $_GET{"year"};
                                foreach ($year as $key => $val) {
                                    $select .= "\t<option val=\"".$key."\"";
                                    if ($year[$key] == $curr_year) {
                                        $select .= " selected=\"selected\">".$val."</option>\n";
                                    } else {
                                        $select .= ">".$val."</option>\n";
                                    }
                                }
                                $select .= "</select>";
                                echo $select;

                                
                                $curr_month = date("m");
                                $month = array (1=>1,2,3,4,5,6,7,8,9,10,11,12);
                                $select = "<select name=\"month\"  \n" ;
                                if(isset($_GET{"month"})) $curr_month= $_GET{"month"};
                                foreach ($month as $key => $val) {
                                    $select .= "\t<option val=\"".$key."\"";
                                    if ($key == $curr_month) {
                                        $select .= " selected=\"selected\">".$val."</option>\n";
                                    } else {
                                        $select .= ">".$val."</option>\n";
                                    }
                                }
                                $select .= "</select>";
                                echo $select;

                                ?>
                                <br>
                                <br>
                                <input type="submit" value="Тооцоолох" class="btn btn-lg"  placeholder="Зээл төлөлтийн хугацаа (сараар)"/>

                            </form>
                        </div>
                    </div>
                                      
                    <div class="col-md-8" >    
                    <div class="table-responsive">

                        <br>                       
                        <br>

                        <table rules="none"  class="table1" >
                           <?php
                                        if(isset($_GET["loanamount"])&&isset($_GET["interestrate"])&&isset($_GET["length"])){

                                        $P=$_GET{"loanamount"};
                                        $r=$_GET{"interestrate"}/100/12;    //neg sarin huu (butarhai toogoor)
                                        $l=$_GET["length"];
                                        $ognoo= array (intval($_GET['month']), intval($_GET['year']));
                                        $tmp=pow(1+$r,$l);
                                        $A=$P*$r*$tmp/($tmp-1);  //$P -> zeelin hemje  $A -> neg sard tuluh tulbur  $A=$huugiin+$undsen


                                        echo "<br>";
                                        echo "<tr><td><u><font size=\"2\"> Сард төлөх зээлийн хэмжээ </font></u></td>";
                                        echo "<td><u><font size=\"2\">Зээл төлж дуусах хугацаа </font></u></td></tr>";
                                        echo "<td><b><font color=\"#585858\" size=\"7\">" .number_format($A,2). "</font></b></td>";

                                        $duusah=$ognoo;
                                        $duusah[0]+=$l;
                                        while($duusah[0]>12) {
                                            $duusah[0]-=12;
                                            $duusah[1]++;
                                        } 

                                        echo "<td><b><font color=\"#585858  \" size=\"7\">" .$duusah[1]." он ".($duusah[0]-1). " сар</font></b></td>";                           
                            ?>
                        </table>
                        <br>

                        <br>
  
                        <table class="table loan table-bordered ac-table text-center">
                            <?php

                            echo "<tr><th>Сар</th>";
                            echo "<th>Үндсэн зээлийн төлөлт</th>";
                            echo "<th>Хүүгийн төлөлт</th>";
                            echo "<th>Тэнцүү төлөлт</th>";
                            echo "<th>Үндсэн зээлийн үлдэгдэл</th></tr>";
                            
                           for($etssiinuldegdel=floatval($P),$showtime=$ognoo,$time=0;$time<$l;$time++,$showtime[0]++){
                                        $huugiin=$etssiinuldegdel*$r;
                                        $sariinuldegdel=$A-$huugiin;
                                        $etssiinuldegdel-=$sariinuldegdel;
    
                                
                                echo "<tr><td>".$showtime[1]."/".$showtime[0]."</td>";
                                        if($showtime[0]>=12){
                                            $showtime[0]=0;
                                            $showtime[1]++;
                                        }
                                        echo "<td>" .number_format($sariinuldegdel,2)."</td>";
                                        echo "<td>" .number_format($huugiin,2)."</td>";
                                        echo "<td>" .number_format($A,2). "</td>";
                                        echo "<td>" .number_format($etssiinuldegdel,2)."</td></tr>";
                                        
                            }
                        }
                        ?>
                    </table>                    
                    </div>
                    </div>   
            </div>
             <form action="engine.php" method="GET">
                <input name="logout" type="submit" value="Logout" class="btn btn-lg"/>
            </form>




            <div id="side-btn">
                <a href="http://ardassets.com/online">
                    Онлайн зээлийн<br>ѳргѳдѳл
                </a>
            </div>



            <div id="footer">
                <div class="container">
                    <div class="pull-left">Ард Актив © 2015 Бүх эрх хуулиар хамгаалагдсан.
                        <div>
                              <ul class="social pull-right">
                                      <li class="fa fa-facebook">
                            <a href="http://www.facebook.com/ardassetscom" target="_blank">
                              facebook
                            </a>
                          </li>
                                                  <li class="fa fa-twitter">
                            <a href="http://twitter.com/ardassets" target="_blank">
                              twitter
                            </a>
                          </li>
                                                  <li class="fa fa-linkedin">
                            <a href="http://www.linkedin.com/company/ard-assets" target="_blank">
                              linkedin
                            </a>
                          </li>
                                  </ul>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>