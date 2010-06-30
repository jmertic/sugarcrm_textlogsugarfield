<?PHP

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
