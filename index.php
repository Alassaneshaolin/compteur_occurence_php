<form method='POST'>
   <p>
       <label for="ameliorer">
       <h1>compteur d'occurence</h1>
       </label>
       <br />
       
       <textarea name="ameliorer" id="ameliorer" rows="5" cols="40"></textarea>    
       </b><br>
       <input type="submit" name="submit">   
   </p>
</form>
<?php
if(isset($_POST['submit']) && !empty($_POST['ameliorer']))
{
    $text = $_POST['ameliorer'];
 
    foreach (count_chars($text, 1) as $i => $val) 
    {
      echo 'Il y a <b>' . $val . ' occurrence(s) de ' . chr($i) . ' dans "' . $text . '"</b><br>';
    }
}


?>
