

<!--1. Создать форму регистрации участников конференции: (10 баллов)

Имя (должны быть указаны полностью фамилия, имя и отчество), 
контактный телефон,
адрес электронной почты, 
список с секциями конференции (математика, физика, информатика)
дата рождения
доклад (переключатель), 
если есть доклад – то отображается поле для ввода темы. -->
<?php
$title = "Физико-Математическая Научная Конференция";
include_once("components/head.php");

include_once("components/header.php"); 

if(isset($_POST['user_name']) && isset($_POST['tel_number']))
{
$user_name=$_POST['user_name'];
$tel_number=$_POST['tel_number'];
$email=$_POST['email'];
$section=$_POST['section'];
$date_birth=$_POST['date_birth'];
$speaker=$_POST['speaker'];
$theme=$_POST['theme'];
include_once("bd_config.php"); 
    $sql = "INSERT INTO users(user_name, tel_number, email, section, date_birth, speaker, theme) VALUES ('$user_name', '$tel_number', '$email', '$section', '$date_birth', '$speaker', '$theme')"; 
       $result =  $mysqli->query($sql);
       header('Location: /user.php');
}
?>   



<body>
    
        
    <main>
        <div class="container">  
            <ul class="flex-outer">
            
            
        <h2>
                Регистрация на конференцию
            </h2>
            <form  action="Registration_form.php" method="post">
                <!-- Имя (должны быть указаны полностью фамилия, имя и отчество), -->
                <div class="form-group row">
                    <label for="user_name" class="col-sm-5 col-form-label">Фамилия, имя и отчество полностью</label>
                    <div class="col-sm-7">
                    <input type="text"  class="form-control" name="user_name" id="user_name" required 
                        placeholder="Иванов Иван Иванович"
                        pattern="[А-Я][а-я -]+[А-Я][а-я -]+[А-Я][а-я -]+">
                </div>
            </div>
                
                <!-- контактный телефон, только цифры, длина 11 символов, первые два символа +7
                адрес электронной почты,  -->
                <div class="form-group row">
                    <label for="tel_number" class="col-sm-5 col-form-label">Номер телефона </label>
                    <div class="col-sm-7">
                    <input type="tel"  class="form-control" name="tel_number" id="tel_number" required 
                    placeholder="+7*********"
                        pattern="[+][7][0-9]{9}">
                </div>
            </div>
                
                <div class="form-group row">
                    <label for="email" class="col-sm-5 col-form-label">Адрес электронной почты </label>
                    <div class="col-sm-7">
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
            </div>
                <!--дата рождения-->
                <div class="form-group row">
                    
                    <label for="date_birth" class="col-sm-5 col-form-label" >Дата рождения </label>
                    <div class="col-sm-7">
                    <input type="date" name="date_birth" class="form-control" id="date_birth">
                </div>
                </div>

                <!-- список с секциями конференции (математика, физика, информатика) -->
                <div class="form-group row">
                <label for="section" class="col-sm-5 col-form-label" >Выберите секцию </label>
                <div class="col-sm-7">
                <select name="section" id="section" class="form-control"  required>
                    
                    <option value="Математика">Математика</option>
                    <option value="Физика">Физика</option>
                    <option value="Информатика">Информатика</option>

                </select>
            </div>
            </div>
                <!-- доклад (переключатель), -->
                
                <div class="form-group row">
                    <div class="col-sm-5">Доклад</div>
                    <div class="col-sm-7">
                        <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="speaker" id="speaker" onclick="showMe('div_hide')">
                </div>
                </div>
                </div>
            
                

                <!-- если есть доклад – то отображается поле для ввода темы. -->
                <div class="form-group row" id="div_hide" style="display:none">
                   
                        <label for="theme" class="col-sm-5 col-form-label">Тема доклада: </label>
                        <div class="col-sm-7">
                    
                    <textarea name="theme" class="form-control" id="theme" cols="15" rows="3">
                    </textarea>
                </div>
            </div>
                <script src="JS.js"></script>
               <!--  <fieldset class="form-group">
                    <div class="row">
                    <label for="check" class="col-form-label col-sm-5 pt-0">Формат участия:</label>
                    <div class="col-sm-7">
                        <div class="form-check">
                    <input type="radio"  class="form-check-input" checked value="очное" name="check" id="regular"><label for="check" class="form-check-label" >Очная Форма</label><br>
                    <input type="radio"  class="form-check-input" value="дистанционное" name="check" id="remote"><label for="check" class="form-check-label" >Дистанционная Форма</label><br>
                    <input type="radio"  class="form-check-input" value="смешанное" name="check" id="mixed"><label for="check" class="form-check-label" >Смешанная Форма</label>
                </div>-->
            </div>
        </div>
        </fieldset>
    </div>
            
                <div class="clear"></div>
                <div class="col text-center">
                
                   
                    <button type="submit" class="btn btn-outline-primary">Регистрация</button>
                  
                </div>
            </ul>
            </form>
        </div>
        
    <div class="clear"></div>


    </main>
    <?php
        include_once("components/footer.php");
        ?>
    </html>
