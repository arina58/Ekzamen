<?php
    require_once 'Tag.php';
    class Image extends Tag
	{
		public function __construct()
		{
			$this->setAttr('src', ''); // установим атрибут src
			$this->setAttr('alt', '');
            $this->setAttr('width', '');
            $this->setAttr('height', ''); // установим атрибут alt
			
			parent::__construct('img'); // вызовем конструктор родителя
		}

        public function __toString()
		{
			return parent::open(); // вызываем метод родителя
		}
	}
?>