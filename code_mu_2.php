<?php
//require_once 'User.php';

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
    new City('Konotop', '100k'),
];

// Переберем созданный массив циклом:
foreach ($cities as $city) {
    echo $city->name.' '.$city->population.'<br>';
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
        if ($this->course < 5) {
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

$arr = new Arr16([1, 2, 3]);
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
        $this->numbers = array_merge($this->numbers, $numbers);

        return $this;
    }

    public function getSum()
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
    public string $name;
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

#22_6  ###########################

class Employee22 extends User22
{
    private int $salary;

    public function __construct($name, $surname, $year, $month, $day, $salary)
    {
        parent::__construct($name, $surname, $year, $month, $day);
        $this->salary = $salary;
    }

    /**
     * @return int
     */
    public function getSalary():int
    {
        return $this->salary;
    }
}

$user = new Employee22('Roman', 'Ko', 1974, 10, 20, 2000);

echo $user->getName().'<br>';
echo $user->getSurname().'<br>';
echo $user->getSalary().'$'.'<br>';
echo $user->getBirthday().'<br>';
echo $user->calculateAge().'<br>';

#23_1-3 ###################

class Product23
{
    public string $name;
    public int $price;
}

$product1 = new Product23;
$product1->price = 260;
$product2 = $product1;
echo $product1->price;
echo $product2->price;

#24_1-3

class SumHelper24
{
    // Сумма квадратов:
    public function getSum2($arr)
    {
        return $this->getSum($arr, 2);
    }

    // Сумма кубов:
    public function getSum3($arr)
    {
        return $this->getSum($arr, 3);
    }

    // Вспомогательная функция для нахождения суммы:
    private function getSum($arr, $power)
    {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }
}

class Arr24
{
    private $nums = [];
    private $sumHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper24;
    }

    // Находим сумму квадратов и кубов элементов массива:
    public function getSum23()
    {
        // Найдем описанную сумму:
        return $this->sumHelper->getSum2($this->nums) + $this->sumHelper->getSum3($this->nums);
    }

    public function add($number)
    {
        $this->nums[] = $number;
    }
}

class AvgHelper24
{
    private array $arr24;

    /**
     * @param $arrAvgSums
     */
    public function __construct($arr24)
    {
        $this->arr24 = $arr24;
    }

    public function getAvg():float|int
    {
        return array_sum($this->arr24) / count($this->arr24);
    }

    public function getMeanSquare():float|object|int
    {
        $sum = 0;
        foreach ($this->arr24 as $arr) {
            $sum += $arr ** 2;
        }

        return sqrt($sum / count($this->arr24));
    }

}

$avgHelper = new AvgHelper24([2, 4, 6, 8, 10]);
echo $avgHelper->getAvg();
echo '<br>';
echo $avgHelper->getMeanSquare();

#25_1-8

class Product25
{
    private $name;
    private $price;
    private $quantity;

    /**
     * @param $name
     * @param $price
     * @param $quantity
     */
    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getCost()
    {
        return $this->price * $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

}

class Cart25
{
    private array $products = [];

    public function add($products) //задание №4
    {
        $this->products[] = $products;
    }

    public function remove($var) //задание №5
    {
        array_splice($this->products, array_search($var, $this->products), 1);

        return $this->products;
    }

    public function getTotalCost() //задание №6
    {
        $sumCost = 0;
        foreach ($this->products as $product) {
            $sumCost += $product->getPrice();
        }

        return $sumCost;
    }

    public function getTotalQuantity() //задание №7
    {
        $sumQuantity = 0;
        foreach ($this->products as $product) {
            $sumQuantity += $product->getQuantity();
        }

        return $sumQuantity;
    }

    public function getAvgPrice() //задание №8
    {
        return $this->getTotalCost() / count($this->products);
    }

    public function get()
    {
        return $this->products;
    }
}

$cart = new Cart25;
$cart->add(new Product25('beer', 50, 10));
$cart->add(new Product25('milk', 60, 15));
$cart->add(new Product25('cola', 45, 25));

var_dump($cart->get()); //вывод массива продуктов
$cart->remove('beer'); //удаляем пиво
var_dump($cart->get()); //вывод массива продуктов - пиво удалилось!

echo $cart->getTotalCost().'<br>'; //сумма прайсов
echo $cart->getTotalQuantity().'<br>'; //сумма количества
echo $cart->getAvgPrice().'<br>'; //средняя цена

#26_1-3 ##############
function compare($var1, $var2)
{
    if ($var1 === $var2) {
        return true;
    } else {
        return false;
    }
}

//var_dump(compare($user1, $user2));

#28_1-9 #######################

class Post28
{
    private $name;
    private $salary;

