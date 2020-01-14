

<div class="w3-row-padding w3-padding-16 w3-center">
<div class="w3-light-green user">

<h2>Numar cursuri:<?php echo $_SESSION['Numar cursuri'];?></h2>
<h2>Numar seminarii:<?php echo $_SESSION['Numar seminarii'];?></h2>
<h2>Alegeri facute:<?php echo $_SESSION['alegeri'];?></h2>
<form action="/api/user.inc.php" id="alegere" method="POST">
<label for="sali">Alege sala</label>
<select name="sali" form="alegere">
<?php
for($i=1;$i<=$_SESSION['nr_sali'];$i++){
?>
    <option value=        <?php echo $i;?>        >      <?php echo $i; ?>      </option>
<?php 
}
?>
</select>
<label for="zi">Alege zi</label>
<select name="zi" form="alegere">
<?php
for($i=0;$i<count($_SESSION['zi']);$i++){
?>
    <option value=        <?php echo $_SESSION['zi'][$i];?>        >      <?php echo $_SESSION['zi'][$i]; ?>      </option>
<?php 
}
?>
</select>

<label for="interval">Alege interval</label>
<select name="interval" form="alegere">
<?php
for($i=0;$i<count($_SESSION['interval_timp']);$i++){
?>
    <option value=        <?php echo $_SESSION['interval_timp'][$i];?>        >      <?php echo $_SESSION['interval_timp'][$i]; ?>      </option>
<?php 
}
?>
</select>
<label for="comentariu">Lasa un comentariu:</label>
<input style="height:100px;" type="text" name="comentariu">

  <input type="submit" name="add-alegere">
</form>
<br>
</div>









</div>

    <!-- Scripts-->
    <script src="/src/assets/js/main.js"></script>
</body>
</html>