<?php
  
  /**
    * @desc Converts Standard Number to Devanagari Unicode (nepali, hindi)
    * 
    * @param integer $input 
    * @return string 
    */
  function convertToUnicodeNumber($input) {
    
    $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
    $devanagari_numsets = array("०","१","२","३","४","५","६","७","८","९");
    
    return str_replace($standard_numsets, $devanagari_numsets, $input);
  }
  
  /* Usage */
  $no="";
  if(isset($_POST['convert'])){
      $no = $_POST['no'];
    echo convertToUnicodeNumber($no); // Displays १२३४
    }
?>
<html>
    <body>
        <form method="post">
            <input type="text" placeholder="Enter number in english" value="<?php echo $no;?>" name="no"/>
            <input type="submit" name="convert" value="Convert"/>
        </form>
    </body>
</html>