    /**
     * @param $name
     * @param $salary
     */
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $name
     */
    public function setName($name):void
    {
        $this->name = $name;
    }

}

$programmer = new Post28('programmer', 2500);
$driver = new Post28('driver', 2000);
$manager = new Post28('manager', 2200);

class Employee28
{
    private string $name;
    private string $surname;
    private $post = [];

    /**
     * @param $name
     * @param $surname
     * @param $post
     */
    public function __construct($name, $surname, $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function changePost(Post28 $name)
    {
        $this->getPost()->setName($name);
    }

    public function add(Post28 $post)
    {
        $this->post = $post;
    }

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
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname):void
    {
        $this->surname = $surname;
    }

    /**
     * @return array
     */
    public function getPost():array
    {
        return $this->post;
    }
}

$employee = new Employee28('Roman', 'Ko', $driver);
var_dump($employee);
$employee->changePost('boss');
var_dump($employee);

#29_1-2  #################

class ArraySumHelper29
{
    public static function getSum1($arr)
    {
        return self::getSum($arr, 1);
    }

    public static function getSum2($arr)
    {
        return self::getSum($arr, 2);
    }

    public static function getSum3($arr)
    {
        return self::getSum($arr, 3);
    }

    public static function getSum4($arr)
    {
        return self::getSum($arr, 4);
    }

    private static function getSum($arr, $power)
    {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }
}

echo ArraySumHelper29::getSum2([1, 2, 3]);//14

#30_1-3 #########

class Num30
{
    public static $num1;
    public static $num2;

    public static function getSum()
    {
        return Num30::$num1 + Num30::$num2;
    }
}

Num30::$num1 = 2;
Num30::$num2 = 3;
echo Num30::getSum();

#30_4  ##################

class Geometry
{
    private static $pi = 3.14; // вынесем Пи в свойство

    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius ** 2;
    }

    public static function getCircleСircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }

    public static function getVolumeBoll($radius)
    {
        //Объем (V) шара равняется четырем третьим произведения его радиуса в кубе и числа π.
        return (4 / 3) * self::$pi * $radius ** 3;
    }
}

echo Geometry::getVolumeBoll(10); // 4186.6666666667

#31_1-2 ####################

class User31
{
    public static $count = 0; // счетчик объектов
    public $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }

    /**
     * @return int
     */
    public static function getCount():int
    {
        return self::$count;
    }

}

$user1 = new User31('user1'); // создаем первый объект класса
echo User31::getCount(); //выведет 1

$user2 = new User31('user2'); // создаем второй объект класса
echo $user2::getCount(); //выведет 2

#32_1-2  ####################

class Circle32
{
    const PI = 3.14; // запишем число ПИ в константу
    private $radius; // радиус круга

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Найдем площадь:
    public function getSquare()
    {
        return self::PI * $this->radius ** 2;// Пи умножить на квадрат радиуса
    }

    // Найдем длину окружности:
    public function getCircuit()
    {
        return 2 * self::PI * $this->radius;// 2 Пи умножить на радиус
    }
}

$circle = new Circle32(10);
echo $circle->getCircuit(); //62.8

get_declared_classes();

# 35_1  ##########################

class User35
{
    private $name;

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
}

class Employee35 extends User35
{
    private $salary;

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary):void
    {
        $this->salary = $salary;
    }

}

$employee = new Employee35();
$employee->setName('Roman');
$employee->setSalary(2500);
echo $employee->getName().'<br>';
echo $employee->getSalary().'<br>';

class Student35 extends User35
{
    private $scholarship;

    /**
     * @return mixed
     */
    public function getScholarship()
    {
        return $this->scholarship;
    }

    /**
     * @param mixed $scholarship
     */
    public function setScholarship($scholarship):void
    {
        $this->scholarship = $scholarship;
    }
}

$students = new Student35();
$students->setName('Danila');
$students->setScholarship(700);
echo $students->getName().'<br>';
echo $students->getScholarship();

#38_1 #############################

interface iUser
{
    public function setName($name); // установить имя

    public function getName();      // получить имя

    public function setAge($age);   // установить возраст

    public function getAge();       // получить возраст
}

class User38 implements iUser
{

    private string $name;
    private int $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge():int
    {
        return $this->age;
    }
}

#39_1-2  #######################

interface iCube39
{
    public function __construct($a);

    public function getVolume();

    public function getPerimeter();

    public function getSquare();

}

class Cube39 implements iCube39
{

    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getVolume()
    {
        return $this->a ** 3;
    }

    public function getPerimeter()
    {
        return $this->a * 12;
    }

    public function getSquare()
    {
        return 6 * ($this->a ** 2);
    }
}

