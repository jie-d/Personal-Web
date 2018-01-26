# Personal-Web
Archive commit - moving course project to GitHub

 • Using PHP includes to maintain a main navigation bar that links to all the explicit pages and highlight the current page
 
 • Implemented CSS architecture pattern SMACSS
 
 • Consists four webpages in the personal website
 
    • Page 1: a long scroll homepage that showcases a few of my accomplishments from school
       a. Section 1 is implemented with Z-pattern
       b. Section 2 is implemented with F-pattern
       
    • Page 2: a portfolio page with thumbnails and	links of my previous course labs
       a. JavaScript powered plugin that highlights and links to my previous online labs
       b. Each lab follows the pattern: title, thumbnail, description and link		
       
    • Page 3: a contact-form page with a form that prompts users to write information to the database
       a. JavaScript validation (no plugins)
       b. HTML form that writes data to my MySQL database with fields: 
       Name(required), Email Address(required and validated), Phone Number(required), Message(TEXTAREA)
       
    • Page 4: the contact-form results (a hidden page - not linked from the navigation)
       a. HTML table (database-read.php) populated with data from the back end (MySQL database) 
       to display user information
