<?php
class Motos
{
	private $detalle;
	private $marca;
	private $categoria;
	private $ref;
	private $pre;
	private $mot;
	private $cili;
	private $pot;
	private $trans;
	private $cicl;
	private $refri;
	private $cilin;
	private $regimen;
	private $arr;
	private $trac;
	private $dist;
	private $rued;
	private $ruet;
	private $frend;
	private $frent;
	private $alt;
	private $pes;
	private $cap;
	private $comp;
	private $susd;
	private $sust;
	private $enc;
	private $caj;
	private $Conexion;

	
	public function setDetalle($detalle)
	{
		$this->detalle=$detalle;
	}
	
	public function getDetalle()
	{
		return ($this->detalle);
	}

	public function setMarca($marca)
	{
		$this->marca=$marca;
	}
	
	public function getMarca()
	{
		return ($this->marca);
	}

	public function setCategoria($categoria)
	{
		$this->categoria=$categoria;
	}
	
	public function getCategoria()
	{
		return ($this->categoria);
	}

	public function setRef($ref)
	{
		$this->ref=$ref;
	}
	
	public function getRef()
	{
		return ($this->ref);
	}
	
	public function setPre($pre)
	{
		$this->pre=$pre;
	}
	
	public function getPre()
	{
		return ($this->pre);
	}
	
	public function setMot($mot)
	{
		$this->mot=$mot;
	}
	
	public function getMot()
	{
		return ($this->mot);
	}
	
	public function setCili($cili)
	{
		$this->cili=$cili;
	}
	
	public function getCili()
	{
		return ($this->cili);
	}
	
	public function setPot($pot)
	{
		$this->pot=$pot;
	}
	
	public function getPot()
	{
		return ($this->pot);
	}

	public function setTrans($trans)
	{
		$this->trans=$trans;
	}
	
	public function getTrans()
	{
		return ($this->trans);
	}

	public function setCicl($cicl)
	{
		$this->cicl=$cicl;
	}
	
	public function getCicl()
	{
		return ($this->cicl);
	}

	public function setRefri($refri)
	{
		$this->refri=$refri;
	}
	
	public function getRefri()
	{
		return ($this->refri);
	}

	public function setCilin($cilin)
	{
		$this->cilin=$cilin;
	}
	
	public function getCilin()
	{
		return ($this->cilin);
	}
	
	public function setRegimen($regimen)
	{
		$this->regimen=$regimen;
	}
	
	public function getRegimen()
	{
		return ($this->regimen);
	}

	public function setArr($arr)
	{
		$this->arr=$arr;
	}
	
	public function getArr()
	{
		return ($this->arr);
	}

	public function setTrac($trac)
	{
		$this->trac=$trac;
	}
	
	public function getTrac()
	{
		return ($this->trac);
	}

	public function setDist($dist)
	{
		$this->dist=$dist;
	}
	
	public function getDist()
	{
		return ($this->dist);
	}

	public function setRued($rued)
	{
		$this->rued=$rued;
	}
	
	public function getRued()
	{
		return ($this->rued);
	}

	public function setRuet($ruet)
	{
		$this->ruet=$ruet;
	}
	
	public function getRuet()
	{
		return ($this->ruet);
	}
	
	public function setFrend($frend)
	{
		$this->frend=$frend;
	}
	
	public function getFrend()
	{
		return ($this->frend);
	}
	
	public function setFrent($frent)
	{
		$this->frent=$frent;
	}
	
	public function getFrent()
	{
		return ($this->frent);
	}
	
	public function setAlt($alt)
	{
		$this->alt=$alt;
	}
	
	public function getAlt()
	{
		return ($this->alt);
	}
	
	public function setPes($pes)
	{
		$this->pes=$pes;
	}
	
	public function getPes()
	{
		return ($this->pes);
	}
	
	public function setCap($cap)
	{
		$this->cap=$cap;
	}
	
	public function getCap()
	{
		return ($this->cap);
	}
	
	public function setComp($comp)
	{
		$this->comp=$comp;
	}
	
	public function getComp()
	{
		return ($this->comp);
	}
	
	public function setSusd($susd)
	{
		$this->susd=$susd;
	}
	
	public function getSusd()
	{
		return ($this->susd);
	}
	
	public function setSust($sust)
	{
		$this->sust=$sust;
	}
	
	public function getSust()
	{
		return ($this->sust);
	}
	
	public function setEnc($enc)
	{
		$this->enc=$enc;
	}
	
