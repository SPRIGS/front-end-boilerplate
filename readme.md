## Introduction

Main purpose of this front-end boilerplate is to have a scaffolding structure to easily have a project up and running.

It uses SCSS and vanilla JS.

There are also other branches (WIP) which use:
- Tailwind.js
- jQuery

It uses [laravel mix](https://laravel-mix.com) as a [webpack](https://webpack.js.org/) wrapper.

---
## Installation
- Clone the repo
- Copy the repository using git clone, then go to project and remove git
    ```
    git clone https://github.com/SPRIGS/front-end-boilerplate.git
    cd front-end-boilerplate
    rm -rf .git
    ```

- install dependencies
    ```
    npm i
    ```

- Start the watcher and to developing
    ```
    npm run watch
    ```
    *Windows users:* 
    
    In case the watcher doesn't compile, delete `node_modules` and `package-lock.json`. 

    Downgrade these two libraries in `package.json`:
    ```
    "file-loader": "^6.2.0" > "^1.1.6",
    "resolve-url-loader": "^3.1.2" > "~2.3.1",
    "url-loader": "^4.1.1" > "~1.1.2",
    ```

    Run `npm i` again.

---
## Development
---

## Sass structure
- In `src/assets/scss` there are 6 folders *(Names starting in numbers to order by importance)*

0. Variables - *Scss variables, to keep consistency throughout the files*
    - Color variables
    - Font family variables
    - Grid (overwriting) variables
    - Transition and timing variables for consistent animations

1. Generic - *Font imports, vendor libraries etc/*
    - Typography
    - Vendor

2. Utilities - *Utility classes*
    - Animations
    - Functions
    - Links
    - Lists
    - Sections

3. Elements - *Styling for standalone elements*
    - Buttons
    - Images

4. Sections - *Styling for unique sections*        
    footer.scss
    header.scss

5. Components - *Styling for general components*
   - Breadcrumbs
   - Forms
   - Pagination

6. Pages - *Specific styles per page*
   - Styleguide
   - 404
   - Search results

---

## Javascript

Javascript has some basic functions:

In `src/assets/js` you'll find
- Core
  - `bootstrap.js` - *require necessary libraries*
  - `plugins.js` - *Init plugin functionality*
- Vendor
  - Add vendor libraries when `npm` can't be used
- `helpers.js` - Add helper functions
- `app.js` - requires all of the above, and contains `menuFunctionality()` which inits basic meny functionality. 
- ---

## RTFM
- Laravel Mix - https://laravel-mix.com/docs/6.0/api
- Headroom.js - https://wicky.nillia.ms/headroom.js
- 