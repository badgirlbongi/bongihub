08/01/2024
bongihub/projects/TOURza
+ Done updating info and pictures on the gauteng.html
+ Done updating info and pictures on the easterncape.html

09/01/2024
bongihub/projects/TOURza
+ changed the about picture on the about.html
+  Done updating info and pictures on the kwazulunatal.html
+ Done updating info and pictures on the limpopo.html
+ Done updating info and pictures on the mpumalanga.html
+ Done updating info and pictures on the northwest.html

10/01/2024
bongihub/projects/TOURza
+ Done updating info and pictures on the weesterncape.html
- encountered a db error for saving the comment when rating the place files (process.php(ine 21) anyprovince.html)
+ updates meeting with mentor

11/01/2024
bongihub/projects/TOURza
+ replaced "reviews" with provinces on all provinces files
+ did research on how to add view more link to display the information in cards
(testing on easterncape.html first card)
+ added jquery script link 
+ added jscript functions to control the viewmore link
+ added css to hide the fulltext on style.css
(testing on easterncape.html second card)
+ added more links
+ added a dropdown to show remaining info
+ used same jscripts as the one in the first card
(testing on easterncape.html third card)
+ added scroll down by changing the height and overflow
- the changes messed up the whole page
+ removed all the changes to find a new way to resolve the issue

12/01/2024
bongihub/projects/TOURza
+ put home buttons on all province pages
+ added something at the bottom of every page
(testing on easterncape.html 1st,2md and 3rd card)
+ put style for the card to test for fitting
+ added footers on the cards
+ tried to put a spyscroll (on the 9th card)
- spyscroll not working 
+ added a header to the body and footer and the scrolling succeeded(testing on 9th card)
bongihub/projects/TOURza/tourzareview.php
+ make a popup after submitting the review form
+ Used JavaScript to show a popup and redirect back to the previous page
+ renamed files 
+ testing to see the popup updates on tourzaContactUs.txt
+ research on layout file and framework

15/01/2024
+ bongihub/projects/TOURza/about.html added column to store the info in paragraphs for neatness
+ added a header, body and footer bongihub/projects/TOURza/freestate.html
+ added a header, body and footer bongihub/projects/TOURza/gauteng.html
+ added a header, body and footer bongihub/projects/TOURza/index.html
+ added a header, body and footer bongihub/projects/TOURza/kwazulunatal.html
+ added a header, body and footer bongihub/projects/TOURza/limpopo.html
+ added a header, body and footer bongihub/projects/TOURza/mpumalanga.html
+ added a header, body and footer bongihub/projects/TOURza/northerncape.html
+ added a header, body and footer bongihub/projects/TOURza/northwest.html
+ added a header, body and footer bongihub/projects/TOURza/westencape.html
+ added a small change on top of every page

16/01/2024
+ fixed the card sizes and carousels on the bongihub/projects/TOURza/index.html
+ online meeting with mentor for HTML class
+ online meeting with mentor for sql class
+ brainstorming and researching about drawing up a plan for an ERD
+ created an ERD on bongihub/projects/TOURza/erd.txt
+ encountered a problem with the ERD in terms of recording mutliple pictures for one province for the carousel 
+ basic research about OOP(still need more info)
+ basic research about using PDO(still need more info)

17/01/2024
+ added description on the ERD tables bongihub/projects/TOURza/erd.txt
+ created DB on myPhpAdmnin
+ added a provinceID FK on the place table bongihub/projects/TOURza/erd.txt
+ save picture columns as data type BLOB
+ exported the tourza.sql database bongihub/projects/TOURza/tourza.sql

18/01/2024
+ researching and brainstorming on how to make the province pages to run from one page
+ trying to figure out how to run the pages from one page( added placeContent.phtml and placeContent.php)
+ renamed files
+ moved erd to bongihub/projects/TOURza/docs
+ moved provinces to bongihub/projects/TOURza/provinces
+ created  testing pages to see if the idea will work 
objectives : when you click a button on the index.phtml for example for free state it should load the places.phtml and process the content on placeContent.phtml 
+ added a column on erd to save the links to the website of the places or to access more information on bongihub/projects/TOURza/docs/erd.txt
+ linked the index page with places.phtml
+ can't seem to figure out how to display the contents, tried a switch statement but doesn't make sense need to go back to the planning and drawing board

