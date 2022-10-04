<?php
#2_1-5 ##########################

class Employee
{
    public $name;
    public $age;
    public $salary;
}

$test = new Employee();
$test->name = 'John';
$test->age = 25;
$test->salary = 1000;

$test2 = new Employee();
$test2->name = 'eric';
$test2->age = 26;
$test2->salary = 2000;

echo $test->salary + $test2->salary;//3000
echo '<br>';
echo $test->age + $test2->age;//51

#3_1 #########################

class User
{
    public $name;
    public $age;

    public function show()
    {
        return '!!!';
    }
}

$user = new User();
$user->age = 25;
$user->name = 'john';

echo $user->show();

#3_2 ########################

class User2
{
    public function show($str)
    {
        return $str.'!!!';
    }
}

$user = new User2();
echo $user->show('Hello World');

#4_1-7,11 #########################

class Employee4
{
    public $name;
    public $age;
    public $salary;

    public function getName()
    {
        return $this->name;
    }

    public function checkAge()
    {
        if ($this->age > 18) {
            return 'true';
        } else {
            return 'false';
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    #11
    public function doubleSalary()
    {
        return $this->salary * 2;
    }
}

$test = new Employee4();
$test->name = 'John';
$test->age = 25;
$test->salary = 1000;

$test2 = new Employee4();
$test2->salary = 2500;

echo $test->getName();//
echo '<br>';
echo $test->checkAge();
echo '<br>';
echo $test->getSalary() + $test2->getSalary();//3500
echo '<br>';
echo $test->doubleSalary();//2000

#4_7-10 ##########################

class User4
{
    public $name;
    public $age;

    // Метод для изменения имени юзера:
    public function setName($name)
    {
        $this->name = $name; // запишем новое значение свойства name
    }

    public function setAge($age)
    {
        if ($this->age >= 18) {
            $this->age = $age; //разрешит менять возраст
        } else {
            return $this->age; //не разрешит менять возраст
        }
    }
}

$user = new User4; // создаем объект класса
$user->name = 'john'; // записываем имя
$user->age = 15; // записываем возраст

// Установим новое имя:
$user->setName('eric');
$user->setAge(30);

// Проверим, что имя изменилось:
echo $user->name; // выведет 'eric'
echo '<br>';
echo $user->age;

#4_11-14 ##########################

class Rectangle
{
    public $height; //высота
    public $width; //ширина

    public function getSquare($height, $width)
    {
        $this->height = $height;
        $this->width = $width;

        return $height * $width;
    }

    public function getPerimeter($height, $width)
    {
        $this->height = $height;
        $this->width = $width;

        return $height * 2 + $width * 2;
    }
}

$rectangle = new Rectangle();
echo 'площадь: '.$rectangle->getSquare(20, 20);
echo '<br>';
echo 'периметр: '.$rectangle->getPerimeter(20, 20);

#5_1-3 ##########################

class User5
{
    public $name;
    public $age;

    // Метод для проверки возраста:
    public function isAgeCorrect($age)
    {
        if ($age >= 18 and $age <= 60) {
            return true;
        } else {
            return false;
        }
    }

    // Метод для изменения возраста юзера:
    public function setAge($age)
    {
        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    // Метод для добавления к возрасту:
    public function addAge($years)
    {
        $newAge = $this->age + $years; // вычислим новый возраст

        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge; // обновим, если новый возраст прошел проверку
        }
    }

    public function subAge($years)
    {
        $subAge = $this->age - $years;

        if ($this->isAgeCorrect($subAge)) {
            $this->age = $subAge;
        }
    }
}

$user = new User5;

$user->setAge(30); // установим возраст в 30
echo $user->age; // выведет 30
echo '<br>';
$user->setAge(10); // установим некорректный возраст
echo $user->age; // не выведет 10, а выведет 30
echo '<br>';
$user->addAge(2);//32
echo $user->age;
echo '<br>';
$user->subAge(2);//28
echo $user->age;

#6_1-6 ##########################

class Student6
{
    public string $name;
    public int $course;

// метод переводит студента на следующий курс
    public function transferToNextCourse():bool|int
    {
        if ($this->isCourseCorrect()) {
            return $this->course++;
        } else {
            return false;
        }
    }

// проверка курсов от 1 до 5
    private function isCourseCorrect():bool
    {
        if ($this->course >= 1 and $this->course < 5) {
            return true;
        } elseif ($this->course < 1) {
            return false;
        } else {
            echo 'Курс студента больше чем 5 курс, ваш курс ';

            return false;
        }
    }
}

$student = new Student6;
$student->name = 'Вася';
$student->course = 10;

$student->transferToNextCourse();
echo $student->course;

#7_1-4 ######################

class Employee7
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$eric = new Employee7('eric', 25, 1000);

$kyle = new Employee7('kyle', 30, 2000);

echo $eric->salary + $kyle->salary;

#8_1-4 ###################

class Employee8
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    private $salary;

    public function getSalary()
    {
        return $this->salary.'$';
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    private function isAgeCorrect($age)
    {
        return $age >= 1 and $age <= 100;
    }
}

$user = new Employee8;
// Установим возраст:
$user->setAge(58);
// Прочитаем новый возраст:
echo $user->getAge(); // выведет 58
echo '<br>';
$user->setSalary(1000);
echo $user->getSalary();


#9_1-2 #################

class Employee9
{
    private $name; //доступно только для чтения,
    private $surname; //доступно только для чтения,
    private $salary;//и для чтения и для записи.

// Конструктор объекта:
    public function __construct($name, $surname, $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary):void
    {
        $this->salary = $salary;
    }

}

$user = new Employee9('john', 'dobkin', 1000); // создаем объект с начальными данными

// Имя можно только читать, но нельзя поменять:
echo $user->getName().'<br>'; // выведет 'john'
echo $user->getSurname().'<br>'; // выведет 'dobkin'

// Возраст можно и читать, и менять:
echo $user->getSalary().'<br>'; // выведет 1000
$user->setSalary(2500); // установим зарплату 2500
echo $user->getSalary().'<br>'; // выведет 2500

#11_1-3 #################
class City
{
    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}

$cities = [
    new City('Kiev', '21m'),
    new City('Praha', '15m'),
    new City('Hlukhov', '30k'),
    new City('Sumy', '300k'),
    new City('Konotop', '100k')
];

// Переберем созданный массив циклом:
foreach ($cities as $city) {
    echo $city->name . ' ' . $city->population . '<br>';
}

#12_1-2 #######################

class Student
{
    private string $name;
    private int $course;

    /**
     * @param string $name
     * @param int    $course
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->course = 1;
    }

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getCourse():int
    {
        return $this->course;
    }

    public function transferToNextCourse()
    {
        if ($this->course<5){
            $this->course++;
        }

    }
}

$student = new Student('john'); // создаем объект класса

echo $student->getCourse().'<br>'; // выведет 1 - начальное значение
$student->transferToNextCourse(); // переведем студента на следующий курс -2
$student->transferToNextCourse(); // переведем студента на следующий курс -3
$student->transferToNextCourse(); // переведем студента на следующий курс -4
$student->transferToNextCourse(); // переведем студента на следующий курс -5
$student->transferToNextCourse(); // переведем студента на следующий курс -5
echo $student->getCourse(); // выведет 5


#13_1-2  ######################

class Arr
{
    public array $number = [1, 2];

    public function add($var):void
    {
        $this->number = array_merge($this->number, $var);
    }

    public function getAvg():float|int
    {
        $sum = array_sum($this->number);
        $count = count($this->number);

        return $sum / $count;
    }
}

$arr = new Arr;
$arr->add([3, 4, 5, 6]);
var_dump($arr->number); //вывод массива
echo $arr->getAvg().'<br>'; //вывод среднего арифметического

#14_1-2 ################

class City14
{
    public $name;
    public $foundation;
    public $population;

    /**
     * @param $name
     * @param $foundation
     * @param $population
     */
    public function __construct($name, $foundation, $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }

}

$city = new City14('Kiev', 998, '10m');
$props = 'name';
echo $city->$props.'<br>';
echo $city->foundation;

#14_3 #############################

class User14
{
    public $surname; // фамилия
    public $name; // имя
    public $patronymic; // отчество

    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
}

$user = new User14('Иванов', 'Иван', 'Иванович');

$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]}.' '.$user->{$props[1]}.' '.$user->{$props[2]};

