<!DOCTYPE html>

<html>
    <title>Control Page</title>
    <body style="background-color:whitesmoke;">
       <?php require_once 'connect.php'; ?>
       <form action="connect.php" method="POST">
      
    <h1 style="color:black;position:relative; left:-5px; top:48px;">
            <FONT SIZE="4">‎ Engine 1</FONT></h1>
<div class="range-wrap" style="width: 30%;" >
    <input type="range" class="range" min="0" max="180" value="0" id="s1" name="s1">
    <output class="bubble"></output>
 </div>

  <h2 style="color:black;position:relative; left:-5px; top:48px;">
    <FONT SIZE="4">‎ Engine 2 </FONT></h2>
<div class="range-wrap" style="width: 30%;">
    <input type="range" class="range" min="0" max="180" value="0" id="s2" name="s2">
    <output class="bubble"></output>
  </div>

  <h3 style="color:b ;position:relative; left:-5px; top:48px;">
    <FONT SIZE="4">‎ Engine 3 </FONT></h3>
<div class="range-wrap" style="width: 30%;">
    <input type="range" class="range" min="0" max="180" value="0" id="s3" name="s3">
    <output class="bubble"></output>
  </div>

  <h4 style="color:black;position:relative; left:-5px; top:48px;">
    <FONT SIZE="4">‎ Engine 4 </FONT></h4>
<div class="range-wrap" style="width: 30%;">
    <input type="range" class="range" min="0" max="180" value="0" id="s4" name="s4">
    <output class="bubble"></output>
  </div>

  <h5 style="color:black;position:relative; left:-5px; top:48px;">
    <FONT SIZE="4">‎ Engine 5 </FONT></h5>
<div class="range-wrap" style="width: 30%;">
    <input type="range" class="range" min="0" max="180" value="0" id="s5" name="s5">
    <output class="bubble"></output>
  </div>

  <h6 style="color:black;position:relative; left:-5px; top:48px;">
    <FONT SIZE="4">‎ Engine 6 </FONT></h6>
<div class="range-wrap" style="width: 30%;">
    <input type="range" class="range" min="0" max="180" value="0" id="s6" name="s6">
    <output class="bubble"></output>
  </div>



  <button type="submit"  name="save" style = "position:relative; left:655px; top:35px;
    background: palevioletred;
    color: white;
    padding: 4px 12px;
    border-radius: 4px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    left: 50%;
    transform: translateX(-50%);
  " >Save</button>
  
  <head>
    <link rel="stylesheet" href="in.css">
  </head>
  <script src="in.js"></script>  
</body>
  </html>