<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nombre = filter_var(htmlspecialchars($_POST['nombre']), FILTER_SANITIZE_STRING);
		$restaurant = filter_var(htmlspecialchars($_POST['restaurant']), FILTER_SANITIZE_STRING);
		$telefono = filter_var(htmlspecialchars($_POST['telefono']), FILTER_SANITIZE_NUMBER_INT);
		$correo = filter_var(htmlspecialchars($_POST['correo']), FILTER_SANITIZE_EMAIL);

		$errores = '';

		$subjet = "Hola me llamo: " .$nombre .'<br>' ."Tengo un restaurante llamado: " .$restaurant ."<br>" ."Este es mi correo: $mail y mi telefono $telefono";

		echo $subject;

	}


	require_once './index.view.php';
?>
