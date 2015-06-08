
 <?php include("head.php"); ?>
        <meta name="Keywords" content="KEYWORD1, KEYWORD2, KEYWORD3">
        <meta name="Description" content="BRIEF DESCRIPTION OF PAGE HERE.">
        <title>Basic DOM</title>
 <?php include("menu.php"); ?>

    
<!--put content here-->
      

     <h3>Mouseover</h3>
            <ul>
              <li>onmouseover: <span id="ab" onmouseover="myFunction()" class="glyphicon glyphicon-asterisk"></span></li>
              <li>onmouseover: <span id="bc" onmouseover="red()" class="glyphicon glyphicon-cloud"></span></li>
              <li>onmouseover: & onmouseout: <span id="cd" onmouseover="blue()" onmouseout="outblue()" class="glyphicon glyphicon-time"></span></li>
              <li> <span id="de" class="glyphicon glyphicon-bookmark"></span></li>
            </ul>
       
            <script>

            function myFunction() {
              var x = document.getElementById('ab');
              x.style.fontSize = "25px";
              x.style.color = "blue";
            }

            function red() {
              document.getElementById('bc').style.opacity = ".2";
            }

            function blue() {
              document.getElementById('cd').style.opacity = ".2";
            }

             function outblue() {
              document.getElementById('cd').style.opacity = "1";
            }




            </script>

           

    












 <?php include("bottom.php"); ?>