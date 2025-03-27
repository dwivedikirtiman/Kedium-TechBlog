## 📚 Kedium - A Tech Blog Platform

🌍 Overview

Kedium is a dynamic and user-friendly tech blog platform developed using the CodeIgniter PHP framework. This project allows users to read, create, and manage tech-related blogs efficiently. With a clean UI, responsive design, and user-focused experience, Kedium serves as an ideal platform for tech enthusiasts to share knowledge.

## 🔑 Key Technologies Used

- 🌐 CodeIgniter PHP Framework

- 💾 MySQL Database

- 🎨 HTML5, CSS3, Bootstrap

- ⚙️ AJAX & jQuery

- 🔒 PHP Sessions for Security


## 🚀 Features

- 📝 Create, Read, Update, and Delete (CRUD) operations for blog management.

- 📷 Image Management for blog posts with dynamic image uploads for each blog entry.

- 🎯 User-Friendly Dashboard for simplified blog and category management.

- 🔎 Search Functionality to find blogs efficiently.

- 🛡️ Secure User Panel with authentication for content control, only authorized user can add the blog and non-registered user will only be able to view the blogs on the site.

- 🗂️ Category Management for better content organization.

- 🖥️ Pagination Support to enhance blog browsing experience.

- 📈 Added a Trend and Statistics page to show the current Indian market detailed analysis in tech world.

- 💾 Database Integration using MySQL for scalable data handling.

- 🔄 Auto Image Resizing to maintain consistent blog visuals.

## 🗂️ File Structure

![image](https://github.com/user-attachments/assets/c3fa257d-101a-455e-a8d1-8efbd70ab99a)

```for better readibility please explore the project_structure.txt file, which has all the files structure in detailed manner```

## 🛠️ Setup Instructions

Follow these steps to set up the project on your local machine:

1️⃣ Download & Extract the Project

- Extract the provided ZIP file into your web server's root directory (e.g., htdocs for XAMPP/ Or www for WAMP).

2️⃣ Import Database

- Create a database named ```blogproject``` in MySQL.

- Import the ```blogproject.sql``` file from the project folder into the created database using phpMyAdmin.

3️⃣ Configure Database

- Open ```application/config/database.php``` and update the database details:

```
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'blogproject',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

```
4️⃣ Configure Base URL

  - Open ```application/config/config.php``` and update the base_url to:

   ```$config['base_url'] = 'http://localhost/Kedium/';```

But in any case if you want to change the name of the project from Kedium to something else then put this following code under your ```application/config/config.php```

```
$config['base_url'] = "http://".$_SERVER['HTTP_HOST'];
$config['base_url'] .= preg_replace('@/+$@','', dirname($_SERVER['SCRIPT_NAME'])).'/';
// $config['upload_path'] 		= realpath(FCPATH.'blogs');

```

5️⃣ Run the Project

- Start your local server (XAMPP/WAMP).

- Access the project via ```http://localhost/Kedium```


## 📋 Usage Guide

🏠 Homepage

- View recent blogs with featured images.

- Search for tech blogs using the search bar.

✍️ Creating a Blog

- registered users can log in and add new blog posts with categories and images.

🔄 Managing Blogs

- registered users can edit or delete existing blogs for efficient content management.

🔄 Managing Categories

- registered users can edit or delete existing Categories for efficient content management.

## Screentshots/Snapshots of final output

- Home Page
  ![image](https://github.com/user-attachments/assets/a868fe65-4110-4c1b-a02e-6362ae82f60f)

- Trends and Statistics Page
  ![image](https://github.com/user-attachments/assets/1ef61a1a-b0d1-4cfa-9456-c52c17de75f9)

- Categories Page
  ![image](https://github.com/user-attachments/assets/6ac39dd7-e77c-4a85-8a31-6eebffdcb3b9)

- Abot Page
  ![image](https://github.com/user-attachments/assets/1fef680b-496b-4f58-9e7d-a4641165ee7c)

- Serach By Categories functionality
  ![image](https://github.com/user-attachments/assets/de0b1de9-d460-478d-a1f1-206041cd734d)

- Sign-Up Page
  ![image](https://github.com/user-attachments/assets/014a4570-2e7d-45b6-84ce-f332a629f9e6)

- Login Page
  ![image](https://github.com/user-attachments/assets/81f8800f-e433-48f3-9224-142a2f2d3b6e)

- After Login Page
  ![image](https://github.com/user-attachments/assets/e6f50942-7370-4ff2-ba4f-664e3550d43f)

- Add Blogs Feature for registered user
  ![image](https://github.com/user-attachments/assets/ee6a6c08-4663-4600-b842-75c910637131)
  
- Registered User can create new Categories
  ![image](https://github.com/user-attachments/assets/9509d891-9949-44be-826e-c14aafc57037)

 
## 🧩 Future Enhancements (Suggestions/Optional)

- ✨ Add user registration and comment system for improved engagement.

- 📧 Integrate email notifications for new blog posts.

- 📈 Add blog analytics for better insights.

- 🖼️ Improve image optimization for faster load times.

- 🔔 Introduce real-time notifications for registered user alerts.

## 🤝 Contribution

Contributions are welcome! Feel free to fork this repository, create issues, and submit pull requests to improve the project.

## 👨‍💻 Author

**[Kirtiman Dwivedi]**

GitHub: https://github.com/dwivedikirtiman

Linkedin: https://www.linkedin.com/in/kirtiman-dwivedi/

Email: [dwivedikirtiman000@gmail.com]

Let’s connect—I’d love to hear your feedback! 🚀

