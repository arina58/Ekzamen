<?php
	class Tag
	{
		private $name;
        private $attrs;
		
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
	}
?>