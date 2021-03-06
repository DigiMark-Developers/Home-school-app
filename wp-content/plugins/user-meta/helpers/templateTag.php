<?php

/**
 * Template tag for user login
 * 
 * @since 1.1.3
 * @author Khaled Hossain
 * 
 * @param unknown $formName
 */
function userMetaLogin($formName = null)
{
    global $userMeta;
    
    return $userMeta->userLoginProcess($formName);
}

/**
 * Template tag for user registration and profile update
 *
 * @since 1.1.3
 * @author Khaled Hossain
 *        
 * @param unknown $actionType            
 * @param unknown $formName            
 * @param unknown $rolesForms            
 */
function userMetaProfileRegister($actionType, $formName, $rolesForms = null)
{
    global $userMeta;
    
    return $userMeta->userUpdateRegisterProcess($actionType, $formName, $rolesForms);
}

/**
 * Template tag for form builder
 *
 * @since 1.1.3
 * @author Khaled Hossain
 *        
 * @param unknown $actionType            
 * @param unknown $formName            
 * @param unknown $rolesForms            
 */
function userMetaFormBuilder($actionType, $formName, $rolesForms = null)
{
    global $userMeta;
    
    return $userMeta->userUpdateRegisterProcess($actionType, $formName, $rolesForms);
}