#15_1 ############################

class User15
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$user = new User15('john', 21);

//$methods = ['getName', 'getAge'];
//echo $user->{$methods[0]}(); // выведет 'john'
$methods = ['method1' => 'getName', 'method2' => 'getAge'];
echo $user->{$methods['method1']}();
echo $user->{$methods['method2']}();

#16_1 ###########################

class Arr16
{
    private array $numbers = [];

    /**
     * @param array $numbers
     */
    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * @return void
     */
    public function add(array $numbers):void
    {
        $this->numbers[] = $numbers;
    }

    public function getSum():float|int
    {
        return array_sum($this->numbers);
    }
}

$arr = new Arr16([1,2,3]);
echo $arr->getSum();

#17_1 ########################

class Arr17
{
    private $numbers = [];

    public function add($numbers)
    {
        $this->numbers[] = $numbers;
        return $this;
    }

    public function push($numbers)
    {
        $this->numbers = array_merge($this->numbers , $numbers);
        return $this;
    }

    public function getSum ()
    {
        return array_sum($this->numbers);
    }
}

$arr = new Arr17; // создаем объект

echo $arr->add(1)->add(2)->push([3, 4])->getSum(); // выведет 10
var_dump($arr);

#18_1 ########################

class ArraySumHelper18
{
    public function calcSqrt3($num)
    {
        return $this->calcSqrt($num, 3);
    }

