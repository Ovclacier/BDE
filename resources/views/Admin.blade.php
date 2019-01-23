<!DOCTYPE html>
@extends('HéritageTest')
<html>
	@section('titre')
	<title>Boutique</title>
    @endsection

	@section('contenu')

	<div>
		<div class = "container-fluid container blc text-center">
			<div class="row ble1 ">
            <h1>BDE Administration</h1>
            </div>
            <div class="row ble2 ">
            <div class="col-lg-6 col-md-6 col-sm-12">
            <button type="button">Download to .csv</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <button type="button">Download to .pdf</button>
            </div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 tableau">
            <table class="adm" >
            <?php
            $nombre_de_lignes = 1;

            while ($nombre_de_lignes <= 100)
            {
             echo '<tr><td>'.$nombre_de_lignes;
             echo '</td><td>'.$nombre_de_lignes;
             echo '</td><td>'.$nombre_de_lignes;
             echo '</td><td>'.$nombre_de_lignes;
             echo '</td><td>'.$nombre_de_lignes.'</td></tr>';
             $nombre_de_lignes++;
}
?>
    
            </table>

</table>

			</div>
			
    </div>
@endsection