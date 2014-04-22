<?php
class reporte{
		private $ser;
		private $usu;
		private $pas;
		private $bd;  
		private $mysqli;
		
		public function __construct($ser,$usu,$pas,$bd){
			$this->ser=$ser;
			$this->usu=$usu;
			$this->pas=$pas;
			$this->bd=$bd;
		}
		private function conectar(){
			$this->mysqli = new MySQLi($this->ser,$this->usu,$this->pas,$this->bd);
			if($this->mysqli->connect_errno){
				die("Error al Conectarse a la BD");
			}
		}
		private function desconectar(){
			$this->mysqli->close(); // mysqli_close($this->id_con);
		}
		public function listarVales(){
		$this->conectar();
		echo "<table id='tabla1' cellspacing='0'>";
		echo "<caption>Listado de Vales</caption>";
		echo "<tr>";
			echo "<th>Numero Vale</th>";
			echo "<th>Fecha Ingreso</th>";
			echo "<th>Fecha Vale</th>";
			echo "<th>Chofer</th>";
			echo "<th>Dueño</th>";
			echo "<th>Total Chofer</th>";
			echo "<th>Total Dueño</th>";
			echo "<th>Total Ganancia</th>";
		echo "</tr>";
		$sql = "SELECT vale.num_val, vale.fec_ing, vale.fec_val ,b.nom_cho as 'dueno',a.nom_cho as 'chofer' ,vale.tot_cho_val, vale.tot_mov_val, vale.tot_gan_val
FROM vale, chofer b, chofer a
WHERE a.id_cho = vale.cho_val
AND b.id_cho = vale.due_val";
		$ejecutar = $this->mysqli->query($sql);
		while($rs = $ejecutar->fetch_array(MYSQL_BOTH)){
		echo "<tr>";
			echo "<td>".$rs[0]."</td>";
			echo "<td>".$rs[1]."</td>";
			echo "<td>".$rs[2]."</td>";
			echo "<td>".$rs[3]."</td>";
			echo "<td>".$rs[4]."</td>";
			echo "<td>".$rs[5]."</td>";
			echo "<td>".$rs[6]."</td>";
			echo "<td>".$rs[7]."</td>";
			
		echo "</tr>";			
		}
		$this->desconectar();
	}
	public function listarChofer(){
		$this->conectar();
		echo "<table id='tabla1' cellspacing='0'>";
		echo "<caption>Listado de Vales</caption>";
		echo "<tr>";
			echo "<th>Rut_chofer</th>";
			echo "<th>Nombre</th>";
			echo "<th>Apellido Paterno</th>";
			echo "<th>Apellido Materno</th>";
			echo "<th>Dirección</th>";
			echo "<th>Telefono</th>";
			echo "<th>Correo Electrónico</th>";
		echo "</tr>";
		$sql = "select * from chofer";
		$ejecutar = $this->mysqli->query($sql);
		while($rs = $ejecutar->fetch_array(MYSQL_BOTH)){
		echo "<tr>";
			echo "<td>".$rs[1]."</td>";
			echo "<td>".$rs[2]."</td>";
			echo "<td>".$rs[3]."</td>";
			echo "<td>".$rs[4]."</td>";
			echo "<td>".$rs[5]."</td>";
			echo "<td>".$rs[6]."</td>";
			echo "<td>".$rs[7]."</td>";
			
		echo "</tr>";			
		}
		$this->desconectar();
	}
	public function listarEmpresa(){
		$this->conectar();
		echo "<table id='tabla1' cellspacing='0'>";
		echo "<caption>Listado de Vales</caption>";
		echo "<tr>";
			echo "<th>Rut Empresa</th>";
			echo "<th>Razon Social</th>";
			echo "<th>Dirección</th>";
			echo "<th>Teléfono</th>";
		echo "</tr>";
		$sql = "select * from zulu";
		$ejecutar = $this->mysqli->query($sql);
		while($rs = $ejecutar->fetch_array(MYSQL_BOTH)){
		echo "<tr>";
			echo "<td>".$rs[1]."</td>";
			echo "<td>".$rs[2]."</td>";
			echo "<td>".$rs[3]."</td>";
			echo "<td>".$rs[4]."</td>";
			
		echo "</tr>";			
		}
		$this->desconectar();
	}
	public function calculos($sql){
		$this->conectar();
		$ejecutar = $this->mysqli->query($sql);
		if($rs = $ejecutar->fetch_array(MYSQL_BOTH)){
			$this->desconectar();
			return $rs[0];			
		}	
		$this->desconectar();
		return 0;	
	}
}
?>