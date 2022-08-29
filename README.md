"# nyasamobile" 
#Tools
- MySQL Database
- PHP >V7
#How To deploy
1. Create database with name `nyasamobile`
2. Dump/Import /database/nyasnrku_website.sql to the database created above.

#Edit Database Config Details
1. Open /application/config/database.php with any editor
2. Go to line 79, and replace `root` with database username
3. Go to line 80 and add Password for the database
4. Save and exit. 


#Update Index.php
- Once all updates are done and tested: 
1. Open /index.php
2. Go to line 56 and rename `development` to `production` and save. 


Congratulations!!