19/01/2024
+ stil trying to display content using a switch statement
+ first method testing on button WC on bongihub/projects/TOURza/placeContent.phtml
+ first method not working
+ To fix the issues i have to make the three pages correspond and link the 'WC' button to the 'places.phtml' page, i created links with appropriate parameters in the navigation buttons. Additionally, i handled the parameter in the 'places.phtml' file and call the generateContent function accordingly.
+ still doesn't display the WC content
+ it doesn't display anything

22/01/2024
+ still trying to debugg
+ added a link column on the places 
+ research on php framework 
+ rearranged files and folders
+ created new folder and starting the project from scratch
+ bongihub/projects/TOURza/index.php
+ replanning and restructuring

23/01/2024
+ rearranged the files and put everything back to normal and made a few changes
+ added new sql
+ added php and js updated 

25/01/2024
+ adding data to table rows in the database using myPhpAdmin
+ pictures cannot be added to the database
+ managed to fix the error images can now be added to the database on myphpadmin
+ resolving a "Got a packet bigger than 'max_allowed_packet' bytes," error on the myphpadmin

26/01/2024
+ still addding data to the table rows on the database using myphpAdmnin
+ done adding data and exported the tourza database
+ changed a few things on the files of the project and updated the reviews.phtml file
+ bongihub/projects/TOURza/places.php trying to fetch data from the database and use it

29/01/2024
+ testing if the database is working via bongihub/projects/TOURza/places.php
+ trying to display the results on the other page
+ the contents are not being displayed pages to check bongihub/projects/TOURza/index.html , places.php, places.phtml
+ when running the system the page for displaying places is now showing the whole code in bongihub/projects/TOURza/places.phtml
+ moved the places.php and the contents of the file in the places.phtml, and modified other files changes places.phtml to places.php
+ its displaying but the pictures are not showing only unicode

30/01/2024
+ trying to resolve the issues of pictures (watching youtube videos and research)
+ researching about uploading and fetching images from the database
+ comparing this project with the first test main tch project for the usage of pdos and sql
+ created a new db for testing called imagetest I am going to add a place from inserting data and saving to the db to see if it will show file for the code to test bongihub/projects/TOURza/insert.php and viewing on confirmation.php

31/01/2024
+ forgot to put the html code for inserting data on bongihub/projects/TOURza/insert.php just added it now hence it was showing a blank page yesterday, uploading is working but the picture is still not showing
+ doing a new method of uploading images on bongihub/php/how2uploadimages/index.php :
--- added database 
--- added if-statements and functions
--- variable name error but pictures uploaded without the names and directory 
--- fixing the error
--- the pictures were uploaded successfully
+ added bongihub/php/how2uploadimages/display.php to display the uploaded images
+ renaming images to match placeID on the database and moving them to the local folder

01/02/2024
+ renaming images to match placeID on the database and moving them to the local folder
+ updated the index.html by changing the dir of the images
+ delete the images column on the tourza database 
+ add a table named images to store images on the tourza database
+ created new files to add images to the database by storing their dir files uploadimg.php and displayimg.php 
+ included screen shots of uploading the images, there's only one picture that can't be uploaded cause of the unknown extension
+ updated the sql query on places.php to check if it's working
+ the pictures are displaying and the project is running
+ research about review calculations while updating 

02/02/2024
+ adjusted the code so that i can retrieve the placeID so that it can later be used on the reviews page
+ working on reviews.php to calculate reviews : the comment form is not showing file to check places.php and reviews.php
+ comment form is showing the button can be clicked to rate but throws an error that the rate and comment were not selected and entered 
+ trying to fix the reviews form on places.php
+ bongihub/projects/tourza2
: switching from sql to pdos
: testing if it's working
: project working but still throwing reviews error

05/02/2024
+ reviews.php no longer throwing an error
+ research on how to properly display the database query of showing the reviews on the reviews.phtml
-- added a function to retrieve the data
-- the comments and placeID are being displayed
+ adding a place (bongihub/projects/TOURza(pdo)):
-- added a plus circle icon for adding the place(places.php)
-- the plus circle is not showing
-- plus circle button now showing (used bs icon), now needs styling
-- addplace.php html code
-- fixing database and adding images when adding place information

06/02/2024
+ doing testing to see where to go next
+ display the average rating or error as a pop up for the displayReviews.php changes on reviews.php
+ throwing errors again with submitting the rate and comment
+ research on how to resolve the issue
+ problem solved but some of the places can't be rated I'm not sure what could be the problem and the database takes time to update 
---
+ changed the href for the reviews on places.php
+ working on calculating the average of rates per province 
+ created a function to calculate the average on displayReviews.php
+ fixed the function as it was repeating some things
+ calling/using the function
+ testing if it works, function is not working
+ trying to resolve the function, tried to but the average is not showing not sure if the function is working
+ adding a function on index,phtml to count places (function not counting)
+ created dp.php for connecting once to the db
+ function for counting places on index.php i now working
+ the rates are also display all the changes are working well

