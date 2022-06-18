<?php
	class Tag
	{
		private $name;
		
		public function __construct($name)
		{
			$this->name = $name;
		}
		
		// Выводим открывающую часть тега:
		public function open()
		{
			$name = $this->name;
			return "<$name>";
		}
        // Выводим закрывающую часть тега:
		public function close()
		{
			$name = $this->name;
			return "</$name>";
		}
	}
?>