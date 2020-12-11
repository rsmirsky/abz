Задание https://drive.google.com/file/d/1zUC2D72mGqSip5-3zvKJYGMsd7-KEfHG/view


DB

Employees
id
name
position
date_of_emp
phone
email
salary
photo
position_id (id Position)
head_id 




Position
id
name 

admin_id


$table->id();
            $table->string('name');
            $table->string('position');
            $table->string('date_of_employment');
            $table->string('phone');
            $table->string('email');
            $table->string('salary');
            $table->string('photo');
            $table->string('position_id');
            $table->string('head_id');
            $table->timestamps();
