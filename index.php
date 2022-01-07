<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>
    <font face="Verdana" color="RED">
      <h4 align="center">CALCULATOR</h4>
    </font> 
    
         <form method="POST">
         
         <pre>
         <fieldset>
                  <legend align="left">Calculator：</legend>
            
         NUMBER.1 <input type="text" name="numb1"> 
            <br>
         NUMBER.2 <input type="text" name="numb2">
            <br>
            <select name="operator" id="">
               <option>select a operator</option>
               <option>GCD</option>
              <option>LCD</option>
            </select>
            <br>
            <button type="submit" name="submit" value="submit">Calculate</button> <button type="reset">Reset</button>
            
            </fieldset>
         </form>
        
        <?php 

            if (isset($_POST['submit'])) {
                $a = $_POST['numb1'];
                $b = $_POST['numb2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                   case 'None':
                        echo "You need to select any operator";
                        
                        break;
                        // Function to return gcd
                          // of two numbers
                    case 'GCD':
                        function gcd($a, $b)
	                        // Everything divides 0
                          {
                          if ($a == 0)
                          return $b;
                          if ($b == 0)
                          return $a;

                          // base case
                          if($a == $b)
                            return $a ;
                          
                          // a is greater
                          if($a > $b)
                           return gcd( $a-$b , $b ) ;

                          return gcd( $a , $b-$a ) ;
                        }
                        echo " GCD of $a and $b is ", gcd($a , $b) ;

                         break;
                     case'LCD':
                          function gcd( $a, $b)
                          {
                          if ($a == 0)
                              return $b;
                            return gcd($b % $a, $a);
                          }

                          // Function to return LCD
                          // of two numbers
                          function LCD( $a, $b)
                          {
                            return ($a / gcd($a, $b)) * $b;
                          }

                            echo "LCD of ",$a, " and "
                              ,$b, " is ", LCD($a, $b);

                                                  break;
                                          }
                                      }
         ?>
      
    </body>
    </html>