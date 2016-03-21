<?php

/*
 * class for creating people objects
 */
class Person
{
    public $employed;
 
    public $gender;
 
    const GENDER_MALE   = "Male";
 
    const GENDER_FEMALE = "Female";
 
}
 
/**
 * All people builder should implement this interface
 */
interface PersonBuilderInterface
{
    public function setGender();
    public function setEmployed();
    public function getResult();
}
 
/**
 * builder to create an employed male
 */
class EmployedMaleBuilder implements PersonBuilderInterface
{
    private $person;
 
    public function __construct()
    {
        $this->person = new Person();
    }
 
    public function setGender()
    {
        $this->person->gender = Person::GENDER_MALE;
    }
 
    public function setEmployed()
    {
        $this->person->employed = true;
    }
 
    public function getResult()
    {
        return $this->person;
    }
}
 
/**
 * builder to create an unemployed male
 */
class UnemployedMaleBuilder implements PersonBuilderInterface
{
    private $person;
 
    public function __construct()
    {
        $this->person = new Person();
    }
 
 
    public function setGender()
    {
        $this->person->gender = Person::GENDER_MALE;
    }
 
    public function setEmployed()
    {
        $this->person->employed = false;
    }
 
    public function getResult()
    {
        return $this->person;
    }
}
 
/**
 * builder to create an employed female
 */
class EmployedFemaleBuilder implements PersonBuilderInterface
{
    private $person;
 
    public function __construct()
    {
        $this->person = new Person();
    }
 
    public function setGender()
    {
        $this->person->gender = Person::GENDER_FEMALE;
    }
 
    public function setEmployed()
    {
        $this->person->employed = true;
    }
 
    public function getResult()
    {
        return $this->person;
    }
}
 
/**
 * builder to create an unemployed female
 */
class UnemployedFemaleBuilder implements PersonBuilderInterface
{
    private $person;
 
    public function __construct()
    {
        $this->person = new Person();
    }
 
    public function setGender()
    {
        $this->person->gender = Person::GENDER_FEMALE;
    }
 
    public function setEmployed()
    {
        $this->person->employed = false;
    }
 
    public function getResult()
    {
        return $this->person;
    }
}
 
/**
 * The director class returns a Person object
 */
class PersonDirector
{
    public function build(PersonBuilderInterface $builder)
    {
        $builder->setGender();
        $builder->setEmployed();
 
        return $builder->getResult();
    }
}
 
$director                = new PersonDirector();
$employedMaleBuilder     = new EmployedMaleBuilder();
$unemployedMaleBuilder   = new UnemployedMaleBuilder();
$employedFemaleBuilder   = new EmployedFemaleBuilder();
$unemployedFemaleBuilder = new UnemployedFemaleBuilder();
 
/*
 * object(Person)#1
 */
$employedMale     = $director->build($employedMaleBuilder);
 
/*
 * object(Person)#2
 */
$unemployedMale   = $director->build($unemployedMaleBuilder);
 
/*
 * object(Person)#3 
 */
$employedFemale   = $director->build($employedFemaleBuilder);
 
/*
 * object(Person)#4 
 */
$unemployedFemale = $director->build($unemployedFemaleBuilder);
?>