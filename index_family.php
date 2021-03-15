<?php

class Family //общие признаки
{
   private $peopleCount = 3;
   private $surname = 'Semko';
   private $adress = 'Odincovo';

   public function sleep()
   {
      // общий медот спать
   }

   public function eat()
   {
      // общий медот кушать
   }
}

class Father extends Family // extends означает, что мы расширяем наш класс родительским,
// и все данные и методы из родительского класса становятся доступными
{
   private $wife = 'Julia';
   private $age = 34;

   public function earnMoney()
   {
      //
   }
}

class Mother extends Family
{
   private $husband = 'Val';
   private $age = 30;

   public function spendMoney()
   {
      //
   }
}

class Child extends Father
{
   private $age = 2;
   private $sex = 'male';

   public function playCars()
   {

   }
}