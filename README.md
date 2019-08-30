This software is deprecated and I won't be supporting the development any further. Installation
You can find step by step installation of my blog software below.
## Step 1
### Create a database with the name of *blog*
### OR YOU CAN EDIT THE CONFIG FILE (see step 5)

## Step 2
### Create a table and call it *blog_posts*
#### Below are the details of the table
![blog_posts](https://i.gyazo.com/565fab096f5cc6e87345496f75c4a135.png)

## Step 3
### Create a table and call it *blog_members*
#### Below are the details of the table
![blog_members](https://i.gyazo.com/f022725c9fbebe62cd0fad1c00fa78ab.png)

## Step 5
### Edit the config file in order to change database user and password
#### Navigate to *./includes/config.php*
<ul>
 <li><b>DBHOST</b> is usually the localhost for applications at this scale.</li>
 <li><b>DBUSER</b> is database user - <b>DBPASS</b> is database password which is assigned to <b>DBUSER</b>.</li>
 <li><b>DBNAME</b> is the database name. You can edit this to have a different database name than just <b>blog</b></li>
 </ul>

## Step 4
### Upload the oldBlog software to your server.
