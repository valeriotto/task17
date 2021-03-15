<?php

abstract class Transport // абстрактный класс для машин
{
   protected function move() // заставляет машину ехать
   {
      $this->goAhead();
   }

   protected function honk() // способность сигналить
   {
      echo $this->sound;
   }

    protected function turnOnWipers() // способность включать дворники
    {
      //
    }
}

class Car extends Transport // класс легковые авто
{
   protected $sound = 'гудок'; // защищеный класс
   protected $salon = 'кожа'; // индивидуализм отделка салона

   protected function goAhead()
   {
      $this->goNitro(); // закись азота
   }
   protected function goNitro()
   {
      //
   }
}

class Tank extends Transport
{
    protected $sound = 'выстрел';
    protected $salon = 'железо';

   protected function goAhead()
   {
      $this->shooter();
      echo $sound;
   }

   protected function shooter()
   {
      //
   }
}

class proffCar extends Transport
{
   protected $sound = 'сирена';
   protected $salon = 'алькантара';

   protected function goAhead()
   {
      $this->useTheBucket(); // ковш
   }

   protected function useTheBucket()
   {
      //
   }
}

function testTransport(Transport $cars) { // полиморфная функция
   $cars->move(); // вызывает функцию ехать
   $cars->goAhead(); // вызывает одну из функций
 }