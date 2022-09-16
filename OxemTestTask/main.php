<?php
 require_once 'Farm.php';
 $chicken = new Chicken();
 $cow = new Cow();
 $num=1;
 $allChickenProd=0;
 $allCowProd=0;
$arrChicken =[];
$arrCow=[];
for ($i=1; $i <= 20; $i++) { 
    array_push($arrChicken,['name' => $num]);
    $num++;
}
for ($i=1; $i <=10 ; $i++) { 
    array_push($arrCow,['name' => $num]);
    $num++;
}
while(true)
{
echo "Коров в хлеву:".count($arrCow)."\n";
echo "Куриц в хлеву:".count($arrChicken)."\n";

echo "1)Cобрать продукцию(за неделю)\n",
"2) Купить на рынке 5 куриц и 1 корову\n",
"3) Добавить 1 курицу\n",
"4) Добавить 1 корову\n",
"5) Показать собраную продукцию за все время\n";
$a = readline();
switch ($a) {
    case '1':
        $chickenProdWeek=$chicken->Gather($arrChicken);
        $cowProdWeek=$cow->Gather($arrCow);
        $allChickenProd+=$chickenProdWeek;
        $allCowProd+=$cowProdWeek;
        popen('cls', 'w');
        echo "Яиц за неделю ".$chickenProdWeek." шт.\n";
        echo "Молока за неделю  ".$cowProdWeek." л.\n";
        readline("Нажмите для продолжения");
        popen('cls', 'w');
        break;
    case '2':
            $num = $chicken->AddAnimals($num,$arrChicken,5);
            $num = $cow->AddAnimals($num,$arrCow,1);
            popen('cls', 'w');
        break;
        case '3':
            $num = $chicken->AddAnimals($num,$arrChicken,1);
            popen('cls', 'w');
        break;
        case '4':
            $num = $cow->AddAnimals($num,$arrCow,1);
            popen('cls', 'w');
        break;
        case 5:
            popen('cls', 'w');
            echo "Яиц за все время собрано:".$allChickenProd."шт.\n";
            echo "Молока за все время собрано:".$allCowProd."л.\n";
            readline("Нажмите для продолжения");
            popen('cls', 'w');
            break;
    default:
        popen('cls', 'w');
        echo "Такой команды нет\n";
        readline("Нажмите для продолжения");
        popen('cls', 'w');
        break;
}
}
?>
