<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=vote";
$pdo=new PDO($dsn, 'root', '');

date_default_timezone_set("Asia/Taipei");

session_start();

$msg=[
    1=>"本調查為會員限定，請登入後再進行投票",
    2=>"本調查已結束，請進行其它調查"
];




function math($table,$math,$col,...$arg){
    $pdo=pdo();
 
     $sql="select $math(`$col`) from $table ";
 
     if(!empty($arg)){
         if(is_array($arg[0])){
             foreach($arg[0] as $key => $value){
 
                 $tmp[]="`$key`='$value'";
             }
     
             $sql =$sql . " where " . join(" && ",$tmp);
         }else{
 
             $sql=$sql . " where " . $arg[0];
             
         }
     }
 
     if(isset($arg[1])){
         $sql=$sql . " where " . $arg[1];
     }
     
     
     $rows=$pdo->query($sql)->fetchColumn( );
 
     return $rows;
 }

function _count($table,...$arg){
    $pdo=pdo();
 
     $sql="select count(*) from $table ";
 
     if(!empty($arg)){
         if(is_array($arg[0])){
             foreach($arg[0] as $key => $value){
 
                 $tmp[]="`$key`='$value'";
             }
     
             $sql =$sql . " where " . join(" && ",$tmp);
         }else{
 
             $sql=$sql .  " where " .$arg[0];
             
         }
     }
 
     if(isset($arg[1])){
         $sql=$sql . " where " . $arg[1];
     }
 
     $rows=$pdo->query($sql)->fetchColumn( );
 
     return $rows;
 }




function all($table,...$arg){
   $pdo=pdo();

    $sql="select * from $table ";

    if(!empty($arg)){
        if(is_array($arg[0])){
            foreach($arg[0] as $key => $value){

                $tmp[]="`$key`='$value'";
            }
    
            $sql =$sql .  " where " . join(" && ",$tmp);
        }else{

            $sql=$sql . " where " . $arg[0];
            
        }
    }

    if(isset($arg[1])){
        $sql=$sql .  " where " . $arg[1];
    }
  
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}

function find($table,$arg){
    $pdo=pdo();

    $sql="select * from `$table`  where ";

    if(is_array($arg)){
        foreach($arg as $key => $value){

            $tmp[]="`$key`='$value'";
        }

        $sql .= join(" && ",$tmp);
    }else{

        $sql .= " `id` = '$arg' ";
        
    }



    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function update($table,$cols){
    $pdo=pdo();

 

    foreach($cols as $key => $value){
        if($key!='id'){
            $tmp[]= "`$key`='$value'";
        }
    }

 

    $sql="update `$table` set  ".join(",",$tmp)." where `id`='{$cols['id']}'";

    $result=$pdo->exec($sql);


    return $result;
}

function insert($table,$cols){
    $pdo=pdo();
    $col=array_keys($cols);


    $sql="insert into $table (`" . join("`,`", $col) . "`) values('".join("','",$cols)."')";
    

    $result=$pdo->exec($sql);

    return $result;
}


function del($table,$arg){
    $pdo=pdo();

    $sql="delete from `$table` where ";
    if(is_array($arg)){
        foreach($arg as $key => $value){

            $tmp[]="`$key`='$value'";
        }

        $sql .= join(" && ",$tmp);
    }else{

        $sql .= " `id` = '$arg' ";
        
    }


    return $pdo->exec($sql);
}

function save($table,$cols){

    if(isset($cols['id'])){
        update($table,$cols);
    }else{
        insert($table,$cols);
    }
}


function q($sql){
    $dsn="mysql:host=localhost;charset=utf8;dbname=vote";
    $pdo=new PDO($dsn,'root','');

    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function pdo(){
    $dsn="mysql:host=localhost;charset=utf8;dbname=vote";
    $pdo=new PDO($dsn,'root','');
    
    return $pdo;
}

function to($url){
    header("location:".$url);
}
?>