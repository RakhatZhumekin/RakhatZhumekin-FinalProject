# Final Project

This project is made for the INF-232 course as the final project submission. It was made via Laravel and MySQL.

## Description

The project simulates a social media, with the functionality to add users, posts, as well as see all users and posts.

Some screenshots:

![Screenshot_7](https://user-images.githubusercontent.com/75520711/114865838-a5047780-9e14-11eb-9389-20e997219108.png)

![Screenshot_8](https://user-images.githubusercontent.com/75520711/114865858-ae8ddf80-9e14-11eb-9ec3-d0149958f34c.png)

![Screenshot_9](https://user-images.githubusercontent.com/75520711/114865871-b2216680-9e14-11eb-83b3-2a2337f0b09d.png)

![Screenshot_10](https://user-images.githubusercontent.com/75520711/114865885-b51c5700-9e14-11eb-95a0-6ba7dd7c58b3.png)

## ER-Diagram

The project uses two tables: profiles and posts. They have a one-to-many relationship, as a user/profile can make many posts, whereas a post can only be made by one person.
Both profile and post have a primary key ID, post also has a foreign key which references the author's profile id.

![Screenshot_3](https://user-images.githubusercontent.com/75520711/114865112-a2ede900-9e13-11eb-9a51-2cf148ab61e6.png)

## Mail sending

The site also has a mail sending functionality, where a user can send a mail to the creator of the project, filling out the sender name and the message.

![Screenshot_4](https://user-images.githubusercontent.com/75520711/114865384-fc561800-9e13-11eb-8f8a-ff7a319db0c3.png)

## Localization

The site supports two languages, those being English and Russian. You can switch between them by changing the URL.

English:

![Screenshot_5](https://user-images.githubusercontent.com/75520711/114865558-3a533c00-9e14-11eb-8f55-e812ff2d571a.png)

Russian:

![Screenshot_6](https://user-images.githubusercontent.com/75520711/114865569-3e7f5980-9e14-11eb-8a47-66b19f9da890.png)