    private function calcSqrt($num, $power)
    {
        return pow($num, 1 / $power);
    }
}

$arraySumHelper = new ArraySumHelper18;
echo $arraySumHelper->calcSqrt3(27); //3

#19_1-2 ################
class User19
{
    private $name;
    private $age;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name):void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age):void
    {
        $this->age = $age;
    }

}


class Student19 extends User19
{
    private $course;

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course):void
    {
        $this->course = $course;
    } // курс
}

class StudentBSU19 extends Student19
{
    private $group;

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $group
     */
    public function setGroup($group):void
    {
        $this->group = $group;
    }

}

$studentBSU = new StudentBSU19;
$studentBSU->setGroup(3);
$studentBSU->setName('Vasya');
echo $studentBSU->getName();
echo $studentBSU->getGroup();

#19_3 ###################

class Employee19 extends User19
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}

class Programmer19 extends Employee19
{
    private $langs = [];

    /**
     * @return array
     */
    public function getLangs():array
    {
        return $this->langs;
    }

    /**
     * @param array $langs
     */
    public function setLangs(array $langs):void
    {
        $this->langs = $langs;
    }

}
$programmer = new Programmer19;
$programmer->setLangs(['ru', 'en', 'ua']);
var_dump($programmer->getLangs());

#19_4 #########################

class Driver19 extends Employee19
{
    private $experience;
    private $category;

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience):void
    {
        $this->experience = $experience;
    }


    public function getCategory()
    {
        return $this->category;
    }


    public function setCategory($category):void
    {
        $this->category = $category;
    }

}

$driver = new Driver19;
$driver->setName('Roman');
$driver->setExperience(22);
$driver->setCategory('A');
echo $driver->getName().' '.$driver->getExperience().' '.$driver->getCategory();

#20_1 #######################

class User20
{
    private $name;
    protected $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

class Student20 extends User20
{
    private $course;

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course):void
    {
        $this->course = $course;
    }

    public function addOneYear()
    {
        $this->age++;
    }

}

$student = new Student20();

$student->setAge(30);
$student->addOneYear();
echo $student->getAge();//31


#21_1-2  ##########################

class User21
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age >= 18) {
            $this->age = $age;
        }
    }
}

class Student21 extends User21
{
    private $course;

    public function setAge($age)
    {
        // Если возраст меньше или равен 25:
        if ($age <= 25) {
            // Вызываем метод родителя:
            parent::setAge($age); // в родителе выполняется проверка age >= 18
        }
    }

    public function setName($name)
    {
        if (strlen($name) > 3 && strlen($name) < 10) {
            parent::setName($name); // TODO: Change the autogenerated stub
        }
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}

$student = new Student21;

$student->setAge(24);    // укажем корректный возраст
echo $student->getAge(); // выведет 24 - возраст поменялся

$student->setAge(17);    // укажем некорректный возраст
echo $student->getAge(); // выведет 24 - возраст не поменялся

$student->setName('Alllaaddddda');//длинное имя не выведется
echo $student->getName();


#22_3-5 ################

class User22
{
    private string $name;
    private string $surname;
    private mixed $birthday;
    private int $day;
    private int $month;
    private int $year;

    public function __construct($name, $surname, $year, $month, $day)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getSurname():string
    {
        return $this->surname;
    }

    /**
     * @return int
     */
    public function getDay():int
    {
        return $this->day;
    }

    /**
     * @return int
     */
    public function getMonth():int
    {
        return $this->month;
    }

    /**
     * @return int
     */
    public function getYear():int
    {
        return $this->year;
    }

    /**
     * @return mixed
     */
    public function getBirthday():mixed
    {
        return $this->birthday = $this->year.'-'.$this->month.'-'.$this->day;
    }

    public function calculateAge()
    {
        if (
            $this->month >= date('m')

            && $this->day > date('d')
        ) {
            return 'Еще не прошел день рождения, вам '.(date('Y') - $this->year - 1).' лет';
        } elseif (
            $this->month == date('m')
            && $this->day == date('d')
        ) {
            return 'Поздравляю у вас сегодня день рождения! Вам '.date('Y') - $this->year.' лет';
        } else {
            return 'В этом году уже был день рождения, вам '.date('Y') - $this->year.' лет';
        }
    }
}

$user = new User22('Roman', 'Ko', 1974, 10, 20);

echo $user->getName().'<br>';
echo $user->getSurname().'<br>';
echo $user->getBirthday().'<br>';
echo $user->calculateAge().'<br>';

