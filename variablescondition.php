<?php
include("backgroundcolor.html")
?>
      <title>Variables and condition</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $("#ID1").hide();
            });
            
            $("#show").click(function(){
                $("#ID1").show();
            });

            $(".btn1").click(function(){
              $("#table").animate({padding:"+=100px"});
            });

            $(".btn2").click(function(){
              $("table").animate({padding:"-=100px"});
            });

              $("#btn4").click(function(){
                  $("#audio").remove();
              })
          })
      </script>
    </head>
    <body>
      <h1> Variables and conditions in C++ </h1>     
      <br><br><br>
      <h2 style=" font-size: 40px;
      text-align: center;">Variables in C++</h2><hr><br>
      <div class="ID">
      <p>
        Variables are containers for storing data values.
        In C++, there are different types of variables 
        (defined with different keywords), for example:</p>
        <ul id="id">
          <li>int - stores integers (whole numbers),
             without decimals, such as 123 or -123</li>
          <li>double - stores floating point numbers,
             with decimals, such as 19.99 or -19.99</li>
          <li>
            char - stores single characters, such as 
            'a' or 'B'. Char values are surrounded by single quotes
          </li>
          <li>
            string - stores text, such as "Hello World". 
            String values are surrounded by double quotes
          </li>
          <li>
            bool - stores values with two states: true or false
          </li>
        </ul>
      </div>
          <br><br>
          <p style="background-color:rgba(157, 160, 163, 0.137);
          color:rgb(252, 246, 246);
          border-radius: 5%; font-size:20px;">
          To create a variable, you must specify the type and assign it a value:</p><br>
          <code>type variable = value;</code>
        <h3>Example: </h3>
        <p>
          <img  src="Variables.png" alt="Variables" style="Width:450px;
          height:300px;">
        <img src="Variables1.1.png" alt="Variablesexample" style="width:450px;
        height:300px; margin-left:253px;"></p><br>
        <p class="transform">
          <a href="https://www.geeksforgeeks.org/variables-in-c/" target="_blank">
              <button id="button">Learn more</button>
          </a><br>
        </p><br><br><br><br><br><br>
        <br><br>
        <p id="ID">
        <h2 style="font-size:30px;">
          Scope of Variables in C++</h2>
          There are mainly two types of variable scopes:
          <ol>
            <li style="font-size:155%">Local Varibles</li>
            <li style="font-size:155%">Global Variables</li>
          </ol><br>
        </p>
        <div class="ID">
          <ol>
            <li style="font-size:155%">Local Variables</li>
            <p>
              Variables defined within a function or block
               are said to be local to those functions.
               <ul>
                 <li>Anything between ‘{‘ and ‘}’ is said to inside a block.</li>
                 <li>
                  Local variables do not exist outside the block in which the
                   are declared, i.e. they can not be accessed or used outside that block.
                 </li>
                 <li>
                  Declaring local variables: Local variables are declared inside a block.
                </li><br>
                 <img src="Variables1.2.png" href="Local Variables">
               </ul>
            </p>
            <br>
            <li style="font-size:155%">Global Variables</li>
             <p>The name suggests, Global Variables can be accessed from any part of the program.</p>
              <ul>
                <li>They are available through out the life time of a program.</li>
                <li>They are declared at the top of the program outside all of the functions or blocks.</li>
                <li>Declaring global variables: Global variables are usually declared outside of all of the 
                  functions and blocks, at the top of the program.</li><br>
              </ul>
            </ol>
          </div>
              <img src="Variables1.3.png" href="Local Variables">
          <br><br>
          
          <h2 style="font-size: 30px;">Extern Variables<br></h2>
          <main id="ID1">
          This keyword is used to access variable in a file which is declared & defined in some other file, that is the 
            existence of a global variable in one file is declared using extern keyword in another file.<br>
          <br>
            <img src="variables1.4.gif">
          </main>  
            <button id="hide">Hide</button>
            <button id="show">Show</button>
      <br><br><br><br>
      <h2 style=" font-size: 40px;
      text-align: center;">Condition in C++</h2><hr><br>
        <h2 style="background-color:rgba(157, 160, 163, 0.137);
        color:rgb(252, 246, 246);
        border-radius: 5%;
        font-size: 22px;">Conditions in C++ are: <span style="color:rgb(6,82,117)">if</span>,
          <span style="color:rgb(6,82,117)">else</span>,<span style="color:rgb(6,82,117)">else if</span> </h2>
        <br>
        <button class="btn1">Increase table border +</button>
        <button class="btn2">Reduce the table border -</button>
        <br><br>
          <table border="2" cellspacing="5" cellpadding="5" id="table">
        <tr>
            <th>Conditions</th>
            <th>Code</th>
            <tr>
                <th><span style="color:rgb(6,82,117)">if</span></th>
                <th><code>If (condition) {
                    // block of code to be executed if the condition is true
                  }</code></th>
            </tr>
            <tr>
                <th><span style="color:rgb(6,82,117)">else</span></th>
                <th><code>If (condition) {
                    // block of code to be executed if the condition is true
                  }<br><strong>else</strong> {
                    // block of code to be executed if the condition is false
                  }</code></th>
            </tr>
            <tr>
                <th><span style="color:rgb(6,82,117)">else if</span></th>
                <th><code>
                    If (condition1) {
                        // block of code to be executed if condition1 is true
                      }<br> <strong>else if </strong>(condition2) {
                        // block of code to be executed if the condition1 is false and condition2 is true
                      } <br>else {
                        // block of code to be executed if the condition1 is false and condition2 is false
                      }</code>
                </th>
            </tr>
        </tr>
     </table>
     <br><br><br>
    <div class="row">
        <div class="column">
         <h3>Use of conditioning <em><span style="color:rgb(6,82,117)">if</span></em>:</h3>
         <img src="kushtezimi_if.png" alt="Condition if" style="width:450px;
         height:300px;">
        </div>
        <div class="column">
         <h3 style="float:right;">Use of conditioning <em><span style="color:rgb(6,82,117)">else</span></em>:</h3>
         <img src="kushtezimi_else.png" alt="Condition else" style="width:450px;
         height:300px;margin-left:185px;">
        </div>
        <div class="column">
         <h3>Use of conditioning <em><span style="color:rgb(6,82,117)">else if</span></em>:</h3>
         <img src="kushtezimi_elseif.png" alt="Condition if" style="width:500px;
         height:365px;" >
        </div>
        <div class="transform">
          <a href="https://cal-linux.com/tutorials/conditionals.html" target="_blank">
              <button>Learn more</button>
          </a><br>
        </div><br><br><br>
    </div><br><br><br>
    
    <h2>Conditional expression in C++ </h2><br>
    
     <p id="ID2">
     <b>Conditional expression is:</b><br><br>
        (expression-1) ? expression-2 : expression-3
      <br>
    </p>
     <h3>Example: </h3>
     <img src="shprehjaekushtezuar.png" style="width:600px; height:400px;">
     <br><br>
     <div class="transform">
      <a href="https://www.tutorialspoint.com/cplusplus/cpp_conditional_operator.htm" target="_blank">
        <button>Learn more</button>
      </a>
    </div>
    <br><br><br><br>
    </body>
    <foot>
      <audio controls id="audio">
          <source src="Music.mp3" type="audio/mpeg">
          Your browser does not support the audio element
      </audio>
      <button id="btn4" style="margin-left:995px; margin-bottom:45px;">Hide this audio</button>
      <a href="#" style="float:right">Go again in first page (click here) </a> <br><br>
      <p id="demo"></p>
    <script>
      var d=new Date();
      document.getElementById("demo").innerHTML=d;
    </script>
    </foot>
</html>