#39_3-4 ####################

interface iUser39

{
    public function __construct($name, $age);

    public function getUserAge();

    public function getUserName();
}

class User39 implements iUser39

{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function getUserAge()
    {
        return $this->age;
    }

    public function getUserName()
    {
        return $this->name;
    }
}

$user = new User39('Roman', 47);
echo $user->getUserAge();
echo $user->getUserName();

#40_1-3  ####################

interface iUser40
{
    public function getName();

    public function setName($name);

    public function getAge();

    public function setAge($age);

}

interface iEmployee40 extends iUser40
{
    public function getSalary();

    public function setSalary($salary);

}

class Employee40 implements iEmployee40
{
    private $name;
    private $age;
    private $salary;

    /*    public function __construct($name,$age, $salary)
        {
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }*/

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

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}

$employee = new Employee40('Roman', 47, 1000);
$employee->setName('Roman');
$employee->setAge(47);
$employee->setSalary(1000);
echo $employee->getName().'-'.$employee->getAge().'-'.$employee->getSalary();

#41_1-5  ##################

interface Figure3d41 #1
{
    public function getVolume();

    public function getSurfaceSquare();
}

class Cube41 implements Figure3d41 #2
{
    private int $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getVolume()
    {
        return $this->a ** 3;
    }

    public function getSurfaceSquare()
    {
        return 6 * ($this->a ** 2);
    }

}

interface iFigure41 #3
{
    public function getSquare();

    public function getPerimeter();
}

class Quadrate41 implements iFigure41 #3
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getSquare()
    {
        return $this->a * $this->a;
    }

    public function getPerimeter()
    {
        return 4 * $this->a;
    }
}

class Rectangle41 implements iFigure41 #3
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSquare()
    {
        return $this->a * $this->b;
    }

    public function getPerimeter()
    {
        return 2 * ($this->a + $this->b);
    }
}

var_dump($arr = [ #3
                  new Quadrate41(10),
                  new Quadrate41(15),
                  new Rectangle41(10, 20),
                  new Rectangle41(12, 14),
                  new Cube41(25),
                  new Cube41(44),

]);

foreach ($arr as $ar) { #4
    if ($ar instanceof iFigure41) {
        var_dump($ar);
    }
}

foreach ($arr as $ar) { #5
    if ($ar instanceof iFigure41) {
        echo $ar->getSquare().' площадь плоской фигуры <br>';
    } elseif ($ar instanceof Figure3d41) {
        echo $ar->getSurfaceSquare().' площадь поверхности объемной фигуры<br>';
    }
}

#42_1   ############

interface iTetragon42 #0
{
    public function getA();

    public function getB();

    public function getC();

    public function getD();
}

interface iFigure42 #0
{
    public function getSquare();

    public function getPerimeter();
}

class Quadrate42 implements iFigure, iTetragon #0
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->a;
    }

    public function getC()
    {
        return $this->a;
    }

    public function getD()
    {
        return $this->a;
    }

    public function getSquare()
    {
        return $this->a * $this->a;
    }

    public function getPerimeter()
    {
        return 4 * $this->a;
    }
}

class Rectangle42 implements iFigure42, iTetragon42 #1
{

    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->a;
    }

    public function getD()
    {
        return $this->b;
    }

    public function getSquare()
    {
        return $this->a * $this->b;
    }

    public function getPerimeter()
    {
        return 2 * ($this->a + $this->b);
    }
}

#42_2-3 ##############

interface iCircle42 #2
{
    public function getRadius();

    public function getDiameter();
}

class Disk42 implements iFigure42, iCircle42 #3
{
    private $r; //radius
    private $pi = 3.14;

    /**
     * @param $r
     */
    public function __construct($r)
    {
        $this->r = $r;
    }

    public function getSquare()
    {
        return $this->pi * $this->r ** 2;
    }

    public function getPerimeter()
    {
        return 2 * $this->pi * $this->r;
    }

    public function getRadius()
    {
        return $this->r;
    }

    public function getDiameter()
    {
        return $this->r * 2;
    }
}

#43_1  ####################

interface iProgrammer43
{
    public function __construct($name, $salary);

    public function getName();

    public function getSalary();

    public function getLangs();

    public function addLang($lang);
}

class Employee43
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class Programmer43 extends Employee43 implements iProgrammer43
{
    private $lang;

    public function getLangs()
    {
        return $this->lang;
    }

    public function addLang($lang)
    {
        $this->lang = $lang;
    }

}

$programmer = new Programmer43('Roman', 2500);
$programmer->addLang('php');
echo $programmer->getName();
echo $programmer->getSalary();
echo $programmer->getLangs();

#44_1  ################

