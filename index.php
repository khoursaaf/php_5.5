<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
      <p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
      <?php $department =
      ['80' => 'Somme',
       '02' => 'Aisne',
       '59' => 'Nord',
       '62' => 'Pas-De-Calais'
     ];
      foreach ($department as $key => $value) {
      ?>
      <p>Le département <?php echo $key;?> correspond à <?php echo $value; }?></p>
    </body>
</html>
