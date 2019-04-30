<?php 

	class Operaciones
	{
		private $n;
		private $cadena;
		private $a;
		private $b;
		private $c;

		public function __construct($n,$cadena,$a,$b,$c)
		{
			$this->n=$n;
			$this->cadena=$cadena;
			$this->a=$a;
			$this->b=$b;
			$this->c=$c;
		}

		public function CalcularFibonaci()
		{
			$x = 0;    
			$y = 1; 
			for($i=0;$i<=$this->n;$i++)    
			{    
    			$z = $x + $y;    
   				echo $z."<br/>";         
    			$x=$y;       
    			$y=$z;     
			}
		}//Calcular fibonaci
		public function CalcularMayor()
		{		
			if(($this->a > $this->b) and ($this->a > $this->c)) 
			{ 
				echo "$this->a es mayor que $this->b y $this->c";
			}
			else 
			{
				if(($this->b>$this->a) and ($this->b>$this->c))
	 				{ 
	 					echo "$this->b es mayor que $this->a y $this->c";
	 				}
				else 
				{
					echo "$this->c es mayor que $this->a y $this->b";
				}
	 		}	

		}//Calcula el mayor de 3 numeros
		public function Piramide()
		{
 			$caden=strlen("$this->cadena");
			$k=($caden/2)-1;
 			for($j=1;$j<=$caden+1;$j++)
 			{ 
				echo '<center>'.substr("$this->cadena",$k,$j),"<br><br>".'</center>';
				if($k== -$k)
				{
					$k=0;
				}
				else
				{
					$k=$k-1;
				}
				$j=$j+1;
			}
		}
	}

 ?>