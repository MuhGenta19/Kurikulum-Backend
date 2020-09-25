<?php

class Register
{
    public static $student = 
    [
      [
        'nama' => "arief",
        'nik'  => "TOO1"
      ]
    ];
    
    public static function insertStudent()
    {
        echo "TAMBAH DATA SANTRI BARU\n";
        echo "Nama : ";
        $nama = trim(fgets(STDIN));
        echo "NIK : ";
        $nik = trim(fgets(STDIN));

        $index = count(self::$student);
        self::$student[$index]['nama'] = $nama;
        self::$student[$index]['nik'] = $nik;
        print_r(self::$student);
        echo "\n";
    }
}

class Edit extends Register
{
    public function __construct($program){
        if($program == "ubah"){
            $this->updateStudent();
        }elseif($program == "hapus"){
            $this->deleteStudent();
        }   
    }

    public function updateStudent()
    {
        echo "UBAH DATA SANTRI\n";
        print_r(parent::$student);
        $variable = parent::$student;

        echo "Masukkan Nama Santri : ";
        $nama = trim(fgets(STDIN));
        foreach ($variable as $key => $value) {
            if ($value['nama'] == $nama) {
                echo "Masukkan Nama Baru : ";
                $variable[$key]['nama'] = trim(fgets(STDIN));
            }
        }
        print_r($variable);
        parent::$student = $variable;
        echo "\n";
    }

    public function deleteStudent()
    {
        echo "HAPUS DATA SANTRI\n";
        print_r(parent::$student);
        $variable = parent::$student;

        echo "Masukkan Nama Santri : ";
        $nama = trim(fgets(STDIN));
        foreach ($variable as $key => $value) {
            if ($variable[$key]['nama'] == $nama) {
               unset($variable[$key]);
            }
        }
        $variable = array_slice($variable,0,count($variable));
        print_r($variable);
        parent::$student = $variable;
        echo "\n";
    }
}

$utama = true;
while ($utama) {
    echo "INFORMASI PENDAFTARAN SANTRI\n";
    echo "daftar | ubah | hapus\n";
    echo "Masukkan Menu : ";
    $menu = trim(fgets(STDIN));
    echo "\n";

    switch ($menu) {
        case 'daftar':
            Register::insertStudent();
            break;
        
        case 'ubah':
            $edit = new Edit("ubah");
            break;
        
        case 'hapus':
            $edit = new Edit("hapus");
            break;
        
        default:
            echo "Menu Tidak Tersedia...\n\n";
            break;
    }
}

?>