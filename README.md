# :sunny: Real World Project :four_leaf_clover:
University Navigation - Version Control 

# Server / Debug :
###### Android
> - SERVER APK [link](https://github.coventry.ac.uk/deoiveij/real_world_project/raw/master/RWP_releaseVersion.apk)
> - LOCALHOST - Live Debug (UPLOADING)

###### IOS
> - SERVER APK (SOON)
> - LOCALHOST - Live Debug APK (SOON)

---
# Help Docs:
Codeigniter: https://www.codeigniter.com/user_guide/index.html (Installed)<br>
Bootstrap: https://getbootstrap.com/docs/4.0/layout/grid/ (Installed)<br>
jQuery: https://api.jquery.com/ (Installed)<br>
Allertify: https://alertifyjs.com/examples.html (Installed)<br>


###### My Workflow remotely(Linux):
editor
> - [x] SublimeText 3 - with Packages ["Bootstrap 4 Autocomplete","jQuery Mobile Snippets","CodeIgniter Snippets"];

> - [x] LAMP (Linux) ;
debug
> - [x] Chrome [Android Environment] + Inspect tool(native installed);
version control
> - [x] Github Coventry;


###### My Workflow remotely(Win):
editor
> - [x] VSCode - with Extensions ["Live Server","Document This","Sublime Text Keymap"];
remote server
> - [x]  XAMPP (Windows/Mac);
debug
> - [x] Chrome [Android Environment] + Inspect tool(native installed);
version control
> - [x] Github Coventry;


###### Release Version - avaiable thanks Coventry.Domains

	https://vunf1.coventry.domains/real_world_project/


###### config your console with your github account
```Windows user Install Git: https://git-scm.com/download/win```</br>
```MAC user Install Git: https://git-scm.com/download/mac```</br>
```Linux insert command: sudo apt-get install git```</br>

> - [ ] git config --global user.email "(uni email)" </br>
> - [ ] git config --global user.name "(uni email without @uni.coventry.ac.uk)" </br>
> - [ ] git add (name file to add (your edited file(s)) ) </br>
> - [ ] git commit -m "(write something about you have done(Good pratice))"</br>
> - [ ] git push  

extract from github
> - [ ] git pull



---

### :exclamation: :warning: Comments on the code :exclamation:

```<?php //<something> || /** <something> */ ?>```
 <br>
 - comment as php, can prevent futher reading from clients when inspect the elements.
---
### BUGS FOUND
> - [x] Host - __Coventry.Domains__ unable to help for now in terms to solve it, since is a 'module' relative...

> - [x] solution we will use __JSON documents__ instead of dataBase connection, less sql_ExIm_ports, its only for __3 building__ later on if the problem fixed we could implement it.

> - [x] Problem fixed where Coventry.Domains didnt log the solution , was same miss configuration on framework files. cPanel give the answer when check error logs on the site, ssh channel created;


> - [x] javascript [custom.js] dont load same function its needed to put them on the new page load. and same jQuery not loaded because miss jQuery files;



###### Brief about Algorithmn
 
MVC architure/security provider by CodeIgniter


- server security Architure skeleton, comunication between <br> View(HTML PAGES - from view folder, .php format, with ajax connection- create security) <br> Controller(HomeController, receive post requests from View folder pages via ajax) <br> Model(Database, function on controller who save data, extract from queries or same function extracting same data from files , no-sql ).

View->Controller:
- create a new __php file__ and name it(p/on folder View), call it by the controller(HomeController) by Ajax functions using jQuery(javaScript framework) <br> url:<?php base_url()?>+"/function(onHomeController)" .

View->Controller->Model:

- Controller is waiting for data via POST request, from View, grab that data<br> ask to model a function that retrieve the data needed to fulfil the task; <br>data output php objects/instance, var_dump($data), like console.log or cout ;<br> save data output - $Variable<br>

---
### Back-Log TO DO LIST :metal: CODERS
- [ ] Page - path route - Roque
- [ ] Page - qr - Varun || Antonio
- [ ] Better Design - Varun || Antonio 
- [ ] server Architure in 'paper' (Dont know if is needed)(MVC).



- [ ] Improved response from jsonFile key-tags check php function on HomeController

> - [ ] Check/Fix responsive to landscape 
:warning:

- [ ] Implement Testing - lighthouse - google web testing
---



---
### TO DO LIST :seedling: MULTIMEDIA

- [ ] 3D building Textures
- [ ] Draw a design (desktop portrait & landscape) - Edward
- [ ] Draw a  3D Building [EEC] - Edward / Beth / Kristiana
- [ ] Draw a  3D Building [HUB] - Edward / Beth / Kristiana
- [ ] Draw a  3D Building [WILLIAM] - Edward / Beth / Kristiana

- [ ] 2D map with animation A 2 B (start basic)
- [ ] 2D map with 3D Buildings 
---
### ESSENTIAL(To achieve high mark)

:exclamation: :trophy: Project Management :
> - [ ] :warning: __SCRUM PAPERWORK(gglSpred)__ 
> - [ ] :warning: __Flow(Class) Diagram(Code/UML)__ 
> - [ ] :warning: __JSON TREE DIAGRAM__ 



---
### EXTRA 

- [ ] Map 2D with 3D building w/Path route

- [ ] Get familiar with Web Programming - Javascript(Events/Dynamic HTML) / PHP(Basic/Syntax) / Ajax XHResquests

- [ ] Get familiar with MVC Programming Model -  CodeIgniter

- [ ] Get familiar with 3DsMax, Build 3D objects(singular)
 




---
### :white_check_mark: DONE :white_check_mark: 
###### SPRING SUMMARY
__week 0 & 1__
---
- [x] Know group Elements ;
- [x] Project discuss ;
- [x] What should __have__, __must__ and what if __have time__ discuss;
---

__week 2 & week 3__
---
- [x] Draw a design (mobile portrait & landscape, Kristiana);

- [x] Code Architecture HTML/JS/CSS - AJAX async();
- [x] JSON file - basic structured;
- [x] Index Front-end structure ;
---

__week 4 & week 5__
---
- [x] Better Design for objects(add css classes (BootStrap or other))
- [x] Tags on JSON file , Keywords for seach; 
- [x] trigger popUP dinamic;
- [x] Fix, no working on hover event in mobile platform w/css; 
__week 6 & week 7__
---

- [x] Draw a sample 3D Building [EEC, HUB, WILLIAM] - Edward / Beth / Kristiana
- [x] Improvement of code architecture

- [x] Fix start Ugly layout by, when Ready*,(loaded all code*) show objects, Loading page.

- [x] JavaScript / PHP Docs
- [x] Server Android APK - Updated to minimum support android 6.0 
- [x] Live Debug Android APK - Creation - localhost
- [x] List of building design complete
 
__week 8 & week 9__
---

> - [x] implement User Agents - mobile - browser
> - [x] implement Desktop layout
> - [x] implement framework 'three' handle 3D image format(GLTF) [UPLOAD Sample 3ds format - Multimedia ]
> - [x] Design popUp content
> - [x] 3D building no Textures


__week 10__
---

### Authors

|  [Joao Maia <br> (Leader Programmer)](https://github.coventry.ac.uk/deoiveij/)  |  [Roque <br> (Co-Leader)](https://github.coventry.ac.uk/cardosoa)  | [Antonio <br> (Researcher)](https://github.coventry.ac.uk/belezama)  | [Varun <br> (Researcher)](https://github.coventry.ac.uk/mamtaniv)  | [Beth <br> (Multimedia)](https://github.coventry.ac.uk/kitchenb)  |[Edward <br> (Multimedia)](https://github.coventry.ac.uk/kitchenb) | [kristiana <br> (Multimedia)](https://github.coventry.ac.uk/druseikk)  |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| <a href="^^"><img src="dummy.png" width="100"></a> | <a href="^^"><img src="dummy.png" width="100"></a>  | <a href="^^"><img src="dummy.png" width="100"></a>  | <a href="^^"><img src="dummy.png" width="100"></a>  | <a href="^^"><img src="dummy.png" width="100"></a>  | <a href="^^"><img src="dummy.png" width="100"></a>  | <a href="^^"><img src="dummy.png" width="100"></a> |