	public function getEnc()
	{
		return ($this->enc);
	}
	
	public function setCaj($caj)
	{
		$this->caj=$caj;
	}
	
	public function getCaj()
	{
		return ($this->caj);
	}
	
	
	
	public function crearMoto($detalle,$marca,$categoria,$ref,$pre,$mot,$cili,$pot,$trans,$cicl,$refri,$cilin,$regimen,$arr,$trac,$dist,$rued,$ruet,$frend,$frent,$alt,$pes,$cap,$comp,$susd,$sust,$enc,$caj)
	{
		$this->detalle=$detalle;
		$this->marca=$marca;
		$this->categoria=$categoria;
		$this->ref=$ref;
		$this->pre=$pre;
		$this->mot=$mot;
		$this->cili=$cili;
		$this->pot=$pot;
		$this->trans=$trans;
		$this->cicl=$cicl;
		$this->refri=$refri;
		$this->cilin=$cilin;
		$this->regimen=$regimen;
		$this->arr=$arr;
		$this->trac=$trac;
		$this->dist=$dist;
		$this->rued=$rued;
		$this->ruet=$ruet;
		$this->frend=$frend;
		$this->frent=$frent;
		$this->alt=$alt;
		$this->pes=$pes;
		$this->cap=$cap;
		$this->comp=$comp;
		$this->susd=$susd;
		$this->sust=$sust;
		$this->enc=$enc;
		$this->caj=$caj;		
	}
	
	public function agregarMoto()
	{	
		$this->Conexion=Conectarse();
		$sql="INSERT INTO detalles(id_detalle,id_marca,id_category,referencia,precio,motor,cilindrada,potencia,transmision,ciclo,refrigeracion,cilindros,regimen_potencia,arranque,traccion,distancia_ejes,rueda_delantera,rueda_trasera,freno_delantero,freno_trasero,altura_asiento,peso,capacidad_deposito,compresion,suspension_D,suspension_T,encendido,caja_vel)
        values ('$this->detalle','$this->marca','$this->categoria','$this->ref','$this->pre','$this->mot','$this->cili','$this->pot','$this->trans','$this->cicl','$this->refri','$this->cilin','$this->regimen','$this->arr','$this->trac','$this->dist','$this->rued','$this->ruet','$this->frend','$this->frent','$this->alt','$this->pes','$this->cap','$this->comp','$this->susd','$this->sust','$this->enc','$this->caj')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	// public function modificarProducto()
	// {	
	// 	$this->Conexion=Conectarse();
	// 	$sql="UPDATE producto SET prodid='$this->idProducto',provid='$this->idProveedor',prodmarca='$this->marca',prodgenero='$this->genero',prodprecio='$this->precio',prodcolor='$this->color',prodescripcion='$this->descripcion' WHERE prodid = '$_POST[prodid]'";
	// 	$resultado=$this->Conexion->query($sql);
	// 	$this->Conexion->close();
	// 	return $resultado;	
	// }

	// public function eliminarProducto(){
	// 	$this->Conexion=Conectarse();
	// 	$sql = "DELETE FROM producto WHERE prodid = '$_GET[prodid]' ";
	// 	$resultado=$this->Conexion->query($sql);
	// 	$this->Conexion->close();
	// 	return $resultado;
	// }

	// public function consultarProducto(){
	// 	$this->Conexion=Conectarse();
	// 	$sql = "SELECT * FROM producto";
	// 	$resultado=$this->Conexion->query($sql);
	// 	$this->Conexion->close();
	// 	return $resultado;
	// }

	// public function consultarProductoDama(){
	// 	$this->Conexion=Conectarse();
	// 	$sql = "SELECT * FROM producto WHERE prodgenero='femenino'";
	// 	$resultado=$this->Conexion->query($sql);
	// 	$this->Conexion->close();
	// 	return $resultado;
	// }

	// public function consultarProductoCaballero(){
	// 	$this->Conexion=Conectarse();
	// 	$sql = "SELECT * FROM producto WHERE prodgenero='Masculino'";
	// 	$resultado=$this->Conexion->query($sql);
	// 	$this->Conexion->close();
	// 	return $resultado;
	// }

	// public function consultarIdProducto(){
	// 	$this->Conexion=Conectarse();
	// 	$sql = "SELECT * FROM producto WHERE prodid='$_GET[id]'";
	// 	$resultado=$this->Conexion->query($sql);
	// 	$this->Conexion->close();
	// 	return $resultado;
	// }

	
}

?>