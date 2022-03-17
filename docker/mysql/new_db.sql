CREATE DATABASE IF NOT EXISTS `simulator`;
GRANT ALL ON `simulator`.* TO 'root'@'%';
GRANT ALL PRIVILEGES ON simulator.* TO 'simulator'@'%' IDENTIFIED BY 'simulator';
FLUSH PRIVILEGES;
