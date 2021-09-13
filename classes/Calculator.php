<?php
class Calculator{

    
 	public $input = '';
 	public $temp_left_data = '';
 	public $temp_right_data = '';
 	public $temp_operator = '';
 	public $is_left_done = false;
 	public $is_right_done = false;
    public $temp_calculation = '';
    public $answer;
    public $inValid = false;
    
   
 	public function __construct($input){
 	    if(empty($input)){
 	        $this->answer = 'Insert Something!';
 	    }else{
 	        $this->input = $input."=";
 	        $this->process();
 	    }
 	    
 	    
 	    
 	}
 	public function process(){
 	    $data = str_split($this->input);
 	    foreach ($data as $index => $char){
 	        
 	        if(is_numeric($char)){
 	        
 	            if($this->is_left_done){
 	                $this->temp_right_data.=$char;
 	                
 	            }else{
 	                $this->temp_left_data.=$char;
 	            }
 	            
 	        }else{
 	            
 	            if(in_array($char, ['+','-','*','/','='])){
 	                if($this->is_left_done){
 	                    
 	                    $math_string ="return (".$this->temp_left_data."{$this->temp_operator}".$this->temp_right_data.");";
 	                    $this->temp_left_data = $this->temp_calculation = eval($math_string);
 	                    $this->temp_right_data = '';
 	                    
 	                }else{
 	                    
 	                    $this->is_left_done = true;
 	                    
 	                }
 	                
 	                $this->temp_operator = $char;
 	            }else{
 	                $this->inValid = true;
 	                break;
 	            }
 	        }
 	        
 	    }
 	    
 	    $this->answer = $this->inValid ? 'Invalid Input' : $this->temp_calculation;
 	}
 	
}




