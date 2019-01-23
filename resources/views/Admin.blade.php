<!DOCTYPE html>
@extends('HéritageTest')
<html>
	@section('titre')
	<title>Evenement</title>

	
	@section('contenu')

	<div>
		<div class = "container-fluid container blc text-center">
			<div class="row ble1 ">
				<h1 class="headed">Fiche Evenement</h1>
            </div>
            <div class="row ble2 ">
            <div class="col-lg-6 col-md-6 col-sm-12">
            <button type="button">Download to .csv</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <button type="button">Download to .pdf</button>
            </div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
            <table class="adm"border=1 width=100% cellspacing=1 cellpadding=1 >
            <?php
            $nombre_de_lignes = 1;

            while ($nombre_de_lignes <= 100)
            {
             echo '<tr><th>'.$nombre_de_lignes;
             echo '</th><td>'.$nombre_de_lignes;
             echo '</td><td>'.$nombre_de_lignes;
             echo '</td><td>'.$nombre_de_lignes;
             echo '</td><td>'.$nombre_de_lignes.'</td></tr>';
             $nombre_de_lignes++;
}
?>
            <tr><th>Fuck it</th><td>cellule1</td><td>cellule 2</td><td>cellule1</td><td>cellule1</td></tr>
            <tr><th>Cellules vides</th><td></td><td></td></tr>
            <tr><th>cellules du bas</th><td></td><td>cellule 6</td></tr>
            </table>

</table>

			</div>
			
    </div>
        <a class="descIdee">sfvsfdsfdsf</a>		
        <a>sfvsfdsfdsf</a>	
@endsection