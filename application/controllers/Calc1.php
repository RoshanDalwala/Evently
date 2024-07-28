<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Calc1 extends CI_Controller
	{
		public function loadCalc()
		{		
			return $this->load->view('calc');
		}

		public function calc()
		{		
			if ($this->input->post('btnAdd')) 
			{
				echo $this->input->post('txtNum1')+$this->input->post('txtNum2');
			}

			else if ($this->input->post('btnSub')) 
			{
				echo $this->input->post('txtNum1')-$this->input->post('txtNum2');
			}

			else if ($this->input->post('btnMulti')) 
			{
				echo $this->input->post('txtNum1')*$this->input->post('txtNum2');
			}

			else 
			{
				echo $this->input->post('txtNum1')/$this->input->post('txtNum2');
			}	
		}
	}
?>