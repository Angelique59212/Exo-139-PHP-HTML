<hr>
     <h1>Date du jour</h1>
     <form>
 <?php

 function getDateDelay (string $optionText, int $maxinterval = 0, int $start = 1): string {
     $options = ' ';
     for ($i = $start ; $i <= $maxinterval ; $i++) {
         $options .= "
            <option>
                $optionText: $i
            </option> 
         ";
    }
    return $options;
 }?>
       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select name="day" id="day"> <?= getDateDelay('jours', 31) ?></select>

       <label for="month">Month</label>
       <select name="month" id="month"> <?= getDateDelay('mois', 12) ?></select>

       <label for="year">Year</label>
         <select name="year" id="year"> <?= getDateDelay('années', 2022, 1990) ?></select>

     </form>
  </body>
</html>