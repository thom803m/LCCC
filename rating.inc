<?php
	function CalcLorain($credits){
		$rateInLorain=720.20;
		$lorainResident=144.04;
		$lorain=$credits*$lorainResident;
		if ($credits >= 13 && $credits <= 18){
			$lorain=1872.52;
		}
		else if ($credits > 18){
			$lorain=$lorain-$rateInLorain;
		}
		else{};
		return $lorain;
	}

	function CalcCounty($credits){
		$rateInCounty=846.10;
		$nonLorainResident=169.22;
		$county=$credits*$nonLorainResident;
		if ($credits >= 13 && $credits <= 18){
			$county=2199.86;
		}
		else if ($credits > 18){
			$county=$county-$rateInCounty;
		}
		else{};
		return $county;
	}

	function CalcState($credits){
		$rateInState=1603.95;
		$nonStateResident=320.79;
		$state=$credits*$nonStateResident;
		if ($credits >= 13 && $credits <= 18){
			$state=4170.27;
		}
		else if ($credits > 18){
			$state=$state-$rateInState;
		}
		else{};
		return $state;
	}

	function CalculateTuition($credits, $resident) {
		//resident is Lorain County Resident
		//resident is Out-of-County Resident
		//resident is Out-of-State Resident
		$tuitionInLorain=720.20;
		$tuitionInCounty=846.10;
		$tuitionInState=1603.95;

		if ($resident == 1) {
			$result = 144.04 * $credits;
			if ($credits >= 13 && $credits <= 18){
			$result=1872.52;
			}
			else if ($credits > 18){
			$result=$result-$tuitionInLorain;
			}
			else{};
		}

		if ($resident == 2) {
			$result = 169.22 * $credits;
			if ($credits >= 13 && $credits <= 18){
			$result=2199.86;
			}
			else if ($credits > 18){
			$result=$result-$tuitionInCounty;
			}
			else{};
		}

		if ($resident == 3) {
			$result = 320.79 * $credits;
			if ($credits >= 13 && $credits <= 18){
			$result=4170.27;
			}
			else if ($credits > 18){
			$result=$result-$tuitionInState;
			}
			else{};
		}
		return $result;
	}
?>