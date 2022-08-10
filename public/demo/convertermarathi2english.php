<?php
  /**
    * @desc Converts Unicode Number to Standard English Number
    * @param string $input 
    * @return string 
    */
  function convertToStandardNumber($input) {
    
    $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
    $devanagari_numsets = array("०","१","२","३","४","५","६","७","८","९");
    
    return str_replace($devanagari_numsets, $standard_numsets, $input);
  }
  
  /* Usage */
  $no="";
  if(isset($_POST['convert'])){
      $no = $_POST['no'];
    echo convertToStandardNumber($no); // Displays १२३४
    }
  //echo convertToStandardNumber('१२३४'); // Displays 1234
?>
<html>
    <body>
        <form method="post">
            <input type="text" placeholder="Enter number in marathi" value="<?php echo $no;?>" name="no"/>
            <input type="submit" name="convert" value="Convert"/>
        </form>
    </body>
</html>