07/02/2024
+ researching of a neat way to display the reviews on displayReviews.php
+ trying dropdown designs to display, it was not displaying so i made some changes on the same file testing from line 377 on the WC province
+ it's not really displaying well, included popper scripts
+ working on the addplace.php file and added imgupload.php file to handle uploading the image
+ testing if the addplace works, threw an error of the included file , wrong name have to fix it
+ Addplace giving an error attached the screenshot on /bongihub/projects/docs/testing but image was uploaded 
+ place is added problem is that it redirects to a page that doesn't exist want to test if it shows 
+ the added place is showing and it's reflecting on the database
+ added a pop up to show that the place was added successfully 
+ testing 

08/02/2024
+ testing works, i added a new place, provided screenshots were i entered the data, submitted and pop up shows and redirects to the fill-in form cleared so that you can enter again, but i want to change it to redirect to the index page so that you can view the place added
+ research on how to improve the project
+ improvised the display of reviews on displayReviews.php
+ fixed links to index.php
+ added a search bar on index.php
+ changed db.php to OOP and have to fix all files that uses the database 
+ fixed addplace.php to match the db.php
+ fixed displayReviews.php to match the db.php
+ fixed imgupload.php to match the db.php
+ fixed index.php to match the db.php
+ fixed places.php to match the db.php
+ fixed reviews.php to match the db.php
+ will do testing tomorrow

09/02/2024
+ doing testing if everything is working
+ all pages are working, there's an issue on the addplace.php issues:
--The script was for the pop up message instead of just submitting so now the problem is when the pop up is active it says your things were submitted when actually they are not  and then it clears the form 
--But the code with the script commented out , works properly it submits the info even record on the dB but it doesn’t show a message or tell you that your things were submitted it just goes to the redirected page (screen shots attached)
+ research on how to display pop up correctly and use the search bar
+ testing added code for pop up message on addplace.php and index.php(did not display proper cause it doesnt disappear after showing the message, screenshots attached)
+ still not displaying

13/02/2024
+ moved the <div> for displaying the pop up message on the index.php to the <main>, now doing testing to see if it will show, still not showing but the place is added
+ added a search.php file for the search form linked: the goal is for it to search through the whole system for keywords entered by the user
--- testing threw an error on line 39 (screenshot provided)
--- the search form works well(screenshot provided)
--- added search form on certain files
--- put design on the search page
--- added else stateent for not found places and added link to google (screenshot provided)

14/02/2024
+ research on how to fix the pop-up on addplace.php
+ removed the oldcode for the pop-u on index.php 
+ modified the code on addplace.php for the pop-up
+ fixed the redirect to the index page after the pop-up
+ testing : still not showing the pop-up clashes with the imageupload success button (screenshots provided)
+ created a new mini project to understand login and sign-ups on bongihub/projects/loginsample
+ added a users table on the tourza db (projects/TOURza(pdo))
+ added code for displaying login/sign-up form 
+ database doesn't want to connect anymore to add a new place throws an error(screenshot provided)
+ fixed the error the imgupload and addplace were clashing

15/02/2024
+ doing the login/sign-up forms again
+ added a user.php page for handling login/sign-up
+ adding code on user.php for the desired output
+ buttons are not working(screen shots provided)
+ buttons are now working and i added the design on user.php(screenshots provided)
+ created file to connect to the database userprocess.php and handle to details and store them on the database and validate
+ testing if login/signup and db are working and connected
+ sign-up works fine and reflects on the db 
+ login doesn't work throws incorrect password error because of how the password is saved on the db(screenshots provided)
+ added pages redirects
+ fixed addplace.php pop-up

16/02/2024
+ research on how to properly save the password
+ the password is now working properly login was successfull(screenshots provided)
+ fixing github folders
+ testing adding a place again
+ everything is working fine(screenshots attached)
+ adding inserted details validation on userprocess.php

19/02/2024
+ testing password validation(screenshots attached)
+ changed that if the password is not valid to redirect to the sign-up page
+ all the validations work properly
+ research on how to create a custom domain to host the system online
+ working on the about page( changing pictures, style and information)

20/02/2024
+ last touch-ups on the about page
+ new css,html and js project (responsive resume) bongihub/html,css,js/responsive resume
--- doing the index.html
--- doing style.css
--- dong script.js
+ design on style.css using css
+ main content on index.html using html
+ background picture doesn't want to display

