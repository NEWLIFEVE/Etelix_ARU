<?php
/** 
 * Esta clase solo filtra el renderizado de vistas
 */
class UserViewFilter extends CFilter  
{  
    public function preFilter($filterChain)  
    {
    	$request=Yii::app()->getRequest();
        
    	if(!Yii::app()->user->id)
    	{
    		$request->redirect('/');
    		return false;
    	}
    	else
    	{
    		if(User::model()->findByPk(Yii::app()->user->id)->id_status != 3)
    		{
    			return true;
    		}
    		else
    		{
            	$request->redirect('/Employee/firstView');
         		return false;
        	}
    	}
    } 

    public function postFilter($filterChain)  
    {  
        // Se aplica después de ejecutarse la acción.  
    }  
}