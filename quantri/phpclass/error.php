<?php
 	function CheckError($submit, $error){
		if($submit == $error){
			return 1;
			}
		}
	
	 function IssueError(){
		return '<span style = "color:red"> * </span>';
			}
	 
	  class GetSubmit{
		var $error;
		var $submit;
		
		function GetSubmit($submit, $error){
			if(CheckError($submit, $error)){
				$this->error = IssueError();
				}
			else{
				$this->submit = $submit;
				}
			}	
	 	}
?>