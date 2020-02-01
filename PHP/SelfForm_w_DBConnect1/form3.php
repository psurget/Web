<html>
	<head>
	<style type="text/css">
                table{border-style:double;border-width:3px; border-color:yellow; background-color:blue  ; color:yellow; padding:0;width:50%;}
                th, td{border:1px solid black; padding:2%;margin:0;}
        </style>
	</head>
	<body>
		
		<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">				
			<p>					
				<input type="submit"  value="Afficher tous les employes" name="afficher"/>

			</p>			
		</form>
		<br>
		<?php
			
			if(isset($_POST['afficher'])){
				include("conn.php")  ;
				$idcom=connexobjet("gestionpersonnel","myparam")  ; 
			   $requete="select matricule as Matricule,
								   nom as Nom, prenom as 'Prénom', sexe as Sexe,
									etatCivil as 'État Civil', salaire as Salaire
									 from employe";
			   $result= $idcom->query($requete);
				   if(!$result){
					   echo $idcom->error;
				   }else{
					   $nbEmp=$result->num_rows;
					   $titre= $result->fetch_object();
   
				   
				   }
   
				echo "<h3>LA LISTE D'EMPLOYES</h3>";
				echo "<table><tr>";
				foreach($titre as $nomField=>$val){
					echo "<th>".htmlentities($nomField)."</th>";
				}
				$result->data_seek(0);
				while($ligne=$result->fetch_array(MYSQLI_NUM)){
					echo "<tr>";
					foreach($ligne as $valeur){
							echo "<td>".$valeur."</td>";
					}
					echo "<tr/>";
				}
			
			echo "</table>";
		}

		?>
		
	
	</body>
</html>