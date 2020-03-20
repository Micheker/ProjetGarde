<?php

	class creche	{
		private $id;
		private $nom;
		private $adresse;
		private $latitude;
		private $longitude;
		private $conn;
		private $tableName = "adressecreche";

		function setId($id) { $this->id = $id; }
		function getId() { return $this->id; }
		function setName($nom) { $this->nom = $nom; }
		function getName() { return $this->nom; }
		function setAddress($adresse) { $this->adresse = $adresse; }
		function getAddress() { return $this->adresse; }
		function setLat($latitude) { $this->latitude = $latitude; }
		function getLat() { return $this->latitude; }
		function setLng($longitude) { $this->longitude = $longitude; }
		function getLng() { return $this->longitude; }

		public function __construct() {
			require_once('inc/PdoAdresse.php');
			$conn = new PdoAdresse;
			$this->conn = $conn->connect();
		}

		public function getCrechesBlankLatLng() {
			$sql = "SELECT * FROM $this->tableName WHERE latitude IS NULL AND longitude IS NULL";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getAllCreches() {
			$sql = "SELECT * FROM $this->tableName";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function updateCrechesWithLatLng() {
			$sql = "UPDATE $this->tableName SET latitude = :latitude, longitude = :longitude WHERE id = :id";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':latitude', $this->latitude);
			$stmt->bindParam(':longitude', $this->longitude);
			$stmt->bindParam(':id', $this->id);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
	}

?>
