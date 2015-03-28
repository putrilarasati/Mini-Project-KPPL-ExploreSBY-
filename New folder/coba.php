<?php
class metode{
public$encrypt;
public$encrypt2;
public$encrypt3;
public$decrypt;
public$length;
public$i;
public$e;
public$chr;
public$chr2;
public$hex;

function encryption($data){
	$this->encrypt= $data;
	$this->length= strlen($this->encrypt);
	$this->encrypt2="";
	$this->encrypt3="";
	$this->hex="";
	for ($this->i=0; $this->i < $this->length; $this->i++){
	
	
	$this->chr[$this->length-$this->i]=substr($this->encrypt, $this->i,1);
	//if ($this->chr[$this->length-$this->i]=="a"){
	//	$this->chr[$this->length-$this->i]="p";
	//}
	//else if ($this->chr[$this->length-$this->i]=="i"){
	//	$this->chr[$this->length-$this->i]="u";
	//}
	//else if ($this->chr[$this->length-$this->i]=="u"){
	//	$this->chr[$this->length-$this->i]="t";
	//}
	//else if ($this->chr[$this->length-$this->i]=="e"){
	//	$this->chr[$this->length-$this->i]="r";
	//}
	//else if ($this->chr[$this->length-$this->i]=="o"){
	//	$this->chr[$this->length-$this->i]="i";
	//}
	
	
    
	}
	
			
	for ($this->i=1; $this->i <= $this->length; $this->i++){
		$this->encrypt2.=$this->chr[$this->i];
	}
$this->encrypt2=bin2hex($this->encrypt2);
$this->length= strlen($this->encrypt2);
if ($this->length%2==0){
	$this->e=($this->length)/2;
	for ($this->i=1; $this->i <= $this->length; $this->i++){
		if($this->i > $this->e){
		$this->chr2[$this->i-$this->e]= substr($this->encrypt2, $this->i-1,1);
		}
		else {
			$this->chr2[$this->i+$this->e]=substr($this->encrypt2, $this->i-1,1);
		}
	}

	
for ($this->i=1; $this->i <= $this->length; $this->i++){
		$this->encrypt3.=$this->chr2[$this->i];
	}	
}

else {
	$this->encrypt3=$this->encrypt2;
}	
	
	
//print($this->encrypt2);
//print("<br>");
//print($this->encrypt3);	
return $this->encrypt3;
}


function decryption($data){
$this->decrypt2="";
$this->decrypt3="";
$this->decrypt= $data;
$this->length= strlen($this->decrypt);;
if ($this->length%2==0){
	$this->e=($this->length)/2;
	for ($this->i=1; $this->i <= $this->length; $this->i++){
		if($this->i > $this->e){
		$this->chr2[$this->i-$this->e]= substr($this->decrypt, $this->i-1,1);
		}
		else {
			$this->chr2[$this->i+$this->e]=substr($this->decrypt, $this->i-1,1);
		}
	}

	
for ($this->i=1; $this->i <= $this->length; $this->i++){
		$this->decrypt2.=$this->chr2[$this->i];
	}	
}
else {
	$this->decrypt2=$this->decrypt;
}
$this->decrypt2=hex2bin($this->decrypt2);
$this->length= strlen($this->decrypt2);
for ($this->i=0; $this->i < $this->length; $this->i++){
	
	
$this->chr[$this->length-$this->i]=substr($this->decrypt2, $this->i,1);
	

}
for ($this->i=1; $this->i <= $this->length; $this->i++){
		$this->decrypt3.=$this->chr[$this->i];
	}




	
	

//print($this->decrypt3);
return $this->decrypt3;
}
}

//$object1 = new metode();
//$object1 -> encryption("indonesiatanahairkutanahtumpahdarahku");
//print("<br>");
//$object2 = new metode();
//$object2 -> decryption($object1->encrypt3);
?>