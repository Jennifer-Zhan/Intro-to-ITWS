IA of my site: I put index.php, loadData.php, and project.php in the root of my finalExam folder, and all the css, javascript, and photos in the resources folder.
finalExam folder is in the root of iit, and every lab is in their own seperate folder in the root of iit.
Logic of my site: I create a table called projectList in the database and store all my lab data inside the database including name, description, and url. 
I write loadData.php which is included in the index.php to make up a form that displays on my homepage and could insert data to the database through the form.
There is a link on the homepage which displays "My Projects" and could goes directly to my project page.
In the project.php, I use php to read from the database, and make a list of all my labs. 
By clicking the lab name in the list, we could go to the page of each lab.