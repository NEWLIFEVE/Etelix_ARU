<?php
/** 
 * Esta clase solo filtra el renderizado de vistas
 */
class UserUpdateFilter extends CFilter  
{  
    public function preFilter($filterChain)  
    {
    	$request=Yii::app()->getRequest();
        
		if(Users::model()->findByPk(Yii::app()->user->id)->id_status == 3)
		{
                        $request->redirect('/Employee/firstView');
			return false;
		}
		elseif(Users::model()->findByPk(Yii::app()->user->id)->id_status == 4)
		{
                        $request->redirect('/Employee/updatePhone');
			return true;
		}
		else
		{
        	
     		return true;
    	}
    } 

    public function postFilter($filterChain)  
    {  
        // Se aplica después de ejecutarse la acción.  
    }  
}