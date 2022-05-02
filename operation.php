<?php
require_once "database.php";

require_once "alarm.php";

$data = [];
$db = new Database;

function setOperations($operations){
    global $db;
    switch ($operations)
    {
        case "status:1":
            $db->setStatus(1);
            break;
        case "status:0":
            $db->setStatus(0);
            break;
        case "z1:1":
            $db->setZ1(1);
            break;
        case "z1:0":
            $db->setZ1(0);
            break;
        case "z2:1":
            $db->setZ2(1);
            break;
        case "z2:0":
            $db->setZ2(0);
            break;
        case "z3:1":
            $db->setZ3(1);
            break;
        case "z3:0":
            $db->setZ3(0);
            break;
        case "z4:1":
            $db->setZ4(1);
            break;
        case "z4:0":
            $db->setZ4(0);
            break;

    }
}

function getInformations()
{
    global $db;
    $row = $db->getInformations();
    #var_dump($row);

    $alarm = new Alarm($row->id, $row->status,
        $row->z1, $row->z2, $row->z3, $row->z4);
    #var_dump($alarm);

    global $data;

    if($alarm->getStatus() == 1)
    {
        $data["status"] = "Activated";
    }
    else
    {
        $data["status"] = "Disactivated";
    }

    if($alarm->getZ1() == 1)
    {
        $data["z1"] = "red";
    }
    else
    {
        $data["z1"] = "";
    }

    if($alarm->getZ2() == 1)
    {
        $data["z2"] = "red";
    }
    else
    {
        $data["z2"] = "";
    }

    if($alarm->getZ3() == 1)
    {
        $data["z3"] = "red";
    }
    else
    {
        $data["z3"] = "";
    }

    if($alarm->getZ4() == 1)
    {
        $data["z4"] = "red";
    }
    else
    {
        $data["z4"] = "";
    }
}

getInformations();

#var_dump($data);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Sanitize post data
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if($_POST["data"])
    {

        $info = $_POST["data"];
        setOperations($info);

        /*if($info == "status:1")
        {
            setOperations();
            #header("status:{$_POST['data']}");
            $db->setStatus(1);
        }*/
        //echo $_POST["data"];


    }


    header("status:{$_POST['data']}");


    #header("",http_response_code(404));
    #Response.send($data);
}

