<?php
//!FILE: character.class.inc.php

class character {

	function __construct($whom, $array) {
		switch ($whom) {
			case 'morrissey':
				$this->speech = 'frankly';
				$this->position();
				$this->desire = 'leave';
				$this->status = 'sickening wreck';
				$this->proximity = '21st Century';
				$this->speed = fast;
				if (isset($array['goals']) {
					$this->history = $this->go_down($array['goals']);
				}
				if ($array['fame_status'] == true) {
					$this->brain = $this->hideous_tricks();
				}
				$this->fulfillment = 'Christmas Cards' . 'The Mentally Ill';
				$this->desires = 'live' . ' love';
				if ($array['something'] == 'ashamed') {
					$this->catch = true;
				}
				break;
			case 'shankly':
				$this->miss_morrissey = false;
				$this->understand_morrissey = true;
				$this->poety = 'bloody awful';
				$this->ass_pain = 'flatulent';
				$this->morrissey = $this->money
				break;
		}
	}
	
	function position() {
		$this->way = 'paid';
		$this->soul = 'corroded';
	}

	function go_down($goals) {
		if ($goals == 'musical' || $goals == 'celluloid') {
			return true;
		} else {
			return false;
		}
	}

	function hideous_tricks() {
		if ($this->rather == 'holy' || $this->rather == 'righteous') {
		return 'famous';
		}
	}
}
