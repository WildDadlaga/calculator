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

                                padding:15px; 
                             }
                .col-md-4{
                                padding:10px;
                        }

            </style>
                        
    </head>
    <body>
            <div class="row">
                <div class="col-md-4"  align="center" >
                      <img class="pic" src="ARD.jpg" align="left">
                </div>
                <div class="col-md-2"  align="center" >
                </div>
                <div class="col-md-6" >
                    <table   width="100%" rules="cols"  >
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav">
                              <tr>
                                <td align="center" >
                                  <a href="http://ardassets.com/about">Бидний тухай</a>
                                </td >  
                                <td align="center">
                                  <a href="http://ardassets.com/pension">Бүтээгдэхүүн</a>
                                </td>
                                <td align="center">
                                  <a href="http://ardassets.com/category/news">Мэдээлэл</a>
                                </td>
                                <td align="center">           
                                   <a href="http://ardassets.com/contact">Холбоо барих</a>
                                </td>
                              </tr>
                              </ul>
                            </div>
                        </div>
                    </table>
                </div>
            </div>


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
                                <input type="submit" value="Тооцоолох" class="btn btn-lg"  placeholder="Зээл төлөлтийн хугацаа (сараар)"/>
                            </form>
                        </div>
                    </div>
                    <br>                       
                    <div class="col-md-8" >    
                    <div class="table-responsive">
                        <table border="1"  class="table loan table-bordered ac-table text-center" align="center"  >
                           <?php
                                        if(isset($_GET["loanamount"])&&isset($_GET["interestrate"])&&isset($_GET["length"])){

                                        $P=$_GET{"loanamount"};
                                        $r=$_GET{"interestrate"}/100/12;	//neg sarin huu (butarhai toogoor)
                                        $l=$_GET["length"];
                                        $tmp=pow(1+$r,$l);
                                        $A=$P*$r*$tmp/($tmp-1);  //$P -> zeelin hemje  $A -> neg sard tuluh tulbur  $A=$huugiin+$undsen
                                        
                                        echo "<tr><th><font size=\"5\"> Сард төлөх зээлийн хэмжээ </font></th>";
                                        echo "<th><font size=\"5\">Хугацаа </font></th></tr>";
                                        echo "<td><font size=\"5\">" .number_format($A,2). "</font></td>";
                                        echo "<td><font size=\"5\">" .$l. " Сар</font></td>";                           
                            ?>
                        </table>
                            
                        <table class="table loan table-bordered ac-table text-center">
                            <?php

                            echo "<tr><th>Сар</th>";
                            echo "<th>Үндсэн зээлийн төлөлт</th>";
                            echo "<th>Хүүгийн төлөлт</th>";
                            echo "<th>Тэнцүү төлөлт</th>";
                            echo "<th>Үндсэн зээлийн үлдэгдэл</th></tr>";
                            
                            for($etssiinuldegdel=floatval($P),$time=0;$time<$l;$time++){
                                $huugiin=$etssiinuldegdel*$r;
                                $sariinuldegdel=$A-$huugiin;
                                $etssiinuldegdel-=$sariinuldegdel;
                                $Aladin=$time+1;
                                
                                
                                echo "<tr><td>".$Aladin."</td>";
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
            <div id="footer">
      <div class="container">
        <div class="pull-left">
          Ард Актив © 2015 Бүх эрх хуулиар хамгаалагдсан.
        </div>
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
    </body>
</html>