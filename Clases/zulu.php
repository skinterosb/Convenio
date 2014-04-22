<?php
	class zulu{
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
		/*Validaciones*/
		public function verificar($sql){
			$this->conectar();
			$ejecutar = $this->mysqli->query($sql);
			if($this->mysqli->affected_rows > 0){
				return 1;
			}else{
				return 0;	
			}
			
		}
		/*Funciones para mantendor Zulu*/
		public function registrarZulu($rut,$rsocial,$ubi,$fono){
			$this->conectar();
			$ejecutar = $this->mysqli->query("insert into zulu values(NULL,'$rut','$rsocial','$ubi','$fono')");
			if($this->mysqli->affected_rows > 0){
				echo "<div id='mensaje'>Se Registro Correctamente Zulu</div>";
			}else{
				echo "<div id='mensaje'>Error al registrar Zulu</div>";
			}
			$this->desconectar();
		}
		public function filtrarZulu($rut_zulu){
			$this->conectar();
			$datos = array();
			$sql = "select * from zulu where rut_zulu like '%$rut_zulu%'";
			$ejecutar = $this->mysqli->query($sql);
			while($rs = $ejecutar->fetch_array(MYSQL_BOTH)){
				$datos[] = array("value" =>$rs[1],
					"rsocial" =>$rs[2],
					"ubi" => $rs[3],
					"fono" => $rs[4]
				);			
			}	
			return $datos;
			$this->desconectar();
			
		}
	/*Funciones para Mantenedor Chofer*/	
		public function ingresarChofer($rut_cho,$nom_cho,$app_cho,$apm_cho,$dir_cho,$fon_cho,$ema_cho){
			$this->conectar();
			$ejecutar = $this->mysqli->query("insert into chofer values(NULL,'$rut_cho','$nom_cho','$app_cho','$apm_cho','$dir_cho','$fon_cho','$ema_cho')");
			if($this->mysqli->affected_rows > 0){
				echo "<div id='mensaje'>Nuevo Empleado Ingresado</div>";
			}else{
				echo "<div id='mensaje'>Error al registrar Zulu</div>";
			}
			$this->desconectar();
		}
		public function modificarChofer($rut_cho,$dir_cho,$fon_cho,$ema_cho){
			$this->conectar();
			$ejecutar = $this->mysqli->query("update chofer set dir_cho='$dir_cho', fon_cho='$fon_cho', ema_cho='$ema_cho' where rut_cho='$rut_cho'");
			if($this->mysqli->affected_rows > 0){
				echo "<div id='mensaje'>Se Ha Modificado La Información Del Chofer</div>";
			}else{
				echo "<div id='mensaje'>Error Al Modificar</div>";
			}
			$this->desconectar();
		}
		public function eliminarChofer($rut_cho){
			$this->conectar();
			$sql = "delete from chofer where rut_cho = '$rut_cho'";
			$ejecutar = $this->mysqli->query($sql);	
			if($this->mysqli->affected_rows > 0){
				echo "Se Elimino Correctamente";
			}else{
				echo "Error al Eliminar";
			}	
			$this->desconectar();
		}
		public function filtrarChofer($rut_cho){
			$this->conectar();
			$datos = array();
			$sql = "select * from chofer where rut_cho like '%$rut_cho%'";
			$ejecutar = $this->mysqli->query($sql);
			while($rs = $ejecutar->fetch_array(MYSQL_BOTH)){
				$datos[] = array("value" =>$rs[1],
					"nom_cho" =>$rs[2],
					"app_cho" => $rs[3],
					"apm_cho" => $rs[4],
					"dir_cho" => $rs[5],
					"fon_cho" => $rs[6],
					"ema_cho" => $rs[7]
				);			
			}	
			return $datos;
			$this->desconectar();
			
		}
		/*Funciones mantenedor Movil*/
		public function ingresarMovil($num_mov,$due_mov,$cho_mov){
			$this->conectar();
			$ejecutar = $this->mysqli->query("insert into movil values(NULL,'$num_mov','$due_mov','$cho_mov',1)");
			if($this->mysqli->affected_rows > 0){
				echo "<div id='mensaje'>Nuevo Movil Ingresado</div>";
			}else{
				echo "<div id='mensaje'>Error al registrar Movil</div>";
			}
			$this->desconectar();
		}
		public function cargarComboChofer($id){
			$this->conectar();
			$ejecutar = $this->mysqli->query("select id_cho, nom_cho, app_cho from chofer");
			while($rs = $ejecutar->fetch_array(MYSQL_BOTH)){
				if($id == $rs[0]){
					echo "<option value='".$rs[0]."' SELECTED>".$rs[1]."  ".$rs[2]."</option>";
				}else{
					echo "<option value='".$rs[0]."'>".$rs[1]."  ".$rs[2]."</option>";
				}
			}
	
			$this->desconectar();

		}

	/*Funciones Usuarios Administradores*/
	public function ingresarUsuario_admin($log_user,$pas_user,$nom_user,$ape_user,$cel_user,$ema_user){
			$this->conectar();
			$ejecutar = $this->mysqli->query("insert into user_admin values(NULL, '$log_user','$pas_user','$nom_user','$ape_user','$cel_user','$ema_user')");
			if($this->mysqli->affected_rows > 0){
				echo "<div id='mensaje'>Nuevo Usuario Ingresado</div>";
			}else{
				echo "<div id='mensaje'>Error al registrar Zulu</div>";
			}
			$this->desconectar();
		}
		public function filtrarUserAdmin($log_user){
			$this->conectar();
			$datos = array();
			$sql = "select * from user_admin where log_user like '%$log_user%'";
			$ejecutar = $this->mysqli->query($sql);
			while($rs = $ejecutar->fetch_array(MYSQL_BOTH)){
				$datos[] = array("value" =>$rs[1],
					"pas_user" =>$rs[2],
					"nom_user" => $rs[3],
					"ape_user" => $rs[4],
					"cel_user" => $rs[5],
					"ema_user" => $rs[6]
				);			
			}	
			return $datos;
			$this->desconectar();
			
		}
		/*funciones de vale*/
		public function cargarComboEmpresa(){
			$this->conectar();
			$ejecutar = $this->mysqli->query("select id_zulu, rsocial_zulu from zulu");
			while($rs = $ejecutar->fetch_array(MYSQL_BOTH)){
					echo "<option value='".$rs[0]."'>".$rs[1]."  ".$rs[2]."</option>";
			}
	
			$this->desconectar();

		}
		public function filtrarMovil($id_mov){
			$this->conectar();
			$datos = array();
			$sql = "SELECT movil.id_mov, chofer.nom_cho, chofer.app_cho, chofer.apm_cho, chofer.id_cho FROM chofer, movil WHERE (movil.due_mov = chofer.id_cho) and (movil.num_mov = '$id_mov')";
			$ejecutar = $this->mysqli->query($sql);
			if($rs = $ejecutar->fetch_array(MYSQL_BOTH)){
				$this->desconectar();
				echo $rs[1] ."-". $rs[2]."-". $rs[3]."-". $rs[4]."-";		
			}else{
				echo 0;
			}
		}
		public function filtrarChoferVale($nom_cho){
			$this->conectar();
			$datos = array();
			$sql = "select id_cho, nom_cho, app_cho, apm_cho from chofer where (UPPER(nom_cho) like UPPER('%$nom_cho%')) or (UPPER(app_cho) like UPPER('%$nom_cho%')) or (UPPER(apm_cho) like UPPER('%$nom_cho%'))";
			$ejecutar = $this->mysqli->query($sql);
			while($rs = $ejecutar->fetch_array(MYSQL_BOTH)){
				$datos[] = array("value" =>$rs[1] ." ". $rs[2]." ".$rs[3],
					"id_cho" =>$rs[0],
				);			
			}	
			return $datos;
			$this->desconectar();
			
		}
		public function ingresarVale($fec_ing,$fec_val,$mov_val,$cho_val,$due_val,$num_val,$zul_val,$rec_val,$esp_val,$bru_val){
			$this->conectar();
			/**Realizar insert pero dejando en blanco las casillas que pertenecen al cierre de mes */
			$ejecutar = $this->mysqli->query("insert into vale values(null,'$fec_ing','$fec_val','$mov_val','$cho_val','$due_val','$num_val','$zul_val','$rec_val','$esp_val','$bru_val',null,null,null,null,0,1)");
			/*$ejecutar = $this->mysqli->query("insert into vale values(NULL,'$fec_ing','$fec_val','$mov_val','$cho_val','$due_val','$num_val','$zul_val','$rec_val','$esp_val','$tot_cho_val','$tot_mov_val','$tot_gan_val')");*/
			if($this->mysqli->affected_rows > 0){
				echo "<div id='mensaje'>Nuevo Vale Ingresado</div>";
			}else{
				echo "<div id='mensaje'>Error al ingresar Vale</div>";
			}
			$this->desconectar();
		}
}
?>