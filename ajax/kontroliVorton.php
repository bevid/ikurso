<?php
include "../util.php";
$vorto_id=isset($_GET["vorto_id"])?$_GET["vorto_id"]:"";
$persono_id=isset($_GET["persono_id"])?$_GET["persono_id"]:"";
$lernantaRespondo=isset($_GET["respondo"])?$_GET["respondo"]:"";

function getInterval($nombrilo) {
	if ($nombrilo==1) {
		return 1;
	} elseif ($nombrilo==2) {
		return 6;
	} else {
		return 2*(getInterval($nombrilo-1));
	}
}

$query="SELECT fr,eo FROM vortoj where id='".$vorto_id."'";
$result = $bdd->query($query);
$row = $result->fetch();
$bonaRespondo = $row["eo"];
$francaVorto = $row["fr"];

if (strcasecmp($lernantaRespondo,$bonaRespondo)==0) { // on compare sans se soucier de la case
	// on a une bonne réponse, on incrémente le nombre de bonne réponse dans la table personoj_vortoj et on calcule la prochaine etape
	$query="SELECT nombrilo FROM personoj_vortoj where vorto_id='".$vorto_id."' and persono_id='".$persono_id."'";
	$result = $bdd->query($query);
	$nombrilo = $result->fetch()["nombrilo"];
	$query2 = "update personoj_vortoj set nombrilo=nombrilo+1, venontaFojo=DATE_ADD(venontaFojo,INTERVAL ".getInterval($nombrilo+1)." DAY) where vorto_id='".$vorto_id."' and persono_id='".$persono_id."'";
	$bdd->exec($query2);
	$respondo["mesagxo"] = "ok";
	echo json_encode($respondo);
	exit();
} else {
	// on stocke dans le protokolo les erreurs pour pouvoir aider au besoin
	protokolo($persono_id,"MEMORILO","Pour : ".$francaVorto." l'élève a traduit : ".$francaVorto." au lieu de ".$bonaRespondo);
	$respondo["mesagxo"] = "ko";
	$respondo["eraroj"]="La bonne réponse était&nbsp;<b>".$bonaRespondo."</b>";
	$respondo["recapitulatif"]="<b>".$francaVorto."</b>&nbsp;se dit&nbsp;<b>".$bonaRespondo."</b>";
	echo json_encode($respondo);
	exit();
}
?>
