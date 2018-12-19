 



<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Item Lists</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->
    
    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->
        
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->
    <style type="text/css">
        @media print
        {
            #PrintPageButton{
            display:none;
        }
            #texta{
                display border: none;
            }
    }
    </style>
    <style type="text/css">
    .column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}    
  </style>      

</head>
<body>
    <div class="container">
        <div class="row">
            <!--<div class="col-lg-12">
                <div class="invoice-box">
                        

                    <div class="invoice-header text-right">
                        <div>
                        <span style="float:left;width: 20%;">
                        -->
                        <div class="column">
            <img src="img/logo.png"  
             width="200" height="150" />
             <br>
        </span>
                        
    </div>
    <div class="column">
<h1><b>Salvi Catering</b></h1>

          <h5><b>967 'ई' वॉर्ड शाहूपुरी 6 वी गल्ली कोल्हापूर </b></h5>
        </div>
                        <div class="column">
                    
                        <h4 style="font-size:13px;">No.: <input type="text" name=""></h4>
                        <h4 style="font-size:13px;">Date: <input type="date" name=""></h4>
                            </div>
                        </div>
                    </div>
                    
                <hr style=" border-top: double ;" />
                    <hr>
                   
                    <div class="invoice-body">                  
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin-bottom: 5px">
                                
                                
                            </table>
                        </div>
                        
                        <div class="tc-box">
                            
                        </div>
<br><br>
<div width="100%" >
    <div width="50%"  style="float:left">
        <b>      
                            RECEIVER'S SIGNATURE & STAMP</b> 
                    </div>
                    <div width="50%" style="float:right;">
                         <b>FOR SALVI CATERING      
                            </b>   

                </div>
                </div>
            </div><br><br>
                <div class="text-center">
                    <button id="PrintPageButton" class="btn btn-default print-btn" onclick="window.print();">Print</button>
                </div>          
            </div>          
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>















 