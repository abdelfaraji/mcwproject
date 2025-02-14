<?php
if(isset($_GET['id']))
 echo $_GET['id'].'<br /><a href="test.php">Retour</a>';
else{
?>
<html>
 <head>
  <script type="text/javascript">
   function Supp(link){
    if(confirm('Confirmer la suppression ?')){
     document.location.href = link;
    }
   }
  </script>
 </head>
 <body>
  <div>
   <?php
    for($i = 1; $i <= 5; $i++){
     echo '<a href="test.php?id='.$i.'" onclick="Supp(this.href); return(false);">Lien '.$i.'</a><br />';
    }
   ?>
  </div>
 </body>
</html>
<?php
}
?>