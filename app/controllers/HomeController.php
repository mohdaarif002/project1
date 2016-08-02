<?php

class HomeController extends BaseController {

	
	public function showWelcome()
	{
		return View::make('hello');
	}


	public function showAbout()
	{
		return 'You are in about page here!!!!';
		
	}
        
        public function getCategories()
        {

            return 11;
           //return View::make('addCategory',array('categoryList'=>$categories));
         } 
}
