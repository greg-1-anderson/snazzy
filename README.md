$ drupal generate:module

 Welcome to the Drupal module generator 

Enter the new module name: Snazzy
Enter the module machine name [snazzy]: 
Enter the module Path [/modules/custom]: 
Enter module description [My Awesome Module]: A Snazzy Module
Enter package name [Other]: 
Enter Drupal Core version [8.x]: 
Define module as feature [no]? 
Do you want to add a composer.json file to your module [no]? yes
Would you like to add module dependencies [no]? no
Do you confirm generation [yes]? 

 Generated or updated files 

Site path: /Users/ga/tmp/drupal/example2/web
1 - modules/custom/snazzy/snazzy.info.yml
2 - modules/custom/snazzy/snazzy.module
3 - modules/custom/snazzy/composer.json
$ drupal generate:controller

 Welcome to the Drupal Controller generator 

Enter the module name: snazzy
Enter the Controller class name [DefaultController]: SnazzyController
Controller title: Snazzy
Enter the action method name [index]: snazzy
Enter the route path [snazzy/snazzy/{param_1}/{param_2}]: snazzy/list/{param}
Controller title (empty to start with code generation): 
Do you want to generate a unit test class [yes]? 
Do you want to load services from the container [no]? 
Do you confirm generation [yes]? 

 Generated or updated files 

Site path: /Users/ga/tmp/drupal/example2/web
1 - modules/custom/snazzy/src/Controller/SnazzyController.php
2 - modules/custom/snazzy/snazzy.routing.yml
3 - modules/custom/snazzy/Tests/Controller/SnazzyControllerTest.php

[+] Rebuilding routes, wait a moment please
[+] Done rebuilding route(s).


