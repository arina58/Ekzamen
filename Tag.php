<?php
	class Tag
	{
		private $name;
		private $attrs = []; // изначально пустой массив
        private $rem; 
		
		public function __construct($name)
		{
			$this->name = $name;
		}
		
		// Реализуем метод для атрибутов:
		public function setAttr($name, $value)
		{
			$this->attrs[$name] = $value;
			return $this; // возвращаем $this чтобы была цепочка
		}
		
		public function open()
		{
			$name = $this->name;
			$attrsStr = $this->getAttrsStr($this->attrs);
			
			return "<$name$attrsStr>";
		}
		
		public function close()
		{
			$name = $this->name;
			return "</$name>";
		}
		
		private function getAttrsStr($attrs)
		{
			if (!empty($attrs)) {
				$result = '';
				
				foreach ($attrs as $name => $value) {
					$result .= " $name=\"$value\"";
				}
				
				return $result;
			} else {
				return '';
			}
		}
        private function removeAttr($rem){
            unset($this->attrs[$rem]);
			return $this;	
        }
	}
?>