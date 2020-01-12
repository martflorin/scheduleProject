<div class="w3-row-padding w3-padding-16 w3-center">
        <h2>Adauga sali</h2>
        <form action="/api/add.inc.php" class="w3-light-green" method="POST">
            <label for="sala">Numar sali</label>
            <input type="sala" name="sala" id="sala">
            <label for="zile">Zile</label>
            <div class="multiselect">
            <input type="checkbox" name="days[]" value="luni" >luni
            <input type="checkbox" name="days[]" value="marti" >marti
            <input type="checkbox" name="days[]" value="miercuri" >miercuri
            <input type="checkbox" name="days[]" value="joi" >joi
            <input type="checkbox" name="days[]" value="vineri" >vineri
</div>
            <label for="interval">Interval orar</label>
            <div class="multiselect">
                <button>08:00-10:00</button>
                <button>10:00-12:00</button>
                <button>12:00-14:00</button>
                <button>14:00-16:00</button>
                <button>16:00-18:00</button>
                <button>18:00-20:00</button>
            </div>
            <button type="submit" value="adaugaSali" name="adaugaSali">Adauga</button>
        </form>
        <h2>Adauga profesor</h2>
        <form action="/api/add.inc.php" class="w3-light-green" method="POST">
            <label for="numeProfesor">Nume</label>
            <input type="numeProfesor" name="numeProfesor" id="numeProfesor">
            <label for="prenumeProfesor">Prenume</label>
            <input type="prenumeProfesor" name="prenumeProfesor" id="prenumeProfesor">
            <label for="materiePredata">Materie predata</label>
            <input type="materiePredata" name="materiePredata" id="materiePredata">

            <label for="numarSeminarii">numar seminarii</label>
            <input type="numarSeminarii" name="numarSeminarii" id="numarSeminarii">

            <label for="numarCursuri">numar cursuri</label>
            <input type="numarCursuri" name="numarCursuri" id="numarCursuri">

            
            <button type="submit" value="adaugaProfesor" name="adaugaProfesor">Adauga</button>
        </form>
    </div>

    <!-- Scripts-->
    <script src="/src/assets/js/main.js"></script>
</body>
</html>