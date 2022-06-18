<?php
	class Date
	{
        public $date;
		public $day;
		public $mon;
		public $year;

		public function __construct($date = null)
		{
			if ($date == null){
				$this->date = date('Y-m-d');
			}
			else{
				$this->date = $date;
			}
			$this->day = date('d', strtotime("$date"));
			$this->mon = date('m', strtotime("$date"));
			$this->year = date('Y', strtotime("$date"));
		}
		
		public function getDay()
		{
			return $this->day;
		}
		
		public function getMonth($lang = null)
		{
			return $this->mon;
		}
		
		public function getYear()
		{
            return $this->year;
		}
		
		public function getWeekDay($lang = null)
		{
			if ($lang == 'ru'){
				return 'среда';
			}
			elseif ($lang == 'en'){
				return 'wednesday';
			}
			else{
				return '3';
			}
		}
		
		public function addDay($value)
		{
			// добавляет значение $value к дню
            return date("Y-m-d", strtotime($this->date.'+'. $value.'days'));
			
		}
		
		
		public function subDay($value)
		{
			// отнимает значение $value от дня
			$this->date =  date("Y-m-d", strtotime($this->date.'-'. $value.'days'));
			return $this;
		}
		
		public function addMonth($value)
		{
			// добавляет значение $value к месяцу
            return date("Y-m-d", strtotime($this->date.'+'. $value.'month'));
			 
		}
		
		public function subMonth($value)
		{
			// отнимает значение $value от месяца
            return date("Y-m-d", strtotime($this->date.'-'. $value.'month'));
			 
		}
		
		public function addYear($value)
		{
			// добавляет значение $value к году
            return date("Y-m-d", strtotime($this->date.'+'. $value.'year'));
			 
		}
		
		public function subYear($value)
		{
			// отнимает значение $value от года
            return date("Y-m-d", strtotime($this->date.'-'. $value.'year'));
			 
		}
		
		public function format($format)
		{
			return $this->date->format($format);
		}
		
		public function __toString()
		{
			return $this->date->format('Y-m-d');
		}
		
	}
?>