21/02/2024
+ still continuing with the responsive resume on bongihub/html,css,js/responsive resume
--- doing index.html
--- doing style.css

22/02/2024
+ still continuing with the responsive resume on bongihub/html,css,js/responsive resume
--- doing index.html
--- doing style.css
--- doing script.js

23/02/2024
+ still continuing with the responsive resume on bongihub/html,css,js/responsive resume
--- doing index.html
--- doing style.css
--- doing script.js

26/02/2024
+ final touch-ups on bongihub/html,css,js/responsive resume
---index.html
--- style.css
--- script.js
+ research on new project
+ bongihub/html,css,js/doyouwannagooutwithme
--- valentines or any date mini project for wanting to ask someone out and they can't choose the no options
~ index.html 
~ styles.css
~ yes.html
~ yes_style.css

27/02/2024
+ bongihub/projects/TOURza
--- adding more records on the rating tables (for testing)
--- research about updating and deleting of something then it updates or delete also on the database
--- changed require_once 'db.php' to include 'db.php' on all files
--- you can't rate more than once in one session you have to load the project all over which is a problem(screenshots provided)

28/02/2024(projects/TOURza)
+ research on how to figure out what could be causing the problem of mutliple rates not being allowed
+ changes on reviews.php
problems detailed
--- the first place of every province gets rated successfully but the other places don't 
--- on the mpumalanga province mbobela's image doesn't show
+ deleted the mbombela place and added it again , now the picture shows
+ From research this could be the problem:
--- Verify HTML Structure: Ensure that each rating form within your loop has a unique identifier for the form and its elements. If multiple forms have the same identifier, it could cause unexpected behavior.
+ so i changed the rating forms to be unique
+ doing testing (was still not working)
+ updated the reviews.php and the places.php 
+ updated the script on the places.php
+ checking and testing and fixing error from the start of the system to end
--- linkedin link not working (so removed)
--- replaced include with require_once 
--- fixed missing pictures on the carousel
--- rating still doesn't work (changed script on places.php)
--- more changes for ratings
--- doesn't show pop-ups for successful/not for the rates

29/02/2024
+ research about the errors
+ trying to resolve the pop-up issue on reviews.php and places.php
+ made changes on the showpop-up function on places.php
+ made changes again on reviews.php and places.php

01/03/2024
+ changing my code for the tourza project to the way it was before the changes made so that I can debugg it properly
+ doing testing to see if it works as before(screenshots attached) system working as before so will try to fix the original problem of rates not being submitted and only sumits for the first card only per province

04/03/2024
+ new project called to-do list on bongihub/to-do-list
+ added all images and icon needed for the project
+ added the index.html
+ added the script.js
+ added the style.css
+ finished the index.html
+ finished the style.css

05/03/2024
+ bongihub/to-do-list
+ working on the script.js
+ finished with the script.js
+ added a browserconfig.xml
+ added an svg

06/03/2024
+ brainstorming for a new python project
+ recipe project on bongihub/recipe
+ notes on bongihub/recipe/notes.txt
+ way to deploy this project added on notes.txt

07/03/2024
+ testing if python and its extensions still work
+ python not running (had to install python)
+ rearranged files
+ screenshot attached everything installed well and apps are running bongihub/python/docs

11/03/2024
+ refreshing memory with python coding so will be creating a python game
+ installed pygame
+ working on bongihub/python/projects/snake_game
+ resources folder contains all the  resources needed for this project
+ doing main.py 
- adding window background
- adding ablock image
- moving the block image with keys
+ research about composers

12/03/2024
+ contuining with snake_game on bongihub/python/projects/snake_game 
+ main.py changing it to OOP
--- creating classes

13/03/2024
+ contuining with snake_game on bongihub/python/projects/snake_game 
+ main.py creating classes
--- created the block for the snake to move with x and y 
--- added the apple to be eaten by the snake

14/03/2024
+  contuining with snake_game on bongihub/python/projects/snake_game 
+ main.py creating classes
--- increasing length of the snake when eating the apple
--- counting score and displaying it
--- class definition for cathering for collision

15/04/2024
+  contuining with snake_game on bongihub/python/projects/snake_game 
+ on main.py
-- doing the game over restart logic
-- adding music to the project
-- finishing the projects

18/03/2024
+ installed auto py to exe to convert py projects to exe
+ new project for this week - forex trading bot
--- research about the forex trading bot 
+ trading bot megan on bongihub/megan
--- working on megan/defs.py
--- working on megan/oanda_api.py
--- working on megan/utils.py

