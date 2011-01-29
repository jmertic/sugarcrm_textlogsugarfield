<?php
/*
Copyright 2011 John Mertic. All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are
permitted provided that the following conditions are met:

   1. Redistributions of source code must retain the above copyright notice, this list of
      conditions and the following disclaimer.

   2. Redistributions in binary form must reproduce the above copyright notice, this list
      of conditions and the following disclaimer in the documentation and/or other materials
      provided with the distribution.

THIS SOFTWARE IS PROVIDED BY JOHN MERTIC ``AS IS'' AND ANY EXPRESS OR IMPLIED
WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND
FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> OR
CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

The views and conclusions contained in the software and documentation are those of the
authors and should not be interpreted as representing official policies, either expressed
or implied, of John Mertic.
*/

// manifest file for information regarding application of new code
$manifest = array(
	'acceptable_sugar_flavors' => array( 'CE', 'PRO', 'ENT' ),

    // only install on the following regex sugar versions (if empty, no check)
    'acceptable_sugar_versions' => array(
    	'regex_matches' => array( '6\.0\.\d\w*' ),
    ),

    'is_uninstallable'=>true,

    // name of new code
    'name' => 'TextLog SugarField',

    // description of new code
    'description' => 'TextLog SugarField',

    // author of new code
    'author' => 'John Mertic, SugarCRM',

    // date published
    'published_date' => '2010/03/01',

    // version of code
    'version' => '1.0',

    // type of code (valid choices are: full, langpack, module, patch, theme )
    'type' => 'module',

    // icon for displaying in UI (path to graphic contained within zip package)
    'icon' => '',

    // flag to specify whether to remove database tables on uninstallation
    'remove_tables' => 'prompt',
);


$installdefs = array(
	'id' => 'textlog',
	'copy' => array(
		array(
		    'from' => '<basepath>/custom/include/SugarFields/Textlog',
		    'to' => 'custom/include/SugarFields/Textlog',
		),	
	),
);
