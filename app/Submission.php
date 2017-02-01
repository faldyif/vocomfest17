<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public function getCategory()
    {
    	if($this->type == 1)
    	{
    		return "Website";
    	} 
    	else if($this->type == 2)
    	{
    		return "Proposal";
    	} 
    	else
    	{
    		return "Aplikasi";
    	} 
    }
}
