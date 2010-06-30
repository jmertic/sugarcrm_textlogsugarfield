<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise End User
 * License Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2006 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
require_once('include/SugarFields/Fields/Text/SugarFieldText.php');

class SugarFieldTextlog extends SugarFieldText 
{
    /**
     * Appends the new log entry to the end of the field with a date/time and user stamp
     *
     * @see SugarFieldBase::save()
     */
     public function save(&$bean, $params, $field, $properties)
     {
         global $timedate, $current_user;
         
         if ( !empty($_POST[$field . "_newentry"]) ) {
             if (!empty($bean->$field))
                 $bean->$field .= "\n\n";
             $bean->$field .= date($timedate->get_db_date_time_format()).
                " - {$current_user->name}\n\n".trim($_POST[$field . "_newentry"]);
         }
         unset($_POST[$field]);
     }
}
?>
