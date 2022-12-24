<?php
#2
$inputName = readline("Как Вас зовут?\n");
$inputAge = readline("Сколько Вам лет?\n");
echo "Вас зовут " .strtoupper($inputName) .', вам ' .strtoupper($inputAge) ." лет\n";



#3
$inputTask_1 = readline("Какая задача стоит перед вами сегодня?\n");
$inputTaskTime_1 = readline("Сколько примерно времени эта задача займет?\n");

$inputTask_2 = readline("Какая еще задача стоит перед вами сегодня?\n");
$inputTaskTime_2 = readline("Сколько примерно времени эта задача займет?\n");

$inputTask_3 = readline("А еще какая задача стоит перед вами сегодня?\n");
$inputTaskTime_3 = readline("Сколько примерно времени эта задача займет?\n");

$totalTaskTime = $inputTaskTime_1 + $inputTaskTime_2 + $inputTaskTime_3;

echo 
    "$inputName, сегодня у вас запланировано 3 приоритетных задачи на день:\n
        - $inputTask_1 ($inputTaskTime_1 ч) \n
        - $inputTask_2 ($inputTaskTime_2 ч) \n
        - $inputTask_3 ($inputTaskTime_3 ч) \n
        Примерное время выполнения плана = $totalTaskTime ч
    ";

