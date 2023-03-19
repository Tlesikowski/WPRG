 <html>
<body>

 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
<legend>formulasz kontaktowy:</legend>
Imie i nazwisko:
<br><br>
<input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
adres email:
<br><br>
<label for="email">Enter your email:</label>
  <input type="email" id="email" name="email">
<br><br>
telefon:
<br><br>
<input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
wybierz temat:
<br><br>
<input list="temat">
  <datalist id="temat">
    <option value="wykonanie strony internetowej">
    <option value="idk">
    <option value="choice2">
    <option value="lorem">
    <option value="ipsum">
  </datalist>

<br><br>
tesc wiadomosci: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
preferowana forma kontaktu:
<br><br>
<input type="checkbox" name="kontkt" value="email">email
<input type="checkbox" name="kontakt" value="telefon">telefon
<br><br>
posiadasz stone www?:
<br><br>
<input type="radio" name="strona" value="tak">tak
<input type="radio" name="strona" value="nie">nie

<br><br>

  <label for="myfile">zaloncznik:</label>
  <br><br>
  <input type="file" id="myfile" name="myfile">
<br><br>
</fieldset>
<input type="submit" name="submit" value="Submit">


</form> 
</body>
</html> 
