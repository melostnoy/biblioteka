<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
<head>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
    <title>BIBLIOTEKA</title>
    <meta name="description" content="Описание" />
    <meta name="keywords" content="ключевые слова" />
    <link rel="stylesheet" href="css/main.css" charset="utf-8" />
</head>
 
<body>
    <div id="content">
        <div id="header">
            <h2>Шапка БИБЛИОТЕКИ</h2>
        </div>
    </div>
    <hr />
    <div id="maincontent">
        <div id="left">
            <h2>Жанры</h2>
            <ul>
                <li>
                    <a href="#">Фантастика</a>                    
                </li>
                <li>
                    <a href="#">Детектив</a>
                </li>
                <li>
                    <a href="#">Бизнес</a>
                </li>
                <li>
                    <a href="#">Программирование</a>
                </li>
                <li>
                    <a href="#">Приключения</a>
                </li>
                <li>
                    <a href="#">Исторические</a>
                </li>
            </ul>
            <h2>Вход на сайт</h2>
            <form name="auth" action="#" method="post">
                <table>
                    <tr>
                        <td>Логин</td>
                        <td>
                            <input type="text" name="login"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Пароль</td>
                        <td>
                            <input type="password" name="password"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" name="auth" value="Войти"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <a href="#">Зарегистрироваться</a>
                        </td>
                    </tr>
                </table>
            </form>
            
        </div>
        <div id="right">
            <form name="search" action="#" method="get">
                <p>
                    Поиск: <input type="text" name="words" />
                </p>
                <p>
                    <input type="submit" name="search" value="искать" />
                </p>
            </form>
            <h2>Реклама</h2>
            <div class="banner">Тут код баннера</div>
            <div class="banner">Тут код баннера</div>            
            
        </div>
        <div id="center">
            <h1>Регистрация</h1>
            <div id="reg">
                <form name="reg" action="#" method="post">
                   <table>
                    <tr>
                        <td>Логин</td>
                        <td>
                            <input type="text" name="login"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Пароль</td>
                        <td>
                            <input type="password" name="password"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <img src="captcha.php" alt="Каптча" />
                        </td>
                    </tr>
                    <tr>
                        <td>Проверочный код</td>
                        <td>
                            <input type="text" name="captcha"/>
                        </td>
                    </tr>   
                    <tr>                        
                        <td colspan="2" align="right">
                            <input type="submit" name="reg" value="Зарегистрироваться"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <a href="#">Зарегистрироваться</a>
                        </td>
                    </tr>
                </table>  
                </form>
            </div>
                
            <div class="clear"></div>
            <hr />
            <div id="footer">
                <p>Все права защищены &copy; 2014</
            </div>
        </div>     
        
        
        
    </div>
    
</body>
    
    
    
    
<?php



?>








</html>