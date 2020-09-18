<?php

class Register
{
    public $student = [
      [
        'name' => "Arief",
        'nik'  => "TOO1"
      ]
    ];
    
}

class Register2 extends Register
{
    public static function insertStudent(): void
    {
        $Register->student(['name'=>'Abdullah', 'nik'=>'T002']);
    }
}

$insialisasi = new Register;
echo $insialisasi->insertStudent();

Register::insertStudent(['name' => $name, 'nik' => $nik]);

//puyeng euy...