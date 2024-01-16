| 1. Introduction
----------------
    > With the development of Composer, developers will have easy to include another packages in their project.
    > When they include a package into your project, it's likely to cause conflicts if the package overlap. 


| 2. Directory Struct
-----------------------

    ParentComposer
    |
    |__src
    |   |__ParentClass.php
    |       |__//This class will two packages: 
    |           |__{"trueme/child-composer": "dev-master"}
    |           |__{"guzzlehttp/guzzle": "6.3.0"}
    |
    |
    |__index.php
    |
    |__composer.json
-----------------------


| 3. Step by step do it
-----------------------
    > You're staying ParentComposer project: https://github.com/truemenews/ParentComposer.git
    > ParentComposer will have conflict when use: composer install/update to download packages above
        |__Your requirements could not be resolved to an installable set of packages.
        Problem 1
            - Installation request for trueme/child-composer dev-master -> satisfiable by trueme/child-composer[dev-master].
            - trueme/child-composer dev-master requires guzzlehttp/guzzle 6.2.0 -> satisfiable by guzzlehttp/guzzle[6.2.0] but these conflict with your requirements or minimum-stability.
    > You need to change: {"guzzlehttp/guzzle": "6.3.0"} -> 6.2.0 to use it or remove this package 
        from composer.json. Composer will download {"guzzlehttp/guzzle": "6.2.0"} from composer.json 
        in ChildComposer project
-----------------------


