# 4BLOG
Development of a content management system (CMS) based on the Model View Controller (MVC) architecture. *4BLOG* is a fake blog where writers can publish their articles and get new followers without depending on their own website domain.

## Getting Started 🚀
Clone *4BLOG* from Github:
```bash
git clone git@github.com:RafaelRamosR/cms-blog.git
```
Activate Apache (port 80) and MySQL (port 3306) services on your local server.

Finally, enter the main project address `http://localhost/cms/home`

**Note:** Read *installation* for a more detailed description of the process.

### Pre-requisitos 📋
- **Application Server:** PHP version 7.2 or higher.  
- **Database:** MySQL/MariaDB 5.5.3 or higher.  
- **Operating System:** Linux/Unix (Red Hat, CentOS, Debian, FreeBSD, Mandrake, Mac OS, etc.), Windows.  
- **Web Server:** Apache with mod_php.  
- **URL rewriting extension module:** Apache.  
- **Specific Requirement:** The server has to be connected to the Internet to view some icons and images.

### Installation 🔧
Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo ejecutandose
1. Clone *4BLOG* from Github:
```bash
git clone git@github.com:RafaelRamosR/cms-blog.git
```
2. Move the repository to the htdocs folder on your local server. In the case of *XAMPP* its directory is `C:/xampp/htdocs`.

3. Review the `httpd.conf` file and verify that the `AllowOverride` value is always `All`, read the following [article](https://www.neoguias.com/habilitar-el-modulo-rewrite-en-wamp-y-xampp/) for more information.

4. Activate APA and MySQL services on ports 80 and 3306, respectively.

5. If necessary, modify the global variables `DB_HOST`, `DB_USER`, `DB_PASSWORD` and `DB_NAME` located in the `app/config/config.php` file to change the connection data to the database.

6. Finally, enter the main URL of the project `http://localhost/cms/home`

## Contributing to 4BLOG
4BLOG is open-source software, freely distributable under the terms of an [MIT - style license](https://opensource.org/licenses/MIT). The [source code](https://github.com/RafaelRamosR/cms-blog) is hosted on GitHub.

We welcome contributions in the form of bug reports, pull requests, or thoughtful discussions in the [GitHub issue tracker](https://github.com/RafaelRamosR/cms-blog/issues). Please see the Code of Conduct for our pledge to contributors.

### Building From Source 🛠️
4BLOG is built primarily in pure PHP, plus javascript code and libraries.

- Chartjs v2.8.0 - Simple, clean and engaging HTML5 based JavaScript charts.  
- Ionicons v4.0.0 - Icon pack.  
- Bootstrap v4.5.0 - Framework CSS.  
- Trix v1.2.3 - WYSIWYG editor for writing articles.

### Pull Requests 🖇️
Only commit changes to 4BLOG source and leave the version unchanged.

### Authors ✒️
4BLOG was created by [Rafael R. Ramos R.](https://github.com/RafaelRamosR), however, new creators are authors.

### Licencia 📄
This project is licensed MIT - See the LICENSE.md file for details.