19/03/2024
+ megan trading bot project on bongihub/megan
--- working on megan/defs.py
--- working on megan/oanda_api.py
--- working on megan/utils.py
--- working runner.py
+ installed requests
+ installed pandas

20/03/2024
+ megan trading bot project on bongihub/megan
--- working on megan/runner.py
--- working on megan/oanda_api.py
+ test the application after making changes

22/03/2024
+ megan trading bot project on bongihub/megan
--- working on log_wrapper.py
--- working on settings.json
--- working on settings.py
+ test the application after making changes

25/03/2024
+ megan trading bot project on bongihub/megan
--- working on settings.py
--- working on bot.py
+ test the application after making changes

26/03/2024
+ megan trading bot project on bongihub/megan
--- working on oanda_api.py
--- working on timing.py
--- working on bot.py
--- working on technicals.py
+ test the application after making changes

27/03/2024
+ megan trading bot project on bongihub/megan
--- working on bot.py
--- working on defs.py
+ test the application after making changes

02/04/2024
+ megan trading bot project on bongihub/megan
--- working on oanda_trade.py
--- working on oanda_api.py
--- working on trade_manager.py
--- working on bot.py
+ test the application after making changes

03/04/2024
+ another trading bot project on bongihub/tradingbot
+ deleted and then merged bot2 with bot.py
--- working on bot.py

04/04/2024
+ research about python small projects with graphics

05/04/2024
+ python mini-project bongihub/python/pythonminiproject
--- working on heart.py 
+ working on birthday1.py
--- created the code to appear on the terminal
--- changed the python code to appear inside the turtle instead of the terminal

08/04/2024
+ portfolio website called portfile on bongihub/portfile

09/04/2024
+ continuing with portfile project created portfile 2 replica of portfile
+ working on portfile_2 
--- index.html and styles.css

10/04/2024
+ continuing working on portfile_2 
--- learning how to find an api for google maps 

11/04/2024
+ research about google maps and APIs

12/04/2024
+ research about creating python website without using django

15/04/2024
+ rearranged files
+ installed flask
+ learning about flask

16/04/2024
+ new python projects python_portfolio 
--- working on framework.py
--- working on index.html
--- working on about.html

17/0/2024
+ python project python_portfolio 
--- working on framework.py
--- working on index.html
--- working on about.html

18/04/2024
+ python projects python_portfolio 
--- working on framework.py
--- working on index.html
--- working on about.html

22/04/2024
+ updates on python_portfolio
+ running the flask app
--- file doesn't want to run
--- trying to find a way to run the files
--- app is now runing using web address

23/04/2024
+ downloaded node.js
+ trying to install node.js

24/04/2024
+ doing javascript codes and running them on terminal
+ bongihub/nodejs_codes/practice1.js
--- screenshot provided

25/04/2024
+ doing javascript codes and running them on terminal
+ bongihub/nodejs_codes/practice2.js
--- screenshot provided

26/04/2024
+ doing node.js code and running on terminal
+ installed chalk 
+ bongihub/nodejs codes/practice3.js

29/04/2024
+ completd bongihub/nodejs_code/practice3.js

30/04/2024
+ new mini node.js project bongihub/nodejs_code/practice4
+ installed mongoose
--- practice4/models/todo.js
--- practice4/routes/todo.js
--- app.js

02/05/2024
+ mini node.js project bongihub/nodes_code/practice5.js
---practicing using mangoose

03/05/2024
+ mini node.js project bongihub/nodes_code/practice6.js
+ installed axios
--- practice6 is about practicing using 

06/05/2024
+ mini node.js project bongihub/nodes_code/practice7
+ installed express
+ installed body-parser ejs
--- public(styles.css)
--- views (index.ejs, greet.ejs)
--- index.js

07/05/2024
+ mini node.js project bongihub/nodesjs_code/practice7
+ project7 not running properly
+ sscreenshots provided
+ trying to fix it so that it can run properly without errors

08/05/2024
+ still trying to fix the errors on project bongihub/nodesjs_code/practice7
+ couldn't solve the path error

09/05/2024
+ mini node.js project on bongihub/nodejs_code/practice8.js
+ guessing game

10/05/2024
+ mini node.js project on bongihub/nodejs_code/practice9.js
+ tic-tac-toe game

13/05/2024
+ mini node.js project on bongihub/nodejs_code/practice10.js
+ hangman game
+ hosting