interface iSphere44
{
    const PI = 3.14; // число ПИ как константа

    // Конструктор шара:
    public function __construct($radius);

    // Метод для нахождения объема шара:
    public function getVolume();

    // Метод для нахождения площади поверхности шара:
    public function getSquare();
}

class Sphere44 implements iSphere44
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getVolume()
    {
        return 4 / 3 * ($this->radius ** 3) * self::PI;
    }

    public function getSquare()
    {
        return 4 * self::PI * ($this->radius ** 2);
    }

}

#46_1 ##################

trait Helper46
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Country46
{
    use Helper46;
    private $population;

    public function __construct($name, $age, $population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }

    public function getPopulation()
    {
        return $this->population;
    }


}
$country = new Country46('Ukraine', 1000, 45000000);
echo $country->getName().'<br>';
echo $country->getAge().'<br>';
echo $country->getPopulation().'<br>';


#46_2-3  #################

trait Trait46_1
{
    private function method1()
    {
        return 1;
    }
}

trait Trait46_2
{
    private function method2()
    {
        return 2;
    }
}

trait Trait46_3
{
    private function method3()
    {
        return 2;
    }
}

class Test46
{
    use Trait46_1, Trait46_2, Trait46_3;

    public function getSum()
    {
        return ($this->method1() + $this->method2() + $this->method3());
    }
}

$test = new Test46();
echo $test->getSum();

#47_1-2 ##################

trait Trait47_1
{
    private function method()
    {
        return 1;
    }
}

trait Trait47_2
{
    private function method()
    {
        return 2;
    }
}

trait Trait47_3
{
    private function method()
    {
        return 3;
    }
}

class Test47
{
    use Trait47_1, Trait47_2, Trait47_3 {
        Trait47_1::method insteadof Trait47_2;
        Trait47_1::method insteadof Trait47_3;
        Trait47_1::method as method1;
        Trait47_2::method as method2;
        Trait47_3::method as method3;
    }

    public function getSum()
    {
        return $this->method1() + $this->method2() + $this->method3();
    }
}

$test = new Test47();
echo $test->getSum();

#51_1  #########################

trait Trait51_1
{
    private function method1()
    {
        return 1;
    }

    private function method2()
    {
        return 2;
    }
}

trait Trait51_2
{
    use Trait51_1;
    private function method3()
    {
        return 3;
    }
}

class Test51
{
    use Trait51_2;

    public function getSum()
    {
        return $this->method1() + $this->method2() + $this->method3();
    }
}

$test = new Test51();
echo $test->getSum(); //6


#53_1  ####################

class User53
{
    private $name;
    private $surname;
    private $patronymic;

    public function __construct($name, $surname, $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }

    // Реализуем указанный метод:
    public function __toString()
    {
        return $this->name.'-'.$this->surname.'-'.$this->patronymic;
    }

}
$user = new User53('john', 'petrovich', 'jonsoniuk');
echo $user;

#53_2 ############################

class Arr53
{
    private array $numbers = [];

    public function add($num):static
    {
        $this->numbers[] = $num;
        return $this;
    }

    public function __toString():string
    {
        return array_sum($this->numbers);
    }

}

$arr = new Arr53;
echo $arr->add(1)->add(3)->add(6);


#54_1 ####################

class User54
{
    private string $name;
    private int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }
}

$user =  new User54('Petya', 47);
echo $user->name;
echo $user->age;

#54_2 #############################
//Сделайте класс Date с публичными свойствами year, month и day.
//С помощью магии сделайте свойство weekDay, которое будет возвращать день недели, соответствующий дате.

class Date54
{
    public int $year;
    public int $month;
    public int $day;

    /**
     * @param int $year
     * @param int $month
     * @param int $day
     */
    public function __construct(int $year, int $month, int $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    public function __get($property)
    {
        if ($property == 'weekDay') {
            $weekday =  date('w', mktime(0,0,0,$this->month,$this->day,$this->year));
            if ($weekday == 1) {return 'Понедельник';}
            elseif ($weekday == 2) {return 'Вторник';}
            elseif ($weekday == 3) {return 'Среда';}
            elseif ($weekday == 4) {return 'Четверг';}
            elseif ($weekday == 5) {return 'Пятница';}
            elseif ($weekday == 6) {return 'Суббота';}
            else {return 'Воскресенье';}
        }
    }

}

$date = new Date54(2022, 10, 20);
echo $date->weekDay;


#55_1  ###########################

class User55
{
    private $name;
    private $age;

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value):void
    {
        if (isset($property)) {
            $this->$property = $value;
        }
    }

}

$user = new  User55;
$user->name = 'Roman';
echo $user->name;
$user->age = 47;
echo $user->age;

