![frodriFulp - GitHub Profile](https://raw.githubusercontent.com/frodriFulp/PHP-practic-SKILLS_UP/main/propuesta-logo-pfae.png)
# Online registration form - PHP Practice Part 2  

  

In this part of the exercise we are going to prepare the data to be sent to the database.  

The database is as follows: 

 

========================================================================= 

CREATE DATABASE newsletters_reg DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci; 

USE newsletters_reg; 

DROP TABLE IF EXISTS users_news_reg; 

/*!40101 SET @saved_cs_client     = @@character_set_client */; 

/*!40101 SET character_set_client = utf8mb4 */; 

CREATE TABLE news_reg ( 

  ID_reg int(11) NOT NULL AUTO_INCREMENT, 

  fullname varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL, 

  email varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL, 

  phone varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL, 

  address varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL, 

  city varchar(60) COLLATE utf8mb4_spanish_ci DEFAULT NULL, 

  state varchar(60) COLLATE utf8mb4_spanish_ci DEFAULT NULL, 

  zipcode varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL, 

  newsletters bit(3) DEFAULT NULL, 

  format_news bit(1) DEFAULT NULL, 

  suggestion varchar(1500) COLLATE utf8mb4_spanish_ci DEFAULT NULL, 

  PRIMARY KEY (ID_reg) 

) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci; 

========================================================================= 
 

Once you are clear about the formats in which the data are stored, make sure before sending them that:  

    - They have the right format to be stored in the database.   

    - Clean the values of unnecessary characters.   

 

For some reason we have been asked to save the "Newsletter" option in "BIT(3)" format. So you will have to find a way to convert or save the information with the appropriate values.   

   

**Once you have sent them, make sure that they have all arrived correctly.** 

 

The following directories must exist inside the folder used as a repository:  

**public** that contains: 

**css:** this will only contain the .css files used.  

**images**: if you have used any or added the favicon, if none of the above, add a favicon to your html (64x64).  

**js**: will contain the js in case you need or generate them for the exercise.  

The **index.php** file is that should be outside, in the root directory of public. 

 

**modules** that contains: 

**include:** will contain all the php files with functionalities.  

**require:** will contain all needed the php files with funcionalities. 

**templates:** will contain the php files that are static or only render html or css content. 

     

The **connection data** to the database must be in a php file named **connection.php** that must only have the data to create the connection, which requires it to be accessible for the rest of the php files that make a connection. The **data from the form** to sign up to the newsletter must be sent to the file **news_reg.php** where the code to collect and send the data to the database will be.  

  

Carry out the necessary checks to ensure that duplicate entries are not allowed.  

The "priority" data that should not have duplicates are:  

    - Full name   

    - Email   

    - Telephone number  