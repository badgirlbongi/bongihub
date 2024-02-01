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

