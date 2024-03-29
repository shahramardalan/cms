﻿--
-- Script was generated by Devart dbForge Studio for MySQL, Version 10.0.60.0
-- Product home page: http://www.devart.com/dbforge/mysql/studio
-- Script date 2/5/2024 4:46:53 PM
-- Server version: 10.4.28
--

--
-- Disable foreign keys
--
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

--
-- Set SQL mode
--
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

--
-- Set character set the client will use to send SQL statements to the server
--
SET NAMES 'utf8';

--
-- Set default database
--
USE cms;

--
-- Drop table `blogs`
--
DROP TABLE IF EXISTS blogs;

--
-- Drop table `menus`
--
DROP TABLE IF EXISTS menus;

--
-- Drop table `pages`
--
DROP TABLE IF EXISTS pages;

--
-- Drop table `users`
--
DROP TABLE IF EXISTS users;

--
-- Set default database
--
USE cms;

--
-- Create table `users`
--
CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(50) NOT NULL,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP,
  updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 8,
AVG_ROW_LENGTH = 2730,
CHARACTER SET utf8mb3,
COLLATE utf8mb3_general_ci,
ROW_FORMAT = DYNAMIC;

--
-- Create table `pages`
--
CREATE TABLE pages (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(50) DEFAULT NULL,
  slug varchar(255) DEFAULT NULL,
  content longtext DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 12,
AVG_ROW_LENGTH = 8192,
CHARACTER SET utf8mb3,
COLLATE utf8mb3_general_ci,
ROW_FORMAT = DYNAMIC;

--
-- Create table `menus`
--
CREATE TABLE menus (
  id int(11) NOT NULL AUTO_INCREMENT,
  page_id int(11) DEFAULT NULL,
  name varchar(50) DEFAULT NULL,
  created_at timestamp NULL DEFAULT CURDATE(),
  updated_at timestamp NULL DEFAULT CURDATE(),
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 7,
AVG_ROW_LENGTH = 4096,
CHARACTER SET utf8mb3,
COLLATE utf8mb3_general_ci,
ROW_FORMAT = DYNAMIC;

--
-- Create table `blogs`
--
CREATE TABLE blogs (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(50) DEFAULT NULL,
  category varchar(255) DEFAULT NULL,
  content longtext DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 9,
AVG_ROW_LENGTH = 16384,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_general_ci,
ROW_FORMAT = DYNAMIC;

-- 
-- Dumping data for table users
--
INSERT INTO users VALUES
(2, 'Shahram Ardalan', 'ardalan.shahram@gmail.com', '$2y$13$lFszO0.jU0SErUIzccf6V.EZ6jPt8r5V0yWtYYUpxNEtsZMhDsi0K', '2024-01-09 21:20:52', '2024-01-09 21:20:52'),
(3, 'Shahram Ardalan', 'ardalan.shahram@gmail.com', '$2y$13$0nMAa.QE8BXKwfF11qUki.7peu1S/o.AdzDgPelwLyM1geWqAwMUe', '2024-01-15 15:57:21', '2024-01-15 15:57:21'),
(4, 'Pooneh Aslani', 'pooneh.aslani@gmail.com', '$2y$13$e5oVsY62xWm1qIN9rWL6..Q/o5bBVKv/HDiubqUAb7Fbv0J85Ws5S', '2024-02-01 11:24:09', '2024-02-01 11:24:09'),
(5, 'Anita Ardalan', 'anita.ardalan@gmail.com', '$2y$13$MlkWsH2vcW9A6jGtLGC5WuvP1KekZFSp53AvBWTj5jOvCXDlic7jm', '2024-02-01 12:10:49', '2024-02-01 12:10:49'),
(6, 'Behnam Nazarian', 'behnam@gmail.com', '$2y$13$PdpvEaRiPADsTRkL3EBJiuTkmzowWNis9YChpo2HUgOccgJKGbeNq', '2024-02-01 13:51:50', '2024-02-01 13:51:50'),
(7, 'Roza Alizadeh', 'roza@gmail.com', '$2y$13$ODGfUDvbOF1bYUjNAYj/M.pnFFS2RrtLg6W7tZbLYwDzaGF/Q2pku', '2024-02-01 13:55:45', '2024-02-01 13:55:45');

-- 
-- Dumping data for table pages
--
INSERT INTO pages VALUES
(1, 'about', 'about', '<ul><li>The buttons on the toolbar are described below.<ul><li><strong>Undo</strong> - Undo the last action or text edit</li><li><strong>Redo</strong> - Redo the last action or text edit</li><li><strong>Print</strong> - Print the current text document</li><li><strong>Word Wrap</strong> - Toggle the current word wrap mode. Cycles between word wrap on, word wrap to edge of editor, and word wrap to the print margin, if defined.</li><li><strong>Line Numbers</strong> - Toggle whether line numbers are displayed on the side of the editor.</li><li><strong>Print Margin</strong> - Toggle whether the print margin is displayed. Cycles between displayed at 80 characters, displayed at 100 characters, and off.</li><li><strong>Tab Mode</strong> - Toggle the tab mode. Cycles between hard tabs, soft tabs with 2 spaces, and soft tabs with 4 spaces.</li><li><strong>Whitespace characters</strong> - Toggles whether "invisible" whitespace characters are shown, for example, tab markers, spaces between words and carriage returns (line breaks).</li><li><strong>Font size</strong> - Cycles through font sizes ranging from 10px font size to 24px font size.</li><li><strong>Theme</strong> - Cycles through "light" theme, "dark" theme, and "blue" theme.</li><li><strong>Find and Replace</strong> - Finds the specified text on the page, optionally replacing one or more occurrences with a new text value.</li><li><strong>Go to Line</strong> - Jumps to the specified line number in the text document.</li><li><strong>Download</strong> - Downloads a copy of the text file to your browser.</li><li><strong>Open in Drive</strong> - Opens the text file in Google Drive.</li></ul></li></ul><div><br></div>', '2024-01-15 16:25:19', '2024-01-15 16:25:19'),
(3, 'home', 'home', '<ul><li>The buttons on the toolbar are described below.<ul><li><strong>Print</strong> - Print the current text document</li><li><strong>Word Wrap</strong> - Toggle the current word wrap mode. Cycles between word wrap on, word wrap to edge of editor, and word wrap to the print margin, if defined.</li><li><strong>Line Numbers</strong> - Toggle whether line numbers are displayed on the side of the editor.</li></ul></li></ul><div><br></div>', '2024-01-15 18:07:19', '2024-02-03 07:46:05'),
(11, 'roza', 'meeting', '<div>test</div>', '2024-02-03 07:47:15', '2024-02-03 07:47:15');

-- 
-- Dumping data for table menus
--
INSERT INTO menus VALUES
(2, 1, 'about', '2024-01-20 00:00:00', '2024-01-20 00:00:00'),
(3, 3, 'home', '2024-01-20 00:00:00', '2024-01-20 00:00:00'),
(4, 1, 'About', '2024-02-02 20:00:28', '2024-02-02 20:00:28'),
(5, 3, 'test', '2024-02-02 20:48:47', '2024-02-02 20:48:47'),
(6, 11, 'roza', '2024-02-03 07:47:26', '2024-02-03 07:47:26');

-- 
-- Dumping data for table blogs
--
INSERT INTO blogs VALUES
(8, 'چرا گربه من همیشه گرسنه است؟', 'animals', '<h1 dir="rtl"><strong>چرا گربه من همیشه گرسنه است؟</strong></h1><div dir="rtl">در <a href="https://baranpet.com/blog/categories/cat-care">نگهداری از گربه</a></div><div dir="rtl">7 دی 140215:43</div><div dir="rtl">شما گربه تان را مانند فرزند تان دوست دارید و می خواهید مطمئن شوید که او شاد، راحت و سالم باشد. به‌عنوان والدین گربه، می‌دانید که اگر علائمی از تحریک یا بیماری داشت، او را مستقیماً نزد دامپزشک ببرید. با این حال، چیزی که مورد توجه قرار می گیرد، پرخوری است. شما مقدار غذای توصیه شده را به او می‌دهید، با این حال او همچنان به دنبال غذای بیشتر است. طمع او ممکن است بی ضرر به نظر برسد، اما در واقع چندین دلیل اساسی ناخوشایند وجود دارد که چرا او برای غذای بیشتر التماس می کند.<br><br></div><div dir="rtl"><strong>آنها انگل دارند</strong><br><br></div><div dir="rtl">ممکن است زمان سفر به دامپزشک باشد زیرا این احتمال وجود دارد که گربه شما انگل داشته باشد. این انگل‌های کوچک در روده حیوان خانگی شما زندگی می‌کنند و از غذای آن‌ها تغذیه می‌کنند و قبل از اینکه فرصتی برای هضم آن داشته باشند، تمام مواد غذایی را مصرف می‌کنند. این حالت به ناچار او را بدخلق، گرسنه و خواهان بیشتر می کند.<br><br></div><div dir="rtl">بیشتر گربه ها هیچ علامتی از آلودگی نخواهند داشت، اما در موارد شدید، در کنار افزایش گرسنگی، ممکن است استفراغ، موی کدرتر و وجود کرم در مدفوع او مشاهده کنید. تشخیص آنها کار سختی نیست<br><br></div><div dir="rtl"><strong>به گربه غذای اشتباهی می دهید</strong><br><br></div><div dir="rtl">به اطلاعات روی بسته بندی توجه کنید؛ برای مثال، یک گربه مسن و کم تحرک به انرژی کمتری نسبت به گربه جوان نیاز دارد، بنابراین مطمئن شوید که غذای مناسب برای نیازهای گربه خود را انتخاب می کنید.<br><br></div><div dir="rtl"><a href="https://baranpet.com/product/cat/food/wet">غذاهای مرطوب گربه</a> بیشتر سیر کننده و هستند تا خشک، بنابراین آن را انتخاب کنید. چون مقدار اضافی رطوبت دارد، می تواند به هیدراته نگه داشتن گربه شما کمک کند که به پیشگیری از مشکلاتی مانند عفونت های دستگاه ادراری کمک می کند. کنسرو و پوچ گربه سرشار از مواد مغذی و اغلب مقرون به صرفه‌تر از کیبل در درازمدت، گزینه‌های غذایی مرطوب زیادی وجود دارد که شکم گربه شما را برای مدت طولانی‌تری سیر نگه می‌دارد.<br><br></div><div dir="rtl"><strong>آنها زود خسته شده اند</strong><br><br></div><div dir="rtl">درست مانند انسان ها، گربه ها نیز می توانند تسلیم بی حوصلگی شوند و حتی از افسردگی رنج می برند. و درست مثل ما، وقتی احساس سیری می‌کنند، می‌توانند غذا بخورند، حتی اگر واقعاً گرسنه نباشند. با این حال نیازی به نگرانی نیست، کارهای زیادی وجود دارد که می توانید برای تقویت روحیه گربه خود انجام دهید.<br><br></div><div dir="rtl">مطمئن شوید که گربه شما اسباب بازی های زیادی دارد تا او را سرگرم کند و زمانی را برای بازی با او اختصاص دهید. حتی می توانید شام او را در یک کاسه آرام خور سرو کنید که او را مجبور می کند به آرامی غذا بخورد و مغزش را در حین غذا خوردن درگیر کند.<br><br></div><div><br></div>', '2024-02-05 07:55:59', '2024-02-05 07:55:59');

--
-- Restore previous SQL mode
--
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

--
-- Enable foreign keys
--
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;