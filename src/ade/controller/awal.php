<?php

class awal extends Controller {
	public function index() {    
		return View::make('vwade::vwAwal');
	}
	
	public function kika() {    
		return View::make('vwade::a.kika');
	}
	
	public function datak() {    
		$inih = alp_entries::get();
		dd($inih);
	}

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}