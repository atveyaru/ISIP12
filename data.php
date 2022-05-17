<?php

    $whoName = $_POST['whoName'];
    //$actName = $_GET['whoName'];
    
    if ($whoName == 'ind') {
        echo '<script>
        alert("не сработало!!!!")
        </script>';
    }
    
    if ($whoName == 'ind_check') {
        
        $inp_1 = $_POST['inp_1'];
        $inp_2 = $_POST['inp_2'];
        $inp_3 = $_POST['inp_3'];
        $inp_4 = $_POST['inp_4'];
        /*
        echo 'inp_1 = '.$inp_1.'<br>';
        echo 'inp_2 = '.$inp_2.'<br>';
        echo 'inp_3 = '.$inp_3.'<br>';
        echo 'inp_4 = '.$inp_4.'<br>';
        */
        
        $file = 'people.txt';
// Новый человек, которого нужно добавить в файл
$person = "inp_1 = ".$inp_1."\r\n"."inp_2 = ".$inp_2."\r\n"."inp_3 = ".$inp_3."\r\n"."inp_4 = ".$inp_4."\r\n";
// Пишем содержимое в файл,
// используя флаг FILE_APPEND для дописывания содержимого в конец файла
// и флаг LOCK_EX для предотвращения записи данного файла кем-нибудь другим в данное время
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);


        header('Location: ind.php?inp_1_o='.$inp_1.'&inp_2_o='.$inp_2.'&inp_3_o='.$inp_3.'&inp_4_o='.$inp_4);
        
        /*
        echo '<script>
        f = setTimeout(r, 3000);
        function r() {
            location.href = "ind.php" 
        }
       
        </script>';
	      */
    }









    if ($whoName == 'file_load') {
        
        $puth_name =  __DIR__ . '/upload/studers/';
        //$puth_name =  '/a111/';
        
        $input_name = 'files';
        
        $id_stud = 1;
        
        $id_chemp = 1;
        
        $file_tmp_name = $_FILES[$input_name]['tmp_name'];
        
        $exts = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
        
        $name = 'isip_'.$id_stud.'_'.$id_chemp.'.'.$exts;
        
       // move_uploaded_file($file['tmp_name'], $puth_name . $name);
       
           if (move_uploaded_file($_FILES[$input_name]['tmp_name'], $puth_name)) 
    {
        echo "File Uploaded";
    } else {
        echo "File Not uploaded";
    }

        
        echo $file_tmp_name.' '. file_get_contents('./people.txt', true) . $puth_name . $name. '==1047527424=='.$_FILES[$input_name]['size'] ;
        
        //echo file_get_contents($puth_name.'zxc', true); 
        
        echo file_get_contents($file['tmp_name'], true);
        
        phpinfo();
        
    }
















