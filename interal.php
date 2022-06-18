<?php
    require_once 'date.php';
	class Interval
	{
        public $interval;
        public $date1;
        public $date2;

		public function __construct(Date $date1, Date $date2)
		{
            $this->date1 = new DateTime();
            $this->date2 = new DateTime();
            $this->date1 = $date1;
            $this->date2 = $date2;
		}
		
		public function toDays()
		{
            return date_diff($this->date1, $this->date2)->date;
			
		}
		
		public function toMonths()
		{
			// вернет разницу в месяцах
		}
		
		public function toYears()
		{
			// вернет разницу в годах
		}
		
		public function __toString()
		{
			// выведет результат в виде массива
			// ['years' => '', 'months' => '', 'days' => '']
		}
	}
?>