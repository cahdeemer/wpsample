# wpsample

## BUILD TOOL
Uses gulp to compile Sass and JavaScript.  There are three tasks: sass, js, and watch. All three can be run with the default gulp command.

I was curious about using tree-shaking with gulp, but it wasn’t a priority for this project so I didn’t sort it out but I value that tree-shaking can remove unused code and that can help with performance.

## PLUGINS
Classic Editor - I began this project one day after WordPress 5.0 was released and it seemed prudent to stick with the classic editor because a) Gutenberg has accessibility issues and b) I think there are significant bugs with ACF.

ACF - my go-to plugin for customization.  Unfortunately I do not have ACF Pro so the field types that I had access to were limited (no repeater ). 

PopupMaker - to create a popup CTA on main


## API CALL
I chose to use Vue with Axios for an external async call to a placeholder API.  The JS for the API call is in myapi.js and the Vue component is in single.php. 

## FRAMEWORKS & LIBRARIES
Underscores - starter theme

Bootstrap 4 - UI 

Vue - API call

## CSS ARCHITECTURE
File structure is from Underscores starter theme with a couple of additional theme-specific partials 

CSS naming conventions are mostly the OOCSS used by Bootstrap, with the exception of the BEM naming conventions used by Underscores for variables.

Media queries are added to the bottom of each partial.  Specific breakpoints are those used by Bootstrap 4.

## TEMPLATES
Homepage content is found at front-page.php

Singe blog post is found at single.php.  It references the template part content.php, which can be found in template-parts/content.php. The GIVE FEEDBACK button in the hero on the home page links to the 1 post I created.

