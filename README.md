# VEI WordPress Theme
Theme based on PG Throttle 6

## Theme Structure
This theme was built using Fundation 6 by Zurb. All Foundation 6 component should work with this theme. See table of content for more details.

### Table of Content
ROOT DIRECTORY
1. acf-exports/
2. dist/
2.1 dist/css
2.2 dist/js
2.3 dist/json
3. fonts/
4. imgs/
5. includes/
5.1 includes/flex/
5.2 includes/parts/
6. js/
7. node_modules/
7.1 node_modules/gulp-prefixer
7.2 node_modules/foundation-sites
7.3 node_modules/jquery
8. sass/
9. stylesheets/
10. templates/
11. types/

##### 1. ACF Exports


##### 2. dist/


##### 2.1 dist/css


##### 2.2 dist/js


##### 2.3 dist/json


##### 3. fonts/


##### 4. imgs/


##### 5. includes/
Content templates used by single.php, page.php, archive.php, category.php and other broad post types.

##### 5.1 includes/flex/
ACF templates and flexible content loaded within the parent parent folder templates

##### 5.2 includes/parts/
Snipets of code used throughout the website. such as the "page last upadted" section and social media buttons in the footer of every page.

##### 6. js/


##### 7. node_modules/


##### 7.1 node_modules/gulp-prefixer/


##### 7.2 node_modules/foundation-sites/

Load Foundation 6

##### 7.3 node_modules/jquery/


##### 8. sass/


##### 9. stylesheets/
Dont touch, unless you know what you're doing - complied with compass. Easy to break.

##### 10. templates/
Page templates used to customize home page and sidebar placement. Left, right and full-width. 

##### 11. types/
This folder contains custom post types that are included in the functions.php. The create a new post type rename an exsisting php file in the types foler to match the name of your new post type. Then open functions.php and add

```
include 'types/yourpostname.php';
```

To disable a post type add "//" at the begining of the line.

```
// include 'types/yourpostname.php';
```

